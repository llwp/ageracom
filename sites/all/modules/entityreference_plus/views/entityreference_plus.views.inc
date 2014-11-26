<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function entityreference_plus_field_views_data_alter(&$data, $field) {
  /// plus for views.
  if ($field['type'] == 'entityreference') {
    $entity_info = entity_get_info($field['settings']['target_type']);
    $field_name = $field['field_name'] . '_target_id';
    foreach ($data as $table_name => &$table_data) {
      if (isset($table_data[$field_name])) {
       $table_data[$field_name]['filter']['handler'] = 'views_entityreference_plus_field_handler_filter_in_operator';
      }
    }
  }
}
