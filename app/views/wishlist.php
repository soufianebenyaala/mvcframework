<?php require APPROOT."/views/inc/top-header.php" ?>
<?php require APPROOT."/views/inc/header.php" ?>
<?php require APPROOT."/views/inc/navigation.php" ?>


<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <?php if(isset($_SESSION['user_id']) ){  ?>
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Wish List</h2>
                </div>
            </div>
            <!-- section title -->
            <?php foreach($data as $tab){ ?>
            <?php foreach($tab as $produit){ ?>
            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <ul class="product-countdown">
                            <li><span style="margin-bottom: -17px;"><img
                                        src="<?php echo URLROOT; ?>public/img/date.png"></span></li>
                            <li><span><?= $produit->date_depart ?></span></li>
                            <li><span><?= $produit->date_arrivee ?></span></li>
                        </ul>
                        <a href="<?php echo URLROOT; ?>ProduitsDetails/produitdetail/<?= $produit->id_produit ?>">
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                view</button> </a>
                        <img src="<?php echo URLROOT."public/img/salle date/".$produit->titre.'/'.$produit->photo_1; ?>"
                            alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">$32.50</h3>
                        <div class="product-rating">
                            <i class="fa fa-star<?php  if($produit->avis == 0){echo '-o empty';}?>"></i>
                            <i
                                class="fa fa-star<?php  if($produit->avis == 0 OR $produit->avis == 1){echo '-o empty';}?>"></i>
                            <i
                                class="fa fa-star<?php  if($produit->avis == 0 OR $produit->avis == 1 OR $produit->avis == 2 ){echo '-o empty';}?>"></i>
                            <i
                                class="fa fa-star<?php  if($produit->avis == 0 OR $produit->avis == 1 OR $produit->avis == 2 OR $produit->avis == 3 ){echo '-o empty';} ?>"></i>
                            <i
                                class="fa fa-star<?php  if($produit->avis == 0 OR $produit->avis == 1 OR $produit->avis == 2 OR $produit->avis == 3  OR $produit->avis == 4 ){echo '-o empty';}?>"></i>
                        </div>
                        <h2 class="product-name"><a href="#"><?= $produit->titre ?></a></h2>
                        <div class="product-btns">

                            <a href="<?php echo URLROOT; ?>paniers/panier/<?= $produit->id_produit ?>"><button
                                    class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                    Cart</button></a>
                            <a href="<?= URLROOT ?>Wishlists/deleteWish/<?= $produit->id_produit ?>"><button
                                    class="main-btn icon-btn"><i class="fa fa-close"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
            <!-- /Product Single -->
        </div>
        <!-- /row -->
        <?php }  ?>
    </div>
    <!-- /container -->
</div>
<!-- /section -->


<?php require APPROOT."/views/inc/footer.php" ?>