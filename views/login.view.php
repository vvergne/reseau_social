<?php $title="Connexion "; ?>
<?php include('partials/_header.php'); ?>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <hr>
      <h1 class="text-center lead">Connectez-vous !</h1>
      <?php include('partials/_flash.php'); ?>
      <?php include('partials/_errors.php'); ?>



      <form data-parsley-validate method="post" class="well col-md-8 col-md-offset-2">


        <!-- NAME FIELD-->
        <div class="form-group">
          <label class="control-label" for="identifiant">Pseudo ou email:</label>
          <input type="text" class="form-control" value="<?= get_input('identifiant'); ?>" id="identifiant" required="true" name="identifiant"  data-parsley-trigger="keypress">
        </div>

        <!-- PASSWORD FIELD-->
        <div class="form-group">
          <label class="control-label" for="password">Mot de passe:</label>
          <input type="password" class="form-control" id="password" required="true" name="password" value="">
        </div>

        <!-- REMEMBER ME FIELD-->
        <div class="form-group">
          <label class="control-label" for="remember_me">
          <input type="checkbox" name="remember_me"id="remember_me" value="">Garder ma session active</label>
        </div>

        <input type="submit" class="btn btn-primary" name="login" value="Connexion">


      </form>
    </div>
  </div>


  <?php include('partials/_footer.php'); ?>
