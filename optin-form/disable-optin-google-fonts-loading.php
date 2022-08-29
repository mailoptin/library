<?php
/** 
 * Stop google font in any optin from loading
 */
add_filter('mo_optin_form_set_font_families_to_inherit', '__return_true');
// for some odd reasons, when this isn't disabled, google fonts were being loaded by cache.
add_filter('mailoptin_disable_optin_form_cache', '__return_true');
