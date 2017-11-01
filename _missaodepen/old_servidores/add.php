<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastramento de Servidor </h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="customer['serv_nome']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Matrícula</label>
      <input type="text" class="form-control" name="customer['serv_matricula']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Email</label>
      <input type="email" class="form-control" name="customer['serv_email']">
    </div>
  </div>
  
    <div>
      <label for="campo1">Ativo
      <input type="checkbox" class="form-control" name="customer['serv_ativo']"></label>
    </div>
  
  <hr>  
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>