<?php require "inc/top-header.php" ?>
<?php require "inc/header.php" ?>
<?php require "inc/navigation.php";

?>

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h3 class="title">Order Review</h3>
                    </div>
                    <?php if(isset($_SESSION['panier'])){
                        if($_SESSION['panier'] != "."){?>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>detail</th>
                                <th class="text-center"></th>
                                <th class="text-center"></th>
                                <th class="text-center">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $total = 0;
                         foreach($data as $object){ 
                                foreach($object as $tab){
                            ?>
                            <tr>
                                <td class="thumb"><img
                                        src="<?php echo URLROOT; ?>public/img/salle date/<?= $tab->titre ?>/<?= $tab->photo_1 ?>"
                                        alt=""></td>
                                <td class="details">
                                    <a href="#"><?= $tab->titre ?></a>
                                    <ul>
                                        <li><span>CAPACITY : <?= $tab->capacite ?></span></li>
                                        <li><span>Departure : <?= $tab->date_depart ?> </span></li>
                                        <li><span> Arrival : <?= $tab->date_arrivee ?></span></li>
                                        <li><span>CITY : <?= $tab->ville ?></span></li>
                                    </ul>
                                </td>
                                <td></td>
                                <td class="text-center"> <a
                                        href="<?= URLROOT ?>Paniers/deleteProduitAuPanier/<?= $tab->id_produit ?>"><button
                                            class="main-btn icon-btn"><i class="fa fa-close"></i></button></td></a>
                                <td class="text-right total text-center"><strong
                                        class="primary-color">$<?= $tab->prix ?></strong></td>


                            </tr>
                            <?php 
                        $total = $total + $tab->prix;
                        } }?>

                        </tbody>

                        <form action="<?= URLROOT ?>Checkouts/checkout" method="POST">
                            <tfoot>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>SUBTOTAL</th>
                                    <th colspan="2" class="sub-total">$<?= $total ?></th>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>TVA</th>
                                    <td colspan="2">10%</td>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>TOTAL</th>
                                    <th colspan="2" class="total">$<?= ($total*0.1)+$total ?></th>
                                </tr>
                            </tfoot>
                    </table>

                    <div class="pull-right">
                        <button type="submit" class="primary-btn">Place Order</button>
                    </div>
                    </form>
                    <?php }else{?>
                        <div class="text-center">
                        <img src="<?php echo URLROOT; ?>public/img/panier.jpg" style="width: 400px;height: 400px;" class="image-center"> 
                        <h3 class="text-center">panier est vide !</h3>  
                        <a href="<?php echo URLROOT; ?>" class="center"><button class="primary-btn add-to-cart">COMMENCEZ VOS ACHATS</button></a>
                        </div>
                        <?php }}else{?>
                        <div class="text-center">
                        <img src="<?php echo URLROOT; ?>public/img/panier.jpg" style="width: 400px;height: 400px;" class="image-center"> 
                        <h3 class="text-center">panier est vide !</h3>  
                        <a href="<?php echo URLROOT; ?>" class="center"><button class="primary-btn add-to-cart">COMMENCEZ VOS ACHATS</button></a>
                        </div>
                    <?php }?>

                </div>

            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
<?php require "inc/footer.php" ?>