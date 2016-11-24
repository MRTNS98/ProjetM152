<?php
// Projet: M152 - Projet GE-Blague
// Script: dbconnection.php
// Description: Connection à la base de données
// Auteur: Micael Rodrigues
// Classe : I.IN-P4B
// Version 1: 24.11.2016

function connectDb()
{
    $server = '127.0.0.1';
    $pseudo = 'root';
    $pwd = '';
    $dbname = 'projetm152';
    
    static $db = null;
    
    if ($db === null)
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $db = new PDO("mysql:host=$server;dbname=$dbname", $pseudo, $pwd, $pdo_options);
        $db->exec('SET CHARACTER SET utf8');
    }
    return $db;
}