<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO membre (first_name,last_name,pseudo,photo_de_profile,email,addresse,zip_code,pays,ville,telephone,mdp,sexe) 
        VALUES(:first_name, :last_name,:pseudo,:photo_de_profile,:email,:addresse,:zip_code,:pays,:ville,:telephone,:password,:sexe)');
        
        //Bind values
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':pseudo', $data['pseudo']);
        $this->db->bind(':photo_de_profile', $data['photo_de_profile']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':addresse', $data['addresse']);
        $this->db->bind(':zip_code', $data['zip_code']);
        $this->db->bind(':pays', $data['pays']);
        $this->db->bind(':ville', $data['ville']);
        $this->db->bind(':telephone', $data['telephone']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':sexe', $data['sexe']);

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
    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM membre WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    }

        public function verfieypseudounique($pseudo) {
            //Prepared statement
            $this->db->query('SELECT * FROM membre WHERE pseudo = :pseudo');
            
            //Email param will be binded with the email variable
            $this->db->bind(':pseudo', $pseudo);
    
            //Check if email is already registered
            if($this->db->rowCount() > 0) {
                return false;
            } else {
                return true;
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
                

}
