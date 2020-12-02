<?php

/**
 * Copyright 2018 Google Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2 as published by the
 * Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public
 * License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc., 51
 * Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 */

namespace Drupal\apigee_edge\Plugin;

use Drupal\key\KeyInterface;
use Drupal\key\Plugin\KeyTypeMultivalueInterface;

/**
 * Defines an interface for Apigee Edge Key Type plugins.
 */
interface EdgeKeyTypeInterface extends KeyTypeMultivalueInterface, KeyTypeAuthenticationMethodInterface {

  /**
   * Apigee instance on public cloud.
   *
   * @var string
   */
  public const INSTANCE_TYPE_PUBLIC = 'public';

  /**
   * Apigee instance on private cloud.
   *
   * @var string
   */
  public const INSTANCE_TYPE_PRIVATE = 'private';

  /**
   * Apigee instance on hybrid cloud.
   *
   * @var string
   */
  public const INSTANCE_TYPE_HYBRID = 'hybrid';
  /**
   * ID of the basic authentication method.
   *
   * @var string
   */
  const EDGE_AUTH_TYPE_BASIC = 'basic';

  /**
   * ID of the OAuth authentication method.
   *
   * @var string
   */
  const EDGE_AUTH_TYPE_OAUTH = 'oauth';

  /**
   * ID of the JWT authentication method.
   *
   * @var string
   */
  const EDGE_AUTH_TYPE_JWT = 'jwt';

  /**
   * The endpoint type for default.
   *
   * @var string
   *
   * @deprecated in apigee_edge:8.x-1.2 and is removed from
   * apigee_edge:8.x-2.0. Check for endpoint type instead.
   *
   * @see EdgeKeyTypeInterface::getEndpointType().
   */
  const EDGE_ENDPOINT_TYPE_DEFAULT = 'default';

  /**
   * The endpoint type for custom.
   *
   * @var string
   *
   * @deprecated in apigee_edge:8.x-1.2 and is removed from
   * apigee_edge:8.x-2.0. Check for endpoint type instead.
   *
   * @see EdgeKeyTypeInterface::getEndpointType().
   */
  const EDGE_ENDPOINT_TYPE_CUSTOM = 'custom';

  /**
   * Gets the authentication type.
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The Authentication type.
   */
  public function getAuthenticationType(KeyInterface $key): string;

  /**
   * Gets the API endpoint.
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The API endpoint.
   */
  public function getEndpoint(KeyInterface $key): string;

  /**
   * Gets the instance type (public, private or hybrid).
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The instance type, either `public`, `private` or `hybrid`.
   */
  public function getInstanceType(KeyInterface $key): string;

  /**
   * Gets the API endpoint type (default or custom).
   *
   * It returns "default" on a public cloud instance, otherwise "custom".
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The API endpoint type.
   *
   * @deprecated in apigee_edge:8.x-1.2 and is removed from
   * apigee_edge:8.x-2.0. Use getInstanceType() instead.
   *
   * @see https://github.com/apigee/apigee-edge-drupal/issues/268
   */
  public function getEndpointType(KeyInterface $key): string;

  /**
   * Gets the API organization.
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The API organization.
   */
  public function getOrganization(KeyInterface $key): string;

  /**
   * Gets the API username.
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The API username.
   */
  public function getUsername(KeyInterface $key): string;

  /**
   * Gets the API password.
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The API password.
   */
  public function getPassword(KeyInterface $key): string;

  /**
   * Gets the authorization server.
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The authorization server.
   */
  public function getAuthorizationServer(KeyInterface $key): string;

  /**
   * Gets the client ID.
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The client ID.
   */
  public function getClientId(KeyInterface $key): string;

  /**
   * Gets the client secret.
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return string
   *   The client secret.
   */
  public function getClientSecret(KeyInterface $key): string;

  /**
   * Return the JSON account key decoded as an array.
   *
   * @param \Drupal\key\KeyInterface $key
   *   The key entity.
   *
   * @return array
   *   The account key as an array.
   */
  public function getAccountKey(KeyInterface $key): array;

}
