<?php

try
{
	 $bdd = new PDO('mysql:host=localhost;dbname=sport_link;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>