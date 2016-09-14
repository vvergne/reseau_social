<?php $title="Page de profil "; ?>
<?php include('partials/_header.php'); ?>

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

        <?php if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')) : ?>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Completer mon profil</h3>
          </div>
          <div class="panel-body">
            <?php include('partials/_errors.php'); ?>

            <form data-parsley-validate  method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Nom <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control" value="<?= get_input('name') ?: e($user->name) ?>" placeholder="John" required="true">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="city">Ville <span class="text-danger">*</span></label>
                    <input type="text" name="city" id="city" class="form-control" value="<?= get_input('city') ? : e($user->city) ?>" required="true">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="country">Pays <span class="text-danger">*</span></label>
                    <input type="text" name="country" id="country" required="true" class="form-control" value="<?= get_input('country') ? : e($user->country) ?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sex">Sexe <span class="text-danger">*</span></label>
                    <select required="true" class="form-control" name="sex">
                      <option value="H" <?= $user->sex == "H" ? "selected" : "" ?>>
                        Homme
                      </option>
                      <option value="F"  <?= $user->sex == "F" ? "selected" : "" ?>>
                        Femme
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" id='twitter' class="form-control" value="<?= get_input('twitter') ?: e($user->twitter) ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="github">Github</label>
                  <input type="text" name="github" id="github" class="form-control" value="<?= get_input('github') ? : e($user->github) ?>">
                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="available_for_hiring">
                      <input type="checkbox" name="available_for_hiring" id="available_for_hiring" <?= $user->available_for_hiring ? "checked" : "";  ?>>
                      Disponible pour emploi ?
                    </label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="description">Biographie</label>
                    <textarea name="description" id="description" rows="10" cols="30" class="form-control" placeholder="Parlez un peu de vous ! "><?=  get_input('description') ? : e($user->description) ?></textarea>
                  </div>
                </div>
              </div>

              <input type="submit" class="btn btn-primary" name="update" value="Valider">

            </form>

          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  </div>
</div>


<?php include('partials/_footer.php'); ?>
