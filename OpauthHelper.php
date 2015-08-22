<?php

class OpauthHelper {

    public static function getLoginLink( $provider ) {
        global $wgOpauthConfig;
        return $wgOpauthConfig.$provider;
    }

}