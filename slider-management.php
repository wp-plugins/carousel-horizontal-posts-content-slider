<?php
$tchpcs_displayimage = get_option('tchpcs_displayimage');
$tchpcs_displaydesc = get_option('tchpcs_word_limit');
$tchpcs_query_posts_showposts = get_option('tchpcs_query_posts_showposts');
$tchpcs_query_posts_orderby= get_option('tchpcs_query_posts_orderby');
$tchpcs_query_posts_order= get_option('tchpcs_query_posts_order');
$tchpcs_query_posts_category= get_option('tchpcs_query_posts_category');
if (@$_POST['tchpcs_submit']) {

	$tchpcs_displayimage = stripslashes($_POST['tchpcs_displayimage']);
	$tchpcs_displaydesc = stripslashes($_POST['tchpcs_displaydesc']);
	$tchpcs_query_posts_showposts = stripslashes($_POST['tchpcs_query_posts_showposts']);
	$tchpcs_query_posts_orderby = stripslashes($_POST['tchpcs_query_posts_orderby']);
	$tchpcs_query_posts_order = stripslashes($_POST['tchpcs_query_posts_order']);
	$tchpcs_query_posts_category = stripslashes($_POST['tchpcs_query_posts_category']);

	update_option('tchpcs_displayimage', $tchpcs_displayimage );
	update_option('tchpcs_word_limit', $tchpcs_displaydesc );
	update_option('tchpcs_query_posts_showposts', $tchpcs_query_posts_showposts );
	update_option('tchpcs_query_posts_orderby', $tchpcs_query_posts_orderby );
	update_option('tchpcs_query_posts_order', $tchpcs_query_posts_order );
	update_option('tchpcs_query_posts_category', $tchpcs_query_posts_category );
}
$fimg = array('YES'=>'YES',
            'NO'=>'NO');?>

<h2>Carousel Horizontal Posts Content Slider</h2>
<form name="tchpcs_form" method="post" action="" style="border:1px solid #ccc;padding:10px;background:#fff;margin:0; width:50%;">

      <table class="form-table">
		<tbody>
<tr class="form-field form-required">
			<th scope="row"><label for="name">Show post image:</label></th>
			<td>	<select name="tchpcs_displayimage" id="tchpcs_displayimage">
      <?php foreach ($fimg  as $key => $value) {?>
      <option value="<?php echo $key; ?>" <?php if($key==$tchpcs_displayimage){echo "selected";}?>><?php echo $value;?></option>
      <?php }?>
    </select></td>
		</tr>

<tr class="form-field form-required"><th scope="row"><label for="name">Excerpt Length</label></th><td><input  style="width: 200px;" maxlength="4" type="text" value="<?php echo $tchpcs_displaydesc; ?>" name="tchpcs_displaydesc" id="tchpcs_displaydesc" /> 
<p class="description">Character Limit. e.g. 10</p></td></tr>

<tr class="form-field form-required"><th scope="row"><label for="name">Number of post to be shown in the slider</label></th><td><input  style="width: 200px;" maxlength="2" type="text" value="<?php echo $tchpcs_query_posts_showposts; ?>" name="tchpcs_query_posts_showposts" id="tchpcs_query_posts_showposts" />
<p class="description">e.g. 20</p></td></tr>

<tr class="form-field form-required"><th scope="row"><label for="name">Post order by</label></th><td><input  style="width: 200px;" maxlength="100" type="text" value="<?php echo $tchpcs_query_posts_orderby; ?>" name="tchpcs_query_posts_orderby" id="tchpcs_query_posts_orderby" /> <p class="description">e.g. ID (Possible values: id, author, title, date, category, modified)</p></td></tr>

<tr class="form-field form-required"><th scope="row"><label for="name">Post order</label></th><td><input  style="width: 200px;" maxlength="100" type="text" value="<?php echo $tchpcs_query_posts_order; ?>" name="tchpcs_query_posts_order" id="tchpcs_query_posts_order" /> 
<p class="description">e.g. rand (Possible values: rand, asc, desc)</p></td></tr>

<tr class="form-field form-required"><th scope="row"><label for="name">Posts of which category will be displayed</label></th><td><input  style="width: 200px;" maxlength="100" type="text" value="<?php echo $tchpcs_query_posts_category;?>" name="tchpcs_query_posts_category" id="tchpcs_query_posts_category" /> <p class="description">Category IDs seperated by Comma e.g. 1, 3</p></td></tr>
</tbody>
</table>
<input name="tchpcs_submit" id="tchpcs_submit" class="button-primary" value="Update" type="submit" />

</form><br/>

<form name="tchpcs_form" method="post" action="" style="border:1px solid #ccc;padding:10px;background:#fff;margin:0; width:50%;">
<p>Shortcode: [carousel-horizontal-posts-content-slider]</p>
<p>Template tag: <?php echo htmlspecialchars("<?php if(function_exists('TCHPCSCarousel')){ echo TCHPCSCarousel();} ?>"); ?></p>

</form>

<br/>

<form name="tchpcs_form" method="post" action="" style="border:1px solid #ccc;padding:10px;background:#fff;margin:0; width:50%;">
<a style ="text-decoration:none; font-size:14px;" href="http://weaveapps.com/shop/wordpress-plugins/carousel-horizontal-posts-slider-wordpress-plugin/" target="_blank">Need more sliders? Looking for more features? Upgrade Carousel Horizontal Posts Content Slider "Pro" here.</a></form>