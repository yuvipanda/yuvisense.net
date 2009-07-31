<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

	<div id="left">

		<h1 style="margin-bottom:10px;">Archives by Month:</h1>

		<ul class="archives-template">
			<?php wp_get_archives('type=monthly'); ?>
		</ul>

	</div>
	
	<?php get_sidebar(); ?>

</div>


<div class="comments-header" style="height:21px;"></div>
<div class="comments-slider" style="height:0px;"></div>

<div class="main-bottom" style="margin-top:-60px;"></div>


<?php get_footer(); ?>
