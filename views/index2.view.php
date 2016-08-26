<?php $title="Accueil "; ?>
<?php include('includes/constants.php'); ?>
<?php include('partials/_header.php'); ?>
<?php include('partials/_flash.php'); ?>


  <div CLASS="main-content">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenue ! </h1>
        <p>Inscrivez vous rapidement et aisement !</p>
        <p><a class="btn btn-primary btn-lg" href="register.php" role="button">Inscription &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Inscription</h2>
          <p>Rejoignez le Réseau social <?php echo WEBSITE_NAME ; ?> !  </p>
          <p><a class="btn btn-default" href="register.php" role="button">Inscription &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Connexion</h2>
          <p>Connectes toi ! . </p>
          <p><a class="btn btn-default" href="login.php" role="button">Connexion  &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
    </div>


<?php include('partials/_footer.php'); ?>
