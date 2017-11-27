<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>

<?php $db = open_database(); ?>

<h1>Admin</h1>
<hr />

<?php if($db) : ?>

<!--teste-->
	<!--<div class="row">
		<div class="col-xs-4 col-sm-3 col-md-2">
			<a href="servidores/add.php" class="btn btn-primary">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-plus"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Cadastrar Servidor</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="missao/add.php" class="btn btn-primary">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-plus"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Cadastrar Missão</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="diretoria/add.php" class="btn btn-primary">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-plus"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Cadastrar Diretoria</p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<hr>
	<div class="row">
	<div>
		<h1>Visualização</h1>
	</div>	-->	

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="servidores" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-user fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Servidores</p>							
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="missao" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-plane fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Missões</p>							
					</div>
				</div>
			</a>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="diretoria" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-flag fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Diretorias</p>							
					</div>
				</div>
			</a>
		</div>
	</div>


<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO: </strong> Não Foi possível Conectar ao Banco!</p>
	</div>
<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>