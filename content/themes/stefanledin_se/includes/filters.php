<?php
/**
 * Redigera vilka klasser som body får
 */
function add_body_classes( $classes ) {
    return $classes;
}
add_filter( 'body_class', 'add_body_classes' );

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );