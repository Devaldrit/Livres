<?php
class Auteur {
    private string $_nom;
    private string $_prenom;

    //faire un tablau de livres qu'on va instancier a vide
    private $tabLivres = [];

    public function __construct(string $nom, string $prenom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        //Tableau vide 
        $this->_tabLivres = [];
    }

    // public function getTabLivres() {
    //     return $this->_tabLivres;
    // }

    public function getNom() {
        return $this->_nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }

    //setter (pour permettre de modifer sa valeur apres)
    public function setTabLivres($tabLivres){
        $this->_tabLivres = $tabLivres;
    }

    public function setNom($nom) {
        $this->_nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }

    // //faire function ajouter livre dans le tablau de livre
    public function ajouterLivre(Livre $nouveauLivre) {
        return $this->_tabLivres[] = $nouveauLivre ;
    }
    // //faire function ajouter livre dans le tablau de livre
    // public function ajouterLivre(Livre $nouveauLivre) {
    //     return $this->_tabLivres = array_push($nouveauLivre);
    // }

    //faire une function bibliographie en parcourant le tableau de livres
    public function bibliographie() {
        foreach ($this->_tabLivres as $livre) {
            echo $livre."<br>";
        }
    }
    //faire un to string pour afficher le titre 
    public function toStringAuteur() {
        return "<h2>Livres de " . $this->_nom . " " . $this->_prenom . "</h2>";
    }
}