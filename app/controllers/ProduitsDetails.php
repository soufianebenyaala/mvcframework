
<?php
class ProduitsDetails extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Produitdetail');
    }

    public function produitdetail($id) {
        $data = [
            'produit_detail' => ''
        ];
        $data['produit_detail'] = $this->userModel->produitdetail($id);
        $this->view('reservation_details', $data);
    }
    
  
}