<?php

// Projet: M152 - Projet GE-Blague
// Script: library.php
// Description: librarie des fonctions
// Auteur: Micael Rodrigues
// Classe : I.IN-P4B
// Version 1: 24.11.2016

require_once ('dbconnection.php');

/**
 * récupère les enregistrements de la table Contenu
 * @return array tableau contenant les enregistrements 
 */
function getData($Section, $Categorie) {
    $db = connectDb();
    $sql = "SELECT Titre, lienContenu "
            . "FROM contenu as c "
            . "JOIN section as s ON c.idSection = s.idSection "
            . "JOIN categories as ca ON c.idCategorie = ca.idCategorie "
            . "WHERE ca.nomCategorie = ':NomCategorie'"
            . "AND s.NomSection = ':NomSection'";
    $request = $db->prepare($sql);
    $request->execute(array(
        'NomSection' => $Section,
        'NomCategorie' => $Categorie,
    ));
    return $request->fetchAll();
}
/**
 * 
 * @return tous les enregistrements de la table contenu
 */
function getAllData(){
    $db = connectDb();
    $sql = "SELECT * FROM contenu";
    $request = $db->prepare($sql);
    $request->execute();
    return $request->fetchAll();
}