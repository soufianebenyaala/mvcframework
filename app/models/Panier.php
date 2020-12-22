<?php
class Panier {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function getProduitById($id){
             //Prepared statement
             $this->db->query('SELECT * FROM produit,salle
             WHERE produit.id_salle=salle.id_salle
             AND id_produit = :id');
     
            $this->db->bind(':id', $id);
               
             $res=$this->db->resultSet();
                   
             return $res;
     
    }

}