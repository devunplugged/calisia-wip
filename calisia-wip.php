<?php
/**
 * Plugin Name: calisia-wip
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

$calisiaWip = new CalisiaWip();
add_action( 'wp_loaded', array( $calisiaWip, 'halt' ) );


class CalisiaWip{
    public function halt() {

        if(is_user_logged_in())
            return;

        $url = explode('?', $_SERVER['REQUEST_URI'], 2);
        $pageNames = explode("/",$url[0]);

        if(isset($pageNames[1]) && ($pageNames[1] == 'login' || $pageNames[1] == 'wp-admin' || $pageNames[1] == 'wp-cron.php'  || isset($_GET['wc-api'])))
            return;

        include  __DIR__ . '/templates/wip.php';
        die;
    }
}
