<?php
// Je crée une un objet client qui le servira lors du CRUD du compte de mes clients.
class pet {
//Je crée les attributs dont j'aurais besoin, en public pour que mes méthodes puissent y avoir accès.
   public $id = 0;
   public $name = ' ';
   public $birthDate = ' ';
   public $gender = ' ';
   public $specie = 0;
   public $idClient = 0;
   private $db = NULL;
// Je crée une méthode qui va se lancer à chaque instanciation de l'objet, qui va me connecter à ma base de données.
   public function __construct() {
      try {
         // On utilise un objet PHP, qu'on instancie en lui donnant en paramètres les accès à ma base de données.
         $this->db = new PDO('mysql:host=localhost;dbname=JeanPol;charset=utf8', 'jeanPol', 'BUZl1eGhlro9KAVO');
      } catch (Exeption $e) {
         die('Erreur : ' . $e->getMessage());
      }
   }
   
   public function addPet(){
      $query = 'INSERT INTO `tfj46_animals` (`name`, `birthDate`, `gender`, `id_tfj46_clients`, `id_tfj46_species`) '
              . 'VALUES (:name, :birthDate, :gender, :idClient, :specie)';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':name', $this->name, PDO::PARAM_STR);
      $queryExecute->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
      $queryExecute->bindValue(':gender', $this->gender, PDO::PARAM_INT);
      $queryExecute->bindValue(':idClient', $this->idClient, PDO::PARAM_INT);
      $queryExecute->bindValue(':specie', $this->specie, PDO::PARAM_INT);
      
      return $queryExecute->execute();
   }
   
   
   public function __destruct(){
      $this->db= NULL;
   }
}