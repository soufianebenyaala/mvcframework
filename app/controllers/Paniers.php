<?php
class paniers extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Panier');
    }

    public function panier($id) {
        $data = [
            'panierdata' => ''
        ];

        $data['panierdata'] = $this->userModel->affichePanier();

        $this->userModel->addProduitPanier($id);

        $this->view('panier', $data);
    }
    
  
}
