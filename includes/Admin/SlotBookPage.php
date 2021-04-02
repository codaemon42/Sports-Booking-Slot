<?php

namespace ONSBKS_Slots\Includes\Admin;


/**
 * Class SlotBookPage
 * @package ONSBKS_Slots\Includes\Admin
 * SlotBook page handler class
 * @since 1.0.0
 */
class SlotBookPage {

      /**
       * Loads the required templates for specific address pages
       *
       * @since 1.0.0
       */
      public function plugin_page() {
            $action = isset( $_GET['action'] ) ? sanitize_text_field( $_GET['action'] ) : 'list';

            switch ( $action ) {
                  case 'new':
                        $template = __DIR__ . '/views/address-new.php';
                        break;

                  default:
                        $template = __DIR__ . '/views/address-list.php';
                        break;
            }

            if ( file_exists( $template ) ) {
                  include "$template";
            }
      }

    /**
     * fetch all product ids and titles
     *
     * @since 1.0.0
     *
     * @return array|object|null
     */
      static function get_product_id_title() {
            global $wpdb;
            return  $wpdb->get_results("SELECT ID, post_title FROM {$wpdb->prefix}posts WHERE post_type = 'product' AND post_status = 'publish'", 'ARRAY_A');
      }
}
