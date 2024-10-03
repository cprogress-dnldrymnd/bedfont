<?php

use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Complex_Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Modules')
    ->where('post_template', '=', 'templates/page-modules.php')
    ->add_fields(array(
        Field::make('complex', 'modules', '')
            ->set_collapsed(true)
            ->setup_labels(
                array(
                    'plural_name'   => 'Modules',
                    'singular_name' => 'Module',
                )
            )
            ->add_fields('layouts', array(
                Field::make('text', 'title', 'Title'),
                Field::make('association', 'layouts', 'Select Layouts')
                    ->set_types(
                        array(
                            array(
                                'type'      => 'post',
                                'post_type' => 'layouts',
                            )
                        )
                    )
            ))
            ->add_fields('hero', array(
                Field::make('select', 'style', __('Style'))
                    ->set_options(array(
                        'style-1' => 'Style 1',
                        'style-2' => 'Style 2',
                        'style-3' => 'Style 3',
                        'style-4' => 'Style 4',
                    )),

                Field::make('text', 'heading', __('Heading')),

                Field::make('text', 'subheading', __('Subheading')),
                Field::make('textarea', 'description', __('Description')),
                Field::make('image', 'image', __('Image'))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'style',
                                'value'   => 'style-3',
                            )
                        )
                    ),
                Field::make('text', 'youtube_url', __('Youtube URL'))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'style',
                                'value'   => 'style-2',
                            )
                        )
                    ),
                Field::make('image', 'bg_image', __('Background Image')),

                Field::make('select', 'button_type', __('Button Type'))
                    ->set_options(
                        array(
                            'internal-url'        => 'Internal',
                            'custom'      => 'Custom',
                        )
                    )
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'style',
                                'value'   => 'style-2',
                            )
                        )
                    ),
                Field::make('select', 'button_style', __('Button Style'))
                    ->set_options(
                        array(
                            'button-pink'        => 'Button Pink',
                            'button-purple'      => 'Button Purple',
                            'button-brown'      => 'Button Purple',
                            'button-orange'      => 'Button Orange',
                            'button-blue'      => 'Button BLue',
                            'button-red'      => 'Button Red',
                        )
                    )
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'style',
                                'value'   => 'style-2',
                            )
                        )
                    ),
                Field::make('text', 'button_text', __('Button Text'))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'style',
                                'value'   => 'style-2',
                            )

                        )
                    ),

                Field::make('association', 'button_url', __('Button URL'))
                    ->set_max(1)
                    ->set_types(array(
                        array(
                            'type'      => 'post',
                            'post_type' => 'post',
                        ),
                        array(
                            'type'      => 'post',
                            'post_type' => 'page',
                        )
                    ))
                    ->set_conditional_logic(
                        array(
                            'relation' => 'AND',
                            array(
                                'field'   => 'button_type',
                                'value'   => 'custom',
                                'compare' => '!='
                            ),
                            array(
                                'field'   => 'style',
                                'value'   => 'style-2',
                            )
                        )
                    ),
                Field::make('text', 'button_custom_url', __('Button Custom URL'))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'button_type',
                                'value'   => 'custom',
                                'compare' => '='
                            ),
                        )
                    ),
                Field::make('select', 'button_target', __('Button Target'))
                    ->set_options(
                        array(
                            'target="_self"'  => 'Default',
                            'target="_blank"' => 'New Tab',
                        )
                    )
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'style',
                                'value'   => 'style-2',
                            )
                        )
                    )

            ))
            ->set_header_template('Hero: <%- heading %>')
            ->add_fields('two_column_image_text', array(
                Field::make('select', 'image_position', __('Image Position'))
                    ->set_options(
                        array(
                            ''      => 'Image on Right',
                            'flex-row-reverse'      => 'Image on Left',
                        )
                    ),
                Field::make('select', 'style', __('Style'))
                    ->set_options(array(
                        'style-1' => 'Style 1',
                        'style-2' => 'Style 2',
                        'style-3' => 'Style 3',
                    )),
                Field::make('select', 'color', __('Color'))
                    ->set_options(
                        array(
                            'purple'      => 'Style Purple',
                            'blue'      => 'Style Blue',
                            'pink'      => 'Style Pink',
                            'red'      => 'Style Red',
                            'orange'      => 'Style Orange',
                            'brown'      => 'Style Brown Gradient',
                        )
                    )
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'style',
                                'value'   => 'style-2',
                            )
                        )
                    ),
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'description', __('Description')),
                Field::make('image', 'image', __('Image')),
                Field::make('select', 'button_type', __('Button Type'))
                    ->set_options(
                        array(
                            'internal-url'        => 'Internal',
                            'custom'      => 'Custom',
                        )
                    ),
                Field::make('select', 'button_style', __('Button Style'))
                    ->set_options(
                        array(
                            'button-pink'        => 'Button Pink',
                            'button-purple'      => 'Button Purple',
                            'button-brown'      => 'Button Purple',
                            'button-orange'      => 'Button Orange',
                            'button-blue'      => 'Button BLue',
                            'button-red'      => 'Button Red',
                        )
                    ),
                Field::make('text', 'button_text', __('Button Text')),
                Field::make('association', 'button_url', __('Button URL'))
                    ->set_max(1)
                    ->set_types(array(
                        array(
                            'type'      => 'post',
                            'post_type' => 'post',
                        ),
                        array(
                            'type'      => 'post',
                            'post_type' => 'page',
                        )
                    ))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'button_type',
                                'value'   => 'custom',
                                'compare' => '!='
                            )
                        )
                    ),
                Field::make('text', 'button_custom_url', __('Button Custom URL'))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'button_type',
                                'value'   => 'custom',
                                'compare' => '='
                            )
                        )
                    ),
                Field::make('select', 'button_target', __('Button Target'))
                    ->set_options(
                        array(
                            'target="_self"'  => 'Default',
                            'target="_blank"' => 'New Tab',
                        )
                    ),
            ))
            ->set_header_template('Two Column Image and Text: <%- heading %>')
            ->add_fields('text', array(
                Field::make('select', 'text_align', __('Text Align'))
                    ->set_options(
                        array(
                            'text-center'      => 'Default/Center',
                            'text-left'      => 'Left',
                            'text-right'      => 'Right',
                        )
                    ),
                Field::make('select', 'color', __('Color'))
                    ->set_options(
                        array(
                            ''      => 'Default',
                            'purple'      => 'Style Purple',
                            'blue'      => 'Style Blue',
                            'pink'      => 'Style Pink',
                            'red'      => 'Style Red',
                            'orange'      => 'Style Orange',
                            'brown'      => 'Style Brown Gradient',
                            'green'      => 'Style Green',
                        )
                    ),
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'description', __('Description')),

            ))
            ->set_header_template('Text: <%- heading %>')
            ->add_fields('row_animation', array(
                Field::make('text', 'title', __('Title')),
                Field::make('complex', 'items', 'Items')
                    ->set_layout('tabbed-vertical')
                    ->add_fields(array(
                        Field::make('select', 'color', __('Color'))
                            ->set_options(
                                array(
                                    'purple'      => 'Style Purple',
                                    'blue'      => 'Style Blue',
                                    'pink'      => 'Style Pink',
                                    'red'      => 'Style Red',
                                    'orange'      => 'Style Orange',
                                    'brown'      => 'Style Brown Gradient',
                                )
                            ),
                        Field::make('select', 'style', __('Style'))
                            ->set_options(
                                array(
                                    ''      => 'Image on Right',
                                    'flex-row-reverse'      => 'Image on Left',
                                )
                            ),
                        Field::make('text', 'heading', __('Heading')),
                        Field::make('text', 'subheading', __('Subheading')),
                        Field::make('textarea', 'description', __('Description')),
                        Field::make('image', 'image', __('Image')),
                        Field::make('select', 'button_type', __('Button Type'))
                            ->set_options(
                                array(
                                    'internal-url'        => 'Internal',
                                    'custom'      => 'Custom',
                                )
                            ),
                        Field::make('text', 'button_text', __('Button Text')),
                        Field::make('association', 'button_url', __('Button URL'))
                            ->set_max(1)
                            ->set_types(array(
                                array(
                                    'type'      => 'post',
                                    'post_type' => 'post',
                                ),
                                array(
                                    'type'      => 'post',
                                    'post_type' => 'page',
                                )
                            ))
                            ->set_conditional_logic(
                                array(
                                    array(
                                        'field'   => 'button_type',
                                        'value'   => 'custom',
                                        'compare' => '!='
                                    )
                                )
                            ),
                        Field::make('text', 'button_custom_url', __('Button Custom URL'))
                            ->set_conditional_logic(
                                array(
                                    array(
                                        'field'   => 'button_type',
                                        'value'   => 'custom',
                                        'compare' => '='
                                    )
                                )
                            ),
                        Field::make('select', 'button_target', __('Button Target'))
                            ->set_options(
                                array(
                                    'target="_self"'  => 'Default',
                                    'target="_blank"' => 'New Tab',
                                )
                            ),
                    ))
                    ->set_header_template('Row: <%- heading %>')

            ))
            ->set_header_template('Row Animation: <%- title %>')
            ->add_fields('blogs', array(
                Field::make('text', 'heading', __('Heading')),
                Field::make('text', 'description', __('Description')),

            ))
            ->set_header_template('Blogs: <%- heading %>')
            ->add_fields('slider', array(
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'description', __('Description')),
                Field::make('complex', 'items', 'Items')
                    ->set_layout('tabbed-vertical')
                    ->add_fields(array(
                        Field::make('select', 'style', __('Style'))
                            ->set_options(
                                array(
                                    'style-1'      => 'Style 1',
                                    'style-2'      => 'Style 2',
                                )
                            ),
                        Field::make('select', 'color', __('Color'))
                            ->set_options(
                                array(
                                    ''      => 'Default',
                                    'purple'      => 'Style Purple',
                                    'blue'      => 'Style Blue',
                                    'pink'      => 'Style Pink',
                                    'red'      => 'Style Red',
                                    'orange'      => 'Style Orange',
                                    'brown'      => 'Style Brown Gradient',
                                    'dark-blue'      => 'Style Dark Blue',
                                    'dark-green'      => 'Style Dark Green',
                                    'green'      => 'Style Green',
                                    'yellow'      => 'Style Yellow',
                                )
                            )
                            ->set_conditional_logic(
                                array(
                                    array(
                                        'field'   => 'style',
                                        'value'   => 'style-2',
                                    )
                                )
                            ),
                        Field::make('text', 'heading', __('Heading')),
                        Field::make('textarea', 'description', __('Description')),
                        Field::make('image', 'image', __('Image')),
                        Field::make('complex', 'highlight', 'Highlight Text')
                            ->set_layout('tabbed-horizontal')
                            ->add_fields(array(
                                Field::make('text', 'text', __('Text')),
                            ))
                            ->set_header_template('<%- text %>')


                    ))
                    ->set_header_template('Slide: <%- heading %>')


            ))
            ->set_header_template('Slider: <%- heading %>')
            ->add_fields('text_over_curve_shape', array(
                Field::make('text', 'title', __('Title')),
                Field::make('text', 'heading', __('Heading')),
                Field::make('text', 'description', __('Description')),

            ))
            ->set_header_template('Text Over Curved Shape: <%- title %>')
            ->add_fields('image_grid', array(
                Field::make('text', 'title', __('Title')),
                Field::make('complex', 'items', 'Items')
                    ->set_layout('tabbed-vertical')
                    ->add_fields(array(
                        Field::make('image', 'image', __('Image')),
                        Field::make('select', 'button_type', __('Button Type'))
                            ->set_options(
                                array(
                                    'internal-url'        => 'Internal',
                                    'custom'      => 'Custom',
                                )
                            ),
                        Field::make('text', 'button_text', __('Button Text')),
                        Field::make('association', 'button_url', __('Button URL'))
                            ->set_max(1)
                            ->set_types(array(
                                array(
                                    'type'      => 'post',
                                    'post_type' => 'post',
                                ),
                                array(
                                    'type'      => 'post',
                                    'post_type' => 'page',
                                )
                            ))
                            ->set_conditional_logic(
                                array(
                                    array(
                                        'field'   => 'button_type',
                                        'value'   => 'custom',
                                        'compare' => '!='
                                    )
                                )
                            ),
                        Field::make('text', 'button_custom_url', __('Button Custom URL'))
                            ->set_conditional_logic(
                                array(
                                    array(
                                        'field'   => 'button_type',
                                        'value'   => 'custom',
                                        'compare' => '='
                                    )
                                )
                            ),
                        Field::make('select', 'button_target', __('Button Target'))
                            ->set_options(
                                array(
                                    'target="_self"'  => 'Default',
                                    'target="_blank"' => 'New Tab',
                                )
                            ),
                    ))
                    ->set_header_template('Grid: <%- button_text %>')

            ))
            ->set_header_template('Image Grid: <%- title %>')
            ->add_fields('icon_box', array(
                Field::make('select', 'style', __('Style'))
                    ->set_options(array(
                        'style-1' => 'Style 1',
                        'style-2' => 'Style 2'
                    )),
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'bottom_text', __('Bottom Text')),
                Field::make('complex', 'items', 'Items')
                    ->set_layout('tabbed-vertical')
                    ->add_fields(array(
                        Field::make('image', 'image', __('Image Icon')),
                        Field::make('text', 'heading', __('Heading')),
                        Field::make('textarea', 'text', __('Text')),

                    ))
                    ->set_header_template('Grid: <%- heading %>')

            ))
            ->set_header_template('Icon Box: <%- heading %>')
            ->add_fields('instagram_feed', array(

                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'description', __('Description')),
                Field::make('text', 'shortcode', __('Shortcode')),

            ))
            ->set_header_template('Instagram Feed: <%- heading %>')

    ));
