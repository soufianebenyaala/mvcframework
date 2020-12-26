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
            'name' => ''

        ];
        if(isset($_POST['name'])){
            $data['name']=$_POST['name'];
        }
        


        $data['afficheAllData'] =  $this->userModel->afficheAllData($category);
         
        $this->view('booking', $data);
    }

    
  
}