<?php

/**
 * @file
 * Contains Drupal\civicrm_entity\Entity\Form\CivicrmEntityContactSettingsForm.
 */

namespace Drupal\civicrm_entity\Entity\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CivicrmEntityContactSettingsForm.
 *
 * @package Drupal\civicrm_entity\Form
 *
 * @ingroup civicrm_entity
 */
class CivicrmEntityContactSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'CivicrmEntityContact_settings';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }


  /**
   * Define the form used for CivicrmEntityContact  settings.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   Form definition array.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['CivicrmEntityContact_settings']['#markup'] = 'Settings form for CiviCRM Contact entity. Manage field settings here.';
    return $form;
  }

}
