<?php

// A savoir 

//1. Outil de debug
// var_dump($query); permet de voir ce qu'il y a dans la variable, quelque soit sont type (debug)
// die(); permet d'arreter le code 



include('layouts/db_connection.php');


if (isset( $_POST['titre']) && isset( $_POST['description'])) {

    $query = "INSERT INTO articles( name, description, picture, id_users) VALUES('" . $_POST['titre'] . "', '" . $_POST['description'] . "', 'a faire', 1);";
    $bdd->exec($query);
    

}

$articles = $bdd->query("select * from articles");




?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <title>linksport</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="description" content="site permettant d'échanger des équipements sportifs">
</head>

<body>


    <?php include('layouts/header.php'); ?>



    <div class="main">
        <div class="row">
            <div class="col-3">
                <?php include('layouts/nav.php'); ?>
            </div>

            <div class="col-9">

            <!-- content -->

                <div class="formulaire">
                    <form method="post">
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input class="form-control" id="titre" name="titre" placeholder="ex : raquette de tennis wilson 2000">

                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Publier</button>
                    </form>
                </div>


                <!-- /content -->


                <ul>
                    <?php
                    foreach ($articles as $article) {
                        echo "<li>".$article["name"] . "-" . $article["description"] ."</li>";
                    }
                    ?>

            </div>
        </div>

    </div>


    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script srce="assets/js/bootstrap.min.js"></script>
</body>

</html>