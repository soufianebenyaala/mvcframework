<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO membre (first_name,last_name,pseudo,email,addresse,zip_code,pays,ville,telephone,mdp,sexe,verifyAccount) 
        VALUES( :first_name,:last_name,:pseudo,:email,:addresse,:zip_code,:pays,:ville,:telephone,:password,:sexe,:verifyAccount)');
        
        //Bind values
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':pseudo', $data['pseudo']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':addresse', $data['addresse']);
        $this->db->bind(':zip_code', $data['zip_code']);
        $this->db->bind(':pays', $data['pays']);
        $this->db->bind(':ville', $data['ville']);
        $this->db->bind(':telephone', $data['telephone']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':sexe', $data['sexe']);
        $this->db->bind(':verifyAccount',"non");

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password) {
        $this->db->query('SELECT * FROM membre WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);
        

        $row = $this->db->single();

        $hashedPassword = $row->mdp;

        if (password_verify($password, $hashedPassword)) {
            
            return $row;
        } else {
            return false;
        }
    }
    
    public function verify_account($email){
        $this->db->query('SELECT * FROM membre WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);
        

        $row = $this->db->single();

        $verfiy_account = $row->verifyAccount;
        

        if ($verfiy_account == "oui") {
            
            return true;
        } else {
            return false;
        }
    }
        
    public function verifyaccountgetnon(){
        $this->db->query('UPDATE membre SET verifyAccount="oui"
        WHERE email = :email
        ');
        
        //Bind values

        $this->db->bind(':email', $_SESSION['verifyAccount_email']);
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT COUNT(email) as count FROM membre WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        $res=$this->db->resultSet();
        //Check if email is already registered
        if($res[0]->count != 0) {
            return true;
        } else {
            return false;
        }
    }

        public function verfieypseudounique($pseudo) {
            //Prepared statement
            $this->db->query('SELECT COUNT(pseudo) as count FROM membre WHERE pseudo = :pseudo');
            
            //Email param will be binded with the email variable
            $this->db->bind(':pseudo', $pseudo);

            $res=$this->db->resultSet();
          //Check if email is already registered
            if($res[0]->count != 0) {
                return true;
            } else {
                return false;
            }
        }

        //Find user by email. Email is passed in by the Controller.
        public function findUserByEmailAndReturnUserData($email) {
            //Prepared statement
            $this->db->query('SELECT * FROM membre WHERE email = :email');
            
            //Email param will be binded with the email variable
            $this->db->bind(':email', $email);
            
                $res=$this->db->resultSet();
                
                return $res;

            }
                
        public function editphoto($fileNameNew){

            $this->db->query('UPDATE membre SET photo=:photo, state_of_photo = :state_of_photo WHERE id_membre = :id');

            $this->db->bind(':photo', $fileNameNew);
            $this->db->bind(':id', $_SESSION["user_id"]);
            $this->db->bind(':state_of_photo',1);

            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        }
        public function imageState(){
            //Prepared statement
            $this->db->query('SELECT state_of_photo,photo FROM membre WHERE id_membre = :id');
            
            
            $this->db->bind(':id', $_SESSION["user_id"]);
            
            $res=$this->db->resultSet();
                
           return $res;

            
        }

        public function editprofile($data){    
            $this->db->query('UPDATE membre SET first_name = :first_name ,last_name = :last_name ,pseudo = :pseudo ,addresse = :addresse ,zip_code = :zip_code,pays = :pays ,ville = :ville ,telephone = :telephone
             WHERE id_membre = :id');
            
            //Bind values
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':pseudo', $data['pseudo']);
            $this->db->bind(':addresse', $data['addresse']);
            $this->db->bind(':zip_code', $data['zip_code']);
            $this->db->bind(':pays', $data['pays']);
            $this->db->bind(':ville', $data['ville']);
            $this->db->bind(':telephone', $data['telephone']);
            $this->db->bind(':id', $_SESSION["user_id"]);
    
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

      public function orderhistorique(){

            //Prepared statement
            $this->db->query('SELECT * FROM commande WHERE id_membre = :id');
            
            
            $this->db->bind(':id', $_SESSION["user_id"]);
            
            $res=$this->db->resultSet();
                
           return $res;
      }
      public function  produitcommande($id){

        //Prepared statement
        $this->db->query('SELECT * FROM produit,salle
        WHERE produit.id_salle=salle.id_salle
        AND id_produit = :id');
        
        
        $this->db->bind(':id',$id);
        
        $res=$this->db->resultSet();
            
       return $res;
  }

  public function country(){
    //Prepared statement
    $this->db->query('SELECT country_name FROM countries');

    $res=$this->db->resultSet();
                
    return $res;
}



}
