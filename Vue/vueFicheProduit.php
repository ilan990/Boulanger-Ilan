<?php foreach($produit as $produit):
?>
<div class="card mb-3" >
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="<?= $produit['image'];?>" class="card-img" alt="Product image">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $produit['nom']; ?></h5>
                <p class="card-text"><?= $produit['description']; ?></p>
                <p class="card-text"><small class="text-muted"><?= $produit['prix']; ?>€</small></p>
                <button type="button" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
</div>
<?php
endforeach
?>