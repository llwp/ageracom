<?php

/**
 * Limit form.
 */
class EntityReference_SelectionHandler_Limit extends EntityReference_SelectionHandler_Generic {
  protected function __construct($field, $instance = NULL, $entity_type = NULL, $entity = NULL) {
    $this->field = $field;
    $this->instance = $instance;
    $this->entity_type = $entity_type;
    $this->entity = $entity;
  }

  /**
   * Overwrites method getInstance().
   *
   * Factory design pattern.
   */
  public static function getInstance($field, $instance = NULL, $entity_type = NULL, $entity = NULL) {
    $target_entity_type = $field['settings']['target_type'];

    // Check if the entity type does exist and has a base table.
    $entity_info = entity_get_info($target_entity_type);
    if (empty($entity_info['base table'])) {
      return EntityReference_SelectionHandler_Broken::getInstance($field, $instance);
    }

    return new EntityReference_SelectionHandler_Limit($field, $instance, $entity_type, $entity);
  }

  /**
   * Get all entity for settings, that is config for allows value of field.
   */
  protected static function _getEntityOptions($entity_type = NULL) {
    if (empty($entity_type)) {
      $entity_type = $this->entity_type;
    }

    return entity_reference_plus_options($entity_type);
  }

  /**
   * Overwrite method EntityReferenceHandler::settingsForm().
   */
  public static function settingsForm($field, $instance) {
    $entity_type = $field['settings']['target_type'];
    $entity_info = entity_get_info($entity_type);

    $form['allow_values'] = array(
      '#type' => 'select',
      '#title' => t('Allow values'),
      '#description' => t('Only value select are displayed for user choice.'),
      '#multiple' => TRUE,
      '#options' => self::_getEntityOptions($entity_type),
      '#default_value' => $field['settings']['handler_settings']['allow_values'],
    );

    // Merge-in default values.
    $field['settings']['handler_settings'] += array(
      'target_bundles' => array(),
      'sort' => array(
        'type' => 'none',
      )
    );

    $form['sort']['type'] = array(
      '#type' => 'select',
      '#title' => t('Sort by'),
      '#options' => array(
        'none' => t("Don't sort"),
        'property' => t('A property of the base table of the entity'),
        'field' => t('A field attached to this entity'),
      ),
      '#ajax' => TRUE,
      '#limit_validation_errors' => array(),
      '#default_value' => $field['settings']['handler_settings']['sort']['type'],
    );

    $form['sort']['settings'] = array(
      '#type' => 'container',
      '#attributes' => array('class' => array('entityreference-settings')),
      '#process' => array('_entityreference_form_process_merge_parent'),
    );

    if ($field['settings']['handler_settings']['sort']['type'] == 'property') {
      // Merge-in default values.
      $field['settings']['handler_settings']['sort'] += array(
        'property' => NULL,
      );

      $form['sort']['settings']['property'] = array(
        '#type' => 'select',
        '#title' => t('Sort property'),
        '#required' => TRUE,
        '#options' => drupal_map_assoc($entity_info['schema_fields_sql']['base table']),
        '#default_value' => $field['settings']['handler_settings']['sort']['property'],
      );
    }
    elseif ($field['settings']['handler_settings']['sort']['type'] == 'field') {
      // Merge-in default values.
      $field['settings']['handler_settings']['sort'] += array(
        'field' => NULL,
      );

      $fields = array();
      foreach (field_info_instances($field['settings']['target_type']) as $bundle_name => $bundle_instances) {
        foreach ($bundle_instances as $instance_name => $instance_info) {
          $field_info = field_info_field($instance_name);
          foreach ($field_info['columns'] as $column_name => $column_info) {
            $fields[$instance_name . ':' . $column_name] = t('@label (column @column)', array('@label' => $instance_info['label'], '@column' => $column_name));
          }
        }
      }

      $form['sort']['settings']['field'] = array(
        '#type' => 'select',
        '#title' => t('Sort field'),
        '#required' => TRUE,
        '#options' => $fields,
        '#default_value' => $field['settings']['handler_settings']['sort']['field'],
      );
    }

    if ($field['settings']['handler_settings']['sort']['type'] != 'none') {
      // Merge-in default values.
      $field['settings']['handler_settings']['sort'] += array(
        'direction' => 'ASC',
      );

      $form['sort']['settings']['direction'] = array(
        '#type' => 'select',
        '#title' => t('Sort direction'),
        '#required' => TRUE,
        '#options' => array(
          'ASC' => t('Ascending'),
          'DESC' => t('Descending'),
        ),
        '#default_value' => $field['settings']['handler_settings']['sort']['direction'],
      );
    }

    return $form;
  }

  /**
   * Implements EntityReferenceHandler::getReferencableEntities().
   */
  public function getReferencableEntities($match = NULL, $match_operator = 'CONTAINS', $limit = 0) {
    $options = array();
    $entity_type = $this->field['settings']['target_type'];

    $query = $this->buildEntityFieldQuery($match, $match_operator);

    if ($limit > 0) {
      $query->range(0, $limit);
    }

    $results = $query->execute();
    dsm($results);

    if (!empty($results[$entity_type])) {
      $entities = entity_load($entity_type, array_keys($results[$entity_type]));
      foreach ($entities as $entity_id => $entity) {
        list(,, $bundle) = entity_extract_ids($entity_type, $entity);
        $options[$bundle][$entity_id] = check_plain($this->getLabel($entity));
      }
    }

    return $options;
  }

  /**
   * Build an EntityFieldQuery to get referencable entities.
   */
  protected function buildEntityFieldQuery($match = NULL, $match_operator = 'CONTAINS', $limit_ids = FALSE) {
    $query = new EntityFieldQuery();

    $query->entityCondition('entity_type', $this->field['settings']['target_type']);
    $entity_info = entity_get_info($this->field['settings']['target_type']);

    if (isset($match)) {
      if (isset($entity_info['entity keys']['label'])) {
        $query->propertyCondition($entity_info['entity keys']['label'], $match, $match_operator);
      }
    }

    // Add a generic entity access tag to the query.
    $query->addTag($this->field['settings']['target_type'] . '_access');
    $query->addTag('entityreference');
    $query->addMetaData('field', $this->field);
    $query->addMetaData('entityreference_selection_handler', $this);

    // Add the sort option.
    if (!empty($this->field['settings']['handler_settings']['sort'])) {
      $sort_settings = $this->field['settings']['handler_settings']['sort'];
      if ($sort_settings['type'] == 'property') {
        $query->propertyOrderBy($sort_settings['property'], $sort_settings['direction']);
      }
      elseif ($sort_settings['type'] == 'field') {
        list($field, $column) = explode(':', $sort_settings['field'], 2);
        $query->fieldOrderBy($field, $column, $sort_settings['direction']);
      }
    }

    // Limit entity.
    if ($limit_ids == FALSE) {
      // If this not set limit value, set from entity.
      $limit_ids = $this->field['settings']['handler_settings']['allow_values'];
    }

    $query->propertyCondition($entity_info['entity keys']['id'], $limit_ids, 'IN');
    return $query;
  }

  /**
   * Implements EntityReferenceHandler::countReferencableEntities().
   */
  public function countReferencableEntities($match = NULL, $match_operator = 'CONTAINS') {
    $query = $this->buildEntityFieldQuery($match, $match_operator);
    return $query
    ->count()
    ->execute();
  }

  /**
   * Implements EntityReferenceHandler::validateReferencableEntities().
   */
  public function validateReferencableEntities(array $ids) {
    if ($ids) {
      $entity_type = $this->field['settings']['target_type'];
      $query = $this->buildEntityFieldQuery();
      $query->entityCondition('entity_id', $ids, 'IN');
      $result = $query->execute();
      if (!empty($result[$entity_type])) {
        return array_keys($result[$entity_type]);
      }
    }

    return array();
  }

  /**
   * Implements EntityReferenceHandler::validateAutocompleteInput().
   */
  public function validateAutocompleteInput($input, &$element, &$form_state, $form) {
    //@TODO: only suport with type in entity is limit.

  }

  /**
   * Implements EntityReferenceHandler::entityFieldQueryAlter().
   */
  public function entityFieldQueryAlter(SelectQueryInterface $query) {

  }
}
