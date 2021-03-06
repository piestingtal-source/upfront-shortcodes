<?php defined( 'ABSPATH' ) || exit; ?>

<?php
$advanced_settings_url = add_query_arg(
	array(
		'page'     => 'upfront-shortcodes-settings',
		'advanced' => 1,
	),
	admin_url( 'admin.php' )
);
?>

<div class="notice notice-info upfront-shortcodes-notice-unsafe-features">

	<p><strong>UpFront Shortcodes</strong></p>
	<p><?php esc_html_e( 'Einige kleinere Funktionen des Plugins wurden automatisch deaktiviert, um die Sicherheit zu verbessern.', 'upfront-shortcodes' ); ?></p>
	<p>
		<a href="https://n3rds.work/docs/upfront-shortcodes-unsichere-funktionen/" target="blank"><?php esc_html_e( 'Mehr erfahren', 'upfront-shortcodes' ); ?><span style="text-decoration:none;display:inline-block;vertical-align:middle;margin-left:4px"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo esc_attr( $advanced_settings_url ); ?>#su_option_unsafe_features"><?php esc_html_e( 'Einstellungen', 'upfront-shortcodes' ); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo esc_attr( $this->get_dismiss_link() ); ?>"><?php esc_html_e( 'Verstanden', 'upfront-shortcodes' ); ?></a>
	</p>

</div>
