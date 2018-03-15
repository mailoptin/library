
<?php
/**
 * This truncate the customize/edit url. 
 * This solves issue in some host like hostgator where lengthy url result to 403 forbidden error.
 */
 
add_filter('mo_optin_campaign_customize_url', function($args) {$args['return'] = '&';return $args;});
add_filter('mo_email_campaign_customize_url', function($args) {$args['return'] = '&';return $args;});
