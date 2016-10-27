<article class="media status-media">
  <div class="pull-left">
    <img src="<?= get_avatar($user->email) ?>" alt="<?= $user->pseudo ?>" class="media-object" />
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?= $user->pseudo ?></h4>
    <p><i class="fa fa-clock-o"></i><time class="timeago" datetime="<?= $micropost->created_at ?>"><?= $micropost->created_at ?></time></p>
    <?= $micropost->content ?>
  </div>
</article>
