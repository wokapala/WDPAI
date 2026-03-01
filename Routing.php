<?php


class Routing{

    public static function Run($path){
        switch($path){
            case "dashboard":
                var_dump($path);
                include "public/views/dashboard.html";
                break;

            case "login";
            include "public/views/login.html";
                break;

            default:
                include "public/views/404.html";
        }
    }
}