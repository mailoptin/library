<?php

add_filter('mo_subscription_form_error', function($val, $conversion_data) {

    // replace vbw1cjd20cel12j3zwu with the field ID
    $field_id = 'vbw1cjd20cel12j3zwu';
    
    if(!is_numeric($conversion_data->payload[$field_id])) {
        $val = new \WP_Error( 'invalid_number', 'Field requires a valid phone number' );
    }
    
    return $val;
  
}, 10, 2);
