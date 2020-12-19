<?php require APPROOT."/views/inc/top-header.php" ?>
<?php require APPROOT."/views/inc/header.php" ?>
<?php require APPROOT."/views/inc/navigation.php";

var_dump($_GET);

var_dump($_FILES);
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
                    <img src="<?php echo URLROOT; ?>public/users/<?=$_SESSION["user_id"]?>/<?=$data["getdata"][0]->photo?>" alt="" width="305px" height="380px">
                    <div id="editt">
                        <button type="button" class="main-btn" data-toggle="modal" data-target="#exampleModal"
                            data-whatever="@mdo"><i class="fa fa-edit" style="font-size:30px;width:275px;"></i></button>
                    </div>
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
                                    <form action="<?= URLROOT; ?>profiles/editprofile?$baba=aaa" method="POST">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">insert photo : </label>
                                            <input type="file" class="form-control" id="recipient-name" name="image">
                                            <p>PNG 600x275</p>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
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
                        <button type="button" class="main-btn" data-toggle="modal" data-target="#Modaleditprofil"
                            data-whatever="@fat"><i class="fa fa-edit d" style="font-size:24px;"></i></button>
                        <!-- modal of edit profile -->
                        <div class="modal fade" id="Modaleditprofil" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h2 class="modal-title" id="exampleModalLabel">change profile</h2>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= URLROOT; ?>profiles/editprofile" method="POST">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">First name : </label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="first_name" value="<?= $_SESSION['user_first_name']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Last name : </label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="last_name" value="<?= $_SESSION['user_last_name']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Pseudo : </label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="pseudo" value="<?= $_SESSION['user_pseudo']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Addresse : </label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="addresse" value="<?= $_SESSION['user_addresse']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Country : </label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="country" value="<?= $_SESSION['user_pays']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">city : </label>
                                                <input type="text" class="form-control" id="recipient-name" name="city"
                                                    value="<?= $_SESSION['user_ville']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Zip code : </label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="zip_code" value="<?= $_SESSION['user_zip_code']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">telephone : </label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="telephone" value="<?= $_SESSION['user_telephone']; ?>">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal of edit profile -->
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