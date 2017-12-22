<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 17/12/17
 * Time: 18:22
 */

$article=\App\App::getDb()->prepare('SELECT * FROM articles WHERE id=?',[$_GET['id']],'App\Table\Articles',true);

?>
<h1> My Single</h1>
<h2><?= $article->titre; ?></h2>
<p><?= $article->text; ?></p>