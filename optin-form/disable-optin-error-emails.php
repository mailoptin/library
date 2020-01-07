<?php
/**
 * Code snippets to stop MailOptin from sending optin error emails.
 */
 add_filter('mailoptin_disable_send_optin_error_email', '__return_true');
