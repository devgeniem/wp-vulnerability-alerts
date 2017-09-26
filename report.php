<div class="wrap">

	<h1><?php _e('Vulnerability Alerts', self::$id) ?></h1>
	
	<?php settings_errors(); ?>

	<form method='post'>
		<input type="hidden" name="verify" value="1">
		<p class="alignright"><?php submit_button(__('Check Now', self::$id), 'primary', 'submit', false) ?></p>
		<p><?php printf(__('Last request to %s on %s', self::$id), '<a href="https://wpvulndb.com/" target="_blank">WPScan Vulnerability Database</a>', date_i18n(get_option('date_format') . ' ' . get_option('time_format'), $report['cache'])) ?><br>
		<?php _e('Some paid plugins and themes, or developed exclusively for this website and not shared for the public, may not be reported on WPScan.', self::$id) ?>
		</p>
	</form>
	
	<h3>WordPress</h3>
	
	<table class="wp-list-table widefat striped plugins">
	<thead>
		<tr>
			<td scope="col" class="manage-column check-column">&nbsp;</td>
			<th scope="col" class="manage-column column-name column-primary" width="250"><?php _e('Name', self::$id) ?></th>
			<th scope="col" class="manage-column column-description"><?php _e('Vulnerabilities', self::$id) ?></th>
		</tr>
	</thead>
	<tbody id="report-wordpress">
		<tr>
			<th scope="row" class="check-column" align="center"><?php echo self::get_status('wordpress') ?></span></th>
			<td class="plugin-title column-primary"><strong>WordPress</strong> <?php echo sprintf(__('Version %s', self::$id), get_bloginfo('version')) ?></td>
			<td><?php self::list_vulnerabilities('wordpress') ?></td>
		</tr>
	</tbody>
	</table>
	
	<h3><?php _e('Plugins', self::$id) ?></h3>
	
	<table class="wp-list-table widefat striped plugins">
	<thead>
		<tr>
			<td scope="col" class="manage-column check-column">&nbsp;</td>
			<th scope="col" class="manage-column column-name column-primary" width="250"><?php _e('Name', self::$id) ?></th>
			<th scope="col" class="manage-column column-description"><?php _e('Vulnerabilities', self::$id) ?></th>
		</tr>
	</thead>
	<tbody id="report-plugins">
	<?php foreach(get_plugins() as $name => $details) : ?>
		<tr>
			<th scope="row" class="check-column" align="center"><?php echo self::get_status('plugins', $name) ?></span></th>
			<td class="plugin-title column-primary"><strong><?php echo $details['Name'] ?></strong> <?php echo sprintf(__('Version %s', self::$id), $details['Version']) ?></td>
			<td><?php self::list_vulnerabilities('plugins', $name) ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	
	<h3><?php _e('Themes', self::$id) ?></h3>
	
	<table class="wp-list-table widefat striped plugins">
	<thead>
		<tr>
			<td scope="col" class="manage-column check-column">&nbsp;</td>
			<th scope="col" class="manage-column column-name column-primary" width="250"><?php _e('Name', self::$id) ?></th>
			<th scope="col" class="manage-column column-description"><?php _e('Vulnerabilities', self::$id) ?></th>
		</tr>
	</thead>
	<tbody id="report-themes">
	<?php foreach(wp_get_themes() as $name => $details) : ?>
		<tr>
			<th scope="row" class="check-column" align="center"><?php echo self::get_status('themes', $name) ?></span></th>
			<td class="plugin-title column-primary"><strong><?php echo $details['Name'] ?></strong> <?php echo sprintf(__('Version %s', self::$id), $details['Version']) ?></td>
			<td><?php self::list_vulnerabilities('themes', $name) ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	
	<form action='options.php' method='post'>
		<?php
		settings_fields(self::$id . '_notification');
		do_settings_sections(self::$id . '_notification');
		submit_button();
		?>		
	</form>

</div>
