<?php include_once("conexao.php");
$id_curso = $_GET['id_curso'];
$result_funkopop = "SELECT * FROM canecas WHERE id='$id_curso'";
$resultado_funkopop = mysqli_query($conn, $result_funkopop);
$row_funkopop = mysqli_fetch_assoc($resultado_funkopop);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Detalhes</title>
		<link href="css/detalhes.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>

		
	<nav id="menu-h">
            <div>
                <ul>
                    <div class="site-logo"><img width="350" height="45" src="imagens/logo.png"> </div>

                    <li><a href="index.html">Página inicial</a></li>
                    <li><a href="funkopop.php">Funko Pop</a></li>
                    <li><a href="chaveiros.php">Chaveiros</a></li>
                    <li><a href="canecas.php" aria-current="page">Canecas</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                </ul>
            </div>	
        </nav>
        
		
		<div style="height:55px;" aria-hidden="true"></div>

		<div class="container theme-showcase" role="main">
			


			<!-- Início da Fileira de itens --> 

			<div class="fileira">
        <div class="foto">
            
			<?php
                                
				echo ' <img width="300" height="280" src="data:image/jpeg;base64,'.base64_encode($row_funkopop['imagem'] ).'" />  ';  
									   
			?> 

		</div>
        <div class="texto">
            
			<div class="vertical"></div>
			<table>
                <tr>
                    <td><h1><?php echo $row_funkopop['nome']; ?></h1></td>
                </tr>
            </table>
            
			<p><strong>Código:</strong> <?php echo $row_funkopop['codigo']; ?></p>
			<p><strong> <?php echo $row_funkopop['preco']; ?></strong></p>
            <p><a href="#" class="botão" role="button">Comprar</a> </p>
     
        </div>
        
        </div>
        <p><strong>Descrição:</strong> <?php echo $row_funkopop['descricao']; ?></p>
    </div>

    <!-- Fim da Fileira de itens --> 



		
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>