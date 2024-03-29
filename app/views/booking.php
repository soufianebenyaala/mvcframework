<?php require "inc/top-header.php" ?>
<?php require "inc/header.php" ?>
<?php require "inc/navigation.php";


 ?>

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- 
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
               -->

               <!-- product filter  -->
                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter by Price</h3>
                 
                    <div id="price-slider" class="product_check"></div>
                </div>
                <!-- aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter By Category :</h3>
                    <ul class="list-links">
                        <li><input type="checkbox" id="category" class="category product_check "  value="Conference, Convention" <?=explode("/",$_GET["url"])[2] ==  'Conference, Convention' ? 'checked' : '' ?>> Conférence, Convention</li>
                        <li><input type="checkbox" id="category" class="category product_check Reunion,Formation"  value="Reunion, Formation" <?=explode("/",$_GET["url"])[2] ==  'Reunion, Formation' ? 'checked' : '' ?>> Réunion, Formation</li>
                        <li><input type="checkbox" id="category" class="category product_check"  value="Soiree entreprise" <?=explode("/",$_GET["url"])[2] ==  'Soiree entreprise' ? 'checked' : '' ?>> Soirée entreprise</li>
                        <li><input type="checkbox" id="category" class="category product_check" value="Seminaire residentiel" <?=explode("/",$_GET["url"])[2] ==  'Seminaire residentiel' ? 'checked' : '' ?>> Séminaire résidentiel</li>
                    </ul>
                </div>
                <!-- /aside widget -->
                

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter By Capacity:</h3>
                    <input class="input date" type="text"  placeholder="Capacity" id="capacity" >
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter by City</h3>
                    <div class="page-filter">
                    <ul class="list-links">
                        <?php foreach($data['allcity'] as $city){?>
                        <li><input type="checkbox" id="city" class="city product_check" value="<?= $city->ville ?>"> <?= $city->ville ?></li>
                        <?php } ?>
                    </ul>
                    </div>
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter by Date</h3>
                    <ul class="list-links">
                    <li><b>Departure date :</b> </li>
                        <li><input type="date" class="input date" id="date_depart" > </li>
                        <li><b>Arrival date : </b></li>
                        <li> <input type="date" class="input date" id="date_arrivee"> </li><br>

                    </ul>
                </div>
                <!-- /aside widget -->
               <!-- product filter  -->
               
            </div>
            <!-- /ASIDE -->

            <!-- MAIN -->
            <div id="main" class="col-md-9">

                
                <div id="store">
                   
                    <!-- row -->
                    <div class="row" id="result">

                    </div>
                    <!-- /row -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /MAIN -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
<script>
$(document).ready(function(){

filter_data();

function filter_data()
{   
    var searchInput ="";
    searchInput = "<?= $data["searchsearch"] ?>";
    var action = 'fetch_data';
    var category = get_filter('category');
    var city = get_filter('city');
    var date_arrivee = $('#date_arrivee').val();    
    var date_depart = $('#date_depart').val(); 
    var capacity = $('#capacity').val();
    var slider = document.getElementById('price-slider');
    var minPrice = 0;
    var maxPrice = 5;
    slider.noUiSlider.on('update', function (values) {
    minPrice = values[0];
    maxPrice = values[1];
    minPrice = minPrice.substring(0, minPrice.length - 1);
    maxPrice= maxPrice.substring(0, maxPrice.length - 1);
    });
    if(category=="")
    {
        
        category ="<?=explode("/",$_GET["url"])[2]?>";

    }
    var ur = "<?php echo URLROOT; ?>productsajax/filterproduct/"+category;
    $.ajax({            
        url:ur,
        method:"POST",  
        data:{action:action,searchsearch:searchInput, category:category, city:city ,date_arrivee:date_arrivee ,date_depart:date_depart,capacity:capacity,minPrice:minPrice,maxPrice:maxPrice},
        success:function(data)
        {console.log(data);
         $("#result").html(data);  
        }
    });
}

function get_filter(class_name)
{
    var filter = [];
    $('#'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$('.date').change(function(){
    filter_data();
});
$('.product_check').click(function(){
    filter_data();
});

});
</script>


<?php require "inc/footer.php" ;
 
?>