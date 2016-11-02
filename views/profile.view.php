<?php $title="Page de profil "; ?>
<?php include('partials/_header.php'); ?>
<?php include('locales/menu.php'); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Profil de <?= e($user->pseudo) ?></h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-5">
                <img  src="<?= get_avatar($user->email) ?>" alt="image de <?= e($user->name) ?>" class="img-circle" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <strong><?= e($user->pseudo)?></strong><br>
                <a href="mailto:<?= e($user->email) ?>"> <?= e($user->email) ?></a> <br>
                <?=
                $user->country && $user->city ? '<i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;'.e($user->country).'-'.e($user->city).'<br>' : '';
                ?>
                <a href="https://www.google.com/maps?q=<?= e($user->city).'+'.e($user->country) ?>" target="_blank">Voir sur Maps</a> <br>
              </div>
              <div class="col-md-6">
                <?=
                $user->twitter ? '<i class="fa fa-twitter" aria-hidden="true"></i>&nbsp;<a href="//twitter.com/'.e($user->twitter).'">@'.e($user->twitter).'</a><br>' : '';
                ?>
                <?=
                $user->github ? '<i class="fa fa-github" aria-hidden="true">&nbsp;</i><a href="//github.com/'.e($user->github).'">'.e($user->github).'</a><br>' : '';
                ?>
                <?=
                $user->sex == 'H' ? '<i class="fa fa-male"></i>' : '<i class="fa fa-female"></i>';
                ?>
                <?=
                $user->available_for_hiring ? "Disponible pour emploi" : 'A déja trouvé du travail';
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 well">
                <h4>Description de <?= e($user->pseudo) ?></h4>
                <p style="font-size:110%;">
                  <?= $user->description ? nl2br(e($user->description)) : ' Rien pour le moment'; ?>
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-6">
        <?php if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')): ?>
          <div class="status-post">
            <form class="" action="micropost.php" method="post" data-parsley-validate>
              <div class="form-group">
                <label for="content" class="sr-only">Statut :</label>
                <textarea class="form-control" name="content" id="content" placeholder="Insérez votre message ici..." rows="3" required="require" minlength='3' maxlength="140"></textarea>
              </div>
              <div class="form-group statut-post-submit">
                <input class="btn btn-primary" type="submit" name="publish" value="Publier">
              </div>
            </form>
          </div>
        <?php endif ; ?>

        <?php if (count($microposts) != 0): ?>
          <?php foreach ($microposts as $micropost): ?>
            <?php include('partials/_micropost.php'); ?>
          <?php endforeach; ?>
        <?php else: ?>
          <p>
            Cet utilisateur n'a rien posté pour le moment ....
          </p>
        <?php endif;?>

      </div>
    </div>
  </div>
  <script src="/assets/js/jquery-3.1.1.min.js"></script>
  <script src="/assets/js/jquery.timeago.fr.js"></script>
  <script src="/assets/js/jquery.timeago.js" type="text/javascript"></script>
  <script type="text/javascript">
  window.ParsleyValidator.setLocale('fr');
  $(document).ready(function() {
    $(".timeago").timeago();
  });
</script>

<?php include('partials/_footer.php'); ?>
