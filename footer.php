</div><!-- #main -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<ul class="small-links">
		<?php wp_list_pages('title_li=');
		//wp_list_categories('orderby=ID&order=ASC&depth=1&hide_empty=0&title_li=');	?>
		</ul>
		<div class="footer-info">
			版权所有©<?php //echo twenty_footer_info();
			echo Date("Y")." ";
			bloginfo('name');echo "    ";?>
			<a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank">
				<?php echo get_option( 'zh_cn_l10n_icp_num' );?>
			</a>
		</div>
			</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>