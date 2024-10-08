<?php

namespace App\Html;

class PageCounties extends AbstractPage {
    
    static function list($entities){
        
    }
    
    static function table(array $entities){
        echo '<h1>Megyék</h1>';
        self::searchbar();
        echo '<table id="counties-table">';
        self::tableHead();
        self::tableBody($entities);
        echo "</table>";
    }

    static function tableHead()
    {
        
    }

    static function editor()
    {

    }

    static function tableBody()
    {

    }
};

