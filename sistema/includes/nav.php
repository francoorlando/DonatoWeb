		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
			<?php 
				if($_SESSION['rol'] == 1){
			 ?>
				<li class="principal">

					<a href="#">Usuarios</a>
					<ul>
						<li><a href="registro_usuario.php">Nuevo Usuario</a></li>
						<li><a href="lista_usuarios.php">Lista de Usuarios</a></li>
					</ul>
				</li>
		
				<li class="principal">
					<a href="#">Clientes</a>
					<ul>
						<li><a href="registro_cliente.php">Nuevo Cliente</a></li>
						<li><a href="lista_clientes.php">Lista de Clientes</a></li>
					</ul>
				</li>
	
				<li class="principal">
					<a href="#">Contratos</a>
					<ul>
						<li><a href="registro_contrato.php">Nuevo Contrato</a></li>
						<li><a href="lista_contrato.php">Contratos</a></li>
					</ul>
				</li>
				<?php } ?>
			</ul>
		</nav>