 	  
 	  </div><!-- #content-wrapper-top --> 	
 	 </div><!-- #content-wrapper-bottom --> 	
 	</div><!-- #content-wrapper-bg --> 	
 	
 	<div id="footer">
 	 <div class="wrapper-976">
 	
 		<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
 		
    	<ul id="bottom-nav">
    		<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
    		<?php wp_list_pages('title_li=&depth=1'); ?>
    	</ul><!-- #top-nav --> 	 	 		
 	
 	 </div><!-- .wrapper-976 --> 	
 	</div><!-- #footer --> 	
	 	
  </div><!-- #bg-wrapper-2 --> 	
 </div><!-- #bg-wrapper --> 	

<?php wp_footer() ?>

</body>
</html>