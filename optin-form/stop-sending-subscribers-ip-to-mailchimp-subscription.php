<?php
/** Stop sending subscribers IP address during mailchimp optin subscription */
add_filter('mo_connections_mailchimp_subscription_parameters', function ($parameters) {
  unset($parameters['ip_signup']);              
  return $parameters;
});
