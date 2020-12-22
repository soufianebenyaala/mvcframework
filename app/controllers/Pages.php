<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Home');
    }

    public function index() {
        $data = [
            'title' => 'Home page',
            'last4Offers' => ''
        ];
        $data['last4Offers'] = $this->userModel->last4Offers();
        $this->view('index', $data);
    }
  
}
