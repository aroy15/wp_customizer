<?php

use Kirki\Compatibility\Kirki;

Kirki::add_config('customizer', array(
    'capability' => 'edit_theme_options',
    'option_type' => 'theme_mod',
));

Kirki::add_panel('customizer_panel_id', array(
        'priority'    => 10,
        'title'       => esc_html__( 'About Panel', 'customizer' ),
        'description' => esc_html__( 'About Panel Description.', 'customizer' ),
    )
);

Kirki::add_section('customizer_section_one', array(
    'title' => esc_attr__('My Section', 'customizer'),
    'description' => esc_attr__('My Section description', 'customizer'),
    'priority' => 160,
    'panel' => 'customizer_panel_id'
));

Kirki::add_field('customizer_section_one', array(
    'type' => 'text',
    'settings' => 'my_setting',
    'label'    => esc_html__( 'Text Control', 'customizer' ),
    'section'  => 'customizer_section_one',
    'default'  => esc_html__( 'This is a default value', 'customizer' ),
    'priority' => 10,
));

Kirki::add_field('customizer_section_one', array(
    'type'     => 'repeater',
    'settings' => 'repeater_setting',
    'label'    => esc_html__( 'Repeater Control', 'customizer' ),
    'section'  => 'customizer_section_one',
    'priority' => 10,
    'default'  => [
        [
            'link_text'   => esc_html__( 'Kirki Site', 'customizer' ),
            'link_url'    => 'https://kirki.org/',
            'link_target' => '_self',
            'checkbox'    => false,
        ],
        [
            'link_text'   => esc_html__( 'Kirki WP', 'customizer' ),
            'link_url'    => 'https://wordpress.org/plugins/kirki/',
            'link_target' => '_blank',
            'checkbox'    => true,
        ],
    ],
    'fields'   => [
        'link_text'   => [
            'type'        => 'text',
            'label'       => esc_html__( 'Link Text', 'customizer' ),
            'description' => esc_html__( 'Description', 'customizer' ),
            'default'     => '',
        ],
        'link_url'    => [
            'type'        => 'text',
            'label'       => esc_html__( 'Link URL', 'customizer' ),
            'description' => esc_html__( 'Description', 'customizer' ),
            'default'     => '',
        ],
        'link_target' => [
            'type'        => 'select',
            'label'       => esc_html__( 'Link Target', 'customizer' ),
            'description' => esc_html__( 'Description', 'customizer' ),
            'default'     => '_self',
            'choices'     => [
                '_blank' => esc_html__( 'New Window', 'customizer' ),
                '_self'  => esc_html__( 'Same Frame', 'customizer' ),
            ],
        ],
        'checkbox'    => [
            'type'    => 'checkbox',
            'label'   => esc_html__( 'Checkbox', 'customizer' ),
            'default' => false,
        ],
    ],
));

Kirki::add_field('customizer_section_one', array(
    'type'        => 'typography',
    'settings'    => 'typography_setting',
    'label'       => esc_html__( 'Typography Control', 'customizer' ),
    'description' => esc_html__( 'The full set of options.', 'customizer' ),
    'section'     => 'customizer_section_one',
    'priority'    => 10,
    'transport'   => 'auto',
    'default'     => [
        'font-family'     => 'Roboto',
        'variant'         => 'regular',
        'font-style'      => 'normal',
        'color'           => '#333333',
        'font-size'       => '14px',
        'line-height'     => '1.5',
        'letter-spacing'  => '0',
        'text-transform'  => 'none',
        'text-decoration' => 'none',
        'text-align'      => 'left',
    ],
    'output'      => [
        [
            'element' => 'body',
        ],
    ],
));

// another section under 'About Panel'
Kirki::add_section('customizer_section_two', array(
    'title' => esc_attr__('About Section', 'customizer'),
    'description' => esc_attr__('About Section description', 'customizer'),
    'priority' => 160,
    'panel' => 'customizer_panel_id'
));

Kirki::add_field('customizer_section_two', array(
    'type' => 'textarea',
    'settings' => 'about_dsc_setting',
    'label'    => esc_html__( 'Text Control', 'customizer' ),
    'section'  => 'customizer_section_two',
    'default'  => esc_html__( 'This is a default Textarea value', 'customizer' ),
    'priority' => 10,
));

// Sortable field
Kirki::add_field('customizer_section_two', array(
    'type'     => 'sortable',
    'settings' => 'sortable_setting',
    'label'    => __( 'This is the label', 'customizer' ),
    'section'  => 'customizer_section_two',
    'default'  => [ 'option3', 'option1', 'option4' ],
    'priority' => 10,
    'choices'  => [
        'option1' => esc_html__( 'Option 1', 'customizer' ),
        'option2' => esc_html__( 'Option 2', 'customizer' ),
        'option3' => esc_html__( 'Option 3', 'customizer' ),
        'option4' => esc_html__( 'Option 4', 'customizer' ),
        'option5' => esc_html__( 'Option 5', 'customizer' ),
        'option6' => esc_html__( 'Option 6', 'customizer' ),
    ],
));