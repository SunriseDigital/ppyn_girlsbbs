				<br class="clear">
			</div><!-- /#contents -->
			
<!-- Footer -->			
			<div id="footer">
				<div class="footer-wrap">
					<a href="<?php bloginfo('url'); ?>" class="footer_blog_title"><?php bloginfo('name'); ?></a>
					<ul class="footer_menu">
						<li><a href="mailto:&#105;&#110;&#102;&#111;&#64;&#103;&#111;&#115;&#115;&#105;&#112;&#101;&#114;&#45;&#98;&#98;&#115;&#46;&#99;&#111;&#109;">&#12362;&#21839;&#12356;&#21512;&#12431;&#12379;</a></li>
						<li><a href="DUMMY">&#21033;&#29992;&#35215;&#32004;</a></li>
					</ul>
					<?php dynamic_sidebar( 'footer-widget' ); ?>
					<p class="copy">
						&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. All rights reserved. 
					</p>
				</div>
			</div><!-- /#footer -->
		</div><!-- /#wrapper -->
	</div><!-- /#page -->
<?php wp_footer(); ?>
</body>
</html>