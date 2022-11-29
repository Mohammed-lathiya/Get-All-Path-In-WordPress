<?php

echo dirname(__FILE__);
echo get_template_directory_uri();
echo get_template_directory();
echo $wp_root_path = str_replace('/wp-content/themes', '', get_theme_root());
echo get_theme_root();


// /var/www/wp-content/themes/projecttheme_child/lib
// https://4jg.aa2.myftpupload.com/wp-content/themes/ProjectTheme
// /var/www/wp-content/themes/ProjectTheme
// /var/www
// /var/www/wp-content/themes

?>
