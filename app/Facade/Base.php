<?php

namespace App\Facade;

class Base
{
    public static $title;
    public static $smalltitle;


    public static function title($title)
    {
        self::$title = $title;
    }
    public static function smalltitle($smalltitle)
    {
        self::$smalltitle = $smalltitle;
    }

    public static function getTitle()
    {
        return self::$title;
    }

    public static function getSmallTitle()
    {
        return self::$smalltitle;
    }
}