<?php

class Stagiaire{
    public $nom;
    public $notes;

    public function __construct( string $nom, array $notes){
        $this->nom = $nom;
        $this->notes = $notes;
    }

     //Getters
     public function getNom(){
        return $this->nom;
    }
     public function getNotes(){
        return $this->notes;
    }

     //setters
     public function setNom($nom){
         $this->nom = $nom;
     }
     public function setNotes($notes){
         $this->notes = $notes;
     }

    //Méthode moyenne
    public function calculerMoyenne() {
        $totalNotes = array_sum($this->notes);
        $nombreNotes = count($this->notes);
        
        if ($nombreNotes > 0) {
            return $totalNotes / $nombreNotes;
        } else {
            return 0;
        }
    }
    // Méthode max et min
    public function trouverMax() {
        if (count($this->notes) > 0) {
            return max($this->notes);
        } else {
            return null;
        }
    }

    public function trouverMin() {
        if (count($this->notes) > 0) {
            return min($this->notes);
        } else {
            return null;
        }
    }
}

?>