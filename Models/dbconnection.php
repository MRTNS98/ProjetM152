<?php
// Projet: M152 - Projet GE-Blague
// Script: dbconnection.php
// Description: Connection à la base de données
// Auteur: Micael Rodrigues
// Classe : I.IN-P4B
// Version 1.0: 24.11.2016
// Version 2.0: 15.12.2016

function connectDb()
{
    $server = '10.134.180.111';
    $pseudo = 'ge-blague';
    $pwd = 'Super';
    $dbname = 'db-GeBlague';
    
    static $db = null;
    
    if ($db === null)
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $db = new PDO("mysql:host=$server;dbname=$dbname", $pseudo, $pwd, $pdo_options);
        $db->exec('SET CHARACTER SET utf8');
    }
    return $db;
}