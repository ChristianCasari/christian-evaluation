<?php
require_once './views/header.php';
include './controller/connectDb.php';
?>
<h1 class=" bg-primary text-center text-white px-2 py-4">Bienvenue dans notre magasin de bricolage</h1>
<?php
$req=$db->prepare('SELECT* from produits');
$req->execute(array());
$data= $req->fetchAll();
//var_dump($data);
?>
<a href="./views/createProduct.php" class= "btn btn-primary">Créer un produit</a>
<div class="container justify-space-between mt-4">
    <div class="row align-items-center">
        <?php foreach ($data as $k => $d): ?>
        <div class="card mb-2 ml-2 " style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $d["name"] ?></h5>
                <p class="card-text"><?= $d['description'] ?></p>
                <p>Prix : <?=$d['tarif'] ?> € TTC <?=$d['tarifHT']?> €HT</p>
                <a href="./views/updateProduct.php?id=<?= $d['id'] ?>" class="btn btn-primary">Mettre à jour le produit</a>
                <a href="./controller/deleteProduct.php?id=<?= $d['id'] ?>" class="btn btn-danger">Supprimer le produit</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>