<?php session_start();
require_once '../controllers/inscriptionCtrl.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="url"/>
      <title>phatTebiDu6Z</title>
   </head>
   <body>
      <h1>Inscription</h1>
      <?php if(count($_POST) == 0 || count($formErrors) > 0){
         if (isset($formErrors['add'])){
            echo $formErrors['add'];
      } ?>
      <form method="POST" action="inscription.php">
         <label for="firstname">Prénom : </label><input type="text" name="firstname" id="firstname" placeholder="Jean" class="form-control" value="<?php if(isset($_POST['firstname']) && !isset($formErrors['firstname'])){ echo $_POST['firstname']; } ?>"/>
            <?php if(isset($formErrors['firstname'])){ ?>
         <div class="formError">
            <p><?= $formErrors['firstname'] ?></p>
         </div>
           <?php } ?>
         <label for="lastname">Nom : </label><input type="text" name="lastname" id="lastname" placeholder="Dupont" class="form-control" value="<?php if(isset($_POST['lastname']) && !isset($formErrors['lastname'])){echo $_POST['lastname'];} ?>"/>
         <?php if(isset($formErrors['lastname'])){ ?>
         <div class="formError">
            <p><?= $formErrors['lastname'] ?></p>
         </div>
           <?php } ?>
         <label for="phoneNumber">Numéro de téléphone : </label><input type="tel" name="phoneNumber" id="phoneNumber" placeholder="0304050607" value="<?php if(isset($_POST['phoneNumber']) && !isset($formErrors['phoneNumber'])){echo $_POST['phoneNumber'];} ?>"/>
         <?php if(isset($formErrors['phoneNumber'])){ ?>
         <div class="formError">
            <p><?= $formErrors['phoneNumber'] ?></p>
         </div>
           <?php } ?>
         <label for="mail">Adresse mail :</label><input type="email" name="mail" id="mail" placeholder="jean.dupont@gmail.com" value="<?php if(isset($_POST['mail']) && !isset($formErrors['mail'])){echo $_POST['mail'];} ?>"/>
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
         <label for="confirmPassword">Confirmation du mot de passe : </label><input type="password" name="confirmPassword" id="confirmPassword" />
         <button type="submit" name="submit">Valider</button>
      </form>
         <?php  }else{ ?>
      <div class="formSuccess">
         <p><?= $formSuccess ?></p>
      </div>
      <a href="profil.php">Acceder au profil.</a>
         <?php } ?>

   </body>
</html>
