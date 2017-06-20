<?php

namespace Drupal\annuaire\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Annuaire entities.
 *
 * @ingroup annuaire
 */
interface AnnuaireEntityInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Annuaire name.
   *
   * @return string
   *   Name of the Annuaire.
   */
  public function getName();

  /**
   * Sets the Annuaire name.
   *
   * @param string $name
   *   The Annuaire name.
   *
   * @return \Drupal\annuaire\Entity\AnnuaireEntityInterface
   *   The called Annuaire entity.
   */
  public function setName($name);

  /**
   * Gets the Annuaire creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Annuaire.
   */
  public function getCreatedTime();

  /**
   * Sets the Annuaire creation timestamp.
   *
   * @param int $timestamp
   *   The Annuaire creation timestamp.
   *
   * @return \Drupal\annuaire\Entity\AnnuaireEntityInterface
   *   The called Annuaire entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Annuaire published status indicator.
   *
   * Unpublished Annuaire are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Annuaire is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Annuaire.
   *
   * @param bool $published
   *   TRUE to set this Annuaire to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\annuaire\Entity\AnnuaireEntityInterface
   *   The called Annuaire entity.
   */
  public function setPublished($published);

}
