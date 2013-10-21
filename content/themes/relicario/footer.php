		</div><!-- // wrap -->
		<footer>
			<div id="wrap">
				<?php if ( is_active_sidebar( 'gridly_footer')) { ?>     
				<div id="footer-area">
					<?php dynamic_sidebar( 'gridly_footer' ); ?>
				</div><!-- // footer area -->   
				<?php }  ?>     
			      
				<div id="copyright">
					<p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> | Orgulhosamente rodando <a href="http://www.wordpress.org/" title="WordPress" target="_blank">Wordpress</a></p>
				</div><!-- // copyright -->
			</div>
		</footer>   
		<?php wp_footer(); ?>
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</body>
</html>