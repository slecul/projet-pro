<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="url"/>
      <title></title>
   </head>
   <body>
      <h1>Profil Utilisateur.</h1>
      <p>Nom : <?= $_SESSION['lastname'] ?></p>
      <p>prénom : <?= $_SESSION['firstname'] ?></p>
      <p>numéro de téléphone : <?= $_SESSION['phoneNumber'] ?></p>
      <p>Adresse mail : <?= $_SESSION['mail'] ?></p>
      <a href="updateProfil.php">Modifier ces informations</a>
      <a href="suppProfil.php">Supprimer mon compte.</a>
      <a href="ajoutAnimal.php">Ajouter un animal.</a>

   </body>
</html>