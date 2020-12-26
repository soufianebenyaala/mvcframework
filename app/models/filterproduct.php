
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

     public function afficheAllData($category){

        $sql="SELECT * FROM produit,salle WHERE produit.id_salle=salle.id_salle";
      
if($category == 'all'){
    
    $this->db->query($sql);
}else{
    $sql = $sql." AND categorie = :categorie ";
    $this->db->query($sql);
    if($category === 'Reunion,Formation'){
       
       $this->db->bind(':categorie', 'Reunion, Formation');

   }elseif($category == 'Soireeentreprise'){

   
       $this->db->bind(':categorie', 'Soiree entreprise');

   }elseif($category == 'Seminaireresidentiel'){

   
       $this->db->bind(':categorie', 'Seminaire residentiel');

   }elseif($category == 'Conference,Convention'){


       $this->db->bind(':categorie','Conference, Convention');

   }
}

              
    $res=$this->db->resultSet();
                            
       return $res;
     }


}