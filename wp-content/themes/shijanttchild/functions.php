<?php



/**
 * Check if Elementor is active
 */
function is_elementor_active() {
    return class_exists('Elementor\Plugin');
}

/**
 * Example usage
 */
if ( is_elementor_active() ) {
    // Elementor is active, add your custom code here
    // For example, enqueue custom scripts or styles specific to Elementor

    // Add admin Notice

    
      require_once('elementor-addons/addons.php');



} else {
    // Elementor is not active, add alternative code or fallbacks here
    function my_custom_admin_notice() {
      $message = 'This theme required elementor install.';
  
      // Display the notice
      echo '<div class="notice notice-warning is-dismissible">';
      echo '<p>' . esc_html( $message ) . '</p>';
      echo '</div>';
  }
  add_action( 'admin_notices', 'my_custom_admin_notice' );
}