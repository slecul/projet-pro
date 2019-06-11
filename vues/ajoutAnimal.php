<?php 
session_start();
 require_once '../controllers/ajoutAnimalCtrl.php';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="url"/>
      <title>Ajoutez un animal</title>
   </head>
   <body>
      <h1>Ajoutez un animal</h1>
      <form action="ajoutAnimal.php" method="POST">
         <label for="name">Nom : </label><input type="text" name="name" id="name" value="<?= g ?>"/>
         <label for="birthDate">Date de naissance : </label><input type="date" name="date" id="date" value="<?php g ?>" />
         <label for="gender">Sexe : </label><select name="gender" id="gender">
            <option value="0">Mâle</option>
            <option value="1">Femelle</option>
         </select>
      </form>
   </body>
</html>