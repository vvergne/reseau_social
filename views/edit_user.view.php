<?php $title="Page de profil "; ?>
<?php include('partials/_header.php'); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <div class="row">

<?php if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')) :   ?>
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Edition mon profil</h3>
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
        <div class="col-md-12">
          <div class="form-group">
            <label for="avatar">Changer ma photo de profil</label>
            <input type="file" name="avatar" id="avatar" />
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


<!-- SCRIPT -->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="libraries/uploadify/jquery.uploadify.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="libraries/parsley/parsley.min.js"></script>
<script src="libraries/parsley/i18n/fr.js"></script>
<script type="text/javascript">
  window.ParsleyValidator.setLocale('fr');
  <?php $timestamp = time(); ?>
  $(function() {
      $("#avatar").uploadify({
          'buttonText'        : 'Parcourir',
          'fileObjName'       : 'avatar',
          'fileTypeDesc'      : 'Image Files',
          'fileTypeExts' : '*.gif; *.jpg; *.jpeg; *.png',
          'formData'     : {
  					'timestamp' : '<?php echo $timestamp;?>',
  					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
            'user_id'   : "<?php get_session('user_id') ?>"
  				},
          swf           : 'libraries/uploadify/uploadify.swf',
          uploader      : 'libraries/uploadify/uploadify.php',
          width         : 120
      });
  });
</script>
</body>
</html>
