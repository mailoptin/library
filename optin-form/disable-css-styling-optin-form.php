<?php
/**
 * Code snippets to remove optin form CSS styling from all optin form.
 * Thus making it blank without any styling applied.
 */
 
add_filter('mo_optin_form_css', '__return_empty_string');
add_filter('mo_optin_form_headline_styles', '__return_empty_array');
add_filter('mo_optin_form_description_styles', '__return_empty_array');
add_filter('mo_optin_form_name_field_styles', '__return_empty_array');
add_filter('mo_optin_form_email_field_styles', '__return_empty_array');
add_filter('mo_optin_form_submit_button_styles', '__return_empty_array');
add_filter('mo_optin_form_container_styles', '__return_empty_array');
