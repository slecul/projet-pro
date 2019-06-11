<?php

require_once '../models/pet.php';
require_once '../regex.php';
$formErrors = array();

if (count($_POST) > 0) {
   $addPet = new pet();

   if (!empty($_POST['name'])) {
      if (preg_match($regexName, $_POST['name'])) {
         $addPet->name = htmlspecialchars($_POST['name']);
      } else {
         $formErrors['name'] = 'Veuillez entrer un nom composé d\'au maximum deux mots commençants par une majuscule.';
      }
   } else {
      $formErrors['name'] = 'Veuillez entrer un nom.';
   }

   if (!empty($_POST['birthDate'])) {
      if (preg_match($regexDate, $_POST['birthDate'])) {
         $addPet->birthDate = htmlspecialchars($_POST['birthDate']);
      } else {
         $formErrors['birthDate'] = 'Veuillez entrer une date valide.';
      }
   } else {
      $formErrors['birthDate'] = 'Veuillez entrer une date.';
   }

   if (!empty($_POST['gender'])) {
      if (preg_match($regexBool, $_POST['gender'])) {
         $addPet->gender = htmlspecialchars($_POST['gender']);
      } else {
         $formErrors['gender'] = 'Veuillez séléctionner le sexe de votre animal.';
      }
   } else {
      $formErrors['gender'] = 'Veuillez séléctionner le sexe de votre animal.';
   }
   
   
   
}
?>
