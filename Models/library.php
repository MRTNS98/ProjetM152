<?php

// Projet: M152 - Projet GE-Blague
// Script: library.php
// Description: librarie des fonctions
// Auteur: Micael Rodrigues && Miguel Martins
// Classe : I.IN-P4B
// Version 1: 24.11.2016
// Version 1.1: 8.12.2016
// Version 1.2: 15.12.2016
// Version 2.0: 22.12.2016

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
        'NomCategorie' => $Categorie
    ));
    return $request->fetchAll();
}

/**
 * 
 * @param type $Categorie
 * @return array tableau qui contient le contenu en lien avec la catégorie
 */
function getDataCategorie($Categorie) {
    $db = connectDb();
    $sql = "SELECT * "
            . "FROM contenu as c "
            . "JOIN categories as ca ON c.idCategorie = ca.idCategorie "
            . "WHERE ca.nomCategorie = ':NomCategorie'";
    $request = $db->prepare($sql);
    $request->execute(array(
        'NomCategorie' => $Categorie,
    ));
    return $request->fetchAll();
}

/**
 * 
 * @param type $Section
 * @return tableau qui contient le contenu en lien avec la section
 */
function getDataSection($Section) {
    $db = connectDb();
    $sql = "SELECT * "
            . "FROM contenu as c "
            . "JOIN section as s ON c.idSection = s.idSection "
            . "WHERE s.NomSection = ':NomSection'";
    $request = $db->prepare($sql);
    $request->execute(array(
        'NomSection' => $Section,
    ));
    return $request->fetchAll();
}

/**
 * 
 * @return type tous les enregistrements de la table contenu
 */
function getAllData() {
    $db = connectDb();
    $sql = "SELECT * FROM contenu";
    $request = $db->prepare($sql);
    $request->execute();
    return $request->fetchAll();
}

/**
 * Affiche le nombre de like d'un contenu déterminé
 * @param type $Categorie
 * @param type $Contenu
 * @return type
 */
function NbLike($Categorie, $Contenu) {
    $db = connectDb();
    $sql = "SELECT `nbLike` 
            FROM `contenu` as c
            JOIN `categories` as ca ON c.idCategorie = ca.idCategorie
            WHERE ca.nomCategorie = ':NomCategorie'
            AND c.Titre =':NomContenu'";
    $request = $db->prepare($sql);
    $request->execute(array(
        `NomCategorie` => $Categorie,
        `NomContenu` => $Contenu
    ));
    return $request->fetchAll();
}

/**
 * Affiche le nombre de dislike d'un contenu déterminé
 * @param type $Categorie
 * @param type $Contenu
 * @return type
 */
function NbDislike($Categorie, $Contenu) {
    $db = connectDb();
    $sql = "SELECT `nbDislike` 
            FROM `contenu` as c
            JOIN `categories` as ca ON c.idCategorie = ca.idCategorie
            WHERE ca.nomCategorie = ':NomCategorie'
            AND c.Titre =':NomContenu'";
    $request = $db->prepare($sql);
    $request->execute(array(
        `NomCategorie` => $Categorie,
        `NomContenu` => $Contenu
    ));
    return $request->fetchAll();
}

/**
 * Actualise les Likes à la BDD
 */
function UpdateLike($NbLike, $IdContenu) {
    $db = connectDb();
    $sql = "UPDATE `contenu` 
           SET `nbLike` = :NbLike
           WHERE `idContenu` = :IdContenu";
    $request = $db->prepare($sql);
    $request->execute(array(
        'NbLike' => $NbLike,
        'IdContenu' => $IdContenu
    ));
    return $request->fetchAll();
}

/**
 * Actualise les Dislikes à la BDD
 */
function UpdateDislike($NbDislike, $IdContenu) {
    $db = connectDb();
    $sql = "UPDATE `contenu` 
           SET `nbDislike` = :NbDislike
           WHERE `idContenu` = :IdContenu";
    $request = $db->prepare($sql);
    $request->execute(array(
        'NbDislike' => $NbDislike,
        'IdContenu' => $IdContenu
    ));
    return $request->fetchAll();
}

/**
 * Pas Sur que fonction soit correctement faite, doute si besoin de jointure pour lien entre categorie et section avec le contenu
 * Insertion du contenus dans la BDD
 */
function InsertData($Titre,$LienContenu,$Auteur,$Categorie,$Section) {
    $db = connectDb();
    $sql = "INSERT INTO `contenu`(`Titre`, `lienContenu`, `Auteur`,`idCategorie`, `idSection`)
            VALUES (':Titre',':LienContenu',':Auteur',:Categorie,:Section)";
    $request = $db->prepare($sql);
    $request->execute(array(
        'Titre' => $Titre,
        'LienContenu' => $LienContenu,
        'Auteur' => $Auteur,
        'Categorie' => $Categorie,
        'Section' => $Section
    ));
    return $request->fetchAll();
}
/**
 * Recupère toutes les Sections disponnibles
 * @return type
 */
function GetSection(){
    $db = connectDb();
    $sql = "SELECT * FROM `section` ";
    $request = $db->prepare($sql);
    $request->execute();
    $result = $request->fetchAll();
    return $result;
}

/**
 * Recupère toutes les Categories disponnibles
 * @return type
 */
function GetCategories(){
    $db = connectDb();
    $sql = "SELECT * FROM `categories` ";
    $request = $db->prepare($sql);
    $request->execute();
    $result = $request->fetchAll();
    return $result;
}
