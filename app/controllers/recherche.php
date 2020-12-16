<?php
class recherche extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function recherche() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('booking', $data);
    }
    
  
}
