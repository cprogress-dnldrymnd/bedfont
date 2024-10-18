<?php
function action_widgets_init()
{

    register_sidebar(
        array(
            'name'          => 'Footer Column 1',
            'id'            => 'footer_column_1',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title mt-lg-0 mt-sm-3">',
            'after_title'   => '</h3>',
        )
    );


    register_sidebar(
        array(
            'name'          => 'Footer Column 2',
            'id'            => 'footer_column_2',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title mt-lg-0 mt-sm-3">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => 'Footer Column 3',
            'id'            => 'footer_column_3',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title mt-lg-0 mt-sm-3">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => 'Footer Column 4',
            'id'            => 'footer_column_4',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title mt-lg-0 mt-sm-3">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Footer Bottom',
            'id'            => 'footer_bottom',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title mt-lg-0 mt-sm-3">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'action_widgets_init');
