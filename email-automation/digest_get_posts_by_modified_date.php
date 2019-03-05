<?php
/**
 * By default, posts for email digest are fetched and ordered by their post published date.
 * If you want recently modified posts to be included in next batch of email digest, use this code.
 */
 add_filter('mo_post_digest_get_posts_args', function($parameters) {
    $parameters['orderby'] = 'post_modified';
    return $parameters;
 });
