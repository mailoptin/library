<?php
/**
 * Code snippets to block signups from specific email addresses.
 */
add_filter('mo_subscription_form_error', function ($response, $conversion_data) {

    $blocked_email = [
        'sample@gmail.com'
    ];

    if (in_array($conversion_data->email, $blocked_email)) {
        return new \WP_Error('invalid_email', 'This email is blocked.');
    }

    return $response;

}, 10, 2);
