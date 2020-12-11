<?php
class profiles extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }
    public function index() {
         $data=[
            'first_name' => '',
            'last_name' => '',
            'pseudo' => '',
            'photo_de_profile' => '',
            'email' => '',
            'addresse' => '',
            'zip_code' => '',
            'pays' => '',
            'ville' => '',
            'telephone' => '',
            'sexe' => '',
         ];
         
        //mettre les donne de la utilisature du email "$email" donne un object "$userdata" 
         $email=$_SESSION['email'];
         $tab = $this->userModel->findUserByEmailAndReturnUserData($email);
         $userdata =$tab[0];

         $data['first_name']  = $userdata->first_name ;
         $data['last_name']  = $userdata->last_name ;
         $data['photo_de_profile']  = $userdata->photo_de_profile ;
         $data['email']  = $userdata->email ;
         $data['addresse']  = $userdata->addresse ;
         $data['zip_code']  = $userdata->zip_code ;
         $data['pays']  = $userdata->pays ;
         $data['ville']  = $userdata->ville ;
         $data['telephone']  = $userdata->telephone ;
         $data['sexe']  = $userdata->sexe ;
         $data['pseudo']  = $userdata->pseudo ;
         $this->view('profile',$data);
        
    }
    


}