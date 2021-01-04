<?php
class wishlist {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function afficheWishlistDetail($id){
        //Prepared statement
        $this->db->query('SELECT * FROM produit,salle WHERE produit.id_salle=salle.id_salle AND id_produit = :id');
             
        $this->db->bind(':id', $id);
                       
        $res=$this->db->resultSet();
                           
        return $res;
    }

    public function wishlist(){
        //Prepared statement
        $this->db->query('SELECT wishlist FROM membre
                          WHERE id_membre = :id');
             
        $this->db->bind(':id', $_SESSION['user_id']);
                       
        $res=$this->db->resultSet();
                           
        return $res;
       
    }

    
    public function addWishlist($ch){
        $this->db->query("UPDATE membre SET wishlist = :wishlist  WHERE id_membre = :id");
                
        $this->db->bind(':id', $_SESSION['user_id']);
        $this->db->bind(':wishlist',   $ch);
               
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    
    }
    

}