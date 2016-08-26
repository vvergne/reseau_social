<?php $title="Inscription "; ?>
<?php include('partials/_header.php'); ?>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <hr>
      <h1 class="text-center lead">Inscrivez-vous !</h1>
      <?php include('partials/_flash.php'); ?>
      <?php include('partials/_errors.php'); ?>



      <form data-parsley-validate method="post" class="well col-md-8 col-md-offset-2">


        <!-- NAME FIELD-->
        <div class="form-group">
          <label class="control-label" for="name">Nom:</label>
          <input type="text" class="form-control" value="<?= get_input('name'); ?>" id="name" required="true" name="name"  data-parsley-trigger="keypress">
        </div>

        <!-- Pseudo FIELD-->
        <div class="form-group">
          <label class="control-label" for="pseudo">Pseudo:</label>
          <input type="text" class="form-control" value="<?= get_input('pseudo'); ?>" id="pseudo" required="true" name="pseudo" data-parsley-minlength="3" data-parsley-trigger="keypress">
        </div>

        <!-- EMAIL FIELD-->
        <div class="form-group">
          <label class="control-label" for="email"> Adresse email:</label>
          <input type="email" class="form-control" id="email" value="<?= get_input('email'); ?>" required="true" name="email" data-parsley-trigger="keypress">
        </div>

        <!-- PASSWORD FIELD-->
        <div class="form-group">
          <label class="control-label" for="password">Mot de passe:</label>
          <input type="password" class="form-control" id="password" required="true" name="password" value="">
        </div>

        <!-- PASSWORD CONFIRMATION FIELD-->
        <div class="form-group">
          <label class="control-label" for="password_confirm"> Confirmer mot de passe:</label>
          <input type="password" class="form-control" id="password_confirm" required="true" name="password_confirm" data-parsley-equalto='#password'>
        </div>

        <input type="submit" class="btn btn-primary" name="register" value="Inscription">


      </form>
    </div>
  </div>


  <?php include('partials/_footer.php'); ?>
