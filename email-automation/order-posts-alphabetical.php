<?php
/** Order email digest posts alphabetically */

add_filter('mo_post_digest_get_posts_args', function($parameters) {

  $parameters['order'] = 'ASC';
  $parameters['orderby'] = 'post_title';
	return $parameters;
  
});
