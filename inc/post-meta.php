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
            ->add_fields('hero', array(
                Field::make('text', 'heading', __('Heading')),
                Field::make('text', 'subheading', __('Subheading')),
                Field::make('image', 'bg_image', __('Background Image')),
                Field::make('select', 'style', __('Style'))
                    ->set_options(array(
                        'style-1' => 'Style 1'
                    )),

            ))
            ->set_header_template('Hero: <%- heading %>')
            ->add_fields('two_column_image_text', array(
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
                Field::make('text', 'description', __('Description')),
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
                Field::make('text', 'heading', __('Heading')),
                Field::make('text', 'description', __('Description')),

            ))
            ->set_header_template('Text Over Curved Shape: <%- heading %>')

    ));
