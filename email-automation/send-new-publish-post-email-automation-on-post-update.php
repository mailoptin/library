<?php
/**
 * By default, new post email automation only goes out when a post is newly published (from draft to publish status).
 * If you want it to go out whenever posts are updated, use the code snippet below.
 */
add_filter('mo_new_publish_post_condition_check', function($check, $new_status, $old_status, $post, $update) {

    if($new_status == 'publish' && $update === true) {
        $check = true;
    }

    return $check;

}, 10, 5);
