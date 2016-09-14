<?php $title="Partage ton code "; ?>
<?php include('partials/_header.php'); ?>
<?php require('bootstrap/locale.php'); ?>


  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div id="main-content-share-code" >
      <form class="" action="" method="post">
          <textarea name="code" id="code" placeholder="Tapez votre code... " required="required" ><?= e($code); ?></textarea>
          <div class="btn-group nav">
            <a href="share_code.php" class="btn btn-danger">Tout effacer</a>
            <input class="btn btn-success" type="submit" name="save" value="Enregister">
          </div>
        </form>
      </div>
    </div>






        <!-- SCRIPT -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="assets/js/tabby.js"></script>
        <script>
          $("#code").tabby();
          $("#code").height($(window).height()-200)
        </script>
      </body>
    </html>
