<?php
/** Stop google font in any optin from loading */
add_filter('mailoptin_disable_optin_form_cache', '__return_true');
