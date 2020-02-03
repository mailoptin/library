<?php
/**
* Change the email address test emails are sent to. 
*/
add_filter('mailoptin_email_campaign_test_admin_email', function() {
    return 'enter email here';
});
