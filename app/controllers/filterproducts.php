<?php
class filterproducts extends Controller {
    public function __construct() {
        $this->userModel = $this->model('filterproduct');
    }

    public function filterproduct() {
        $data = [
            'title' => 'Home page',
            'category' =>'',
            'category'=>'',
            'city'=>'',
            'date_arrivee'=>'',
            'date_dapart'=>'',
            'error'=>'',
            'name' => ''

        ];
        
        $data['name']=$_POST['name'];


        $data['afficheAllData'] =  $this->userModel->afficheAllData($data);
         
        $this->view('booking', $data);
    }
    public function filterproduc() {
        $this->view('index');
    }
    
  
}