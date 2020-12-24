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
                        <h3 class="title">commande</h3>
                    </div>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th class="text-left">commande</th>
                                <th class="text-center">SUBTOTAL</th>
                                <th class="text-center">TVA</th>
                                <th class="text-center">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="thumb">
                               <?php
                                $total = 0;
                                foreach($data['getdata'] as $object){
                                     foreach($object as $tab){
                                    $total = $total + $tab->prix;
                                ?>
                                <h5><?= $tab->titre ?></h5>
                                <img src="<?php echo URLROOT; ?>public/img/salle date/<?= $tab->titre ?>/<?= $tab->photo_1 ?>" alt="">
                                <p></p>
                                <?php } }?>
                            </td>
                            <td class="text-center"><?= $total ?></td>
                            <td class="text-center">10%</td>
                            <td class="text-right total text-center"><strong class="primary-color">$<?= ($total*0.1)+$total ?></strong></td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="col-md-6">
                    <form action="<?= URLROOT ?>Checkouts/commande" method="POST">

                        <div class="payments-methods">
                            <div class="section-title">
                                <h4 class="title">Payments Methods</h4>
                            </div>
                                <h4>Paypal System</h4>
                                
                                    <div class="form-group">
                                        <div>
                                            <label for="Numéro de carte">Numéro de carte</label>
                                        </div>
                                        <input class="input" type="text" name="numero_carte" placeholder="Numéro de carte">
                                        <?php if(!empty($data['numero_carteError']))
                                        {echo "<div class='alert alert-danger' role='alert'>
                                        ".$data['numero_carteError']."
                                        </div>";}
                                        ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div>
                                            <label for="Date d'expiration">Date d'expiration</label>
                                        </div>
                                        <input class="input" type="date" name="date_expiration" placeholder="Date">
                                        <?php if(!empty($data['date_expiration']))
                                        {echo "<div class='alert alert-danger' role='alert'>
                                        ".$data['date_expiration']."
                                         </div>";}
                                           ?>
                                    </div>
                                  
                                    <div class="form-group">
                                        <div>
                                            <label for="Crypto">Crypto</label>
                                        </div>
                                        <input class="input" type="text" name="crypto" placeholder="4 chiffre">
                                        <?php if(!empty($data['cryptoError']))
                                         {echo "<div class='alert alert-danger' role='alert'>
                                        ".$data['cryptoError']."
                                        </div>";}
                                         ?>
                                    </div>
                                    
                                
                            </div>
                        



                        <div>
                            <button class="primary-btn">Commande</button>
                        </div>
                    </form>
                    </div>
                </div>

            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
<?php require "inc/footer.php" ?>