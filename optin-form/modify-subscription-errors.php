<?php
/**
 * Code snippets to modify name and email field is missing errors.
 */

add_filter('mo_optin_campaign_name_missing_error', function () {
    return "custom error message when name field is missing";
});

add_filter('mo_optin_campaign_email_missing_error', function () {
    return "custom error message when email field is missing";
});
