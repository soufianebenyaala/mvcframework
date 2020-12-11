<?php require APPROOT."/views/inc/top-header.php" ?>
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
                                <h2 class="title">verify Account</h2>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="Email">insert code of verification</label>
                                    <p>checkout votre mail</p>
                                </div>
                                <input class="input" type="text" name="verification" placeholder="insert code of verification">
                                <?php 
                                  if(!empty($data['verificationError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['verificationError']."
                                </div>";}
                                ?>
                            </div>
                            
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