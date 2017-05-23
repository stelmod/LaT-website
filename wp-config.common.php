<?php
// Configuration common to all VersionPress environments, included from `wp-config.php`.
// Learn more at https://docs.versionpress.net/en/getting-started/configuration

if(!session_id()) {
    session_start();
}

if ( isset($_GET['lang']) ){
    if( $_GET['lang']=='es_ES' ){
        $_SESSION['WPLANG'] = 'es_ES';
    } elseif( $_GET['lang']=='ca' ){
        $_SESSION['WPLANG'] = 'ca';
    } elseif( $_GET['lang']=='en_US' ){
        $_SESSION['WPLANG'] = 'en_US';
    } else {
        $_SESSION['WPLANG'] = 'es_ES';
    }
}

global $locale;
$locale = $_SESSION['WPLANG'];

