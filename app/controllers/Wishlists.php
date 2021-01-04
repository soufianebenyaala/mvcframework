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
        var_dump( $this->userModel->wishlist()[0]->wishlist);

        $ch = $this->userModel->wishlist()[0]->wishlist;
        $ch =$ch.'/'.$id;
        var_dump($ch);
        $this->userModel->addWishlist($ch);

        header('location:' . URLROOT . 'Wishlists/wishlist');
    }
}