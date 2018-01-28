<?php

namespace RequireDirectory;

function Autoload ( $path ) {
    if ( file_exists($path) ) {
        foreach ( glob( $path . '*.php' ) as $filename ) {
            require_once( $filename );
        }
    }
    else {
        error_log( "Directory does not exist: $path" );
    }
}