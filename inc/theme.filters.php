<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

remove_filter ('the_content',  'wpautop');

?>