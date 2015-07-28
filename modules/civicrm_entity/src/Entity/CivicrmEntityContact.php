<?php

/**
 * @file
 * Contains Drupal\civicrm_entity\Entity\CivicrmEntityContact.
 */

namespace Drupal\civicrm_entity\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\civicrm_entity\Entity\CivicrmEntityBase;
use Drupal\civicrm_entity\CivicrmEntityContactInterface;
use Drupal\user\UserInterface;

/**
 * Defines the CivicrmEntityContact entity.
 *
 * @ingroup civicrm_entity
 *
 * @ContentEntityType(
 *   id = "civicrm_entity_contact",
 *   label = @Translation("CiviCRM Contact entity"),
 *   handlers = {
 *     "storage" = "Drupal\civicrm_entity\Entity\CivicrmEntityDatabaseStorage",
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\civicrm_entity\Entity\Controller\CivicrmEntityContactListController",
 *     "views_data" = "Drupal\civicrm_entity\Entity\CivicrmEntityContactViewsData",
 *
 *     "form" = {
 *       "default" = "Drupal\civicrm_entity\Entity\Form\CivicrmEntityContactForm",
 *       "add" = "Drupal\civicrm_entity\Entity\Form\CivicrmEntityContactForm",
 *       "edit" = "Drupal\civicrm_entity\Entity\Form\CivicrmEntityContactForm",
 *       "delete" = "Drupal\civicrm_entity\Entity\Form\CivicrmEntityContactDeleteForm",
 *     },
 *     "access" = "Drupal\civicrm_entity\CivicrmEntityContactAccessControlHandler",
 *   },
 *   base_table = "civicrm_entity_contact",
 *   admin_permission = "administer CiviCRM Contact entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/civicrm_entity_contact/{civicrm_entity_contact}",
 *     "edit-form" = "/admin/civicrm_entity_contact/{civicrm_entity_contact}/edit",
 *     "delete-form" = "/admin/civicrm_entity_contact/{civicrm_entity_contact}/delete"
 *   },
 *   field_ui_base_route = "civicrm_entity_contact.settings"
 * )
 */
class CivicrmEntityContact extends CivicrmEntityBase implements CivicrmEntityContactInterface {

}
