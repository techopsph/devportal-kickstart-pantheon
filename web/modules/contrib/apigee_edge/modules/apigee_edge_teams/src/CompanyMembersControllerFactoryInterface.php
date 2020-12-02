<?php

/**
 * Copyright 2018 Google Inc.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * version 2 as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 */

namespace Drupal\apigee_edge_teams;

/**
 * Base definition of the company members controller factory service.
 */
interface CompanyMembersControllerFactoryInterface {

  /**
   * Returns a preconfigured company members controller.
   *
   * @param string $company
   *   Name of a company.
   *
   * @return \Drupal\apigee_edge_teams\CompanyMembersControllerInterface
   *   The preconfigured company members control of the company.
   */
  public function companyMembersController(string $company): CompanyMembersControllerInterface;

}
