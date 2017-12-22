<?php
function a004_theme_options( $wp_customize ) {
    
    $wp_customize->add_setting( 'a004_footer_text' , array(
    'default' => '✝ Conversion Church 2017',
    'type' => 'option',
    'sanitize_callback' => 'sanitize_text_field',
) );
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a004_footer_text', array(
        'label' => __('Footer Text', 'a004'),
        'section' => 'footer-copyright',
        'settings' => 'a004_footer_text',
        'type' => 'text',
        'priority' => 10
    )));
}
add_action('customize_register', 'a004_theme_options', 20);
?>