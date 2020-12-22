<?php require "inc/top-header.php" ?>
<?php require "inc/header.php" ?>
<?php require "inc/navigation.php"; 

?>

<!-- HOME -->
<div id="home">
    <!-- container -->
    <div class="container">
        <!-- home wrap -->
        <div>
            <!-- home slick -->
            <div id="home-slick">
                <!-- banner -->
                <div class="banner banner-1">
                    <img src="<?php echo URLROOT; ?>public/img/reunion-02.png" alt="">
                    <div class="banner-caption text-center">
                        <h1>meeting room</h1>
                        <h3 class="white-color font-weak">Up to 50% Discount</h3>
                        <button class="primary-btn">booking Now</button>
                    </div>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="banner banner-1">
                    <img src="<?php echo URLROOT; ?>public/img/bureau-01.png" class="img-" alt="">
                    <div class="banner-caption">
                        <h1 class="primary-color">office room<br><span class="white-color font-weak">Up to 50% OFF</span>
                        </h1>
                        <button class="primary-btn">booking Now</button>
                    </div>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="banner banner-1">
                    <img src="<?php echo URLROOT; ?>public/img/formation-01.png" alt="">
                    <div class="banner-caption">
                        <h1 class="white-color">training room</h1>
                        <button class="primary-btn">booking Now</button>
                    </div>
                </div>
                <!-- /banner -->
            </div>
            <!-- /home slick -->
        </div>
        <!-- /home wrap -->
    </div>
    <!-- /container -->
</div>
<!-- /HOME -->


<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section-title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Latest Offers</h2>
                    <div class="pull-right">
                        <div class="product-slick-dots-1 custom-dots"></div>
                    </div>
                </div>
            </div>
            <!-- /section-title -->



            <!-- Product Slick -->
            <div class="col-md-12 col-sm-6 col-xs-6">
                <div class="row">
                    <div id="product-slick-1" class="product-slick">
                        <!-- Product Single -->
                        <?php foreach($data['last4Offers'] as $produit){ ?>  
                         <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span>New</span>

                                </div>
                                <ul class="product-countdown">
								    <li><span style="margin-bottom: -17px;"><img src="<?php echo URLROOT; ?>public/img/date.png" ></span></li>
                                    <li><span><?= $produit->date_depart ?></span></li>
									<li><span><?= $produit->date_arrivee ?></span></li>
									
                                </ul>
                                <a href="<?php echo URLROOT; ?>ProduitsDetails/produitdetail/<?= $produit->id_produit ?>"> <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                    view</button> </a>
                                <img src="<?php echo URLROOT."public/img/salle date/".$produit->titre.'/'.$produit->photo_1; ?>" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$<?= $produit->prix ?></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="<?php echo URLROOT; ?>ProduitsDetails/produitdetail/<?= $produit->id_produit ?>"><?= $produit->titre ?></a></h2>
                                <div class="product-btns">
                                <?php if(isset($_SESSION['user_id'])){  ?>
                                    <a href="#"><button class="main-btn icon-btn"><i class="fa fa-heart"></i></button></a>

                                    <a href="<?php echo URLROOT; ?>paniers/panier/<?= $produit->id_produit ?>"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                        Cart</button></a>
                                        <?php }else{ ?>
                                    <a href="<?php echo URLROOT; ?>Users/register/<?= $produit->id_produit ?>"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> log in to add to cart</button></a>
								<?php }  ?>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- /Product Single -->
                    </div>
                </div>
            </div>
            <!-- /Product Slick -->
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Picked For You</h2>
                </div>
            </div>
            <!-- section title -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <ul class="product-countdown">
						<li><span style="margin-bottom: -17px;"><img src="<?php echo URLROOT; ?>public/img/date.png" ></span></li>
                            <li><span>01/12/2020</span></li>
                            <li><span>01/12/2020</span></li>
                        </ul>
                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                        <img src="<?php echo URLROOT; ?>public/img/salle.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">$32.50</h3>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o empty"></i>
                        </div>
                        <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                        <div class="product-btns">
                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>

                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <ul class="product-countdown">
						<li><span style="margin-bottom: -17px;"><img src="<?php echo URLROOT; ?>public/img/date.png" ></span></li>
                            <li><span>01/12/2020</span></li>
                            <li><span>01/12/2020</span></li>
                        </ul>
                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                        <img src="<?php echo URLROOT; ?>public/img/salle.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">$32.50</h3>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o empty"></i>
                        </div>
                        <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                        <div class="product-btns">
                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>

                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <ul class="product-countdown">
						<li><span style="margin-bottom: -17px;"><img src="<?php echo URLROOT; ?>public/img/date.png" ></span></li>
                            <li><span>01/12/2020</span></li>
                            <li><span>01/12/2020</span></li>
                        </ul>
                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                        <img src="<?php echo URLROOT; ?>public/img/salle.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">$32.50</h3>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o empty"></i>
                        </div>
                        <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                        <div class="product-btns">
                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>

                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <ul class="product-countdown">
						<li><span style="margin-bottom: -17px;"><img src="<?php echo URLROOT; ?>public/img/date.png" ></span></li>
                            <li><span>01/12/2020</span></li>
                            <li><span>01/12/2020</span></li>
                        </ul>
                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                        <img src="<?php echo URLROOT; ?>public/img/salle.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">$32.50</h3>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o empty"></i>
                        </div>
                        <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                        <div class="product-btns">
                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                            
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
</div>
<!-- /container -->

</div>
<!-- /section -->








<?php require "inc/footer.php" ?>