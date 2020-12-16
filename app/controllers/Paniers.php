<?php
class paniers extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function panier() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('panier', $data);
    }
    
  
}
