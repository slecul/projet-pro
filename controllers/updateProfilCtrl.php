<?php

require_once '../models/client.php';
require_once '../regex.php';
$formErrors = array();


if (count($_POST) > 0) {
   $clientUpdate = new clients();
   $clientInfos = new clients();
   $clientInfos->mail = $_SESSION['mail'];
   $clientHashedPassword = $clientInfos->getHashedPassword();

   if (!empty($_POST['firstname'])) {
      if (preg_match($regexName, $_POST['firstname'])) {
         $clientUpdate->firstname = htmlspecialchars($_POST['firstname']);
      } else {
         $formErrors['firstname'] = 'Veuillez entrer un prénom composé d\'au maximum deux mots commençants par une majuscule.';
      }
   } else {
      $formErrors['firstname'] = 'Veuillez renseigner votre prénom.';
   }

   if (!empty($_POST['lastname'])) {
      if (preg_match($regexName, $_POST['lastname'])) {
         $clientUpdate->lastname = htmlspecialchars($_POST['lastname']);
      } else {
         $formErrors['lastname'] = 'Veuillez entrer un nom composé d\'au maximum deux mots commençants par une majuscule.';
      }
   } else {
      $formErrors['lastname'] = 'Veuillez renseigner votre nom.';
   }

   if (!empty($_POST['phoneNumber'])) {
      if (preg_match($regexPhone, $_POST['phoneNumber'])) {
         $clientUpdate->phoneNumber = htmlspecialchars($_POST['phoneNumber']);
      } else {
         $formErrors['phoneNumber'] = 'Veuillez entrer un numéro de téléphone composé de 10 chiffres.';
      }
   } else {
      $formErrors['phone'] = 'Veuillez renseigner votre numéro de téléphone.';
   }

   if (!empty($_POST['mail'] && filter_var($_POST['mail']))) {
      $clientUpdate->mail = htmlspecialchars($_POST['mail']);
   } else {
      $formErrors['mail'] = 'Veuillez renseigner une adresse mail valide.';
   }

   if (password_verify($_POST['oldPassword'], $clientHashedPassword->password)) {
      if (!empty($_POST['newPassword'])) {
         if ($_POST['newPassword'] == $_POST['newPasswordConfirm']) {
            $clientUpdate->password = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
         } else {
            $errorPassword = 'Les nouveaux mots de passe ne correspondent pas.';
         }
      }else{
         $clientUpdate->password = password_hash($_POST['oldPassword'], PASSWORD_DEFAULT);
      }
   } else {
      $formErrors['oldPassword'] = 'L\'ancien mot de passe est incorrect.';
   }


   if (count($formErrors) == 0) {
      if ($clientUpdate->updateClientinformations()) {
         $formSuccess = 'Enregistrement effectué.';
      } else {
         $formErrors['update'] = 'Une erreur est survenue lors de la modification de votre profil. Réessayez, et si ce problème persiste, merci de contacter le propriétaire du site.';
      }
   }
}