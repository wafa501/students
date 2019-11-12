<?php
    try {
        $db_cnx = new PDO('mysql:host=localhost;dbname=dsi21_g1_2019', 'root', '');
    } catch (Exception $e) {
        die('Erreur: '.$e->getMessage());
    }
