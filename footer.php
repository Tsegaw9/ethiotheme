<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ethio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" row>
	<div id="footer-sidebar" class="row secondary">
        <div class="col-md-3" id="footer-sidebar1">
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
        dynamic_sidebar('footer-sidebar-1');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
        dynamic_sidebar('footer-sidebar-3');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar4">
        <?php
        if(is_active_sidebar('footer-sidebar-4')){
        dynamic_sidebar('footer-sidebar-4');
        }
        ?>
        </div>
		<div class="site-info" col-md-12>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ethio' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly Powered by %s', 'ethio' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ethio' ), 'ethio', '<a href="http://Tsegaw%20baharue.com">Tsegaw</a>' );
				?>
		</div><!-- .site-info -->
      </div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
