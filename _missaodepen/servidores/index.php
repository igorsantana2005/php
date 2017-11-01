<?php 
	require_once('functions.php');
	index();
 ?>
 <?php include(HEADER_TEMPLATE); ?>

 <header>
 	<div class="row">
 		<div class="col-sm-6">
 			<h2>Servidores</h2>
 		</div>
 		<div class="col-sm-6 text-right h2">
 			<a href="add.php" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Servidor</a>
 			<a href="index.php" class="btn btn-default"><i class="fa fa-refresh"></i> Atualizar</a>
 		</div>
 	</div>
 </header>

 <?php if(!empty($_SESSION['message'])) : ?>
 	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
 		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 		<?php echo $_SESSION['message']; ?>
 		
 	</div>
 	<?php clear_messages(); ?>
 <?php endif; ?>

 <hr>
 <table class="table table-hover">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th width="30%">Nome</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php if($servidor): ?>
 			<?php foreach($servidor as $customer): ?>
 				<tr>
 					<td><?php echo $customer['dir_id']; ?></td>
 					<td><?php echo $customer['dir_nome']; ?></td>
 					
 			
 					<td class="actions text-right">
 						<a href="view.php?id=<?php echo $customer['dir_id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
 						<a href="edit.php?id=<?php echo $customer['dir_id'] ;?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
 						<a href="delete.php?id=<?php echo $customer['dir_id'] ;?>" class="btn btn-sm btn-danger" cata-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>"><i class="fa fa-trash"></i> Excluir</a>
 					</td>
 				</tr>
 			<?php endforeach; ?>
 		<?php else: ?>
 			<tr>
 				<td colspan="6">Nenhum Registro Encontrado.</td>
 			</tr>
 		<?php endif; ?>
 	</tbody>
 </table>

 <?php include('modal.php'); ?>
 <?php include(FOOTER_TEMPLATE); ?>