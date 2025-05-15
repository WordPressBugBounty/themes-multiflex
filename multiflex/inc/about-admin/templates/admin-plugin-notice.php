<?php
$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_multiflex-info' === $screen->base ) {
	return false;
}

?>
<div class="notice notice-info is-dismissible multiflex-admin-notice" id="multiflex-admin-notice">
	<div class="multiflex-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, Welcome to', 'multiflex' ); ?> <?php esc_html_e( 'MultiFlex!', 'multiflex' ); ?></h2>
		<p><?php esc_html_e( 'Do you know you can get more features in MultiFlex? Upgrade to MultiFlex Pro!!!', 'multiflex' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=multiflex-info' ) ); ?>" class="multiflex-admin-notice-primary-button"><?php esc_html_e( 'MultiFlex Pro Details', 'multiflex' ); ?></a>
		<a class="button" href="<?php echo esc_url( 'https://fireflythemes.com/themes/multiflex-pro'); ?>" target="_blank"><?php esc_html_e( 'Learn more about MultiFlex Pro Theme', 'multiflex' ); ?></a>
	</div>
</div>
<?php
