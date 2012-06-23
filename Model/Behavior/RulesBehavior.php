<?php
/**
 * Behaviour to add custom validation rules to models
 * 
 * Current validation rules are...
 * 
 * 
 * @package       Cubic Mushroom Cake Plugins
 * @subpackage    CustomValidation
 * 
 * @version       v0.1
 * @since         v0.1
 * @author        Toby Griffiths <toby@cubicmushroom.co.uk>
 * @copyright     © 2012 Cubic Mushroom Ltd.
 */


class RulesBehavior extends ModelBehavior {

  // public function uniqueForFields(&$model, $check, $fields) {
  //   $needed_models = array();

  //   foreach($model->belongsTo as $btm => $bt_details) {
  //     if (in_array($bt_details['foreignKey'], $fields))
  //       $needed_models[] = $bt_details['className'];
  //   }

  //   $model->contain($needed_models);
  //   $existing_promo_count = $model->find('all', array(
  //     'conditions' => $check,
  //     // 'recursive' => -1
  //   ));

  //   return;
  // }
}
?>