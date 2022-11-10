<?php
/**
 * Translate error saving contact message.
 */
add_filter('gettext', function ($message, $text, $domain) {
    if ($domain == 'mailoptin') {
        if ($text == 'There was an error saving your contact. Please try again.') {
            $message = 'modified message here';
        }
    }

    return $message;
}, 10, 3);
