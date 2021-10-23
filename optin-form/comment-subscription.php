<?php

add_filter('comment_form_submit_field', function ($submit_field) {
    ob_start();
    ?>
    <p class="mailoptincm-optin-field">
        <input checked id="mailoptincm_opt_in" <?php echo isset($_POST['mailoptincm_opt_in']) ? 'checked' : ''; ?> type="checkbox" name="mailoptincm_opt_in">
        <label for="mailoptincm_opt_in">YES, also email me FREE keto tips & recipes!</label>
    </p>
    <?php

    return ob_get_clean() . $submit_field;
});

add_action( 'comment_post', function ($comment_id) {

    if ( isset( $_POST['mailoptincm_opt_in'] ) ) {

        MailOptin\ConvertKitConnect\Connect::get_instance()->subscribe(
            get_comment_author_email( $comment_id ),
            get_comment_author( $comment_id ),
            '2709757',
            ['form_tags' => ['2700211']]
        );
    }
});
