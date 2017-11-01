<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Nova Diretoria</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-8">
      <label for="name">Nome da Diretoria</label>
      <input type="text" class="form-control" name="customer['dir_nome']">
    </div>


      <div class="row">
      <label for="campo1">Ativo
      <input type="checkbox" class="form-control" name="customer['dir_ativo']" value="1"></label>
    </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>