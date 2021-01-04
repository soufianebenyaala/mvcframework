<?php
class productsajax extends Controller {
    public function __construct() {
        $this->userModel = $this->model("filterproduct");
    }

    public function filterproduct($categor) {
        if(!empty($categor)){
            $data["categor"] = $categor;
        }
        if(!empty($_POST["category"])){
            $data["category"] = $_POST["category"];
        }
        if(!empty($_POST["city"])){
            $data["city"] = $_POST["city"];
        }
        if(!empty($_POST["date_arrivee"])){
            $data["date_arrivee"] = $_POST["date_arrivee"];
        }
        if(!empty($_POST["minPrice"])){
            $data["minPrice"] = $_POST["minPrice"];
        }
        if(!empty($_POST["maxPrice"])){
            $data["maxPrice"] = $_POST["maxPrice"];
        }
        if(!empty($_POST["date_depart"])){
            $data["date_depart"] = $_POST["date_depart"];
        }
        if(!empty($_POST["capacity"])){
            $data["capacity"] = $_POST["capacity"];
        }
        if(!empty($_POST["searchsearch"])){
            $data["searchsearch"] = $_POST["searchsearch"];
        }
        
        $output ="";
        if(!empty($this->userModel->filterproduct($data))){
        if(isset($_POST['action'])){
            foreach($this->userModel->filterproduct($data) as $tab){
                $output .='
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <ul class="product-countdown">
                                <li><span style="margin-bottom: -17px;"><img src="'.URLROOT.'public/img/date.png"></span></li>
                                <li><span>'. $tab->date_arrivee.'</span></li>
                                <li><span>'. $tab->date_depart.'</span></li>
                            </ul>
                            <a href="'.URLROOT.'ProduitsDetails/produitdetail/'. $tab->id_produit.'"> <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick
                            view</button> </a>
                            <img src="'.URLROOT.'public/img/salle date/'. $tab->titre.'/'. $tab->photo_1.'" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$'. $tab->prix.'</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name">'. $tab->titre.'</h2>
                            <div class="product-btns">
                            <a href="'.URLROOT.'Wishlists/addWishlist/'.$tab->id_produit.'"><button class="main-btn icon-btn"><i class="fa fa-heart"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                ';
    
            } 
       
        }

        if(isset($_GET['search'])){
            $list='';
            foreach($this->userModel->filterproduct($data) as $tab){
                $list .='<li><a href="filterproducts/filterproduct/all">'.$tab->titre.'</a></li>';

            }
            $output='<div class="category-nav">
            <ul class="category-list">'.$list.'</ul>
        </div>';
        }
    }else{
        $output = '<img src="'.URLROOT.'public/img/404_not_found.gif" style="width:100%;height:100%;">';
    }
    echo $output;
}   

}