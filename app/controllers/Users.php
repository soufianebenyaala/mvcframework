<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }
    public function register() {
        $data = [
            'first_name' => '',
            'last_name' => '',
            'pseudo' => '',
            
            'email' => '',
            'addresse' => '',
            'zip_code' => '',
            'pays' => '',
            'ville' => '',
            'telephone' => '',
            'sexe' => '',
            'password' => '',
            'confirmPassword' => '',
            'first_nameError' => '',
            'last_nameError' => '',
            'pseudoError' => '',
            'insert_photoError' => '',
            'addresseError' => '',
            'sexeError' => '',
            'zip_codeError' => '',
            'cityError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'pseudoError' => '',
            'telError' => ''
        ];
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              $data = [
                'first_name' => trim($_POST['first-name']),
                'last_name' => trim($_POST['last-name']),
                'pseudo' => trim($_POST['pseudo']),
           
                'email' => trim($_POST['email']),
                'addresse' => trim($_POST['address']),
                'zip_code' => trim($_POST['zip_code']),
                'pays' => trim($_POST['country']),
                'ville' => trim($_POST['city']),
                'telephone' => trim($_POST['tel']),
                'sexe' => trim($_POST['Sexe']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'first_nameError' => '',
                'last_nameError' => '',
                'pseudoError' => '',
               
                'addresseError' => '',
                'sexeError' => '',
                'zip_codeError' => '',
                'cityError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'pseudoError' => '',
                'telError' => ''

            ];

            $telValidation = "/^[0-9]*$/";
            $pseudoValidation = "/^[a-zA-Z0-9]*$/";
            $nameValidation = "/^[a-zA-Z' ]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate first_name on letters
            if (empty($data['first_name'])) {
                $data['first_nameError'] = 'Please enter first name.';
            } elseif (!preg_match($nameValidation, $data['first_name'])) {
                $data['first_nameError'] = 'First Name can only contain letters .';
            }

             //Validate last_name on letters
            if (empty($data['last_name'])) {
                $data['last_nameError'] = 'Please enter last name.';
            } elseif (!preg_match($nameValidation, $data['last_name'])) {
                $data['last_nameError'] = 'Last Name can only contain letters .';
            }


            //Validate pseudo on letters
            if (empty($data['pseudo'])) {
                $data['pseudoError'] = 'Please enter pseudo.';
            } elseif (!preg_match($pseudoValidation, $data['pseudo'])) {
                $data['pseudoError'] = 'pseudo can only contain letters and nembre .';
            }else {
                //Check if pseudo exists.
                if ($this->userModel->verfieypseudounique($data['pseudo'])) {
                $data['pseudoError'] = 'Pseudo is already taken.';
                }
            }

             //Validate sexe on letters
             if (empty($data['sexe'])) {
                $data['sexeError'] = 'Please enter sexe.';
            }



            //Validate city on letters
             if (empty($data['ville'])) {
                $data['cityError'] = 'Please enter ville.';
            }

            //Validate addresse on letters
             if (empty($data['addresse'])) {
                $data['addresseError'] = 'Please enter Address.';
            } 

             //Validate zip_code on letters
             if (empty($data['zip_code'])) {
                $data['zip_codeError'] = 'Please enter zip code.';
            } elseif (strlen($data['zip_code']) != 4) {
                $data['zip_codeError'] = 'zip code must have  4 numbre .';
            }elseif (!preg_match($telValidation, $data['zip_code'])) {
                $data['zip_codeError'] = 'Zip code can only contain numbre .';
            }

            
             //Validate telephone on letters
             if (empty($data['telephone'])) {
                $data['telError'] = 'Please enter telephone.';
            } elseif (strlen($data['telephone']) != 8) {
                $data['telError'] = 'telephone must have  8 numbre .';
            }elseif (!preg_match($telValidation, $data['telephone'])) {
                $data['telError'] = 'Telephone can only contain numbre .';
            }


            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }

           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 8){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }
        

            // Make sure that errors are empty
            if (empty($data['telError']) && empty($data['zip_codeError']) && empty($data['addresseError']) && empty($data['cityError']) && empty($data['insert_photoError']) && empty($data['sexeError']) && empty($data['pseudoError']) && empty($data['last_nameError'])  && empty($data['first_nameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page
                    $_SESSION['verifyAccount_email'] =$data['email'];
                    $this->sendMailOfVerificationAccount($data['email']);
                   
                    header('location: ' . URLROOT . 'users/verifyAccount');
                    
                } else {
                    die('Something went wrong.');
                    
                }
            }
        }
        $this->view('register', $data);
        
    }




   

    public function login() {
        $data = [
            'title' => 'Login page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter a email.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $test = $this->userModel->verify_account($data['email']);
                    if($test){
                        if($data['email'] != "admin@gmail.com")
                            {$this->createUserSession($loggedInUser);}
                            else{
                                $_SESSION['user_id'] = $loggedInUser->id_membre;
                                $_SESSION['user_first_name'] = $loggedInUser->first_name;
                                $_SESSION['user_last_name'] = $loggedInUser->last_name;
                                $_SESSION['email'] = $loggedInUser->email;
                                header('location:' . URLROOT . 'admin/index');

                            }
                    }else{
                        $_SESSION['verifyAccount_email'] =$data['email'];
                        $this->sendMailOfVerificationAccount($data['email']);
                        $this->verifyaccount();
                    }
                   
                } else {
                    $data['passwordError'] = 'Password or email is incorrect. Please try again.';

                    $this->view('login', $data);
                }
            }

        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('login', $data);
    }
    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id_membre;
        $_SESSION['user_first_name'] = $user->first_name;
        $_SESSION['user_last_name'] = $user->last_name;
        $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . 'index');
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_first_name']);
        unset($_SESSION['user_last_name']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . 'users/login');
    }


    
    public function sendMailOfVerificationAccount($email) {
        
        $to      = $email;
        $subject = 'verify Account';
        $code = random_int(1000,9999);
        $_SESSION['code']=$code;
        $message = 'code of verification account : '.$code;
        $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
   
       mail($to, $subject, $message, $headers);
       }


       public function verifyaccount() {
        $data1 = [
            'verifyaccount'=> '',
            'email'=> '',
            'verificationError' => ''
        ];
        
       
        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verification'])) {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            

            $data1 = [
                'verifyaccount'=> $_POST['verification'],
                'email'=> $_SESSION['verifyAccount_email'],
                'verificationError' => ''
            ];

            if($data1['verifyaccount'] == $_SESSION['code'] ){
                if( $this->userModel->verifyaccountgetnon()){
                    unset($_SESSION['code']);
                    unset($_SESSION['verifyAccount_email']);
                    $this->view('login');
                }  

            }else{
                $data1['verificationError'] = ' invalid verification account ';
                
                $this->view('verifyaccount', $data1);
            }
        }
        $this->view('verifyaccount', $data1);

    
}

public function  detail() {
    $this->view('reservation_details');

}

}

    


?>