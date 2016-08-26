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
                  <a href="mailto:<?= e($user->email) ?>"> <?= e($user->email) ?></a>
                </div>
              </div>
          </div>
        </div>

      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Completer mon profil</h3>
          </div>
          <div class="panel-body">
            <?php include('partials/_errors.php'); ?>

            <form  method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Nom <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="John" required="true">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="city">Ville <span class="text-danger">*</span></label>
                    <input type="text" name="city" id="city" class="form-control" value="" required="true">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="country">Pays <span class="text-danger">*</span></label>
                    <input type="text" name="country" id="country" required="true" class="form-control" value="">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sex">Sexe <span class="text-danger">*</span></label>
                    <select class="form-control" name="sex">
                      <option value="H">
                        Homme
                      </option>
                      <option value="F">
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
                    <input type="text" name="Twitter" id='twitter' class="form-control" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="github">Github</label>
                  <input type="text" name="github" id="github" class="form-control" value="">
                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="available_for_hire">
                      <input type="checkbox" name="available_for_hire" id="available_for_hire" value="">
                      Disponible pour emploi ?
                    </label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="bio">Biographie</label>
                    <textarea name="bio" id="bio" rows="10" cols="30" class="form-control" placeholder="Parlez un peu de vous ! "></textarea>
                  </div>
                </div>
              </div>

              <input type="submit" class="btn btn-primary" name="update" value="Valider">

            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<?php include('partials/_footer.php'); ?>
