	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="<?php echo URLROOT; ?>index">
		            <img src="<?php echo URLROOT; ?>img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
						<?php if(isset($_SESSION['user_id'])){  ?>
                       <li><a href="<?php echo URLROOT; ?>profiles/profile"><i class="fa fa-user-o"></i> My Account</a></li>
                       <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                      
                   <?php }else{  ?>
                    
                     
                            <li><a href="<?php echo URLROOT; ?>users/login"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            <li><a href="<?php echo URLROOT; ?>users/register"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                            <?php }  ?>    
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->


			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Soufiane & Aya & Kais</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->


	<!-- jQuery Plugins -->
	<script src="<?php echo URLROOT; ?>public/js/jquery.min.js"></script>
	<script src="<?php echo URLROOT; ?>public/js/bootstrap.min.js"></script>
	<script src="<?php echo URLROOT; ?>public/js/slick.min.js"></script>
	<script src="<?php echo URLROOT; ?>public/js/nouislider.min.js"></script>
	<script src="<?php echo URLROOT; ?>public/js/jquery.zoom.min.js"></script>
	<script src="<?php echo URLROOT; ?>public/js/main.js"></script>

	
</body>

</html>
