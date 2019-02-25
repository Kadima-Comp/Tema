<?php

add_theme_support('post-thumbnails');
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
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
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Leia mais...</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

add_action('widgets_init', 'wp_sidebars');
function wp_sidebars(){
    register_sidebar(

        array(
            'name' => 'Sidebar Direita',
            'id' => 'sidebar-1',
            'description' => 'Adicione elementos a sua barra lateral direita da página',
            'before_widget' => '<div class="widget-area>"',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'

        )

    );
    register_sidebar(

        array(
            'name' => 'Footer',
            'id' => 'footer-1',
            'description' => 'Adicione elementos ao rodapé da página',
            'before_widget' => '<div class="col-md-3 mx-auto">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="text-uppercase titulo-footer">',
            'after_title' => '</h5>'

        )

    );
    register_sidebar(

        array(
            'name' => 'Sidebar Esquerda',
            'id' => 'sidebar-2',
            'description' => 'Adicione elementos a sua barra lateral esquerda da página. Para um
             melhor aproveitamento da página recomendamos utilizar somente pequenas figuras.',
            'before_widget' => '<li>',
            'after_widget' => '</li>',
            'before_title' => '<h5 style="display: none">',
            'after_title' => '</h5>'

        )

    );

}

