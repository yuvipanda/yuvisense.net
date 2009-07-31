<?php
$themename = "(Nerd)Press";
$shortname = "np";

$options = array (

	array(	"name" => "Welcome Message",
			"type" => "title"),
			
	array(	"type" => "open"),
	
	array(	"name" => "Custom Logo (URL)",
			"desc" => "Enter the URL of the new Logo (330px x 55px)",
            "id" => $shortname."_logo",
            "type" => "text"),
            
    array(	"name" => "Custom Tagline",
			"desc" => "Enter a brief description of you site, this will display underneath the site logo.",
            "id" => $shortname."_tagline",
            "type" => "text"),
	
	array(	"name" => "Twitter Username",
			"desc" => "Enter your Twitter username.",
			"id" => $shortname."_twitter",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Delicious Username",
			"desc" => "Enter your Delicious username.",
            "id" => $shortname."_delicious",
            "type" => "text"),
            
    array(  "name" => "Disable Show/Hide jQuery?",
        	"desc" => "Check this box if you would like to DISABLE the Show/Hide slide effect on the Comments form.",
        	"id" => $shortname."_commments_show_hide",
        	"type" => "checkbox",
        	"std" => "false"),
	
	array(	"type" => "close")
	
);

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>

<form method="post">



<?php foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		?>
        <table width="100%" border="0" style="background-color:#eef5fb; padding:10px;">
		
        
        
		<?php break;
		
		case "close":
		?>
		
        </table><br />
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="background-color:#dceefc; padding:5px 10px;"><tr>
        	<td colspan="3"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;

		case 'text':
		?>
        
		<tr><td>&nbsp;</td></tr>
        
        <tr>
            <td width="20%" rowspan="1" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%" colspan="2"><input style="width:200px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />&nbsp;&nbsp;<small><?php echo $value['desc']; ?></small></td>
        </tr>
        
        <tr><td colspan="3" style="border-bottom:1px dotted #000;">&nbsp;</td></tr>

        
		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="1" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="40%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?></textarea></td>
            <td width="40%"><small><?php echo $value['desc']; ?></small></td>
            
        </tr>


		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="1" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
       </tr>
                
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="3" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
		
		<tr><td>&nbsp;</td></tr>
        
        <tr>
            <td width="20%" rowspan="1" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%" colspan="2">
            <? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
            	<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />&nbsp;&nbsp;<small><?php echo $value['desc']; ?></small>
            </td>
        </tr>
        
        <tr><td colspan="3" style="border-bottom:1px dotted #000;">&nbsp;</td></tr>
       
            
        <?php 		break;
	
 
} 
}
?>

<!--</table>-->

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>

<?php
}

add_action('admin_menu', 'mytheme_add_admin'); ?>
<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));


if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer-Left Sidebar',
        'before_widget' => '<li id="%1$s" class="widget-footer %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    
    
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer-Middle Sidebar',
        'before_widget' => '<li id="%1$s" class="widget-footer %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
   
   
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer-Right Sidebar',
        'before_widget' => '<li id="%1$s" class="widget-footer %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));





define('MAGPIE_CACHE_AGE', 120);
define('MAGPIE_INPUT_ENCODING', 'UTF-8');



/* (Nerd)Press Functions */
function most_popular_posts($no_posts = 5, $before = '<li>', $after = '</li>', $show_pass_post = false, $duration='') {
	global $wpdb;
	$request = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS 'comment_count' FROM $wpdb->posts, $wpdb->comments";
	$request .= " WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish'";

	if(!$show_pass_post) $request .= " AND post_password =''";
	if($duration !="") { $request .= " AND DATE_SUB(CURDATE(),INTERVAL ".$duration." DAY) < post_date ";
}
	$request .= " GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_count DESC LIMIT $no_posts";
	$posts = $wpdb->get_results($request);
	$output = '';
	if ($posts) {
		foreach ($posts as $post) {
			$post_title = stripslashes($post->post_title);
			$post_date = $post->post_date;
			$comment_count = $post->comment_count;
			$permalink = get_permalink($post->ID);
			$output .= $before . '<a href="' . $permalink . '" title="' . $post_title.'">' . $post_title . '</a><br /> with ' . $comment_count.' comment(s) since posted' . $after;
		}
	} else {
		//$output .= $before . "None found" . $after;
	}
		echo $output;
	}




/* End of (Nerd)Press Functions */
