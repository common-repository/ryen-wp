<?php
if (!defined('ABSPATH')) {
  exit();
}

class Ryen_Admin
{
  public function my_admin_menu()
  {
    add_menu_page(
      'Ryen Settings',
      'Ryen',
      'manage_options',
      'ryen/settings.php',
      [$this, 'ryen_settings_callback'],
      'dashicons-format-chat',
      250
    );
  }

  public function ryen_settings_callback()
  {
    require_once 'partials/ryen-admin-display.php';
  }

  public function register_ryen_settings()
  {
    register_setting('ryen', 'init_snippet');
    register_setting('ryen', 'excluded_pages');
  }
}
