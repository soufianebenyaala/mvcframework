<?php
class Paniers extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Panier');
    }

    public function panier() {
        $data = [];

        if(!empty($_SESSION['panier'])){
            $tab =explode('.',substr($_SESSION['panier'], 1));
            foreach($tab as $id){
                $data['data'.$id] = $this->userModel->getProduitById($id);
            }

        }
        $this->view('panier', $data);
    }

    // add produit dans une session sous form d'un chaine  ".29.28.12"
    public function addProduitAuPanier($id){
        if(!($this->verifyIfIDexist($id))){
            $_SESSION['panier'] =$_SESSION['panier'].'.'.$id;
        }
        header('location: ' . URLROOT . 'ProduitsDetails/produitdetail/'.$id);
    }

    //delete produit form the session (delete charater form the chaine  ".29.28.12")
    public function deleteProduitAuPanier($id){

        $tab =explode('.',substr($_SESSION['panier'], 1));
        foreach($tab as $key =>$ch){
            if($ch == $id){
                unset($tab[$key]);
            }
        }
        $ch=".".implode(".",$tab);
        $_SESSION['panier'] = $ch;

        header('location: ' . URLROOT . 'Paniers/panier');
    }

    //verify if produit already add 
    public function verifyIfIDexist($id){
        $tab =explode('.',substr($_SESSION['panier'], 1));
        foreach($tab as $key =>$ch){
            if($ch == $id){
                return true;
            }
        }return false;
    }

}
