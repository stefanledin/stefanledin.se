<?php
/**
 * Redigera vilka klasser som body får
 */
function add_body_classes( $classes ) {
    return $classes;
}
add_filter( 'body_class', 'add_body_classes' );