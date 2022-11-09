<?php include_once("conexao.php");
$result_funkopop = "SELECT * FROM funkopop";
$resultado_funkopop = mysqli_query($conn, $result_funkopop);
?>

<html>
    <head>
        <title>Mundo Geek</title>
        <meta charset="UTF-8">
        <link href="css/funkopop.css" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <nav id="menu-h">
            <div>
                <ul>
                    <div class="site-logo"><img width="350" height="45" src="imagens/logo.png"> </div>

                    <li><a href="index.html">Página inicial</a></li>
                    <li><a href="funkopop.php" aria-current="page">Funko Pop</a></li>
                    <li><a href="chaveiros.php">Chaveiros</a></li>
                    <li><a href="canecas.php">Canecas</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                </ul>
            </div>	
        </nav>

    
    
    
        <div style="height:55px;" aria-hidden="true"></div>
        
		
		<div class="container theme-showcase" role="main">

			<div class="produtos">
				<?php while($rows_funkopop = mysqli_fetch_assoc($resultado_funkopop)){ ?>
					<div class="col-sm-6 col-md-4">
						<div class="card">
                        
                       
                
                            <?php
                                
                                echo ' <img width="200" height="175" src="data:image/jpeg;base64,'.base64_encode($rows_funkopop['imagem'] ).'" />  ';  
                        
                            ?> 
                         

                        

							 <!--<img src="imagens/produto.png" alt="...">-->
                            <hr class="horizontal">
							<div class="caption text-center">
                                <a class="nome" href="detalhes_funkopop.php?id_curso=<?php echo $rows_funkopop['id']; ?>"><h3><?php echo $rows_funkopop['nome']; ?></h3></a>
							    <strong><?php echo $rows_funkopop['preco']; ?> </strong>
                                <p><a href="detalhes_funkopop.php?id_curso=<?php echo $rows_funkopop['id']; ?>" class="botão" role="button">Detalhes</a> </p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>