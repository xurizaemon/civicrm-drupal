<?php

/**
 * @file
 * Contains Drupal\civicrm_entity\CivicrmEntityContactAccessControlHandler.
 */

namespace Drupal\civicrm_entity;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the CivicrmEntityContact entity.
 *
 * @see \Drupal\civicrm_entity\Entity\CivicrmEntityContact.
 */
class CivicrmEntityContactAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, $langcode, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view CivicrmEntityContact entity');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit CivicrmEntityContact entity');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete CivicrmEntityContact entity');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add CivicrmEntityContact entity');
  }

}
