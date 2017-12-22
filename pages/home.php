<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 17/12/17
 * Time: 18:22
 */


$articles= \App\Table\Articles::getLast();
$categories=\App\Table\Categories::all();


?>

    <h1>My Home</h1>
    <div class="col-lg-10 ">
        <?php foreach ($articles as $article):?>
        <h2><a href="<?=$article->url;?>"><?= $article->titre;?></a> </h2>
        <p><em><?=$article->category?></em></p>
        <p><?=$article->extrait;?></p>
        <?php endforeach;?>
    </div>
    <div class="col-lg-2 ">
        <ul>
            <?php foreach ($categories as  $category):?>
            <li><a href="<?=$category->url;?>"><?=$category->titre?></a> </li>
            <?php endforeach; ?>
        </ul>
    </div>
