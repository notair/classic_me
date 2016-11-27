<!-- begin sidebar -->
<div id="secondary">
<ul>
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
	//if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

    <div class="widget widget_recent_entries widget-widget_recent_entries">
      <div class="widget-wrap widget-inside">
        <h3 class="widget-title">随机文章</h3>
          <ul><?php wp_get_archives('type=postbypost&limit=10'); ?></ul>
      </div>
    </div>
    <div class="widget widget_tag_cloud widget-widget_tag_cloud">
      <div class="widget-wrap widget-inside">
        <h3 class="widget-title">近期评论</h3>
        <?php //wp_tag_cloud('smallest=10&largest=30&number=30&unit=px&format=flat&orderby=name'); ?>
<?php
/** 名称：WordPress显示最近评论的文章列表 */
$pop = $wpdb->get_results("SELECT DISTINCT comment_post_ID
							FROM $wpdb->comments
							WHERE comment_approved = 1
							AND comment_post_ID NOT IN
							(
							SELECT ID FROM $wpdb->posts
							WHERE post_type != 'post'
							OR post_status != 'publish'
							OR post_password != ''
							)
							ORDER BY comment_date_gmt DESC
							LIMIT 10"); ?>
<ul>
<?php foreach($pop as $post) : ?>
<li><a href="<?php echo get_permalink($post->comment_post_ID); ?>"><?php echo get_the_title($post->comment_post_ID); ?></a></li>
<?php endforeach; ?>
</ul>
      </div>
    </div>

    <div class="widget widget_text widget-widget_text">
      <div class="widget-wrap widget-inside">
        <h3 class="widget-title">关于本站</h3>
        <div class="textwidget"><?php bloginfo('description'); ?> </div>
      </div>
    </div>

<?php // endif; ?>
</ul>

</div>
<!-- end sidebar -->
