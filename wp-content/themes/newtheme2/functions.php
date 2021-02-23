<?php

function test() {
    wp_enqueue_style('test-bootstrap', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}


?>