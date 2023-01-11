<?php
$this->titre = "Boulanger'Ilan - Panier";
$total = 0;
?>
<main id="cart" style="max-width:960px">
  <h1>Panier</h1>
  <div class="container-fluid">
    <div class="row align-items-start">
      <div class="col-12 col-sm-8 items ">
        <!--1-->
          <?php
          if (isset($_SESSION['cart'])){
          foreach ($_SESSION['cart'] as $key => $produit){
              if ($key != 'quantite' ){
                  if($produit['quantite'] != 0){
                      $total += $produit['prix'] * $produit['quantite'];

          ?>
        <div class="cartItem row align-items-start paiement">
          <div class="col-3 mb-2">
            <img class="w-100" src="<?=$produit['img']?>" alt="art image">
          </div>
          <div class="col-5 mb-2">
            <h6 class=""><?php echo $produit['nom'];?></h6>
            <p class="pl-1 mb-0"><?php echo $produit['desc'];?></p>

          </div>
          <div class="col-2">
            <p class="cartItemQuantity p-1 text-center"><?php echo $produit['quantite'];?></p>
          </div>
          <div class="col-2">
            <p id="cartItem1Price"><?php echo number_format($produit['prix'], 2);?>€</p>
          </div>
        </div>
        <hr class="paiement">
        <?php }}}}?>
        <!--fin de 1-->
      </div>
      <div class="col-12 col-sm-4 p-3 proceed form">
        <div class="row m-0">
          <div class="col-sm-8 p-0">
            <h6>Subtotal</h6>
          </div>
          <div class="col-sm-4 p-0">
            <p id="subtotal"><?php echo number_format($total, 2); ?>€</p>
          </div>
        </div>
          <div class="row m-0">
              <div class="col-sm-8 p-0 ">
                  <h6>Frais de service</h6>
              </div>
              <div class="col-sm-4 p-0">
                  <p id="tax"><?php echo number_format($total*0.1, 2); ?>€</p>
              </div>
          </div>
        <div class="row m-0">
          <div class="col-sm-8 p-0 ">
            <h6>Livraison</h6>
          </div>
          <div class="col-sm-4 p-0">
            <p id="tax">3.99€</p>
          </div>
        </div>

        <hr>
        <div class="row mx-0 mb-2">
          <div class="col-sm-8 p-0 d-inline">
            <h5>Total</h5>
          </div>
          <div class="col-sm-4 p-0">
            <p id="total"><?php echo number_format($total+3.99+$total*0.1, 2); ?>€</p>
          </div>
        </div>
        <a href="#"><button onclick="paiement()" id="btn-checkout" class="shopnow"><span>Paiement</span></button></a>
      </div>
    </div>
  </div>
  </div>
</main>
<?php if (!isset($_SESSION['cart']) || sizeof($_SESSION['cart']) <= 4){?>
    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
<?php } ?>
<script> function paiement(){

            // $('.affiche'+articleId).remove();
            $.ajax({
                url: 'Fonctions/remove-all.php',
                type: 'POST',
                data: {},
                success: function (response) {

                    $('.count').text(response.quantiteMax)


                }
            });

            $('.paiement').remove();
            $('.count').text("0");
            $('#subtotal').text("0.00€");
            $('#tax').text("0.00€");
            $('#total').text("3.99€");

            // window.location.reload();


            Swal.fire({
                icon: 'success',
            })
        setTimeout(reload,1500)


    }
    function reload(){
        window.location.reload();
    }
</script>
