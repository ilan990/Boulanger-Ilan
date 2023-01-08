<?php
$this->titre = "Boulanger'Ilan - Fiche Produit";
foreach($produit as $produit):
?>
<main id="cart" ">
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
                    <button type="button" onclick="addToCart(<?=$produit['id']?>,'<?=$produit['nom']?>','<?=$produit['description']?>',<?=$produit['prix']?>,'<?=$produit['image']?>')" class="btn btn-primary">ajouter au panier</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
endforeach
?>
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

</script>
