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


  </div>
</div>


<?php include('partials/_footer.php'); ?>
