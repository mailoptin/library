<?php
/**
 * Code snippets to block signups from specific email address domains.
 */
add_filter('mo_subscription_form_error', function ($response, $conversion_data) {

    $email_domains = ['company.com', 'company.net'];
    
    foreach ($email_domains as $email_domain) {

        if (strstr($conversion_data->email, '@' . $email_domain) !== false) {
            return new \WP_Error('invalid_email', 'This email is blocked.');
        }
    }
    
    return $response;

}, 10, 2);
