<?php

namespace Drupal\mongo_to_entity\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * Provides a 'MongoToEntityProcess' migrate process plugin.
 *
 * @MigrateProcessPlugin(
 *  id = "mongo_to_entity_process"
 * )
 */
class MongoToEntityProcess extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    // Plugin logic goes here.
  }

}
