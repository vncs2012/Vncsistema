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
      <?php include_once "app/assets/notify/notify.php"?>
<!-- 
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informativo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>-->
    
    </body>
</html> 
