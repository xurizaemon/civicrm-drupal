<?php

/**
 * @file
 * Contains Drupal\civicrm_entity\Entity\Controller\CivicrmEntityContactListController.
 */

namespace Drupal\civicrm_entity\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for CivicrmEntityContact entity.
 *
 * @ingroup civicrm_entity
 */
class CivicrmEntityContactListController extends EntityListBuilder {
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('CivicrmEntityContactID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\civicrm_entity\Entity\CivicrmEntityContact */
    $row['id'] = $entity->id();
    $row['name'] = \Drupal::l(
      $this->getLabel($entity),
      new Url(
        'entity.civicrm_entity_contact.edit_form', array(
          'civicrm_entity_contact' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
