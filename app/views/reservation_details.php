<?php require "inc/top-header.php" ?>
<?php require "inc/header.php" ?>
<?php require "inc/navigation.php";?>

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
				<?php foreach($data['produit_detail'] as $produit_detail){ ?>  
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="<?php echo URLROOT; ?>public/img/salle date/<?= $produit_detail->titre ?>/<?= $produit_detail->photo_1 ?>" alt="">
							</div>
							<div class="product-view">
								<img src="<?php echo URLROOT; ?>public/img/salle date/<?= $produit_detail->titre ?>/<?= $produit_detail->photo_2 ?>" alt="">
                            </div>
                            <div class="product-view">
								<img src="<?php echo URLROOT; ?>public/img/salle date/<?= $produit_detail->titre ?>/<?= $produit_detail->photo_3 ?>" alt="">
							</div>
							<div class="product-view">
								<img src="<?php echo URLROOT; ?>public/img/salle date/<?= $produit_detail->titre ?>/<?= $produit_detail->photo_4 ?>" alt="">
							</div>
						</div>
						<div id="product-view">
							<div class="product-view">
								<img src="<?php echo URLROOT; ?>public/img/salle date/<?= $produit_detail->titre ?>/<?= $produit_detail->photo_1 ?>" alt="">
                            </div>
                            <div class="product-view">
								<img src="<?php echo URLROOT; ?>public/img/salle date/<?= $produit_detail->titre ?>/<?= $produit_detail->photo_2 ?>" alt="">
                            </div>
                            <div class="product-view">
								<img src="<?php echo URLROOT; ?>public/img/salle date/<?= $produit_detail->titre ?>/<?= $produit_detail->photo_3 ?>" alt="">
							</div>
							<div class="product-view">
								<img src="<?php echo URLROOT; ?>public/img/salle date/<?= $produit_detail->titre ?>/<?= $produit_detail->photo_4 ?>" alt="">
							</div>

						</div>
					</div>
					<div class="col-md-6">
                    <h2 class="product-name"><?= $produit_detail->titre ?></h2>
                            <div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
								<a href="#">3 Review(s) / Add Review</a>
							</div>
						<div class="product-body">

							<h2 class="product-price">$<?= $produit_detail->prix ?></h2>
                            <p><strong>Availability : </strong> <?= $produit_detail->etat ?></p>
                            <p><strong>Arrival : </strong> <?= $produit_detail->date_arrivee ?>  	&nbsp &nbsp	&nbsp <strong> Departure : </strong> <?= $produit_detail->date_depart ?></p>
                            <p><strong>Country : </strong> <?= $produit_detail->pays ?></p>
                            <p><strong>City : </strong><?= $produit_detail->ville ?></p>
                            <p><strong>Adresse : </strong> <?= $produit_detail->addresse ?></p>
				
							<div class="product-options">
								<ul class="size-option">
									<li><span class="text-uppercase">capacity:</span></li>
									<li class="active"><p><b><?= $produit_detail->capacite ?></b></p></li>
							
								</ul>
								<ul class="color-option">
									<li><span class="text-uppercase">category:</span></li>
									<li><p><b><?= $produit_detail->categorie ?></b></a></li>
								</ul>
							</div>
							<div class="product-btns">
							<?php if(isset($_SESSION['user_id'])){ 
								if(verifyIfIDexist($produit_detail->id_produit)){ ?>
									<button class="primary-btn add-to-cart">This product is Added to cart</button></a>
								<?php }else{?>
									<a href="<?php echo URLROOT; ?>Paniers/addProduitAuPanier/<?= $produit_detail->id_produit ?>"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
								<?php }}else{ ?>
									<a href="<?php echo URLROOT; ?>Users/register"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> log in to add to cart</button></a>
								<?php }  ?>
								<div class="pull-right">
								<?php if(isset($_SESSION['user_id'])){  ?>
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<?php }  ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Reviews (3)</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<p><?= $produit_detail->description ?></p>
								</div>
								<div id="tab2" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">
												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
															irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													</div>
												</div>

												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
															irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													</div>
												</div>

												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
															irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													</div>
												</div>

												<ul class="reviews-pages">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6">
											<h4 class="text-uppercase">Write Your Review</h4>
											<p>Your email address will not be published.</p>
											<form class="review-form">
												<div class="form-group">
													<input class="input" type="text" placeholder="Your Name" />
												</div>
												<div class="form-group">
													<input class="input" type="email" placeholder="Email Address" />
												</div>
												<div class="form-group">
													<textarea class="input" placeholder="Your review"></textarea>
												</div>
												<div class="form-group">
													<div class="input-rating">
														<strong class="text-uppercase">Your Rating: </strong>
														<div class="stars">
															<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
															<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
															<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
															<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
															<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
														</div>
													</div>
												</div>
												<button class="primary-btn">Submit</button>
											</form>
										</div>
									</div>



								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<!-- /Product Details -->
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




<?php require "inc/footer.php";
    //verify if produit already add 
    function verifyIfIDexist($id){
		if(isset($_SESSION['panier'])){
        $tab =explode('.',substr($_SESSION['panier'], 1));
        foreach($tab as $ch){
            if($ch == $id){
                return true;
            }
		}return false;
	}return false;
    }
?>