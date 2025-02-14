<?php

/**Carbonfields Documentation: https://docs.carbonfields.net/ */

use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Complex_Container;
use Carbon_Fields\Field;

/**Modules Template */
//_modules();
Container::make('post_meta', 'Modules')
    ->where('post_template', '=', 'templates/page-modules.php')
    ->or_where('post_type', '=', 'layouts')
    ->add_fields(array(
        Field::make('complex', 'modules', '')
            ->set_collapsed(true)
            ->setup_labels(
                array(
                    'plural_name'   => 'Modules',
                    'singular_name' => 'Module',
                )
            )
            //_layouts();
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
            ->set_header_template('Layout: <%- title %>')

            //__hero_style_1();
            //__hero_style_2();
            //__hero_style_3();
            //__hero_style_4();
            ->add_fields('hero', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('select', 'style', __('Style'))
                    ->set_options(array(
                        'style-1'       => 'Style 1',
                        'style-2'       => 'Style 2[Youtube]',
                        'style-2-image' => 'Style 2[Image]',
                        'style-3'       => 'Style 3',
                        'style-4'       => 'Style 4',
                    )),

                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'subheading', __('Subheading')),
                Field::make('textarea', 'description', __('Description')),
                Field::make('image', 'image', __('Image'))
                    ->set_conditional_logic(
                        array(
                            'relation' => 'OR',
                            array(
                                'field' => 'style',
                                'value' => 'style-3',
                            ),
                            array(
                                'field' => 'style',
                                'value' => 'style-2-image',
                            )
                        )
                    ),
                Field::make('text', 'youtube_url', __('Youtube URL'))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field' => 'style',
                                'value' => 'style-2',
                            )
                        )
                    ),
                Field::make('image', 'bg_image', __('Background Image'))
                    ->set_conditional_logic(
                        array(
                            'relation' => 'AND',
                            array(
                                'field'   => 'style',
                                'value'   => 'style-2',
                                'compare' => '!='
                            ),
                            array(
                                'field'   => 'style',
                                'value'   => 'style-2-image',
                                'compare' => '!='
                            )
                        )
                    ),

                Field::make('select', 'button_type', __('Button Type'))
                    ->set_options(
                        array(
                            'internal-url' => 'Internal',
                            'custom'       => 'Custom',
                        )
                    )
                    ->set_conditional_logic(
                        array(
                            array(
                                'field' => 'style',
                                'value' => 'style-2',
                            )
                        )
                    ),
                Field::make('select', 'button_style', __('Button Style'))
                    ->set_options(
                        array(
                            'button-pink'   => 'Button Pink',
                            'button-purple' => 'Button Purple',
                            'button-brown'  => 'Button Purple',
                            'button-orange' => 'Button Orange',
                            'button-blue'   => 'Button BLue',
                            'button-red'    => 'Button Red',
                        )
                    )
                    ->set_conditional_logic(
                        array(
                            array(
                                'field' => 'style',
                                'value' => 'style-2',
                            )
                        )
                    ),
                Field::make('text', 'button_text', __('Button Text'))
                    ->set_conditional_logic(
                        array(
                            array(
                                'field' => 'style',
                                'value' => 'style-2',
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
                                'field' => 'style',
                                'value' => 'style-2',
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
                                'field' => 'style',
                                'value' => 'style-2',
                            )
                        )
                    )

            ))
            ->set_header_template('Hero: <%- heading %>')

            //_two_column_image_text();
            //_two_column_image_text_4();
            //_two_column_image_text_5();
            //_two_column_image_text_6();
            //_two_column_image_text_7();
            ->add_fields('two_column_image_text', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('select', 'image_position', __('Image Position'))
                    ->set_options(
                        array(
                            ''                 => 'Image on Right',
                            'flex-row-reverse' => 'Image on Left',
                        )
                    ),
                Field::make('select', 'style', __('Style'))
                    ->set_options(array(
                        'style-1' => 'Style 1',
                        'style-2' => 'Style 2',
                        'style-3' => 'Style 3',
                        'style-4' => 'Style 4',
                        'style-5' => 'Style 5',
                        'style-6' => 'Style 6',
                        'style-7' => 'Style 7',
                    )),
                Field::make('select', 'color', __('Color'))
                    ->set_options(
                        array(
                            'purple'    => 'Style Purple',
                            'blue'      => 'Style Blue',
                            'pink'      => 'Style Pink',
                            'red'       => 'Style Red',
                            'orange'    => 'Style Orange',
                            'brown'     => 'Style Brown Gradient',
                            'dark-blue' => 'Style Dark Blue',
                        )
                    )
                    ->set_conditional_logic(
                        array(
                            'relation' => 'OR',
                            array(
                                'field' => 'style',
                                'value' => 'style-2',
                            ),
                            array(
                                'field' => 'style',
                                'value' => 'style-4',
                            ),
                            array(
                                'field' => 'style',
                                'value' => 'style-5',
                            ),
                            array(
                                'field' => 'style',
                                'value' => 'style-6',
                            ),
                            array(
                                'field' => 'style',
                                'value' => 'style-7',
                            )
                        )
                    ),
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'description', __('Description')),
                Field::make('image', 'image', __('Image')),
                Field::make('complex', 'text_boxes', 'Text Boxes')
                    ->set_layout('tabbed-vertical')
                    ->add_fields(array(
                        Field::make('text', 'heading', __('Heading')),
                        Field::make('textarea', 'description', __('Description')),
                    ))
                    ->set_header_template('Text Boxes: <%- heading %>')
                    ->set_conditional_logic(
                        array(
                            array(
                                'field'   => 'style',
                                'value'   => 'style-7',
                                'compare' => '='
                            )
                        )
                    ),
                Field::make('select', 'button_type', __('Button Type'))
                    ->set_options(
                        array(
                            'internal-url' => 'Internal',
                            'custom'       => 'Custom',
                        )
                    ),
                Field::make('select', 'button_style', __('Button Style'))
                    ->set_options(
                        array(
                            'button-pink'   => 'Button Pink',
                            'button-purple' => 'Button Purple',
                            'button-brown'  => 'Button Purple',
                            'button-orange' => 'Button Orange',
                            'button-blue'   => 'Button BLue',
                            'button-red'    => 'Button Red',
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
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('select', 'text_align', __('Text Align'))
                    ->set_options(
                        array(
                            'text-center' => 'Default/Center',
                            'text-left'   => 'Left',
                            'text-right'  => 'Right',
                        )
                    ),
                Field::make('select', 'color', __('Color'))
                    ->set_options(
                        array(
                            ''       => 'Default',
                            'purple' => 'Style Purple',
                            'blue'   => 'Style Blue',
                            'pink'   => 'Style Pink',
                            'red'    => 'Style Red',
                            'orange' => 'Style Orange',
                            'brown'  => 'Style Brown Gradient',
                            'green'  => 'Style Green',
                        )
                    ),
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'description', __('Description')),

            ))

            //_text();
            ->set_header_template('Text: <%- heading %>')
            ->add_fields('two_column_text', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('text', 'heading_1', __('Heading Col 1'))->set_width(50),
                Field::make('text', 'heading_2', __('Heading Col 2'))->set_width(50),
                Field::make('textarea', 'description_1', __('Description Col 1'))->set_width(50),
                Field::make('textarea', 'description_2', __('Description Col 2'))->set_width(50),
            ))

            //_two_column_text();
            ->set_header_template('Two Column Text: <%- heading_1 %>')

            //_row_animation();
            ->add_fields('row_animation', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('text', 'title', __('Title')),
                Field::make('complex', 'items', 'Items')
                    ->set_layout('tabbed-vertical')
                    ->add_fields(array(
                        Field::make('select', 'color', __('Color'))
                            ->set_options(
                                array(
                                    'purple' => 'Style Purple',
                                    'blue'   => 'Style Blue',
                                    'pink'   => 'Style Pink',
                                    'red'    => 'Style Red',
                                    'orange' => 'Style Orange',
                                    'brown'  => 'Style Brown Gradient',
                                )
                            ),
                        Field::make('select', 'style', __('Style'))
                            ->set_options(
                                array(
                                    ''                 => 'Image on Right',
                                    'flex-row-reverse' => 'Image on Left',
                                )
                            ),
                        Field::make('text', 'heading', __('Heading')),
                        Field::make('text', 'subheading', __('Subheading')),
                        Field::make('textarea', 'description', __('Description')),
                        Field::make('image', 'image', __('Image')),
                        Field::make('select', 'button_type', __('Button Type'))
                            ->set_options(
                                array(
                                    'internal-url' => 'Internal',
                                    'custom'       => 'Custom',
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

            //_blogs();
            ->add_fields('blogs', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('text', 'heading', __('Heading')),
                Field::make('text', 'description', __('Description')),

            ))
            ->set_header_template('Blogs: <%- heading %>')

            //_logo_slider();
            ->add_fields('logo_slider', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('text', 'heading', __('Heading')),
                Field::make('media_gallery', 'images', __('Image')),
                Field::make('text', 'description', __('Description')),

            ))
            ->set_header_template('Logo Slider: <%- heading %>')

            //_slider();
            ->add_fields('slider', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'description', __('Description')),
                Field::make('complex', 'items', 'Items')
                    ->set_layout('tabbed-vertical')
                    ->add_fields(array(
                        Field::make('select', 'style', __('Style'))
                            ->set_options(
                                array(
                                    'style-1' => 'Style 1',
                                    'style-2' => 'Style 2',
                                )
                            ),
                        Field::make('select', 'color', __('Color'))
                            ->set_options(
                                array(
                                    ''           => 'Default',
                                    'purple'     => 'Style Purple',
                                    'blue'       => 'Style Blue',
                                    'pink'       => 'Style Pink',
                                    'red'        => 'Style Red',
                                    'orange'     => 'Style Orange',
                                    'brown'      => 'Style Brown Gradient',
                                    'dark-blue'  => 'Style Dark Blue',
                                    'dark-green' => 'Style Dark Green',
                                    'green'      => 'Style Green',
                                    'yellow'     => 'Style Yellow',
                                )
                            )
                            ->set_conditional_logic(
                                array(
                                    array(
                                        'field' => 'style',
                                        'value' => 'style-2',
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

            //_text_over_curve_shape();
            ->add_fields('text_over_curve_shape', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('text', 'title', __('Title')),
                Field::make('text', 'heading', __('Heading')),
                Field::make('text', 'description', __('Description')),
            ))
            ->set_header_template('Text Over Curved Shape: <%- title %>')

            //_image_grid();
            ->add_fields('image_grid', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('text', 'title', __('Title')),
                Field::make('complex', 'items', 'Items')
                    ->set_layout('tabbed-vertical')
                    ->add_fields(array(
                        Field::make('image', 'image', __('Image')),
                        Field::make('select', 'button_type', __('Button Type'))
                            ->set_options(
                                array(
                                    'internal-url' => 'Internal',
                                    'custom'       => 'Custom',
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

            //_icon_box();
            ->add_fields('icon_box', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('select', 'style', __('Style'))
                    ->set_options(array(
                        'style-1' => 'Style 1',
                        'style-2' => 'Style 2',
                        'style-3' => 'Style 3'
                    )),
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'description', __('Description')),
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

            //_instagram_feed();
            ->add_fields('instagram_feed', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'description', __('Description')),
                Field::make('text', 'shortcode', __('Shortcode')),

            ))
            ->set_header_template('Instagram Feed: <%- heading %>')

            //_careers();
            ->add_fields('careers', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('text', 'heading', __('Heading')),
                Field::make('text', 'subheading', __('Subheading')),
            ))
            ->set_header_template('Careers: <%- heading %>')

            //_accordion();
            ->add_fields('accordion', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('image', 'image', __('Image')),
                Field::make('text', 'heading', __('Heading')),
                Field::make('textarea', 'bottom_text', __('Bottom_text')),
                Field::make('complex', 'items', 'Items')
                    ->set_layout('tabbed-vertical')
                    ->add_fields(array(
                        Field::make('text', 'title', __('Title')),
                        Field::make('complex', 'contents', 'Contents')
                            ->set_layout('tabbed-vertical')
                            ->add_fields(array(
                                Field::make('textarea', 'text', __('Text')),
                            ))
                            ->set_header_template('Text: <%- text %>')


                    ))
                    ->set_header_template('Item: <%- title %>')

            ))
            ->set_header_template('Accordion: <%- heading %>')

            //_form();
            ->add_fields('form', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'section_id', __('Section ID'))->set_width(50),
                Field::make('text', 'section_classes', __('Section Classes'))->set_width(50),
                Field::make('select', 'style', __('Style'))
                    ->set_options(array(
                        'style-1' => 'Style 1',
                        'style-2' => 'Style 2',
                    )),
                Field::make('text', 'heading', __('Heading')),
                Field::make('text', 'description', __('Description')),
                Field::make('textarea', 'form_script', __('Form Script')),
            ))
            ->set_header_template('Form: <%- heading %>')

            //_map();
            ->add_fields('map', array(
                Field::make('complex', 'custom_css', __('Section Custom CSS'))->set_width(100)
                    ->add_fields(array(
                        Field::make('text', 'css_selector', __('Selector'))->set_width(15),
                        Field::make('complex', 'css_properties', __('Properties'))->set_width(85)
                            ->add_fields(array(
                                Field::make('text', 'css_property', __('Property'))->set_width(33),
                                Field::make('text', 'css_value', __('Value'))->set_width(33),
                            ))
                            ->set_collapsed(true)
                            ->set_header_template('<%- css_property %> : <%- css_value %>'),
                    ))
                    ->set_header_template('<%- css_selector %>')
                    ->set_layout('tabbed-vertical'),
                Field::make('text', 'title', __('Title')),
                Field::make('textarea', 'map_src', __('MAP SRC')),
            ))
            ->set_header_template('Map: <%- title %>')

    ));

/**Careers Post Type Custom Fields */
Container::make('post_meta', 'Career Settings')
    ->or_where('post_type', '=', 'careers')
    ->add_fields(array(
        Field::make('text', 'salary', __('Salary')),
        Field::make('file', 'job_spec', __('Job Spec')),
    ));

/**Theme Options
 * Admin Post Type: URL /wp-admin/admin.php?page=crb_carbon_fields_container_theme_settings.php
 * 
 */
Container::make('theme_options', __('Theme Settings'))
    ->add_tab('General Settings', array(
        Field::make('text', 'tel', __('Telephone')),
        Field::make('text', 'email', __('Email')),
        Field::make('textarea', 'address', __('Address')),
    ))
    ->add_tab('Socials', array(
        Field::make('complex', 'socials')
            ->add_fields('facebook', array(
                Field::make('hidden', 'icon')->set_default_value('fa fa-facebook-f'),
                Field::make('text', 'url', __('Facebook URL'))->set_classes('inline-field'),
            ))
            ->add_fields('instagram', array(
                Field::make('hidden', 'icon')->set_default_value('fa fa-instagram'),
                Field::make('text', 'url', __('Instagram URL'))->set_classes('inline-field'),
            ))
            ->add_fields('x', array(
                Field::make('hidden', 'icon')->set_default_value('fa-brands fa-x-twitter'),
                Field::make('text', 'url', __('X URL'))->set_classes('inline-field'),
            ))
            ->add_fields('linkedin', array(
                Field::make('hidden', 'icon')->set_default_value('fa fa-linkedin'),
                Field::make('text', 'url', __('Linkedin URL'))->set_classes('inline-field'),
            ))
            ->add_fields('youtube', array(
                Field::make('hidden', 'icon')->set_default_value('fa fa-youtube'),
                Field::make('text', 'url', __('Youtube URL'))->set_classes('inline-field'),
            ))
            ->add_fields('google', array(
                Field::make('text', 'url', __('Google URL'))->set_classes('inline-field'),
            ))
            ->set_duplicate_groups_allowed(false)
            ->set_collapsed(true)
    ));
