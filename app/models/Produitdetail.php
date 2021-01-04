
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

    public function addrating($data){
        $this->db->query('INSERT INTO avis (id_membre, id_salle, commentaire, note, date_enregistrement) 
        VALUES (:id_membre, :id_salle, :commentaire, :note, NOW())');
        
        //Bind values
        $this->db->bind(':id_membre',$_SESSION['user_id'] );
        $this->db->bind(':id_salle',$data['id_salle'] );
        $this->db->bind(':commentaire', $data['message']);
        $this->db->bind(':note', $data['rating']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
    }
    public function returnsalleid($id){
        //Prepared statement
        $this->db->query('SELECT id_salle FROM produit WHERE id_produit = :id');
        
        $this->db->bind(':id', $id);
                  
        $res=$this->db->resultSet();
                      
        return $res;

    }
    // If Salle Already Has Rating From This Id_Membre
    public function IfSalleAlreadyHasRatingFromThisId_Membre ($data){
        $this->db->query('SELECT * FROM avis WHERE id_salle = :id');

        //Bind value
        $this->db->bind(':id', $data['id_salle']);
        

        $row = $this->db->single();

        $id_membre = $row->id_membre;

        if ($_SESSION['user_id'] == $id_membre) {
            
            return $row;
        } else {
            return false;
        }


    }

    public function updateRating($data){
        $this->db->query('UPDATE avis SET  id_membre = :id_membre ,id_salle = :id_salle , note = :note , commentaire = :commentaire , date_enregistrement = NOW()
        WHERE id_avis= :id');
        
        //Bind values
        $this->db->bind(':id', $data['id_avis']);
        $this->db->bind(':id_membre',$_SESSION['user_id'] );
        $this->db->bind(':id_salle',$data['id_salle'] );
        $this->db->bind(':commentaire', $data['message']);
        $this->db->bind(':note', $data['rating']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function getSalleAvis($id){
        //Prepared statement
        $this->db->query('SELECT * FROM avis WHERE id_salle = :id');
    //Bind values
        $this->db->bind(':id', $id);
                  
        $res=$this->db->resultSet();
                      
        return $res;
    }

    public function addAvisInSalleTable($produit_detailid_salle,$avisTotal){

        $this->db->query('UPDATE salle SET  avis =:avis
        WHERE id_salle= :id');
        
        //Bind values
        $this->db->bind(':id',$produit_detailid_salle );
        $this->db->bind(':avis', $avisTotal);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addView($id,$newView){
        $this->db->query("UPDATE produit SET views =:views
        WHERE id_produit= :id");

        //Bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':views',$newView);
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function lastView($id){
        $this->db->query('SELECT views FROM  produit
        WHERE id_produit= :id');
        
        //Bind values
        $this->db->bind(':id', $id);

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