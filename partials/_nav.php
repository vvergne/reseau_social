  <?php require('includes/fonctions.php') ?>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar">dsrsrrr</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Réseau Social de <?= WEBSITE_NAME ; ?></a>
        </div>
        <?php if(is_logged_in()): ?>
          <a class="navbar-brand" href="profile.php?=id'<?= get_session('user_id')?>">Page de Profil</a>
          <a class="navbar-brand" href="logout.php">Deconnexion</a>
        <?php else: ?>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      <?php endif ; ?>
      </div>
    </nav>
