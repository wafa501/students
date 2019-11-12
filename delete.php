<?php 
include 'dbconnexion.php' ;
$db_cnx->exec('DELETE FROM students WHERE id="'.$_GET['id'].'"');
header('location:index.php');
