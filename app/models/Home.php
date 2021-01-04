<?php
class Home {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    //Find last 4 offres (produit) add with admin
    public function last4Offers(){

        //Prepared statement
        $this->db->query("SELECT * FROM produit,salle
        WHERE produit.id_salle=salle.id_salle AND etat = 'libre' AND id_produit > (SELECT MAX(id_produit) FROM produit)-6 
        ORDER BY id_produit DESC");
          
        $res=$this->db->resultSet();
              
        return $res;
    }

    public function topSalle(){
        //Prepared statement
        $this->db->query("SELECT *
        FROM produit
        INNER JOIN salle ON salle.id_salle=produit.id_salle
        INNER JOIN avis ON salle.id_salle =avis.id_salle
        ORDER BY avis.id_avis ASC
        LIMIT 4");

        $res=$this->db->resultSet();
              
        return $res; 
}

    public function pikeForYou(){
        //Prepared statement
        $this->db->query("SELECT *
        FROM produit
        INNER JOIN salle ON salle.id_salle=produit.id_salle
        WHERE pays = :pays
        ORDER BY id_produit DESC
        LIMIT 4");

        $this->db->bind(':pays', $_SESSION['user_pays']);

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

public function wishlist(){
    //Prepared statement
    $this->db->query('SELECT wishlist FROM membre
                      WHERE id_membre = :id');
         
    $this->db->bind(':id', $_SESSION['user_id']);
                   
    $res=$this->db->resultSet();
                       
    return $res;
   
}


}
