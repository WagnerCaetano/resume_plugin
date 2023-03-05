<?php
/**
 * Plugin Name:         Resume Plugin
 * Description:         My own resume
 * Version:             1.0.0
 * Author:              Wagner Caetano
 * Author URI:          https://wagnercaetano.dev
 * 
 * Be sure to rename the folder this file is in and this file to match what your plugin will be called. The names must be the same so WordPress knows where to look.
 */

function load_ng_resume_scripts() {
    wp_enqueue_style( 'ng_resume_styles', plugin_dir_url( __FILE__ ) . 'dist/resume/styles.ffe5d388ba6b3c91.css' );
    wp_register_script( 'ng_resume_main', plugin_dir_url( __FILE__ ) . 'dist/resume/main.d5953f67549a4583.js', true );
    wp_register_script( 'ng_resume_polyfills', plugin_dir_url( __FILE__ ) . 'dist/resume/polyfills.ae9a28a2b8b1b1dd.js', true );
    wp_register_script( 'ng_resume_runtime', plugin_dir_url( __FILE__ ) . 'dist/resume/runtime.9aad10c2930ce5eb.js', true );
}

add_action( 'wp_enqueue_scripts', 'load_ng_resume_scripts' );

function attach_ng_resume() {
    wp_enqueue_script( 'ng_resume_main' );
    wp_enqueue_script( 'ng_resume_polyfills' );
    wp_enqueue_script( 'ng_resume_runtime' );

    return "<app-root></app-root>";
}

add_shortcode( 'ng_resume_wp', 'attach_ng_resume' );

// Add the shortcode [ng_wp] to any page or post.
// The shorcode can be whatever. [ng_wp] is just an example.
?>