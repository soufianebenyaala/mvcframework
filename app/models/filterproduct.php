
<?php
class filterproduct {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    //Find last 4 offres (produit) add with admin
    public function filterproduct($data){
        if(isset($_POST["action"]))
        {
            $query = 
            "SELECT * FROM produit,salle WHERE produit.id_salle=salle.id_salle AND etat = 'libre'
             and prix between ".$data['minPrice']." and ".$data['maxPrice'];
            if(isset($data['minPrice'])&& !empty($data['minPrice']) && isset($data['maxPrice'])&& !empty($data['maxPrice'])){ 

                $query = 
                "SELECT * FROM produit,salle WHERE produit.id_salle=salle.id_salle AND etat = 'libre'
               and prix between ".$data['minPrice']." and ".$data['maxPrice'];
               }
            if(isset($data['category']) &&  $data['category'] != 'all'){
                $brand_filter = implode("','", $data['category']);
                $query .= "
                 AND categorie IN('".$brand_filter."')
                ";
            }
            if(isset($data['city']) && !empty($data['city'])){
                $brand_filter = implode("','", $data['city']);
                $query .= "
                 AND ville IN('".$brand_filter."')
                ";
            }
            if(isset($data['capacity']) && !empty($data['capacity'])){
                $query .= "
                 AND capacite =".$data['capacity']."
                ";
            }

            if(isset($data['date_depart']) && !empty($data['date_depart'])){
                $query .= "
                 AND date_depart > '".$data['date_depart']."' 
                ";
            }
            if(isset($data['date_arrivee']) && !empty($data['date_arrivee'])){
                $query .= "
                 AND date_arrivee < '".$data['date_arrivee']."' 
                ";
            }
  

            
       
    }
        $this->db->query($query);
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