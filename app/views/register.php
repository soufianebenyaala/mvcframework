<?php require APPROOT."/views/inc/top-header.php" ?>
<?php require APPROOT."/views/inc/header.php" ?>
<?php require APPROOT."/views/inc/navigation.php" ?>



<!-- section -->
<div id="inscription11">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <form id="checkout-form" class="clearfix"  method="POST" action="<?php echo URLROOT; ?>users/register" >
                <div class="col-md-7">

                    <div class="billing-details">

                        <div class="section-title">
                            <h2 class="title">Inscription</h2>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="First Name">First Name</label>
                            </div>
                            <input class="input"  type="text" name="first-name" placeholder="First Name">
                            <?php 
                                  if(!empty($data['first_nameError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['first_nameError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Last Name">Last Name</label>
                            </div>
                            <input class="input"   type="text" name="last-name" placeholder="Last Name">
                            <?php 
                                  if(!empty($data['last_nameError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['last_nameError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="pseudo">pseudo</label>
                            </div>
                            <input class="input"  type="text" name="pseudo" placeholder="pseudo">
                            <?php 
                                  if(!empty($data['pseudoError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['pseudoError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label  for="Sexe">Sexe</label>
                            </div>
                            <input type="radio" name="Sexe" value="F"  checked>	&nbsp; Woman 	&nbsp;	&nbsp;	&nbsp;	&nbsp;
                            <input  type="radio" name="Sexe"  value="H">	&nbsp; Man
                            <?php 
                                  if(!empty($data['sexeError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['sexeError']."
                                </div>";}
                                ?>
                        </div>
                        
                        <div class="form-group">
                            <div>
                                <label for="Insert photo">Insert photo</label>
                            </div>
                            <input class="form-control-file border"   type="file" name="user-photo"
                                placeholder="Insert photo">
                                <?php 
                                  if(!empty($data['insert_photoError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['insert_photoError']."
                                </div>";}
                                ?>

                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Email">Email</label>
                            </div>
                            <input class="input"   type="email" name="email" placeholder="Email">
                            <?php 
                                  if(!empty($data['emailError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['emailError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Address">Address</label>
                            </div>
                            <input class="input"   type="text" name="address" placeholder="Address">
                            <?php 
                                  if(!empty($data['addresseError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['addresseError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="City">City</label>
                            </div>
                            <input class="input"  type="text" name="city" placeholder="City">
                            <?php 
                                  if(!empty($data['cityError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['cityError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Country">Country</label>
                            </div>
                            <select class="input" name="country">
                            <option value="Tunisie" >Tunisie</option>
                            <option value="Japan">Japan</option>
                            <option value="Canada">Canada</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="ZIP Code">ZIP Code</label>
                            </div>
                            <input class="input"  type="text" name="zip_code" placeholder="ZIP Code">
                            <?php 
                                  if(!empty($data['zip_codeError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['zip_codeError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Telephone">Telephone</label>
                            </div>
                            <input class="input"   type="tel" name="tel" placeholder="Telephone">
                            <?php 
                                  if(!empty($data['telError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['telError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Enter Your Password">Enter Your Password</label>
                            </div>
                            <input class="input" type="password" name="password" placeholder="Enter Your Password">
                            <?php 
                                  if(!empty($data['passwordError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['passwordError']."
                                </div>";}
                                ?>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="Enter Your Password">Enter Your Password</label>
                            </div>
                            <input class="input" type="password" name="confirmPassword" placeholder="Enter Your Password">
                            <?php 
                                  if(!empty($data['confirmPasswordError']))
                                 { echo"<br><div class='alert alert-danger' role='alert'>
                                   ".$data['confirmPasswordError']."
                                </div>";}
                                ?>
                        </div>
                        <p>Already a customer ? <a href="<?php echo URLROOT; ?>users/login">Login</a></p>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">INSCRIPTION</button>
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