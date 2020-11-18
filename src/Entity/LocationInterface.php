<?php

namespace Drupal\mongo_to_entity\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;

/**
 * Provides an interface for defining Location entities.
 *
 * @ingroup mongo_to_entity
 */
interface LocationInterface extends ContentEntityInterface, EntityChangedInterface, RevisionLogInterface, EntityPublishedInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Location name.
   *
   * @return string
   *   Name of the Location.
   */
  public function getName();

  /**
   * Sets the Location name.
   *
   * @param string $name
   *   The Location name.
   *
   * @return \Drupal\mongo_to_entity\Entity\LocationInterface
   *   The called Location entity.
   */
  public function setName($name);

  /**
   * Gets the Location creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Location.
   */
  public function getCreatedTime();

  /**
   * Sets the Location creation timestamp.
   *
   * @param int $timestamp
   *   The Location creation timestamp.
   *
   * @return \Drupal\mongo_to_entity\Entity\LocationInterface
   *   The called Location entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Gets the Location revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Location revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\mongo_to_entity\Entity\LocationInterface
   *   The called Location entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Location revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Location revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\mongo_to_entity\Entity\LocationInterface
   *   The called Location entity.
   */
  public function setRevisionUserId($uid);

}
