<?php get_header();?>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
	<div class="tag"><?php the_tags(__(''), '', ''); ?></div>
	<h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<div class="meta">
		<?php the_time('Y-m-d');?><?php the_category(' ');?><?php edit_post_link(__('Edit This')); ?>
		<?php wp_link_pages(); ?>
		<?php comments_popup_link(__('评论 (0)'), __('评论 (1)'), __('评论 (%)')); ?>
		</div>
	<div class="storycontent">
		<?php the_excerpt(); //the_content(__('(more...)')); ?>
		</div>
</article>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div><!--content-->
<?php pagenavi(); ?>
<?php
/*	the_posts_pagination( array(
	        'prev_text'          =>上页,
	        'next_text'          =>下页,
	        'before_page_number' => ' ',
	        'after_page_number' => ' ',
	    ) );
*/
?>
</div><!--primary-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
