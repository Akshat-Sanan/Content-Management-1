<?php

add_action( 'admin_menu', 'history_museum_gettingstarted' );
function history_museum_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'history-museum'), esc_html__('Theme Documentation', 'history-museum'), 'edit_theme_options', 'history-museum-guide-page', 'history_museum_guide');
}

function history_museum_admin_theme_style() {
   wp_enqueue_style('history-museum-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'history_museum_admin_theme_style');

if ( ! defined( 'HISTORY_MUSEUM_SUPPORT' ) ) {
define('HISTORY_MUSEUM_SUPPORT',__('https://wordpress.org/support/theme/history-museum/','history-museum'));
}
if ( ! defined( 'HISTORY_MUSEUM_REVIEW' ) ) {
define('HISTORY_MUSEUM_REVIEW',__('https://wordpress.org/support/theme/history-museum/reviews/','history-museum'));
}
if ( ! defined( 'HISTORY_MUSEUM_LIVE_DEMO' ) ) {
define('HISTORY_MUSEUM_LIVE_DEMO',__('https://www.ovationthemes.com/demos/history-museum/','history-museum'));
}
if ( ! defined( 'HISTORY_MUSEUM_BUY_PRO' ) ) {
define('HISTORY_MUSEUM_BUY_PRO',__('https://www.ovationthemes.com/wordpress/history-wordpress-theme/','history-museum'));
}
if ( ! defined( 'HISTORY_MUSEUM_PRO_DOC' ) ) {
define('HISTORY_MUSEUM_PRO_DOC',__('https://www.ovationthemes.com/docs/ot-history-museum-pro-doc/','history-museum'));
}
if ( ! defined( 'HISTORY_MUSEUM_FREE_DOC' ) ) {
define('HISTORY_MUSEUM_FREE_DOC',__('https://www.ovationthemes.com/docs/ot-history-museum-free-doc/','history-museum'));
}
if ( ! defined( 'HISTORY_MUSEUM_THEME_NAME' ) ) {
define('HISTORY_MUSEUM_THEME_NAME',__('Premium Museum Theme','history-museum'));
}

/**
 * Theme Info Page
 */
function history_museum_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'history-museum'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( HISTORY_MUSEUM_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'history-museum'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( HISTORY_MUSEUM_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'history-museum'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','history-museum'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','history-museum'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','history-museum'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','history-museum'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','history-museum'); ?></h4>
					<p><?php esc_html_e('To check your website click here','history-museum'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','history-museum'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','history-museum'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','history-museum'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( HISTORY_MUSEUM_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','history-museum'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(HISTORY_MUSEUM_THEME_NAME); ?></h3>
				<img class="history_museum_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( HISTORY_MUSEUM_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'history-museum'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( HISTORY_MUSEUM_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'history-museum'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( HISTORY_MUSEUM_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'history-museum'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'history-museum');?> </li>                 
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'history-museum');?> </li>
                 <li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'history-museum');?> </li>
                	<li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'history-museum');?> </li>
                	<li class="upsell-history_museum"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'history-museum');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>
