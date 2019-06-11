<?php
// Je crée une un objet client qui le servira lors du CRUD du compte de mes clients.
class clients {
//Je crée les attributs dont j'aurais besoin, en public pour que mes méthodes puissent y avoir accès.
   public $id = 0;
   public $lastname = ' ';
   public $firstname = ' ';
   public $phoneNumber = ' ';
   public $mail = ' ';
   public $password = ' ';
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
//Je crée une fonction qui permettra la création d'un nouveau compte.
   public function addClient() {
// $query contient la requête SQL qui permettra d'ajouter un client dans la base de données.
      $query = 'INSERT INTO `tfj46_clients` (`lastname`, `firstname`, `phoneNumber`, `mail`, `password`, id_tfj46_userGroup) '
              . 'VALUES (:lastname, :firstname, :phoneNumber, :mail, :password, 1)';
      // je prépare ma requête SQL, et je donne a chaque marqueur nominatif la valeur a entrer dans la base de données avec bindValue().
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
      $queryExecute->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
      $queryExecute->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
      $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
      $queryExecute->bindValue(':password', $this->password, PDO::PARAM_STR);
      
      return $queryExecute->execute();
   }
// Je crée une fonction qui vérifie si un compte existe déja avec une adresse mail.
   public function checkUser() {
      $query = 'SELECT COUNT(`id`) as `number` '
              . 'FROM `tfj46_clients` '
              . 'WHERE `mail` = :mail';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
      $queryExecute->execute();
      return $queryExecute->fetch(PDO::FETCH_OBJ);
   }
// Fonction qui récupère le mot de passe haché stocké dans la base de données pour la vérifier avec password_verify().
   public function getHashedPassword() {
      $query = 'SELECT `password` '
              . 'FROM `tfj46_clients` '
              . 'WHERE `mail` = :mail';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
      $queryExecute->execute();
      return $queryExecute->fetch(PDO::FETCH_OBJ);
   }
// Fonction qui récupère dans la base de données les informations d'un compte.
   public function getClientInformation() {
      $query = 'SELECT `lastname`, `firstname`, `mail`, `phoneNumber` '
              . 'FROM `tfj46_clients` '
              . 'WHERE `mail` = :mail';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
      $queryExecute->execute();
      return $queryExecute->fetch(PDO::FETCH_OBJ);
   }
// Fonction qui permet a un utilisateur de modifier les informations de son compte.
   public function updateClientinformations() {
      $query = 'UPDATE `tfj46_clients` '
              . 'SET `firstname`=:firstname,`lastname`=:lastname,`phoneNumber`=:phoneNumber,`mail`=:newMail,`password`=:password WHERE `mail`=:oldMail';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
      $queryExecute->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
      $queryExecute->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
      $queryExecute->bindValue(':newMail', $this->mail, PDO::PARAM_STR);
      $queryExecute->bindValue(':password', $this->password, PDO::PARAM_STR);
      $queryExecute->bindValue(':oldMail', $_SESSION['mail'], PDO::PARAM_STR);
      return $queryExecute->execute();
   }
// Fonction qui supprime un compte d'un client.
   public function deleteClientProfil() {
      $query = 'DELETE FROM `tfj46_clients` WHERE `mail` = :mail';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
      return $queryExecute->execute();
   }
// Lors de la destruction de l'instance de mon objet, je supprime la connexion avec la base de données.
   public function __destruct() {
      $this->db = NULL;
   }

}
