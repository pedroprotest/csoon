<?php
function csoon_customize_register( $wp_customize ) {
  // Do stuff with $wp_customize, the WP_Customize_Manager object.
  // New panel for the theme options.
  $wp_customize->add_panel( 'csoon_theme_panel', array(
      'priority' => 20,
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'title' => __( 'Coming Soon Theme Options', 'csoon' ),
      'description' => __( 'Main options to the Theme.', 'csoon' ),
  ) );
  require get_parent_theme_file_path( '/inc/customizer/home-settings.php' );
  //require get_parent_theme_file_path( '/inc/customizer/social-links.php' );

}
add_action( 'customize_register', 'csoon_customize_register' );
