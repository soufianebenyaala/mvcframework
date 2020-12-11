<?php require "inc/top-header.php" ?>
<?php require "inc/header.php" ?>
<?php require "inc/navigation.php" ?>

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Shop by:</h3>
                    <ul class="filter-list">
                        <li><span class="text-uppercase">CITY:</span></li>
                        <li><a href="#">Djerba</a></li>
                        <li><a href="#">Nabeul</a></li>
                    </ul>

                    <ul class="filter-list">
                        <li><span class="text-uppercase">CAPACITY:</span></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#">200</a></li>
                    </ul>

                    <ul class="filter-list">
                        <li><span class="text-uppercase">Price:</span></li>
                        <li><a href="#">MIN: $20.00</a></li>
                        <li><a href="#">MAX: $120.00</a></li>
                    </ul>

                    <ul class="filter-list">
                        <li><span class="text-uppercase">Departure :</span></li>
                        <li><a href="#"> 20/08/2020</a></li>
                    </ul>

                    <ul class="filter-list">
                        <li><span class="text-uppercase">Arrival :</span></li>
                        <li><a href="#">30/09/2020</a></li>
                    </ul>

                    <ul class="filter-list">
                        <li><span class="text-uppercase">CATEGORY :</span></li>
                        <li><a href="#">Meeting</a></li>
                    </ul>

                    <button class="primary-btn">Clear All</button>
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter by Price</h3>
                    <div id="price-slider"></div>
                </div>
                <!-- aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter By Category :</h3>
                    <ul class="list-links">
                        <li><a href="#">Meeting</a></li>
                        <li><a href="#">office</a></li>
                        <li><a href="#">Training</a></li>
                    </ul>
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter By Capacity:</h3>
                    <input class="input" type="number" placeholder="none">
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter by City</h3>
                    <div class="page-filter">
                        <select class="input">
                            <option value="0">Djerba</option>
                            <option value="1">Nabeul</option>
                            <option value="2">Sfax</option>
                        </select>
                    </div>
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter by Date</h3>
                    <ul class="list-links">
                        <li><b>Arrival date : </b></li>
                        <li> <input type="date" class="input"> </li><br>
                        <li><b>Departure date :</b> </li>
                        <li><input type="date" class="input"> </li>
                    </ul>
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Top Rated Product</h3>
                    <!-- widget product -->
                    <div class="product product-widget">
                        <div class="product-thumb">
                            <img src="img/thumb-product1.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <h3 class="product-price">$32.50</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /widget product -->

                    <!-- widget product -->
                    <div class="product product-widget">
                        <div class="product-thumb">
                            <img src="img/thumb-product1.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <h3 class="product-price">$32.50</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /widget product -->
                </div>
                <!-- /aside widget -->
            </div>
            <!-- /ASIDE -->

            <!-- MAIN -->
            <div id="main" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="pull-left">
                        <div class="sort-filter">
                            <span class="text-uppercase">Sort By:</span>
                            <select class="input">
                                <option value="0">Position</option>
                                <option value="0">Price</option>
                                <option value="0">Rating</option>
                            </select>

                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="page-filter">
                            <span class="text-uppercase">Show:</span>
                            <select class="input">
                                <option value="0">9</option>
                                <option value="1">18</option>
                                <option value="2">27</option>
                            </select>
                        </div>
                        <ul class="store-pages">
                            <li><span class="text-uppercase">Page:</span></li>
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /store top filter -->

                <!-- STORE -->
                <div id="store">
                    <!-- row -->
                    <div class="row">
                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <ul class="product-countdown">
                                        <li><span style="margin-bottom: -17px;"><img src="img/date.png"></span></li>
                                        <li><span>01/12/2020</span></li>
                                        <li><span>01/12/2020</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                        view</button>
                                    <img src="img/salle.png" alt="">
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

                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->

                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <ul class="product-countdown">
                                        <li><span style="margin-bottom: -17px;"><img src="img/date.png"></span></li>
                                        <li><span>01/12/2020</span></li>
                                        <li><span>01/12/2020</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                        view</button>
                                    <img src="img/salle.png" alt="">
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

                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->


                        <div class="clearfix visible-sm visible-xs"></div>
                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <ul class="product-countdown">
                                        <li><span style="margin-bottom: -17px;"><img src="img/date.png"></span></li>
                                        <li><span>01/12/2020</span></li>
                                        <li><span>01/12/2020</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                        view</button>
                                    <img src="img/salle.png" alt="">
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

                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->

                        <div class="clearfix visible-md visible-lg"></div>

                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <ul class="product-countdown">
                                        <li><span style="margin-bottom: -17px;"><img src="img/date.png"></span></li>
                                        <li><span>01/12/2020</span></li>
                                        <li><span>01/12/2020</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                        view</button>
                                    <img src="img/salle.png" alt="">
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

                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->


                        <div class="clearfix visible-sm visible-xs"></div>

                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <ul class="product-countdown">
                                        <li><span style="margin-bottom: -17px;"><img src="img/date.png"></span></li>
                                        <li><span>01/12/2020</span></li>
                                        <li><span>01/12/2020</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                        view</button>
                                    <img src="img/salle.png" alt="">
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

                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->


                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <ul class="product-countdown">
                                        <li><span style="margin-bottom: -17px;"><img src="img/date.png"></span></li>
                                        <li><span>01/12/2020</span></li>
                                        <li><span>01/12/2020</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                        view</button>
                                    <img src="img/salle.png" alt="">
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

                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->


                        <div class="clearfix visible-md visible-lg visible-sm visible-xs"></div>

                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <ul class="product-countdown">
                                        <li><span style="margin-bottom: -17px;"><img src="img/date.png"></span></li>
                                        <li><span>01/12/2020</span></li>
                                        <li><span>01/12/2020</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                        view</button>
                                    <img src="img/salle.png" alt="">
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

                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->


                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <ul class="product-countdown">
                                        <li><span style="margin-bottom: -17px;"><img src="img/date.png"></span></li>
                                        <li><span>01/12/2020</span></li>
                                        <li><span>01/12/2020</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                        view</button>
                                    <img src="img/salle.png" alt="">
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

                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->


                        <div class="clearfix visible-sm visible-xs"></div>

                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <ul class="product-countdown">
                                        <li><span style="margin-bottom: -17px;"><img src="img/date.png"></span></li>
                                        <li><span>01/12/2020</span></li>
                                        <li><span>01/12/2020</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                                        view</button>
                                    <img src="img/salle.png" alt="">
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

                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->

                    </div>
                    <!-- /row -->
                </div>
                <!-- /STORE -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <div class="pull-left">
                        <div class="sort-filter">
                            <span class="text-uppercase">Sort By:</span>
                            <select class="input">
                                <option value="0">Position</option>
                                <option value="0">Price</option>
                                <option value="0">Rating</option>
                            </select>

                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="page-filter">
                            <span class="text-uppercase">Show:</span>
                            <select class="input">
                                <option value="0">9</option>
                                <option value="1">18</option>
                                <option value="2">27</option>
                            </select>
                        </div>
                        <ul class="store-pages">
                            <li><span class="text-uppercase">Page:</span></li>
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /MAIN -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<?php require "inc/footer.php" ?>