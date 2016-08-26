<?php

if(isset($_SESSION['notification']['message'])): ?>
    <div class="container">
    <div class="alert alert-<?= $_SESSION['notification']['type'] ?>">
    <button type="button" class="close" aria-hidden="true" data-dismiss="alert" name="button">&times;</button>
    <h4><?= $_SESSION['notification']['message'] ?></h4>
    </div>
  </div>
<?php $_SESSION['notification'] = []; ?>
<?php endif; ?>
