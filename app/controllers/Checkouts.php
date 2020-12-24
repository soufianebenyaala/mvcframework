
<?php
class Checkouts extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Checkout');
    }

    public function checkout() {
        $data = [


        ];
        if(!empty($_SESSION['panier'])){
            $tab =explode('.',substr($_SESSION['panier'], 1));
            foreach($tab as $id){
                $data['getdata']['data'.$id] = $this->userModel->getProduitById($id);
            }

        }
        $this->view('checkout', $data);
    }

    public function commande(){
        $data = [
            'numero_carte' =>'' ,
            'date_expiration' =>'' ,
            'crypto' =>'',
            'montant'=>''
        ];
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
               'numero_carte' =>trim($_POST['numero_carte']) ,
               'date_expiration' =>trim($_POST['date_expiration']) ,
               'crypto' =>trim($_POST['crypto']),
               'montant'=>''
            ];

            //get data of order/////////////////////////////////////////////////////////////////////////////////////
            if(!empty($_SESSION['panier'])){
            $tab =explode('.',substr($_SESSION['panier'], 1));
            foreach($tab as $id){
                $data['getdata']['data'.$id] = $this->userModel->getProduitById($id);
                
              }

            } 
            //calucle du montant total avec TVA /////////////////////////////////////////////////////////////////
            $total = 0;
            foreach($data['getdata'] as $object){ 
               if(!empty($object)){
                  foreach($object as $tab){$total = $total + $tab->prix; }
               }
            }
            $data['momtant']=($total*0.1)+$total;

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            $telValidation = "/^[0-9]*$/";

            //Validate numero_carte on letters
            if (empty($data['numero_carte'])) {
               $data['numero_carteError'] = 'Please enter numero carte.';
            } elseif (!preg_match($telValidation, $data['numero_carte'])) {
               $data['numero_carteError'] = 'First Name can only contain numbre .';
            }

            //Validate numero_carte on letters
            if (empty($data['date_expiration'])) {
                $data['date_expirationError'] = 'Please enter date d"expiration.';
            } 
            
            //Validate numero_carte on letters
            if (empty($data['crypto'])) {
                $data['cryptoError'] = 'Please enter crypto.';
             } elseif(strlen($data['crypto']) != 4){
                $data['cryptoError'] = 'crypto must be at least 4 characters';
              }

             // Make sure that errors are empty
             if ( empty($data['cryptoError']) && empty($data['numero_carteError']) && empty($data['date_expirationError']) ) {


                //Register user from model function
                if ($this->userModel->commande($data)) {
                    
                    $this->userModel->changeEtatDesProduitToOccupe($data);
                    //Redirect to the login page
                    unset($_SESSION['panier']);
                    header('location: ' . URLROOT . 'Checkouts/valide/'.$data['momtant']);
                    
                    
                } else {
                    die('Something went wrong.');
                    
                }
            }

        
        }
    
      $this->view('checkout',$data);
        
    }

    public function valide(){

        $this->view("valide");

    }

  
}