<?php


// A savoir 

// var_dump($query);
// die();

include('layouts/db_connection.php');


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

                <?php
                $requete = 'SELECT name * FROM articles';
                $reponse = $bdd->query($requete);
                while ($ligne = $reponse->fetch_assoc()) {
                






                ?>


                <!-- /content -->



            </div>
        </div>

    </div>


    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script srce="assets/js/bootstrap.min.js"></script>
</body>

</html>