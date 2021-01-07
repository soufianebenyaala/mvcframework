<?php
class profiles extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }
    public function profile() {
        $data = [
            'getdata' => '',
            'imageState'=>''
        ];
        $data['imageState'] = $this->userModel->imageState();
        $data['getdata'] = $this->userModel->findUserByEmailAndReturnUserData($_SESSION['user_email']);



        $data['commande'] = $this->userModel-> orderhistorique();
        foreach( $data['commande']  as $com){
        
            $tab =explode('.',$com->lesproduits);
            foreach($tab as $id){

                $data['produitcommande']['data'.$id] = $this->userModel->produitcommande($id);
            }
    }
        
        

        $this->view('profile',$data);
        
    }


    // edit photo 
    public function editphotoprofile(){
        $data = [
            'getdata' => '',
            'file' =>$_FILES,
            'photoError' => ''
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
        $data = [
            'getdata' => '',
            'file' =>$_FILES,
            'photoError' => ''
            ];

        $fileName =$_FILES['image']['name'];
        $fileTmpName =$_FILES['image']['tmp_name'];
        $fileSize =$_FILES['image']['size'];
        $fileError =$_FILES['image']['error'];   
        // Make sure that errors are empty
        if (empty($data['photoError']) ) {


        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg' , 'png');
        if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                $fileNameNew = $_SESSION['user_id'].".".$fileActualExt;
                $fileDestination = IMGROOT.'/public/img/users/'.$fileNameNew;
                
                move_uploaded_file($fileTmpName,$fileDestination);
            }else{
                $data['photoError'] ="Your file is too big!";
            }
        }else{
            $data['photoError'] = "There was an error uploading your file!";
        }
    }else{
        $data['photoError'] = "you cannot upload files of this type!";
    }


    //Register user from model function
    if ($this->userModel->editphoto($fileNameNew)) {
    //Redirect to the login page
     header('location: ' . URLROOT . 'profiles/profile');
        
    } else {
      die('Something went wrong.');}
    }
}
  $this->profile();
}


    // edit information profil
    public function editprofile(){
        $data = [
            'first_name' => '',
            'last_name' => '',
            'pseudo' => '',
            'addresse' => '',
            'zip_code' => '',
            'pays' => '',
            'ville' => '',
            'telephone' => '',
            'first_nameError' => '',
            'last_nameError' => '',
            'pseudoError' => '',
            'addresseError' => '',
            'zip_codeError' => '',
            'cityError' => '',
            'pseudoError' => '',
            'telError' => ''
        ];
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              $data = [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'pseudo' => trim($_POST['pseudo']),
                'addresse' => trim($_POST['addresse']),
                'zip_code' => trim($_POST['zip_code']),
                'pays' => trim($_POST['country']),
                'ville' => trim($_POST['city']),
                'telephone' => trim($_POST['tel']),
                'first_nameError' => '',
                'last_nameError' => '',
                'pseudoError' => '',
                'addresseError' => '',
                'zip_codeError' => '',
                'cityError' => '',
                'pseudoError' => '',
                'telError' => ''

            ];

            $telValidation = "/^[0-9]*$/";
            $pseudoValidation = "/^[a-zA-Z0-9]*$/";
            $nameValidation = "/^[a-zA-Z' ]*$/";

            //Validate first_name on letters
            if (empty($data['first_name'])) {
                $data['firstError'] = 'Please enter first name.';
            } elseif (!preg_match($nameValidation, $data['first_name'])) {
                $data['firstError'] = 'First Name can only contain letters .';
            }

             //Validate last_name on letters
            if (empty($data['last_name'])) {
                $data['lastError'] = 'Please enter last name.';
            } elseif (!preg_match($nameValidation, $data['last_name'])) {
                $data['lastError'] = 'Last Name can only contain letters .';
            }


            //Validate pseudo on letters
            if (empty($data['pseudo'])) {
                $data['pError'] = 'Please enter pseudo.';
            }elseif (!preg_match($pseudoValidation, $data['pseudo'])) {
                $data['pError'] = 'pseudo can only contain letters and nembre .';
            }

            //Validate city on letters
             if (empty($data['ville'])) {
                $data['cError'] = 'Please enter ville.';
            }

            //Validate addresse on letters
             if (empty($data['addresse'])) {
                $data['adError'] = 'Please enter Address.';
            } 

             //Validate zip_code on letters
             if (empty($data['zip_code'])) {
                $data['zError'] = 'Please enter zip code.';
            } elseif (strlen($data['zip_code']) != 4) {
                $data['zError'] = 'zip code must have  4 numbre .';
            }elseif (!preg_match($telValidation, $data['zip_code'])) {
                $data['zError'] = 'Zip code can only contain numbre .';
            }

            
             //Validate telephone on letters
             if (empty($data['telephone'])) {
                $data['tError'] = 'Please enter telephone.';
            } elseif (strlen($data['telephone']) != 8) {
                $data['tError'] = 'telephone must have  8 numbre .';
            }elseif (!preg_match($telValidation, $data['telephone'])) {
                $data['tError'] = 'Telephone can only contain numbre .';
            }       

            // Make sure that errors are empty
            if (empty($data['tError']) && empty($data['zError']) && empty($data['adError']) && empty($data['cError']) && empty($data['pError']) && empty($data['lastError'])  && empty($data['firstError'])) {

                //Register user from model function
                if ($this->userModel->editprofile($data)) {
                    $this->createnewUserSession($data);
                    header('location: ' . URLROOT . 'profiles/profile');
                    
                } else {
                    die('Something went wrong.');
                    
                }
            }
        }

        $this->view('editprofile',$data);
    }

    public function createnewUserSession($data) {
        $_SESSION['user_first_name'] = $data['first_name'];
        $_SESSION['user_last_name'] = $data['last_name'];
        $_SESSION['user_pseudo'] = $data['pseudo'];
        $_SESSION['user_addresse'] = $data['addresse'];
        $_SESSION['user_zip_code'] = $data['zip_code'];
        $_SESSION['user_pays'] = $data['pays'];
        $_SESSION['user_ville'] = $data['ville'];
        $_SESSION['user_telephone'] = $data['telephone'];
    }


}