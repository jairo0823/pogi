<?php
function university_files() {
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), null, true);
    wp_enqueue_style('custom-google-fonts' ,'//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome' , '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main-style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('extra-style', get_theme_file_uri('/build/index.css'));
    
}
add_action('wp_enqueue_scripts', 'university_files');

?>
