<?php

$mysql=new mysqli('localhost','root','','itl.wiki');

    function get_1C(){

        global $mysql;
        $blog_1С = $mysql->query ("SELECT * FROM `stats_1c`");
        return $blog_1С;

    }
    function get_dns(){

        global $mysql;
    $blog_dns = $mysql->query ("SELECT * FROM `dns`");
        return $blog_dns;
    }
    function get_esxi(){

        global $mysql;

        $blog_esxi = $mysql->query ("SELECT * FROM `esxi`");
        return $blog_esxi;
    }
    function get_mac(){

        global $mysql;

        $blog_mac = $mysql->query ("SELECT * FROM `mac_os`");
        return $blog_mac;
    }
    function get_sql(){

        global $mysql;
        $blog_sql = $mysql->query ("SELECT * FROM `ms_sql`");
        return $blog_sql;
    }
    function get_outlook(){

        global $mysql;
        $blog_outlook = $mysql->query ("SELECT * FROM `outlook`");
        return  $blog_outlook;
    }
    function get_openvpn(){

        global $mysql;

        $blog_openvpn = $mysql->query ("SELECT * FROM `openvpn`");
        return  $blog_openvpn;
    }
