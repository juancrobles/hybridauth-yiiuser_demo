<?php
/**
 * Created by JetBrains PhpStorm.
 * User: juanc
 * Date: 15/08/13
 * Time: 12:36
 * To change this template use File | Settings | File Templates.
 */

$providers = array (
        "OpenID" => array (
            "enabled" => true
        ),

        "Yahoo" => array (
            "enabled" => true
        ),

        "Google" => array (
            "enabled" => true,
            "keys"    => array ( "id" => "", "secret" => "" ),
            "scope"   => "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email" , // optional
        ),

        "Facebook" => array (
            "enabled" => true,
            "keys"    => array ( "id" => "", "secret" => "" ),
            "scope"   => "email,publish_stream",
            "display" => ""
        ),

        "Live" => array (
            "enabled" => true,
            "keys"    => array ( "id" => "", "secret" => "" ),
        ),

        "Twitter" => array (
            "enabled" => true,
            "keys"    => array ( "key" => "", "secret" => "" )
        )
    )

?>