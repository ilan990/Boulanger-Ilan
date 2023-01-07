<?php
$total = 0;
?>
<main id="cart" style="max-width:960px">
  <h1>Panier</h1>
  <div class="container-fluid">
    <div class="row align-items-start">
      <div class="col-12 col-sm-8 items">
        <!--1-->
          <?php
          if (isset($_SESSION['cart'])){
          foreach ($_SESSION['cart'] as $key => $produit){
              if ($key != 'quantite' ){
                  if($produit['quantite'] != 0){
                      $total += $produit['prix'] * $produit['quantite'];

          ?>
        <div class="cartItem row align-items-start">
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
            <p id="cartItem1Price"><?php echo $produit['prix'];?>0€</p>
          </div>
        </div>
        <hr>
        <?php }}}}?>
        <!--fin de 1-->
      </div>
      <div class="col-12 col-sm-4 p-3 proceed form">
        <div class="row m-0">
          <div class="col-sm-8 p-0">
            <h6>Subtotal</h6>
          </div>
          <div class="col-sm-4 p-0">
            <p id="subtotal"><?php echo $total; ?>0€</p>
          </div>
        </div>
          <div class="row m-0">
              <div class="col-sm-8 p-0 ">
                  <h6>Frais de service</h6>
              </div>
              <div class="col-sm-4 p-0">
                  <p id="tax"><?php echo $total*0.1; ?>€</p>
              </div>
          </div>
        <div class="row m-0">
          <div class="col-sm-8 p-0 ">
            <h6>Livraison</h6>
          </div>
          <div class="col-sm-4 p-0">
            <p id="tax">4.00€</p>
          </div>
        </div>

        <hr>
        <div class="row mx-0 mb-2">
          <div class="col-sm-8 p-0 d-inline">
            <h5>Total</h5>
          </div>
          <div class="col-sm-4 p-0">
            <p id="total"><?php echo $total+4+$total*0.1 ?>€</p>
          </div>
        </div>
        <a href="#"><button onclick="paiement()" id="btn-checkout" class="shopnow"><span>Paiement</span></button></a>
      </div>
    </div>
  </div>
  </div>
</main>
<footer class="container">
</footer>
<script> function paiement(){
        Swal.fire({
                icon: 'success',
             })
    }</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>