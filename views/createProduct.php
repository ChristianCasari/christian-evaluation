<?php
require_once ("header.php");
?>
<form method="post" action="../controller/addProduct.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom du produit</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">

    </div>
    <div class="mb-3">
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">tarif TTC</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tarif">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">tarif HT</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tarifHT">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
