<?php require_once '../controllers/connexionCtrl.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="url"/>
      <title></title>
   </head>
   <body>
      <h1>Connexion</h1>
      <?php if(!isset($_SESSION['mail'])){ ?>
      <form action="connexion.php" method="POST">
         <label for="mail">Adresse mail :</label><input type="email" name="mail" id="mail" />
         <?php if(isset($formErrors['mail'])){ ?>
         <div class="formError">
            <p><?= $formErrors['mail'] ?></p>
         </div>
           <?php } ?>
         <label for="password">Mot de passe : </label><input type="password" name="password" id="password" />
         <?php if(isset($formErrors['password'])){ ?>
         <div class="formError">
            <p><?= $formErrors['password'] ?></p>
         </div>
           <?php } ?>
         <input type="submit" value="Connexion">
      </form>
      <?php }else{ ?>
      <p>Bonjour <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?></p>
      <?php } ?>
      <a href="../index.php">Retour a la page d'accueil.</a>
   </body>
</html>
