		<div id="right-sidebar-container">
		
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>	
 	  	
 	  		<div class="right-sidebar">
 	  	
		    	<form id="searchform" method="get" action="<?php bloginfo('home') ?>">
		    		<div>
		    			<input id="s" name="s" class="text-input" type="text" value="<?php the_search_query() ?>" size="10" tabindex="1" accesskey="S" />
		    		</div>
		    	</form>				
				
 	  		</div><!-- .right-sidebar -->
 	
 	  	
 	  		<div class="right-sidebar">
 	  	
		    	<h3><?php _e('Categories', 'sandbox'); ?></h3>
		    	<ul>
		    		<?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 
		    	</ul>
 	  		
 	  		</div><!-- .right-sidebar --> 	
  	
 	  	
 	  		<div class="right-sidebar">
 	  	
		    	<h3><?php _e('Archives', 'sandbox') ?></h3>
		    	<ul>
		    		<?php wp_get_archives('type=monthly') ?>
		    	</ul>
 	  		
 	  		</div><!-- .right-sidebar --> 	 
 	  	
 	  	
 	  		<div class="right-sidebar">

				<h3><?php _e('Blogroll', 'sandbox') ?></h3>
				<ul>
		    	<?php wp_list_bookmarks('title_li=&categorize=0&&show_images=1') ?>
				</ul>    
 	  		
 	  		</div><!-- .right-sidebar --> 	   	  		
 	  	
 	  	
 	  		<div class="right-sidebar">

		    	<h3><?php _e('Meta', 'sandbox') ?></h3>
		    	<ul>
		    		<?php wp_register() ?>
		
		    		<li><?php wp_loginout() ?></li>
		    		<?php wp_meta() ?>
		
		    	</ul>
 	  		
 	  		</div><!-- .right-sidebar --> 	   	
 	  		  	  	
 	  	
 	  		<div class="right-sidebar ad-box">

				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/advertisement.gif" alt="Advertise Here" /></a>
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/advertisement.gif" alt="Advertise Here" /></a>
 	  		
 	  		</div><!-- .right-sidebar --> 
 	  		  			  	 
<?php endif; ?> 	 	 	  		 				 
 	  		 	  		
 	  	</div><!-- #right-sidebar-container --> 