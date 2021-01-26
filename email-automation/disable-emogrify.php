<?php
/**
* Disables emogrify from inlining email template
*/

add_filter('mo_disable_email_emogrify', '__return_true');
