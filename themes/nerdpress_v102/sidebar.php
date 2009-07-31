	<div id="sidebar">
		
		<ul>
			
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Main Sidebar") ) : ?>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it. 
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ // } elseif (is_search()) { ?>
			<!--<p>You have searched the <a href="<?php //echo bloginfo('url'); ?>/"><?php //echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php //the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>-->

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li> <?php }?>
						
			
			<!-- Start of Non-Widget Sidebar -->
			<li class="popular"><h2>Popular Posts</h2>
				<ul>
					<?php most_popular_posts(); ?>
				</ul>
			</li>
			
			<?php 
			/* This displays a random 5 items from the 'Links' section in the WP Admin area, previously known as the Blogroll. 
			You can customize the Blogroll further @ http://codex.wordpress.org/Template_Tags/wp_list_bookmarks */
			wp_list_bookmarks('show_description=1&between=<br />&limit=5&orderby=rand'); 
			?>
			
			<?php 
			/* This displays all your Categories in a two column list, exactly the same as the one in the default Footer.
			You can customize the Category List further @ http://codex.wordpress.org/Template_Tags/wp_list_categories */
			/*wp_list_categories('show_count=1&title_li=<h2>Categories</h2>');*/ 
			?>
			
			<?php 
			/* This displays each of your WordPress pages in a two column list, similar to the Category section.
			You can customize the Page List further @ http://codex.wordpress.org/Template_Tags/wp_list_pages */
			/*wp_list_pages('title_li=<h2>Pages</h2>' );*/ ?>
			
			
			<!-- This displays in links to your Archive pages sorted by Months.
			You can customize the Archive Lists further @ http://codex.wordpress.org/Template_Tags/wp_get_archives -->
			<li class="archives">
				<h2>Archives</h2>
				<ul><?php wp_get_archives('type=monthly&show_post_count=true&limit=10&order=ASC'); ?></ul>
			</li>	
			
			<!-- This displays the Meta/Admin section, only displayed on the front page -->
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
			<li class="admin"><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://nerdpress.co.uk" title="The home of the (Nerd)Press Theme for WordPress">(Nerd)Press</a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<?php wp_meta(); ?>
				</ul>
			</li>
			<?php } ?>

			<?php endif; ?>
		</ul>
	</div>

