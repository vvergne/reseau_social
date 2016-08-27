<?php
session_start();
include('filters/guest_filter.php');
require('config/database.php');
require('includes/fonctions.php');
require('includes/constants.php');
//si le formulaire a été soumis
  if(isset($_POST['register'])) {

    //si tous les champs ont étés remplis
    if(not_empty(['name','pseudo','email','password','password_confirm'])) {

      $errors = [];//tableau contenant les erreurs

      extract($_POST);

      if(mb_strlen($pseudo) < 3) {
        $errors[] = " le pseudo est trop court, il doit faire au minimum 3 caractères !";
      }

      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[]= " L'adresse email est invalide!";
      }

      if(mb_strlen($password) < 4) {

        $errors[] = " le mot de passe doit faire plus de 4 caractères !";
      } else {

        if($password != $password_confirm){
          $errors[] = " Les mots de passe ne sont pas identiques";
        }
      }

      if(is_already_in_use('pseudo', $pseudo , 'users')) {

        $errors[] = " Pseudo déja utilisé";
      }

      if(is_already_in_use('email',$email,'users')) {

        $errors[] = " L'email est déja utilisé";
      }

      if(count($errors) == 0) {
          //envoi d'un mail d'activation
          $to = $email;
          $subject = WEBSITE_NAME . " - Activation de Compte ";
          $password = sha1($password);
          $token = sha1($pseudo.$email.$password);

          ob_start();
          require('templates/emails/activation.tmpl.php');
          $content = ob_get_clean();

          $headers = 'MIME-Version: 1.0' . "\r\n";
          $headers .='Content-type: text/html; charset=iso-8859-1' . "\r\n";


          $q = $db-> prepare('INSERT INTO users(name, pseudo, email, password)
                              VALUES(:name, :pseudo, :email, :password)');
          $q->execute([
            'name' => $name,
            'pseudo' => $pseudo,
            'email' => $email,
            'password' => $password
          ]);


          set_flash(" Mail d'activation envoyé!,<a href=\"" . WEBSITE_URL. "activation.php?p= " .$pseudo. "&token=" .$token . "\">Lien d'activation</a>", "success");

          mail($to,$content,$subject);

          //informer l'utilisateur de verifier ses mails

          redirect('index.php');
          exit();
      }
      else {
        save_input_data();
      }

    } else {
        $errors[] = "Veuillez renseigner tout les champs";
        save_input_data();
      }
    }
      else {
    clear_input_data();
  }
 ?>
<?php require('views/register.view.php');?>
