<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar diretoria</h2>

<form action="edit.php?id=<?php echo $customer['dir_id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome da diretoria</label>
      <input type="text" class="form-control" name="customer['dir_nome']" value="<?php echo $customer['dir_nome']; ?>">
    </div>

       <div class="row">
       <label for="campo1">Ativo
      <input type="checkbox" class="form-control" name="customer['dir_ativo']" value="<?php echo $customer['dir_ativo']; ?>"</label>
    </div>
</div>

    
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>