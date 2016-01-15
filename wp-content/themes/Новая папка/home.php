<?php get_header(); ?>
			<?php get_sidebar('top'); ?>
			<?php
			if (have_posts()) {
				/* Display navigation to next/previous pages when applicable */
				if (theme_get_option('theme_' . (theme_is_home() ? 'home_' : '') . 'top_posts_navigation')) {
					theme_page_navigation();
				}
				?>
<div class="art-content-layout-wrapper post-layout-item-0">
<div class="art-content-layout post-layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell post-layout-item-2" style="width: 100%" >
        <?php theme_get_next_post(); ?>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper post-layout-item-3">
<div class="art-content-layout post-layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell post-layout-item-2" style="width: 100%" >
        <?php theme_get_next_post(); ?>
    </div>
    </div>
</div>
</div>

				<?php
				/* Display navigation to next/previous pages when applicable */
				if (theme_get_option('theme_bottom_posts_navigation')) {
					theme_page_navigation();
				}
			} else {
				theme_404_content();
			}
			?>
			<?php get_sidebar('bottom'); ?>
<?php get_footer(); ?>