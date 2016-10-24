<?php $title="Liste des utilisateurs "; ?>
<?php include('partials/_header.php'); ?>
<?php include('locales/menu.php'); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h2>Liste des utilisateurs </h2>
    <?php foreach (array_chunk($users, 4) as $user_set): ?>
      <div class="row users">
        <?php foreach ($user_set as $user): ?>
          <div class="col-md-3 user-block">
            <a href="profile.php?id=<?=$user->id?>">
              <img  src="<?= get_avatar($user->email) ?>" alt="image de <?= e($user->pseudo) ?>" class=" avatar img-circle" />
            </a>
            <h4 class="user-block-username">
              <?= e($user->pseudo) ?>
            </h4>
          </div>
        <?php endforeach ; ?>
      </div>
    <?php endforeach ; ?>
    
    	 <div id="pagination"><?= $pagination ?></div>

  </div>
</div>

  <?php include('partials/_footer.php'); ?>
