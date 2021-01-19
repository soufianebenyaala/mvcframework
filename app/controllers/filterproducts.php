<?php
class filterproducts extends Controller {
    public function __construct() {
        $this->userModel = $this->model('filterproduct');
    }

    public function filterproduct($category) {
        $data = [
            'title' => 'Home page',
            'city'=>'',
            'date_arrivee'=>'',
            'date_dapart'=>'',
            'error'=>'',
            'name' => '',
            'searchsearch' =>""

        ];

        if(!empty($_POST["searchsearch"])){
                $data["searchsearch"] = $_POST["searchsearch"];
                $_SESSION["search"] = $_POST["searchsearch"];
        }else{
            $data['afficheAllData'] =  $this->userModel->afficheAllData($category);
        }
        $data['allcity'] = $this->userModel->allcity();
        $this->view('booking', $data);
    }

    
  
}