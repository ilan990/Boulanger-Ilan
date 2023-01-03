
<section style="background-color: #eee;">

    <div class="container py-5">
        <div class="row justify-content-center">
            <?php foreach ($produits as $produit): ?>
                <div class="col-md-7 mt-5 col-lg-6 col-xl-3 mh-50 <?= $produit['categorie']; ?>">
                    <div class="card text-black">
                        <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
                        <img src="<?= $produit['image']; ?>"
                             class="card-img-top" alt="Apple Computer" />
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title"><?= $produit['nom']; ?></h5>
                                <p class="text-muted mb-4"><?= $produit['description']; ?></p>
                            </div>

                            <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                <span>Total</span><span><?= $produit['prix']; ?>€</span>
                            </div>
                            <div>
                                <a href="<?= "index.php?action=produitId&id=".$produit['id']?>" class="btn btn-primary">Voir le produit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

