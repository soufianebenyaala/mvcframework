<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav show-on-click">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    <li><a href="#">office</a></li>
                    <li><a href="#">meeting</a></li>
                    <li><a href="#">training</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="<?php echo URLROOT; ?>index">Home</a></li>
                    <li><a href="#">Booking</a></li>
                    <?php if(isset($_SESSION['user_id'])){  ?>
                    <li><a href="<?php echo URLROOT; ?>profiles/profile">Profil</a></li>
                    <li><a href="#">Cart</a></li>
                    <?php } ?>

                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->

