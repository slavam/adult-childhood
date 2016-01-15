                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
            
            
            <footer class="art-footer clearfix"><?php get_sidebar('footer'); ?><?php
global $theme_default_options;
//echo do_shortcode(theme_get_option('theme_override_default_footer_content') ? theme_get_option('theme_footer_content') : //theme_get_array_value($theme_default_options, 'theme_footer_content'));


//COMSTYLE COPYRYGHT
$m_year = '2015'; // год создания 
$c_year = date('Y'); // текущий год
if ($m_year == $c_year) {
   $copy_date = $m_year;
} else {
   $copy_date = $m_year . " - " . $c_year;
}
print 'Разработано <a href="http://com-style.su"> ООО "КОМ.СТАЙЛ"</a> © ' . $copy_date

?>
</footer>

    </div>
   <!-- <p class="art-page-footer">
        <span id="art-footnote-links">Powered by <a href="http://wordpress.org/" target="_blank">WordPress</a> and <a href="http://www.artisteer.com/?p=wordpress_themes" target="_blank">WordPress Theme</a> created with Artisteer.</span>
    </p> -->
</div>



<div id="wp-footer">
	<?php wp_footer(); ?>
	<!-- <?php printf(__('%d queries. %s seconds.', THEME_NS), get_num_queries(), timer_stop(0, 3)); ?> -->
</div>
</body>
</html>
