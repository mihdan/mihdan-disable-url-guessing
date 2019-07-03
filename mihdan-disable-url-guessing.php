<?php
/**
 * Plugin Name: Mihdan: Disable URL Guessing
 * Description: Плагин под WordPress, который отключает "угадывание" ядром правильных URL при неверном их написании.
 * Author: Mikhail Kobzarev
 * Version: 1.0
 */
add_filter(
    'redirect_canonical', 
    function( $redirect_url ) {
        if ( is_404() && ! isset( $_GET['p'] ) ) {
            return false;
        }

        return $redirect_url;
    }
);

// eof;
