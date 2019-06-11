<?php
require_once '../models/client.php';
$formErrors = array();

if (count($_POST) > 0) {
   $user = new clients();
   if (!empty($_POST['mail']) && filter_var($_POST['mail'])) {
      $user->mail = htmlspecialchars($_POST['mail']);
   } else {
      $formErrors['mail'] = 'Cette adresse mail est incorrecte.';
   }
   if (!isset($_POST['password']) || empty($_POST['password'])) {
      $formErrors['password'] = 'Le mot de passe est obligatoire.';
   }
   if (count($formErrors) == 0) {
      $check = $user->checkUser();
      if ($check->number == 1) {
         $hashedPassword = $user->getHashedPassword();
         if (password_verify($_POST['password'], $hashedPassword->password)) {
            session_start();
            $userInfo = $user->getClientInformation();
            $_SESSION['mail'] = $userInfo->mail;
            $_SESSION['firstname'] = $userInfo->firstname;
            $_SESSION['lastname'] = $userInfo->lastname;
            $_SESSION['phoneNumber'] = $userInfo->phoneNumber;
         } else {
            $formErrors['mail'] = 'L\'adresse mail et/ou le mot de passe est invalide.';
            $formErrors['password'] = 'L\'adresse mail et/ou le mot de passe est invalide.';
         }
      } else {
         $formErrors['mail'] = 'L\'adresse mail et/ou le mot de passe est invalide.';
         $formErrors['password'] = 'L\'adresse mail et/ou le mot de passe est invalide.';
      }
   }
}