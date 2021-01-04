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
                    <form action="<?php echo URLROOT; ?>filterproducts/filterproduct/all" method="POST">
                        <input class="input search-input" type="text" name="searchsearch" placeholder="Enter your keyword" value="<?php if(!empty($data["searchsearch"])){echo $data["searchsearch"];} ?>">
                        <div id="result-search"></div>
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
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
                            <li><a href="<?php echo URLROOT; ?>profiles/profile"><i class="fa fa-user-o"></i> My
                                    Account</a></li>
                            <li><a href="<?php echo URLROOT; ?>Wishlists/wishlist"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                            <li><a href="<?php echo URLROOT; ?>users/logout"><i class="fa fa-unlock-alt"></i>Logout</a>
                            </li>
                            <?php }else{  ?>


                            <li><a href="<?php echo URLROOT; ?>users/login"><i class="fa fa-unlock-alt"></i> Login</a>
                            </li>
                            <li><a href="<?php echo URLROOT; ?>users/register"><i class="fa fa-user-plus"></i> Create An
                                    Account</a></li>
                            <?php }  ?>
                        </ul>
                    </li>
                    <!-- /Account -->
                    <?php if(isset($_SESSION['user_id'])){  ?>
                    <!-- Cart -->
                    
                    <li class="header-cart dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" >
                            <div class="header-btns-icon">
                            <a href="<?php echo URLROOT; ?>paniers/panier">
                                <i class="fa fa-shopping-cart"></i>
                                </a>
                                <?php if(isset($_SESSION['panier'])){  ?>
                                <span class="qty"><?= sizeof(explode('.',substr($_SESSION['panier'], 1)));?></span>
                                <?php } ?>
                            </div>
                        </a>
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
<script>
$(document).ready(function() {
    $('.search-input').keyup(function() {
        $('#result-search').html('');

        var search = $(this).val();
        var action = "search";
        var ur = "<?php echo URLROOT; ?>productsajax/filterproduct/aaa";

        if (search != "") {
            $.ajax({
                type: 'GET',
                url: ur,
                data: {
                    search: search,
                    action: action
                },
                success: function(data) {
                    if (data != "") {
                        $('#result-search').append(data);
                        console.log(search);
                    } else {
                        document.getElementById('result-search').innerHTML =
                            "<div>Aucun utilisateur</div>"
                    }
                }
            });

        }

    });

});
</script>