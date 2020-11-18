<?php

namespace Drupal\mongo_to_entity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Location type entity.
 *
 * @ConfigEntityType(
 *   id = "location_type",
 *   label = @Translation("Location type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\mongo_to_entity\LocationTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\mongo_to_entity\Form\LocationTypeForm",
 *       "edit" = "Drupal\mongo_to_entity\Form\LocationTypeForm",
 *       "delete" = "Drupal\mongo_to_entity\Form\LocationTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\mongo_to_entity\LocationTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "location_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "location",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/location_type/{location_type}",
 *     "add-form" = "/admin/structure/location_type/add",
 *     "edit-form" = "/admin/structure/location_type/{location_type}/edit",
 *     "delete-form" = "/admin/structure/location_type/{location_type}/delete",
 *     "collection" = "/admin/structure/location_type"
 *   },
 *  config_export = {
 *     "id",
 *     "label",
 *   }
 * )
 */
class LocationType extends ConfigEntityBundleBase implements LocationTypeInterface {

  /**
   * The Location type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Location type label.
   *
   * @var string
   */
  protected $label;

}
