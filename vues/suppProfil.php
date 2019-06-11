<?php
session_start();
require_once '../controllers/suppProfilCtrl.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="url"/>
      <title>Supprimer votre compte.</title>
   </head>
   <body>
      <h1>Suppression du compte</h1>
      <h2>Confirmez le compte a supprimer : </h2>
      <?php
      if (count($_POST) == 0 || count($formErrors) > 0) {
         if (isset($formErrors['delete'])) {
            ?>
            <div class="formError">
               <p><?= $formErrors['delete'] ?></p>
            </div>
         <?php }
         ?>
         <form action="" method="POST">
            <label for="mail">Adresse mail : </label><input type="email" name="mail" id="mail" />
            <label for="password">Mot de passe : </label><input type="password" name="password" id="password" />
            <input type="submit" value="supprimer" />
         </form>
      <?php } else { ?>
         <div class="formSuccess">
            <p><?= $formSuccess ?></p>
         </div>
      <?php } ?>
      <a href="../index.php">Retour au profil.</a>
   </body>
</html>