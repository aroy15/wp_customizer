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