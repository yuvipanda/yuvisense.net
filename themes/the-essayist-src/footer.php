</div>
<div id="footer">
	<div id="breaker">&nbsp;</div>
	<div class="container">
		<ul class="footer-sidebar">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : endif ?>	
		</ul>
		<div style="clear:both;"></div>
		<div id="credits">
			Powered by <a href="http://www.wordpress.org">Wordpress</a> and The Essayist by <a href="http://www.squarefour.net">squarefour</a>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>