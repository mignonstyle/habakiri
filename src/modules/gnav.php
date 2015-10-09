<?php
/**
 * Version    : 1.0.1
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : August 30, 2015
 * Modified   : October 10, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>

<?php do_action( 'habakiri_before_global_navigation' ); ?>
<nav class="global-nav js-responsive-nav nav--hide" role="navigation">
	<?php
	if ( has_nav_menu( 'global-nav' ) ) {
		wp_nav_menu( array(
			'theme_location' => 'global-nav',
			'depth'          => 0,
		) );
	}
	?>
<!-- end .global-nav --></nav>
<?php do_action( 'habakiri_after_global_navigation' ); ?>
