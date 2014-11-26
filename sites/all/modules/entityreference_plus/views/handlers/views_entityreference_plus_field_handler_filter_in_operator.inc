<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class views_entityreference_plus_field_handler_filter_in_operator extends views_handler_filter_in_operator {
  function value_form(&$form, &$form_state) {
    parent::value_form($form, $form_state);
  }

  /**
   * Overwrited query member.
   */
  function query() {
    if ($this->value!= 'all') {
      parent::query();
    }
  }
}
