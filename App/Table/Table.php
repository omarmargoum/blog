<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 19/12/17
 * Time: 12:26
 */

namespace App\Table;
use App\App;

class Table
{
    protected static $table;
    private static function getTable(){
        if(static::$table===null){
           $class_name=explode('\\',get_called_class()) ;
           static::$table=strtolower(end($class_name));
        }
        return static::$table;
    }
    public static function find($id){
        return App::getDb()->prepare("
                                    SELECT *
                                    FROM ".static::getTable()."
                                    WHERE id=?
                                    ",[$id],get_called_class(),true);
    }
    public static function query($statement,$attributes=null,$one=false){
        if ($attributes){
            return App::getDb()->prepare($statement,$attributes,get_called_class(),$one);
        }else{
            return App::getDb()->query($statement,get_called_class(),$one);
        }
    }
    public static function all(){
        return App::getDb()->query("
        SELECT *
        FROM ".static::getTable()."
        ",get_called_class());
    }
    public function __get($name)
    {
        // TODO: Implement __get() method.
        $method='get'.ucfirst($name);
        $this->$name=$this->$method();
        return $this->$name;
    }
}