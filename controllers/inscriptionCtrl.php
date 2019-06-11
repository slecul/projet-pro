<?php
require_once '../models/client.php';
require_once '../regex.php';
$formErrors = array();


if (count($_POST) > 0) {
   $clientAdd = new clients();

   if (!empty($_POST['firstname'])) {
      if (preg_match($regexName, $_POST['firstname'])) {
         $clientAdd->firstname = htmlspecialchars($_POST['firstname']);
      } else {
         $formErrors['firstname'] = 'Veuillez entrer un prénom composé d\'au maximum deux mots commençants par une majuscule.';
      }
   } else {
      $formErrors['firstname'] = 'Veuillez renseigner votre prénom.';
   }

   if (!empty($_POST['lastname'])) {
      if (preg_match($regexName, $_POST['lastname'])) {
         $clientAdd->lastname = htmlspecialchars($_POST['lastname']);
      } else {
         $formErrors['lastname'] = 'Veuillez entrer un nom composé d\'au maximum deux mots commençants par une majuscule.';
      }
   } else {
      $formErrors['lastname'] = 'Veuillez renseigner votre nom.';
   }

   if (!empty($_POST['phoneNumber'])) {
      if (preg_match($regexPhone, $_POST['phoneNumber'])) {
         $clientAdd->phoneNumber = htmlspecialchars($_POST['phoneNumber']);
      } else {
         $formErrors['phoneNumber'] = 'Veuillez entrer un numéro de téléphone composé de 10 chiffres.';
      }
   } else {
      $formErrors['phone'] = 'Veuillez renseigner votre numéro de téléphone.';
   }

   if (!empty($_POST['mail'] && filter_var($_POST['mail']))) {
      $clientAdd->mail = htmlspecialchars($_POST['mail']);
      $check = $clientAdd->checkUser();
      if($check->number > 0){
         $formErrors['mail'] = 'Un compte existe déjà avec cette adresse mail.';
      }
   } else {
      $formErrors['mail'] = 'Veuillez renseigner une adresse mail valide.';
   }

   if(isset($_POST['password']) && ($_POST['password'] == $_POST['confirmPassword'])){
      $clientAdd->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   }else{
      $formErrors['password'] = 'Les mots de passe ne correspondent pas.'; 
   }
   
   if (count($formErrors) == 0) {
      if ($clientAdd->addClient()) {
         $formSuccess = 'Enregistrement effectué.';
            $_SESSION['mail'] = $clientAdd->mail;
            $_SESSION['firstname'] = $clientAdd->firstname;
            $_SESSION['lastname'] = $clientAdd->lastname;
            $_SESSION['phoneNumber'] = $clientAdd->phoneNumber;
      } else {
         $formErrors['add'] = 'Une erreur est survenue lors de votre inscription. Réessayez, et si cela ne fonctionne toujours pas, merci de contacter le propriétaire du site.';
      }
   }
   
}