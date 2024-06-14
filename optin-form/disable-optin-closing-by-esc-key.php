<?php
/** 
 * Stop escape key from closing optin form 
 */
add_filter('mo_optin_campaign_key_close', '__return_false');
