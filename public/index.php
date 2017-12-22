<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 17/12/17
 * Time: 18:12
 */
require '../App/Autoloader.php';
\App\Autoloader::register();

if(isset($_GET['p'])){
    $p=$_GET['p'];
}else{
    $p='home';
}

//Initialisation
$db=new \App\Database('blog');

ob_start();

if($p==='home'){
    require '../pages/home.php';
}elseif ($p==='article'){
    require '../pages/single.php';
}elseif ($p==='categories'){
    require '../pages/categories.php';
}

$content = ob_get_clean();
require '../pages/templates/default.php';
