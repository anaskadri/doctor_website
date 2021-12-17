<?php
    try
    {
        $bdd = new PDO('mysql:host=mysql.hostinger.com;dbname=u946938073_malki;charset=utf8', 'u946938073_malki', 'drmalki', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));  
    }
    catch (Exception $e)
    {
        die ('Erreur : ' .$e->getmessage());
    }
?>