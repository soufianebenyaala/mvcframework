
<?php
class Produitdetail {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    //Find last 4 offres (produit) add with admin
    public function produitdetail($id){
        //Prepared statement
        $this->db->query('SELECT * FROM produit,salle
        WHERE produit.id_salle=salle.id_salle
        AND id_produit = :id');

       $this->db->bind(':id', $id);
          
        $res=$this->db->resultSet();
              
        return $res;

    }
}