<?php require APPROOT."/views/inc/top-header.php" ?>
<?php require APPROOT."/views/inc/header.php" ?>
<?php require APPROOT."/views/inc/navigation.php";?>
<!-- section -->
<div id="inscription11">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <form id="checkout-form" class="clearfix" method="POST" action="<?php echo URLROOT; ?>profiles/editprofile">
                <div class="col-md-7">

                    <div class="billing-details">

                        <div class="section-title">
                            <h2 class="title">edit profil</h2>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="First Name">First Name</label>
                            </div>
                            <input class="input" type="text" name="first_name" placeholder="First Name"
                                value="<?= $_SESSION['user_first_name']; ?>">
                            <?php 
                                                             
                                if(!empty($data['firstError']))
                                { echo"<br><div class='alert alert-danger' role='alert'>
                                  ".$data['firstError']."
                               </div>";}
                            

                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Last Name">Last Name</label>
                            </div>
                            <input class="input" type="text" name="last_name" placeholder="Last Name"
                                value="<?= $_SESSION['user_last_name']; ?>">
                            <?php 
                                  if(!empty($data['lastError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['lastError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="pseudo">pseudo</label>
                            </div>
                            <input class="input" type="text" name="pseudo" placeholder="pseudo"
                                value="<?= $_SESSION['user_pseudo']; ?>">
                            <?php 
                                  if(!empty($data['pError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['pError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Address">Address</label>
                            </div>
                            <input class="input" type="text" name="addresse" placeholder="Address"
                                value="<?= $_SESSION['user_addresse']; ?>">
                            <?php 
                                  if(!empty($data['adError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['adError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="City">City</label>
                            </div>
                            <input class="input" type="text" name="city" placeholder="City"
                                value="<?= $_SESSION['user_ville']; ?>">
                            <?php 
                                  if(!empty($data['cError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['cError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Country">Country</label>
                            </div>
                            
                            <select class="input" name="country" >
                                <option value="Japan"   <?php if($_SESSION['user_pays'] == 'Japan'){echo 'selected';} ?>>Japan</option>
                                <option value="Tunisie" <?php if($_SESSION['user_pays'] == 'Tunisie'){echo 'selected';} ?>>Tunisie</option>
                                <option value="Canada"  <?php if($_SESSION['user_pays'] == 'Canada'){echo 'selected';} ?>>Canada</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="ZIP Code">ZIP Code</label>
                            </div>
                            <input class="input" type="text" name="zip_code" placeholder="ZIP Code"
                                value="<?= $_SESSION['user_zip_code']; ?>">
                            <?php 
                                  if(!empty($data['zError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['zError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Telephone">Telephone</label>
                            </div>
                            <input class="input" type="tel" name="tel" placeholder="Telephone"
                                value="<?= $_SESSION['user_telephone']; ?>">
                            <?php 
                                  if(!empty($data['tError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['tError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">edit</button>
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