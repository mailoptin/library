<?php
/**
 * By default, posts for email automation uses the post content.
 * If you want the email content to be the post excerpt instead, use the code below.
 */
add_filter('mo_email_automation_post_content', function($content, $post) {
  return $post->post_excerpt;
}, 10, 2);
