<?php
/**
 * Demo Library class.
 *
 * @package Mystery Themes
 * @subpackage WP Diary
 * @since 1.0.7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WP_Diary_Demo_Library' ) ) :

    class WP_Diary_Demo_Library {

        /**
         * Get demo lists from url.
         */
        public function retrieve_demo_by_activatetheme() {
            $all_json_data  = array();
            $theme_demo_file = $this->wp_diary_demo_config_file_url( '' );
            $theme_demo_file = apply_filters('wp_diary_custom_json_config_path', $theme_demo_file );
            $all_json_data  = self::get_remote_data( $theme_demo_file );
            if ( is_wp_error( $all_json_data ) ) {
                return $all_json_data;
            }
            $all_json_data  = json_decode( $all_json_data , true );
            
            return apply_filters( 'wp_diary_all_json_demo_data', $all_json_data );

        }

        /**
         * Theme Demo config file url
         */
        public function wp_diary_demo_config_file_url( $args ) {
            if ( !empty( $args ) ) {
                return;
            }
            return esc_url( 'https://demo.mysterythemes.com/themes-demo-pack/wp-diary/demo.json' );
        }

        /**
         * Gets and returns url body using wp_remote_get
         *
         * @since 1.1.0
         */
        public static function get_remote_data( $url ) {
            // Get data
            $response = wp_remote_get( $url );

            // Check for errors
            if ( is_wp_error( $response ) or ( wp_remote_retrieve_response_code( $response ) != 200 ) ) {
                return false;
            }

            // Get remote body val
            $body = wp_remote_retrieve_body( $response );

            // Return data
            if ( ! empty( $body ) ) {
                return $body;
            } else {
                return false;
            }
        }

    } // class ends
    
endif;
