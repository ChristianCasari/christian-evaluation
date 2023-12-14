<?php
require_once ('connectDb.php');

var_dump($_POST);

$req = $db->prepare('UPDATE produits SET name =?, description=?, tarif=? , tarifHT=? WHERE id=?');
$req ->execute(array(
    htmlspecialchars($_POST['name']),
    htmlspecialchars($_POST['description']),
    htmlspecialchars(intval($_POST['tarif'])),
    htmlspecialchars(intval($_POST['tarifHT'])),
    htmlspecialchars($_POST["id"])
));
header('Location:../index.php');