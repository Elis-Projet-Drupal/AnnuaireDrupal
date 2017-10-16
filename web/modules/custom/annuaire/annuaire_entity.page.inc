<?php

/**
 * @file
 * Contains annuaire_entity.page.inc.
 *
 * Page callback for Annuaire entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Annuaire templates.
 *
 * Default template: annuaire_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_annuaire_entity(array &$variables) {
  // Fetch AnnuaireEntity Entity Object.
  $annuaire_entity = $variables['elements']['#annuaire_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
