<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once "css.php" ?>
  </head>
    <body class="nav-md">
        <?php include_once 'autoload.php';?>
          <div class="container body">
            <div class="main_container">
                <?php include_once 'app/paginas/menu.php';?>
                <div class="right_col" role="main">
                    <?php include_once 'app/paginas/conteudo.php';?>
                </div>
                <?php include_once 'app/paginas/footer.php';?>
        </div>
      </div>
      <?php include_once "js.php"; ?>
    </body>
</html>
