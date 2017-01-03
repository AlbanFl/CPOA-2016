<?php

	class VIPManager extends Model{
        public function getVIP(){
      		$liste=$this -> executerRequete("Select typeVIP, nomPersonne, nationalitePersonne, genrePersonne from VIP, Personne where VIP.numPersonne = Personne.numPersonne");
					$resultat = $liste ->fetchAll(PDO::FETCH_ASSOC);
					return $resultat;
        }


    }
