<?php

	class VIPManager extends Model{

        public function getVIP(){
      		$liste=$this -> executerRequete("Select typeVIP, nomPersonne, nationalitePersonne, genrePersonne from VIP, Personne where VIP.numPersonne = Personne.numPersonne");
					$resultat = $liste ->fetchAll(PDO::FETCH_ASSOC);
					return $resultat;
        }

				public function addVIP($nom,$nat,$genre,$type){
					$resultat = self::getBdd()->prepare('INSERT INTO Personne VALUES (NULL,?,?,NULL,?)');
					$resultat->execute(array($nom,$nat,$genre));
					$id = $this-> executerRequete("SELECT numPersonne FROM Personne WHERE nomPersonne=?",array($nom));
					$id = $id -> fetch(PDO::FETCH_ASSOC);
					$maj = self::getBdd()->prepare('INSERT INTO VIP VALUES (?,?,10)');
					$maj->execute(array($id['numPersonne'],$type));

				}


    }
