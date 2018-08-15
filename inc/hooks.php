<?php

function get_rest_api_contents($per_page, $type) {
    $api_url = home_url('/wp-json/wp/v2/'.$type.'?per_page='.$per_page);
    $api_content = file_get_contents($api_url);
    $GLOBALS['api_content'] = json_decode($api_content, true);
}
?>
