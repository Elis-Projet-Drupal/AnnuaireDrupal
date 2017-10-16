<?php

namespace Drupal\annuaire;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Annuaire entity.
 *
 * @see \Drupal\annuaire\Entity\AnnuaireEntity.
 */
class AnnuaireEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\annuaire\Entity\AnnuaireEntityInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished annuaire entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published annuaire entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit annuaire entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete annuaire entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add annuaire entities');
  }

}
