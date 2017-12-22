<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 18/12/17
 * Time: 12:28
 */

namespace App\Table;


use App\App;

class Articles extends Table
{
    public static function getLast(){
        return App::getDb()->query("
                          SELECT articles.id,articles.titre,articles.text,categories.titre as category FROM 
                          articles LEFT JOIN categories 
                          ON articles.id_catigories=categories.id
                          ",__CLASS__);
    }
    public static function lastBycategory($id){
        return self::query("
                                SELECT articles.id,articles.titre,articles.text,categories.titre AS category
                                FROM articles
                                LEFT JOIN categories
                                ON id_catigories=categories.id
                                WHERE id_catigories=?
                            ",[$id]);
    }
    public function getUrl(){
        return 'index.php?p=article&id='.$this->id;
    }
    public function getExtrait(){
        $html='<p>'.substr($this->text,0 ,80).'...</p>';
        $html.='<p><a href="'.$this->getUrl().'">Voir la suite</a></p>';
        return $html;
    }
}