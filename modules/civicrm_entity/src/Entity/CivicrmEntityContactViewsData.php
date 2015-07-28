<?php

/**
 * @file
 * Contains Drupal\civicrm_entity\Entity\CivicrmEntityContact.
 */

namespace Drupal\civicrm_entity\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides the views data for the CivicrmEntityContact entity type.
 */
class CivicrmEntityContactViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['civicrm_entity_contact']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('CiviCRM Contact entity'),
      'help' => $this->t('The civicrm_entity_contact entity ID.'),
    );

    return $data;
  }

}
