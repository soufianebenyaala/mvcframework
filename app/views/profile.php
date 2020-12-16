<?php require APPROOT."/views/inc/top-header.php" ?>
<?php require APPROOT."/views/inc/header.php" ?>
<?php require APPROOT."/views/inc/navigation.php" ?>

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
                    <img src="<?php echo URLROOT; ?>public/img/profil.jpg" alt="" width="305px" height="380px">
                </div>
                <div class="col-md-6">

                    <div class="pull-right">
                        <button class="main-btn"><i class="fa fa-edit" style="font-size:24px;"></i></button>
                    </div>

                    <h2 class="product-name"><?= $data['pseudo']; ?></h2>
                    <div class="product-body">
                        <p style="font-size: 15pt;"><strong>First Name : </strong><?php echo $data['first_name']; ?></p>
                        <p style="font-size: 15pt;"><strong>Last Name : </strong><?php echo $data['last_name']; ?> </p>
                        <p style="font-size: 15pt;"><strong>Email : </strong> <?php echo $data['email']; ?></p>
                        <p style="font-size: 15pt;"><strong>Address : </strong> <?php echo $data['addresse']; ?></p>
                        <p style="font-size: 15pt;"><strong>City : </strong> <?php echo $data['ville']; ?> </p>
                        <p style="font-size: 15pt;"><strong>Country : </strong> <?php echo $data['pays']; ?> </p>
                        <p style="font-size: 15pt;"><strong>ZIP Code : </strong><?php echo $data['zip_code']; ?> </p>
                        <p style="font-size: 15pt;"><strong>Telephone : </strong> <?php echo $data['telephone']; ?></p>

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
                                <th></th>
                                <th class="text-center">Price</th>
                                <th class="text-center">date</th>
                                <th class="text-center">numero de suivi</th>
                                <th class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="thumb"><img src="<?php echo URLROOT; ?>img/thumb-product1.jpg" alt=""></td>
                                <td class="details">
                                    <a href="#">Product Name Goes Here</a>
                                    <ul>
                                        <li><span>CAPACITY : 70</span></li>
                                        <li><span>Departure : 20/08/2020 </span></li>
                                        <li><span> Arrival : 25/08/2020</span></li>
                                        <li><span>CITY : Djerba</span></li>
                                    </ul>
                                </td>
                                <td class="price text-center"><strong>$32.50</strong><br></td>
                                <td class="qty text-center">
                                    <p>25/08/2020</p>
                                </td>
                                <td class="total text-center"><strong class="primary-color">778222</strong></td>

                            </tr>
                            <tr>
                                <td class="thumb"><img src="<?php echo URLROOT; ?>img/thumb-product1.jpg" alt=""></td>
                                <td class="details">
                                    <a href="#">Product Name Goes Here</a>
                                    <ul>
                                        <li><span>CAPACITY : 70</span></li>
                                        <li><span>Departure : 20/08/2020 </span></li>
                                        <li><span> Arrival : 25/08/2020</span></li>
                                        <li><span>CITY : Djerba</span></li>
                                    </ul>
                                </td>
                                <td class="price text-center"><strong>$32.50</strong></td>
                                <td class="qty text-center">
                                    <p>25/08/2020</p>
                                </td>
                                <td class="total text-center"><strong class="primary-color">4535</strong></td>

                            </tr>
                            <tr>
                                <td class="thumb"><img src="<?php echo URLROOT; ?>img/thumb-product1.jpg" alt=""></td>
                                <td class="details">
                                    <a href="#">Product Name Goes Here</a>
                                    <ul>
                                        <li><span>CAPACITY : 70</span></li>
                                        <li><span>Departure : 20/08/2020 </span></li>
                                        <li><span> Arrival : 25/08/2020</span></li>
                                        <li><span>CITY : Djerba</span></li>
                                    </ul>
                                </td>
                                <td class="price text-center"><strong>$32.50</strong></td>
                                <td class="qty text-center">
                                    <p>25/08/2020</p>
                                </td>
                                <td class="total text-center"><strong class="primary-color">42342</strong></td>

                            </tr>
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