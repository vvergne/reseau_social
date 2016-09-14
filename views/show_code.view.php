<?php $title="Affichage du code "; ?>
<?php include('partials/_header.php'); ?>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div id="main-content-share-code" >
      <pre class="prettyprint lineums"><?php echo e($data->code); ?>
      </pre>
      <div class="btn-group nav">
        <a href="share_code.php?id=<?= $_GET['id']; ?>" class="btn btn-success">Cloner</a>
        <a href="share_code.php" class="btn btn-primary">Nouveau</a>
      </div>
      </div>
    </div>






        <!-- SCRIPT -->
        <script src="https://cdn.rawgit.com/beautify-web/js-beautify/1.6.4/js/lib/beautify.js"></script>
        <script src="https://cdn.rawgit.com/beautify-web/js-beautify/1.6.4/js/lib/beautify-css.js"></script>
        <script src="https://cdn.rawgit.com/beautify-web/js-beautify/1.6.4/js/lib/beautify-html.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
      </body>
    </html>
