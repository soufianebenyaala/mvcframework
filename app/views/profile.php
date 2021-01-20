<?php require APPROOT."/views/inc/top-header.php" ?>
<?php require APPROOT."/views/inc/header.php" ?>
<?php require APPROOT."/views/inc/navigation.php";
?>

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!--  Product Details -->
            <div class="product product-details clearfix">
                <div class="col-md-1"> </div>
                <div class="col-md-4">
                    <?php
                    $tab=$data['imageState'][0];
                   if($tab->state_of_photo == 1){ ?>
                    <img src="<?php echo URLROOT; ?>public/img/users/<?= $tab->photo; ?>" alt="" width="305px"
                        height="380px">
                    <?php }else{?>
                    <img src="<?php echo URLROOT; ?>public/img/users/default.jpg" alt="" width="305px" height="380px">
                    <?php }?>

                    <button type="button" class="main-btn" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@mdo"><i class="fa fa-edit" style="font-size:30px;width:275px;"></i></button>

                    <!-- modal of edit photo -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h2 class="modal-title" id="exampleModalLabel">change photo</h2>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= URLROOT; ?>profiles/editphotoprofile" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">insert photo : </label>
                                            <input type="file" class="form-control" id="recipient-name" name="image">
                                            <p>PNG 600x275</p>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">edit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- modal of edit photo -->
                </div>
                <div class="col-md-6">

                    <div class="pull-right">
                        <a href="<?= URLROOT; ?>profiles/editprofile">
                        <button type="submit" class="main-btn"><i class="fa fa-edit d" style="font-size:24px;"></i></button>
                    </a>
                    </div>
                    <?php 
                        foreach( $data['getdata'] as $tab){?>
                    <h2 class="product-name"><?= $tab->pseudo; ?></h2>
                    <div class="product-body">

                        <p style="font-size: 15pt;"><strong>First Name : </strong><?= $tab->first_name; ?></p>
                        <p style="font-size: 15pt;"><strong>Last Name : </strong><?= $tab->last_name; ?> </p>
                        <p style="font-size: 15pt;"><strong>Email : </strong> <?= $tab->email; ?></p>
                        <p style="font-size: 15pt;"><strong>Address : </strong> <?= $tab->addresse; ?></p>
                        <p style="font-size: 15pt;"><strong>City : </strong> <?= $tab->ville; ?> </p>
                        <p style="font-size: 15pt;"><strong>Country : </strong> <?= $tab->pays; ?> </p>
                        <p style="font-size: 15pt;"><strong>ZIP Code : </strong><?= $tab->zip_code; ?> </p>
                        <p style="font-size: 15pt;"><strong>Telephone : </strong> <?= $tab->telephone; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
</div>

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h3 class="title">Your Orders</h3>
                    </div>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th class="text-center"></th>
                                
                                <th class="text-center" >Price</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($data['produitcommande'])){
                                foreach ($data['produitcommande'] as $object) {
                                    foreach ($object as $tab) {   ?>
                            <tr>
                            <td class="thumb">
                                <img src="<?php echo URLROOT; ?>public/img/salle date/<?= $tab->titre ?>/<?= $tab->photo_1 ?>" alt="">
                            </td>
                                <td class="details">
                                    <a href="#"><?= $tab->titre ?></a>
                                    <ul>
                                        <li><span>CAPACITY : <?= $tab->capacite ?></span></li>
                                        <li><span>Departure : <?= $tab->date_depart ?> </span></li>
                                        <li><span> Arrival : <?= $tab->date_arrivee ?></span></li>
                                        <li><span>CITY : <?= $tab->ville ?></span></li>
                                    </ul>
                                </td>
                            
                                <td class="total text-center" ><strong class="primary-color">$<?= $tab->prix ?></strong></td>

                            </tr>
                            <?php }
                                }
                            } ?>
                            
                        </tbody>

                    </table>

                </div>

            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


<?php require APPROOT."/views/inc/footer.php" ?>