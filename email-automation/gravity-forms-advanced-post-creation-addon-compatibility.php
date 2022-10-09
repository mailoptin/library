<?php
/**
 * Posts created via Gravity Forms Advanced Post Creation addon missing their featured images when sent as an email?
 * Add this code snippet as a site specific plugin to enable this compatibility layer.
 */

add_filter('mailoptin_gform_advancedpostcreation_compatibility', '__return_true');
