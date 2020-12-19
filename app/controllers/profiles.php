<?php
class profiles extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }
    public function profile() {
        $data = [
            'getdata' => '',
            
        ];
        $data['getdata'] = $this->userModel->findUserByEmailAndReturnUserData($_SESSION['user_email']);

        $this->view('profile',$data);
        
    }
    public function editprofile(){
        $data = [
            'getdata' => '',
            'photo' => ''
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'photo' => trim($_POST['image'])
            ];


            //Validate photo
            if (empty($data['photo'])) {
               $data['photoError'] = 'Please enter photo.';
             }

             var_dump($_FILES);
            // Make sure that errors are empty
            if (empty($data['photoError']) ) {

            //Register user from model function
            if ($this->userModel->editphoto($data,$_FILES["image"])) {
            //Redirect to the login page
       
            header('location: ' . URLROOT . 'profiles/profile');
        
            } else {
               die('Something went wrong.');
        
            }
}
      
var_dump($_FILES);



    }
    
    var_dump($_FILES);
    $data['getdata'] = $this->userModel->findUserByEmailAndReturnUserData($_SESSION['user_email']);

    $this->view('profile',$data);
}
    


}