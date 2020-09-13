<?php
/**
 * Underscore JS template for edit capabilities tab sections.
 *
 * @package    user_roles
 * @subpackage Admin
 * @author     Atozsites <admin@Atozsites.com>
 * @copyright  Copyright (c) 2009 - 2018, Atozsites
 * @link       https://Atozsites.com/

 */
?>
<div id="user_roles-tab-{{ data.id }}" class="{{ data.class }}">

	<table class="wp-list-table widefat fixed user_roles-roles-select">

		<thead>
			<tr>
				<th class="column-cap"><?php esc_html_e( 'Capability', 'user_roles' ); ?></th>
				<th class="column-grant"><?php esc_html_e( 'Grant', 'user_roles' ); ?></th>
				<th class="column-deny"><?php esc_html_e( 'Deny', 'user_roles' ); ?></th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th class="column-cap"><?php esc_html_e( 'Capability', 'user_roles' ); ?></th>
				<th class="column-grant"><?php esc_html_e( 'Grant', 'user_roles' ); ?></th>
				<th class="column-deny"><?php esc_html_e( 'Deny', 'user_roles' ); ?></th>
			</tr>
		</tfoot>

		<tbody></tbody>
	</table>
</div>
