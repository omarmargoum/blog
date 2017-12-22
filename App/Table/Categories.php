<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 19/12/17
 * Time: 12:14
 */

namespace App\Table;


class Categories extends Table
{
    public static $table='categories';

    public function getUrl(){
        return 'index.php?p=categories&id='.$this->id;
    }
}