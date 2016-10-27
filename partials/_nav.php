
  <?php require('includes/fonctions.php'); ?>
  <?php require('locales/menu.php'); ?>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"> <?= WEBSITE_NAME ; ?></a>
          <a class="navbar-brand" href="list_users.php">Liste des utilisateurs</a>
        </div>
        <?php  if(is_logged_in()): ?>
          <a class="navbar-brand pull-right " href="profile.php?=id'<?= get_session('user_id')?>">Mon profil</a>
          <a class="navbar-brand pull-right " href="edit_user.php?=id'<?= get_session('user_id')?>">Editer profil</a>
          <a class="navbar-brand pull-right" href="share_code.php">Partager code</a>
          <a class="navbar-brand pull-right" href="logout.php">Deconnection</a>
        <?php else: ?>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Connexion</button>
          </form>
        </div><!--/.navbar-collapse -->
      <?php endif ; ?>
      </div>
    </nav>
