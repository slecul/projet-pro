<?php session_start() ;
 require_once '../controllers/updateProfilCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="url"/>
      <title>Modification du profil</title>
   </head>
   <body>
      <h1>modification du profil.</h1>
            <?php if(count($_POST) == 0 || count($formErrors) > 0){
         if (isset($formErrors['update'])){
            echo $formErrors['update'];
      } ?>
      <form method="POST" action="updateProfil.php">
         <label for="firstname">Prénom : </label><input type="text" name="firstname" id="firstname" value="<?= $_SESSION['firstname'] ?>" />
         <?php if (isset($formErrors['firstname'])) { ?>
            <div class="formError">
               <p><?= $formErrors['firstname'] ?></p>
            </div>
         <?php } ?>
         <label for="lastname">Nom : </label><input type="text" name="lastname" id="lastname" value="<?= $_SESSION['lastname'] ?>" />
                     <?php if(isset($formErrors['lastname'])){ ?>
         <div class="formError">
            <p><?= $formErrors['lastname'] ?></p>
         </div>
           <?php } ?>
         <label for="phoneNumber">Numéro de téléphone : </label><input type="text" name="phoneNumber" id="phoneNumber" value="<?= $_SESSION['phoneNumber'] ?>" />
                     <?php if(isset($formErrors['phoneNumber'])){ ?>
         <div class="formError">
            <p><?= $formErrors['phoneNumber'] ?></p>
         </div>
           <?php } ?>
         <label for="mail">Adresse mail : </label><input type="email" name="mail" id="mail" value="<?= $_SESSION['mail'] ?>" />
                     <?php if(isset($formErrors['mail'])){ ?>
         <div class="formError">
            <p><?= $formErrors['mail'] ?></p>
         </div>
           <?php } ?>
         <label for="oldPassword">Ancien mot de passe : </label><input type="password" name="oldPassword" id="oldPassword" />
                     <?php if(isset($formErrors['oldPassword'])){ ?>
         <div class="formError">
            <p><?= $formErrors['oldPassword'] ?></p>
         </div>
           <?php } ?>
         <label for="newPassword">Nouveau mot de passe : </label><input type="password" name="newPassword" id="newPassword" />
                     <?php if(isset($formErrors['newPassword'])){ ?>
         <div class="formError">
            <p><?= $formErrors['newPassword'] ?></p>
         </div>
           <?php } ?>
         <label for="newPasswordConfirm">Confirmation du nouveau mot de passe : </label><input type="password" name="newPasswordConfirm" id="newPasswordConfirm" />
         <input type="submit" value="Valider ces informations.">
      </form>
               <?php  }else{ ?>
      <div class="formSuccess">
         <p><?= $formSuccess ?></p>
      </div>
         <?php } ?>
      <a href="profil.php">revenir au profil</a>
   </body>
</html>