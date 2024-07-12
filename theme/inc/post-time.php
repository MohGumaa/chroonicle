<?php
/**
 * Custom templat for post time
 *
 * @package chroonicle
 */

 if ( ! function_exists( 'chroonicle_post_time' ) ) :
	function chroonicle_post_time($id) {
		// Get the post published date and time
    $published_time = get_the_time('M j, Y \a\t h:i A', $id);
    $published_date_time = get_the_date('c', $id);

    // Get the post modified date and time
    $modified_time = get_the_modified_time('M j, Y \a\t h:i A', $id);
    $modified_date_time =  get_the_modified_date('c', $id);

    $is_updated = $modified_time !== $published_time;

    return [$published_time, $published_date_time, $modified_time, $modified_date_time, $is_updated];

	}
endif;