<!-- HEADER -->
<header>

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="<?php echo URLROOT; ?>index">
                        <img src="<?php echo URLROOT; ?>img/logo.png" alt="">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                    <form>
                        <input class="input search-input" type="text" placeholder="Enter your keyword">
                        <select class="input search-categories">
                            <option value="0">All Categories</option>
                            <option value="1">office</option>
                            <option value="1">meeting</option>
                            <option value="1">training</option>
                        </select>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- /Search -->
            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Account -->
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                        </div>
                        <?php if(isset($_SESSION['user_id'])){  ?>
                       
							<a href="<?php echo URLROOT; ?>users/logout" class="text-uppercase">Logout</a>
                        <?php }else{  ?>
							<a href="<?php echo URLROOT; ?>users/login" class="text-uppercase">Login</a> / <a
                            href="<?php echo URLROOT; ?>users/register" class="text-uppercase">Join</a>
                        <?php }  ?>
                        <ul class="custom-menu">
                        <?php if(isset($_SESSION['user_id'])){  ?>
                       <li><a href="<?php echo URLROOT; ?>profiles/profile"><i class="fa fa-user-o"></i> My Account</a></li>
                       <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                       <li><a href="<?php echo URLROOT; ?>users/logout"><i class="fa fa-unlock-alt"></i>Logout</a></li>
                   <?php }else{  ?>
                    
                     
                            <li><a href="<?php echo URLROOT; ?>users/login"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            <li><a href="<?php echo URLROOT; ?>users/register"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                            <?php }  ?>    
                        </ul>
                    </li>
                    <!-- /Account -->
                    <?php if(isset($_SESSION['user_id'])){  ?>
                    <!-- Cart -->
                    <li class="header-cart dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="qty">3</span>
                            </div>
                        </a>
                        <div class="custom-menu">
                            <div id="shopping-cart">
                                <div class="shopping-cart-list">
                                    <div class="product product-widget">
                                        <div class="product-thumb">
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                        </div>
                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                    </div>
                                    <div class="product product-widget">
                                        <div class="product-thumb">
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                        </div>
                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="shopping-cart-btns">
                                <a href="<?php echo URLROOT; ?>paniers/panier"><button class="main-btn">View Cart</button></a>
                                    <button class="primary-btn">Checkout <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- /Cart -->
                    <?php }  ?>   
                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->