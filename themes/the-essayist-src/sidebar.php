<div class="sidebar">
	<div id="search-bar">
		<div id="input">
			<form action="" method="post">
				<div id="bar">
					<input id="s" name="s" type="text" class="field" />
				</div>
				<div id="icon">
					<img src="<?php bloginfo('template_url'); ?>/images/magnifying_glass.png" alt="Search" />
				</div>				
			</form>
		</div>
	</div>
	
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Left Sidebar") ) : ?>
		
		<!--sidebox start -->
		<div class="widget_archive">
			<h3><?php _e('Archives', 'default'); ?></h3>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</div>
		<!--sidebox end -->
		
		<!--sidebox start -->
		<div class="widget_recent_entries">
			<h3><?php _e('Recent Articles', 'default'); ?></h3>
			<ul>
				<?php $side_posts = get_posts('numberposts=10'); foreach($side_posts as $post) : ?>
				<li><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<!--sidebox end -->
		
		<!--sidebox start -->
		<div class="widget_recent_entries">
			<h3><?php _e('Links', 'default'); ?></h3>
			<ul>
				<?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
			</ul>
		</div>
		<!--sidebox end -->
		
		<!--sidebox start -->
		<div class="widget_categories">
			<h3><?php _e('Categories', 'default'); ?></h3>
			<ul>
				<?php wp_list_cats(); ?>
			</ul>
		</div>
		<!--sidebox end -->

		<!--sidebox start -->
		<div class="widget_categories">
			<h3><?php _e('Meta', 'default'); ?></h3>
			<ul>
	            <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)', 'default'); ?></a></li>
                <li class="rss"><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)', 'default'); ?></a></li>
                <li class="wordpress"><a href="http://www.wordpress.org" title="Powered by WordPress">WordPress</a></li>
                <li class="login"><?php wp_loginout(); ?></li>
			</ul>
		</div>
		<!--sidebox end -->

		<?php endif; ?>
	</div>
</div>