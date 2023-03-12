<?php
function portfolio_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'portfolio_setup' );

function new_excerpt_mblength($length) {
    return 70;
}
add_filter( 'excerpt_mblength', 'new_excerpt_mblength' );

function twpp_change_excerpt_more($more) {
    return '....';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );
