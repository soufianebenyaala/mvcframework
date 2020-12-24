
<?php
class Checkout {
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




    public function commande($data){
        $this->db->query('INSERT INTO commande (id_membre,montant,lesproduits,date_commande) 
        VALUES(:id_membre,:montant,:lesproduits,NOW())');
  
        $this->db->bind(':id_membre', $_SESSION['user_id']);
        $this->db->bind(':montant', $data['momtant']);
        $this->db->bind(':lesproduits', substr($_SESSION['panier'], 1));

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function changeEtatDesProduitToOccupe($data){

        if(!empty($_SESSION['panier'])){
            $tab =explode('.',substr($_SESSION['panier'], 1));
            foreach($tab as $id){
                $this->db->query("UPDATE produit SET etat = 'occupe'  WHERE id_produit = $id");
                $id = intval($id);
                $this->db->bind(':id_produit', $id);
                $this->db->bind(':etat', 'occupe');
              //Execute function
                       //Execute function
                if ($this->db->execute()) {
                    $test = true;
                } else {
                    $test = false;
               }
                
              }
        
    }
    return $test;


}
}

