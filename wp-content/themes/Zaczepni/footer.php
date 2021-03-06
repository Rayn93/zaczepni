		<?php get_sidebar( 'footer' ); ?>

		<div id="footer-bottom">
		<?php
			$menu_class = 'bottom-nav';
			$footerNav = '';

			$footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menu_class, 'echo' => false, 'depth' => '1' ) );

			if ( '' === $footerNav )
				show_page_menu( $menu_class );
			else
				echo( $footerNav );
		?>
		</div> <!-- #footer-bottom -->
	</div> <!-- .page-wrap -->

	<div id="footer-info" class="container">
		<p id="copyright">Copyright 2018 Zaczepni.pl - Projekt i wykonanie strony:
			<a title="freelancer programista webowy" href="http://www.robertsaternus.pl/" target="_blank">Robert Saternus </a>
		</p>
	</div>

	<?php wp_footer(); ?>
</body>
</html>