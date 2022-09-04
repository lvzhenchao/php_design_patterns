<?php
namespace classDump;

class Dump
{

    static function pr($var)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }

    static function prd($var)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
        die;
    }

    static function psq($var)
    {
        echo "<pre>";
        print_r($var->createCommand()->sql);
        echo "</pre>";
        die;
    }

    static function dd($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        die;
    }

    static function dv($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }

}