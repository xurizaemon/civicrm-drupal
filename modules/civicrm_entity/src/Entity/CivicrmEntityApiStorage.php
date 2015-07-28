<?php

namespace Drupal\civicrm_entity\Entity;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Entity\EntityTypeInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CivicrmEntityApiStorage extends ContentEntityStorage {
    /**
     * {@inheritdoc}
     */
    public static function createInstance(ContainerInterface $container, EntityTypeInterface $entity_type) {

    }

    public function onEntityTypeCreate(EntityTypeInterface $entity_type) {
        // Do nothing
    }

    public function onEntityTypeDelete(EntityTypeInterface $entity_type) {
        // Do nothing
    }

    public function onEntityTypeUpdate(EntityTypeInterface $entity_type, EntityTypeInterface $original) {
        // Do nothing
    }
}