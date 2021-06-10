<?php
/**
 * Plugin Name: calisia-wip
 */

$calisiaWip = new CalisiaWip();
add_action( 'wp_loaded', array( $calisiaWip, 'halt' ) );


class CalisiaWip{
    public function halt() {

        if(is_user_logged_in())
            return;

        
        $pageNames = explode("/",$_SERVER['REQUEST_URI']);
        if(isset($pageNames[1]) && ($pageNames[1] == 'login' || $pageNames[1] == 'wp-admin' || isset($_GET['wc-api'])))
            return;


        include  __DIR__ . '/templates/wip.php';
        die;
    }
}