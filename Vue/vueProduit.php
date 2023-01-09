<?php $this->titre = "Boulanger'Ilan - Produit"; ?>
<section style="background-color: #eee;">

    <div class="container py-5 ">
        <div class="row justify-content-center mb-5">
            <?php foreach ($produits as $key => $produit): ?>
                <div class="col-md-7 mt-5 col-lg-6 col-xl-3 mh-50 <?= $produit['categorie']; ?>">
                    <div class="card text-black">
                        <i class="fab fa-apple fa-lg "></i>
                        <img src="<?= $produit['image']; ?>"
                             class="card-img-top" alt="Apple Computer" />
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title"><?= $produit['nom']; ?></h5>
                                <p class="text-muted mb-4"><?= $produit['description']; ?></p>
                            </div>

                            <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                <span>Total</span><span><?= number_format($produit['prix'], 2); ?>€</span>
                            </div>
                            <div class="d-flex justify-content-between pt-2">
                                <div>
                                    <a href="<?= "index.php?action=produitId&id=".$produit['id']?>" class="btn " style="color: white; background-color: #212529c9; border-color: #1a1e21;">Voir le produit</a>

                                </div>
                                <?php
                                if(!empty($_SESSION)){ ?>
                                    <div>
                                        <button onclick="removeToCart(<?=$produit['id']?>)" class="btn " style="color: white; background-color: #212529c9; border-color: #1a1e21;">-</button>
                                        <button class="btn  produit<?= $key+1 ?>" style="color: white; background-color: #212529c9; border-color: #1a1e21;" disabled>
                                            <?php
                                            if(isset($_SESSION['cart'][$produit['id']]['quantite'])){
                                                echo $_SESSION['cart'][$produit['id']]['quantite'];
                                            }else{
                                                echo '0';
                                            }
                                            ?></button>
                                        <button onclick="addToCart(<?=$produit['id']?>,'<?=$produit['nom']?>','<?=$produit['description']?>',<?=$produit['prix']?>,'<?=$produit['image']?>')" class="btn " style="color: white; background-color: #212529c9; border-color: #1a1e21;">+</button>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<script>

    function addToCart(articleId,nom,desc,prix,img){
        $.ajax({
            url: 'Fonctions/add-produit.php',
            type: 'POST',
            data: {
                articleId: articleId,
                nom : nom,
                desc : desc,
                prix : prix,
                img: img,
            },
            success: function(response){
                response=JSON.parse(response)

                 $('.produit'+articleId).text(response.quantiteProduit);
                 $('.count').text(response.quantiteMax)


            }
        });
    }
    function removeToCart(articleId){
        $.ajax({
            url: 'Fonctions/remove-produit.php',
            type: 'POST',
            data: {
                articleId: articleId,

            },
            success: function(response){
                response=JSON.parse(response)
                $('.produit'+articleId).text(response.quantiteProduit);
                $('.count').text(response.quantiteMax)

            }
        });
    }
</script>

