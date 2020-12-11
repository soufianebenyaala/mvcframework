<?php require "inc/top-header.php" ?>
<?php require "inc/header.php" ?>
<?php require "inc/navigation.php" ?>

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h3 class="title">Order Review</h3>
                    </div>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th></th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total</th>
                                <th class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="thumb"><img src="img/thumb-product1.jpg" alt=""></td>
                                <td class="details">
                                    <a href="#">Product Name Goes Here</a>
                                    <ul>
                                        <li><span>CAPACITY : 70</span></li>
                                        <li><span>Departure : 20/08/2020 </span></li>
                                        <li><span> Arrival : 25/08/2020</span></li>
                                        <li><span>CITY : Djerba</span></li>
                                    </ul>
                                </td>
                                <td class="price text-center"><strong>$32.50</strong><br></td>
                                <td class="qty text-center"><input class="input" type="number" value="1"></td>
                                <td class="total text-center"><strong class="primary-color">$32.50</strong></td>
                                <td class="text-right"><button class="main-btn icon-btn"><i
                                            class="fa fa-close"></i></button></td>
                            </tr>
                            <tr>
                                <td class="thumb"><img src="img/thumb-product1.jpg" alt=""></td>
                                <td class="details">
                                    <a href="#">Product Name Goes Here</a>
                                    <ul>
                                        <li><span>CAPACITY : 70</span></li>
                                        <li><span>Departure : 20/08/2020 </span></li>
                                        <li><span> Arrival : 25/08/2020</span></li>
                                        <li><span>CITY : Djerba</span></li>
                                    </ul>
                                </td>
                                <td class="price text-center"><strong>$32.50</strong></td>
                                <td class="qty text-center"><input class="input" type="number" value="1"></td>
                                <td class="total text-center"><strong class="primary-color">$32.50</strong></td>
                                <td class="text-right"><button class="main-btn icon-btn"><i
                                            class="fa fa-close"></i></button></td>
                            </tr>
                            <tr>
                                <td class="thumb"><img src="img/thumb-product1.jpg" alt=""></td>
                                <td class="details">
                                    <a href="#">Product Name Goes Here</a>
                                    <ul>
                                        <li><span>CAPACITY : 70</span></li>
                                        <li><span>Departure : 20/08/2020 </span></li>
                                        <li><span> Arrival : 25/08/2020</span></li>
                                        <li><span>CITY : Djerba</span></li>
                                    </ul>
                                </td>
                                <td class="price text-center"><strong>$32.50</strong></td>
                                <td class="qty text-center"><input class="input" type="number" value="1"></td>
                                <td class="total text-center"><strong class="primary-color">$32.50</strong></td>
                                <td class="text-right"><button class="main-btn icon-btn"><i
                                            class="fa fa-close"></i></button></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>SUBTOTAL</th>
                                <th colspan="2" class="sub-total">$97.50</th>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>TVA</th>
                                <td colspan="2">19.6%</td>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>TOTAL</th>
                                <th colspan="2" class="total">$100</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="pull-right">
                        <button class="primary-btn">Place Order</button>
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
<?php require "inc/footer.php" ?>