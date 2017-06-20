<?php

namespace Drupal\annuaire;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Annuaire entities.
 *
 * @ingroup annuaire
 */
class AnnuaireEntityListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Annuaire ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\annuaire\Entity\AnnuaireEntity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.annuaire_entity.edit_form',
      ['annuaire_entity' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
