<?php require APPROOT.'/views/inc/top-header.php' ?>
<?php require APPROOT."/views/inc/header.php" ?>
<?php require APPROOT."/views/inc/navigation.php" ?>

<div id="connexion11">
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form id="checkout-form" class="clearfix" action="<?php echo URLROOT; ?>users/login" method="POST">
                    <div class="col-md-8">
                        <div class="billing-details">

                            <div class="section-title">
                                <h2 class="title">CONNEXION</h2>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="Email">Email</label>
                                </div>
                                <input class="input" type="email" name="email" placeholder="Email">
                                <?php 
                                  if(!empty($data['emailError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['emailError']."
                                </div>";}
                                ?>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="Enter Your Password">Enter Your Password</label>
                                </div>
                                <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                <?php if(!empty($data['passwordError']))
                                {echo "<br><div class='alert alert-danger' role='alert'>
                                    ".$data['passwordError']."
                                </div>";}
                                ?>
                            </div>
                            <p> <a href="<?php echo URLROOT; ?>users/register">Not registered yet? </a></p>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
</div>

<?php require APPROOT."/views/inc/footer.php" ?>