<?php
/**
 * Code snippets to stop MailOptin from sending email campaigns error emails.
 */
add_filter('mailoptin_disable_sending_email_campaign_error', '__return_true');
