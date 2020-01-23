<?php
/**
 * Code snippets modifies the double optin email mailoptin usually send when a user subscribes.
 */

add_filter('mo_mailjet_confirm_email_subject', function () {
    return 'Confirm your subscription';
});

add_filter('mo_mailjet_confirm_email_message_content', function () {
    return 'Thanks for subscribing to my email list. Please click the button below to complete your subscription.';
});

add_filter('mo_mailjet_confirm_email_button_text', function () {
    return 'Confirm Subscription Now';
});
