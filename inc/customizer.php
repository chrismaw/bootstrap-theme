<?php
function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('Showcase', array(
        'title' => __('Showcase','bootstraptheme'),
        'description' => sprintf(__('Options for showcase', 'bootstraptheme')),
        'priority' => 130
    ));

    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Crosspointe','bootstraptheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'bootstraptheme'),
        'section' => 'showcase',
        'priority' => 1
    ));
}

add_action('customize_register', 'wpb_customize_register');
