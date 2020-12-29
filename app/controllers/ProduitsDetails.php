
<?php
class ProduitsDetails extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Produitdetail');
    }

    public function addavis($id) {
        $data = [
            'produit_detail' => '',
            'avis_detail' => '',
            'rating' => '',
            'message' => '',
            'id_salle' => '',
            'id_avis'=> '',
            'nombreTotalReviews' => '',
            'avisTotal' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'produit_detail' => '',
                'rating' => trim($_POST['rating']),
                'message' => trim($_POST['message']),
                'id_salle' => '',
                'id_avis'=> '',
                'nombreTotalReviews' => '',
                'avisTotal' => ''
            ];
            
             //Validate sexe on letters
             if (empty($data['message'])) {
                $data['messageError'] = 'Please enter message.';
            }

            //Validate sexe on letters
             if (empty($data['rating'])) {
                $data['ratingError'] = 'Please enter message.';
            }

            $id_salle = $this->userModel->returnsalleid($id);
            $data['id_salle']= $id_salle[0]->id_salle;

            if (empty($data['messageError']) && empty($data['ratingError'])) {

             $test = $this->userModel->IfSalleAlreadyHasRatingFromThisId_Membre ($data);
              if( $test ){
                $data['id_avis']= $test->id_avis;
                $this->userModel->updateRating($data);
                header('location: ' . URLROOT . 'ProduitsDetails/produitdetail/'.$id);

              }elseif ($this->userModel->addrating($data)) {
                   
                    header('location: ' . URLROOT . 'ProduitsDetails/produitdetail/'.$id);
                    
                } else {
                    die('Something went wrong.');
                    
                }
            }

        }
        //affiche produit detail
        $data['produit_detail'] = $this->userModel->produitdetail($id);
        //set avis de produit $id
        $data['avis_detail'] = $this->userModel->getSalleAvis($data['produit_detail'][0]->id_salle);
        //who many man set there avis de produit $id 
        $data['nombreTotalReviews'] = $this->nombreTotalReviews($data);
        //affiche avis de produit $id
        $data['avisTotal'] = $this->avisTotal($data);

        $data['pikeforyou'] = $this->userModel->pikeForYou();
        
        $this->view('reservation_details', $data);
    }

    public function produitdetail($id) {

        $data = [
            'produit_detail' => '',
            'avis_detail' => '',
            'nombreTotalReviews' => '',
            'avisTotal' => ''
        ];
        // add +1 views au produit $id
        $lastView = $this->userModel->lastView($id);
        $newView = $lastView[0]->views +1;
        $this->userModel->addView($id,$newView);
        //affiche produit detail
        $data['produit_detail'] = $this->userModel->produitdetail($id);
        //set avis de produit $id
        $data['avis_detail'] = $this->userModel->getSalleAvis($data['produit_detail'][0]->id_salle);
        //who many man set there avis de produit $id
        $data['nombreTotalReviews'] = $this->nombreTotalReviews($data);
        //affiche avis de produit $id
        $data['avisTotal'] = $this->avisTotal($data); 

        $this->userModel->addAvisInSalleTable($data['produit_detail'][0]->id_salle,''.$data['avisTotal']);

        if(!empty($_SESSION['user_pays'])){
            $data['pikeforyou'] = $this->userModel->pikeForYou();
        }

        $this->view('reservation_details', $data);
    }

    public function nombreTotalReviews($data){

        return count($data['avis_detail']);

    }

    public function avisTotal($data){
        $total = 0;
        foreach($data['avis_detail'] as $tab){
                $total =  $total + ($tab->note/$this->nombreTotalReviews($data));  
        }
        return round($total, 0);
    }
    
  
}