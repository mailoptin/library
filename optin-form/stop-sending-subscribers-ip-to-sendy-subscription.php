<?php
/** Stop sending subscribers IP address during Sendy optin subscription */
add_filter('mo_connections_sendy_optin_payload', function ($lead_data) {
  unset($lead_data['ipaddress']);
  return $lead_data;
});
