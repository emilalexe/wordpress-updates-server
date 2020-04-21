<?php
/**
 * Created by PhpStorm.
 * User: Emil
 * Date: 16.04.2020
 * Time: 01:17
 */
$new_version = "1.1";
if( isset( $_POST['action'] ) || isset( $_GET['debug'] ) ) {
    $input = isset($_POST['action']) ? $_POST['action'] : $_GET['debug'];
    switch( $input ) {
        case 'version':
            echo $new_version;
            break;

        case 'info':
            $obj              = new stdClass();
            $obj->id          = 'www.devprolab.com/wordpres/plugin/heartbeat';
            $obj->slug        = 'heartbeat';
            $obj->plugin_name = 'heartbeat';
            $obj->plugin      = 'heartbeat/heartbeat_functions.php';
            $obj->url         = 'www.devprolab.com/wordpress/plugin/heartbeat/';
            $obj->new_version = $new_version;
            $obj->package     = $obj->url.'files/zip/heartbeat.v'.$new_version.'.zip';
            $obj->name       = 'HeartBeat <sub><small>v'.$new_version.'</small></sub>';
            $obj->requires    = '3.0';
            $obj->tested      = '5.4';
            $obj->compatibility  = '5.4';
            $obj->last_updated = '2020-04-16';
            $obj->sections    = array(
                'description'     => '(Description) The new version of the Auto-Update plugin',
                'another_section' => '(Another section) This is another section',
                'changelog'       => '(Change Log) Some new features'
            );
            $obj->download_link = 'https://www.devprolab.com/wordpress/plugin/heartbeat/update.php';
            $obj->icons = array(
                '2x' => 'https://www.devprolab.com/wordpress/plugin/heartbeat/files/images/icon-256x256.png',
                '1x' => 'https://www.devprolab.com/wordpress/plugin/heartbeat/files/images/icon-128x128.png'
            );
            $obj->banners  = array(
                'low' => 'https://www.devprolab.com/wordpress/plugin/heartbeat/files/images/banner-772x250.png',
                'high' => 'https://www.devprolab.com/wordpress/plugin/heartbeat/files/images/banner-1544x500.png'
            );

            $obj->rating = 90;
            $obj->num_ratings = 123;
            $obj->downloaded = 12540;
            $obj->active_installs = 12345;
            echo serialize( $obj );

        case 'license':
            echo 'false';
            break;
    }
} else {
    header( 'Cache-Control: public' );
    header( 'Content-Description: File Transfer' );
    header( 'Content-Type: application/zip' );
    readfile( 'heartbeat.v'.$new_version.'.zip' );
}
?>