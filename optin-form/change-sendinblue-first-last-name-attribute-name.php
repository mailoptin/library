<?php

add_filter('SendinblueConnect_first_name_field_key', function () {
    return 'VORNAME';
});

add_filter('SendinblueConnect_last_name_field_key', function () {
    return 'NAME';
});
