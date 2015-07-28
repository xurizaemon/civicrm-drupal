<?php

/**
 * @file
 * Contains civicrm_entity_contact.page.inc.
 *
 * CivicrmEntityContact page callback file for the civicrm_entity_contact entity.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for civicrm_entity_contact templates.
 *
 * Default template: civicrm_entity_contact.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_civicrm_entity_contact(array &$variables) {
  // Fetch CivicrmEntityContact Entity Object.
  $civicrm_entity_contact = $variables['elements']['#civicrm_entity_contact'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
