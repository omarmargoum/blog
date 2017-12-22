<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 17/12/17
 * Time: 18:22
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: OMAR
 * Date: 20/12/2016
 * Time: 11:20
 */
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../public/css/dashborder.css">
    <link rel="stylesheet" href="../public/css/singin.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script rel="script" src="../public/js/bootstrap.min.js"></script>
    <script rel="script" src="../public/js/jquery-3.1.1.min.js"></script>
    <title>Mon site</title>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->

    </div>
</nav>

<div class="container">

    <div class="starter-template">
    </div>
    <div >
        <?= $content;?>
    </div>


</div><!-- /.container -->
</body>
</html>
