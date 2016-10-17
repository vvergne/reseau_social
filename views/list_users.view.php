<?php $title="Liste des utilisateurs "; ?>
<?php include('partials/_header.php'); ?>
<?php include('locales/menu.php'); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h2>Liste des utilisateurs </h2>

    <?php foreach ($users as $user): ?>
        <div class="col-md-2 col-md-offset-1 user-block">
          <a href="profile.php?id=<?=$user->id?>">
            <img  src="<?= get_avatar($user->email) ?>" alt="image de <?= e($user->pseudo) ?>" class="img-circle" />
          </a>
            <h4 class="user-block-username">
              <?= e($user->pseudo) ?>
            </h4>
        </div>
    <?php endforeach ?>
</div>


<?php include('partials/_footer.php'); ?>
