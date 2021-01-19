<?php
class Wishlists extends Controller {
    public function __construct() {
        $this->userModel = $this->model('wishlist');

    }
    public function wishlist(){
       $data=[];

      
      $wishlist = explode('/',substr($this->userModel->wishlist()[0]->wishlist, 1));
       foreach($wishlist as $tab){
        $data['wish'.$tab] = $this->userModel->afficheWishlistDetail($tab);
       }
       

       $this->view('wishlist',$data);
    }

    public function addWishlist($id){

        $ch = $this->userModel->wishlist()[0]->wishlist;
        $test=true;
        foreach(explode("/",$ch) as $tabl){
            if($tabl == ""){
            $a='aaa';
            }elseif($tabl == $id){
              $test=false;
            }
        }
        if($test == true){
            $ch =$ch.'/'.$id;
            $this->userModel->addWishlist($ch);
            header('location:' . URLROOT . 'Wishlists/wishlist');
        }
        header('location:' . URLROOT . 'Wishlists/wishlist');
    }

    public function deleteWish($id){
        $ch = $this->userModel->wishlist()[0]->wishlist;
        $tab = explode("/",$ch);
        foreach($tab as $key=>$data){
            if($data == $id){
               unset($tab[$key]);
            }
        }
        $ch = implode("/",$tab);
        $this->userModel->addWishlist($ch);
        header('location:' . URLROOT . 'Wishlists/wishlist');
    
    }
}