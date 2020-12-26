<?php
class Home {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    //Find last 4 offres (produit) add with admin
    public function last4Offers(){

        //Prepared statement
        $this->db->query("SELECT produit.*,salle.titre,salle.photo_1 FROM produit,salle
        WHERE produit.id_salle=salle.id_salle AND etat = 'libre' AND id_produit > (SELECT MAX(id_produit) FROM produit)-6 
        ORDER BY id_produit DESC");
          
        $res=$this->db->resultSet();
              
        return $res;
    }


}
