<?php

namespace RequireDirectory;

function Autoload ( $path ) {
    $slash_path = rtrim($path, '/') . '/';
    if ( file_exists($slash_path) ) {
        foreach ( glob( $slash_path . '*.php' ) as $filename ) {
            require_once( $filename );
        }
    }
    else {
        error_log( "Directory does not exist: $path" );
    }
}