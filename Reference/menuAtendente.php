<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Atividade 29/03</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<?php
			$nroTipoPg = 2;
			include "validaSessao.php";
		?>
	</head>
	<body>
		<header>
			<hr>
			<h2><center>Atividade 29/03 - Painel Atendente - Gabriel Braz</center></h2>
			<hr>
		</header>


		<div>
			<fieldset>
				<legend>
					<p>Painel</p>
				</legend>
				
					<table border="0" style ="margin : 0 auto">
						
						<tr>
							<th>
								<a href="cadastroCrianca.php">
									<input type="button" value="Cadastrar Crianças"/>
								</a>
							</th>
							<th>
								<a href="listarCriancas.php">
									<input type="button" value="Listar Crianças Cadastradas"/>
								</a>
							</th>
							<th>
								<a href="editarPermanencia.php">
									<input type="button" value="Editar Permanencia"/>
								</a>
							</th>
							<th>
								<! CONTADOR CRIANÇAS USANDO O BRINQUEDO >
							</th>
						</tr>
						
						<tr>
							<th colspan="3">
							<?php
								include "conexao.php";
								$sql = "SELECT * FROM permanencia_tb";
								$contatos = $conex -> prepare($sql);
								$contatos -> execute();
								$qtd = $contatos -> rowCount();
								$contatos= NULL;
								
								
								include "conexao.php";
								$sql = "SELECT * FROM brinquedo_tb
										WHERE idBrinquedo = 1";
								$contatos = $conex -> prepare($sql);
								$contatos -> execute();
								
								foreach($contatos as $bolacha){
									$limiteCrianca = $bolacha['limiteCrianca'];
									echo"$qtd de $limiteCrianca Permanências Ocupadas";
								}
								
								$contatos= NULL;
								
							?>
							</th>
						</tr>
					</table>
				
				
				<hr>
				
				<a href="logOut.php">
					<input class="botaoTop" type="button" value="Logout" name="logout" align="center">
				</a>
				
			</fieldset>
			
			
		</div>

	</body>
</html>