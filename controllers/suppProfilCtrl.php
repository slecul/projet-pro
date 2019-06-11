<?php

require_once '../models/client.php';
$formErrors = array();

if (count($_POST) > 0) {
   $delClient = new clients();
   if (!empty($_POST['mail']) && filter_var($_POST['mail'])) {
      $delClient->mail = htmlspecialchars($_POST['mail']);
   } else {
      $formErrors['mail'] = 'Cette adresse mail est incorrecte.';
   }

   if (empty($_POST['password'])) {
      $formErrors['password'] = 'le mot de passe est obligatoire.';
   }
   if (count($formErrors) == 0) {
      if ($_POST['mail'] == $_SESSION['mail']) {
         $check = $delClient->checkUser();
         if ($check->number == 1) {
            $hashedPassword = $delClient->getHashedPassword();
            if (password_verify($_POST['password'], $hashedPassword->password)) {
               $delClient->deleteClientProfil();
               $formSuccess = 'Le compte a été supprimé avec succès.';
               unset($_SESSION['mail']);
               unset($_SESSION['firstname']);
               unset($_SESSION['lastname']);
               unset($_SESSION['phoneNumber']);
            } else {
               $formErrors['delete'] = 'Une erreur est survenue lors de la suppression de votre profil. Si ce problème persiste, merci de contacter le propriétaire du site';
            }
         } else {
            $formErrors['mail'] = 'L\'adresse mail et/ou le mot de passe est invalide.';
         }
      }else{
         $formErrors['delete'] = 'L\'adresse mail ne correspond pas à votre compte.';
      }
   }
}