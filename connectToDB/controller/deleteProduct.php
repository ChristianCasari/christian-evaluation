<?php
ob_start();
require_once ('connectDb.php');
//var_dump($_GET['id']);

$req = $db->prepare('DELETE  from produits WHERE id=?');
$req->execute(array($_GET['id']));
ob_end_flush();
header('Location: ../index.php' );