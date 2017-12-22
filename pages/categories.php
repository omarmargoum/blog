<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 20/12/17
 * Time: 16:48
 */

use App\Table\Articles;
use App\Table\Categories;

$category=Categories::find($_GET['id']);
$articles=Articles::lastBycategory($_GET['id']);
$categories=Categories::all();
var_dump($article);
//var_dump($category);
//var_dump($categories);
?>
<h2><?= $category->titre?></h2>
<div class="col-lg-9">
    <?php foreach($articles as $post):?>

        <h2><a href="<?= $post->url ?>"><?= $post->titre;?></a> </h2>
        <p><em><?= $post->categorie; ?></em></p>
        <p><?=$post->extrait; ?></p>
    <?php endforeach; ?>
</div>
<div class="col-lg-3">
    <ul>
        <?php foreach ($categories as $categorie):?>
            <li><a href="<?=$categorie->url;?>" ><?=$categorie->titre?></a></li>
        <?php endforeach;?>
    </ul>
</div>
