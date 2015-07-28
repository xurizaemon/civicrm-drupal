<?php

/**
 * @file
 * Contains Drupal\civicrm_entity\CivicrmEntityContactInterface.
 */

namespace Drupal\civicrm_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a CivicrmEntityContact entity.
 *
 * @ingroup civicrm_entity
 */
interface CivicrmEntityContactInterface extends ContentEntityInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
