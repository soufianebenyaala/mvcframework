
<?php
class filterproduct {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    //Find last 4 offres (produit) add with admin
    public function filterproduct($data){

        if(isset($data['name']) && !empty($data['name']) ){
        //Prepared statement
        $this->db->query("SELECT * FROM salle WHERE category = :capacity ");
    }else{
        $this->db->query('SELECT * FROM produit,salle
        WHERE produit.id_salle=salle.id_salle');
    }

        $this->db->bind(':capacity', $data['name']);
       
        $res=$this->db->resultSet();
              
        return $res;




   
}

     public function afficheAllData(){
                      //Prepared statement
                      $this->db->query('SELECT * FROM produit,salle
                      WHERE produit.id_salle=salle.id_salle');
              
                      $res=$this->db->resultSet();
                            
                      return $res;
     }
}