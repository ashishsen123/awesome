<?php
/**
 * The sidebar containing the front page widget areas.
 * If there are no active widgets, the sidebar will be hidden completely.
 *
 * @package Awesome
 * @since Awesome 1.0
 */
?>
	<?php
	// Count how many front page sidebars are active so we can work out how many containers we need
	$footerSidebars = 0;
	for ( $x=1; $x<=4; $x++ ) {
		if ( is_active_sidebar( 'sidebar-homepage' . $x ) ) {
			$footerSidebars++;
		}
	}

	// If there's one or more one active sidebars, create a row and add them
	if ( $footerSidebars > 0 ) { ?>
		<div id="secondary" class="home-sidebar row">
			<?php
			// Work out the container class name based on the number of active front page sidebars
			$containerClass = "grid_" . 12 / $footerSidebars . "_of_12";

			// Display the active front page sidebars
			for ( $x=1; $x<=4; $x++ ) {
				if ( is_active_sidebar( 'sidebar-homepage'.  $x ) ) { ?>
					<div class="col <?php echo $containerClass?>">
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-homepage'.  $x ); ?>
						</div> <!-- #widget-area -->
					</div> <!-- /.col.<?php echo $containerClass?> -->
				<?php }
			} ?>
		</div> <!-- /#secondary.row -->
		<?php } ?>
		<div class="main-banner">
			<div class="main-widget-banner">
			<p>Tatva is a rock solid mobile responsive WordPress theme loaded with all essential features of a business website.</p>
			<img src="http://1.gravatar.com/avatar/596dddfd1c9dcb2f15e7dab46ea838f9?s=100&d=http%…2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D10"/>
			<p class=name>punnet sahlot</p>
			</div>
		</div>

	
