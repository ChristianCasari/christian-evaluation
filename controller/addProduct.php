<?php
require_once ('connectDb.php');
//var_dump($_POST);

$req = $db->prepare('INSERT INTO produits (name, description, tarif, tarifHT)
VALUES (:name, :description, :tarif, :tarifHT)');
$req->execute(array(
    "name"=> htmlspecialchars($_POST['name']),
    "description"=> htmlspecialchars($_POST['description']),
    "tarif"=> htmlspecialchars(intval($_POST['tarif'])),
    "tarifHT"=> htmlspecialchars(intval($_POST['tarifHT']))
    )
);
header('Location:../index.php ');