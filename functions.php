<?php
/**
 * Created by PhpStorm.
 * User: Evandro
 * Date: 05/01/2019
 * Time: 13:33
 */
add_theme_support('post-thumbnails');

function wordpress_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text'=> __('<li class="page-link">«</li>'),
	    'next_text'=> __('<li class="page-link">»</li>'),
        'before_page_number'=>'<li class="page-link">',
        'after_page_number'=>'</li>'
    ) );
}