		<footer class="site-footer clearfix">
			<p>All Rights Reserved, <a href="#">Md. Anisur Rahman Rony</a> &copy; 2016</p>
			<nav id="footer_nav">
				<?php 
					
					$args = array(
						'theme_location' => 'footer'
					);
				
					wp_nav_menu( $args );
				?>
			</nav>
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>
</html>