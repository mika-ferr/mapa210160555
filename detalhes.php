<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
	
		<nav>
			<ul>
				<li><a href="index.php" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Receitas" alt="Receitas">Receitas</a></li>
				<li><a href="#" title="Redes Sociais" alt="Redes Sociais">Redes Sociais</a></li>
				<li><a href="#" title="Fale Conosco" alt="Fale Conosco">Fale Conosco</a></li>
			</ul>
		</nav>
	</header>
	<main>	
		<section>
			<?php
                $id = $_GET['id'];       

				foreach($marmitas as $key => $value){
                    if($value['id'] == $id){
			?>
			<article class="detalhes">
				<img src=<?=$value['imagem'];?>>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
				<p><h4>Ingredientes:</h4></p>
				<p><?=$value['ingredientes'];?></p>
				<p><h4>P = R$<?=$value['p'];?></h4></p>
				<p><h4>M = R$<?=$value['m'];?></h4></p>
				<p><h4>G = R$<?=$value['g'];?></h4></p>
				<p>Faça seu pedido pelo nosso Whatsapp:</p>
				<p>(44) - 2536-2020 </p>
				
			</article>
			<?php
                    }
				}
			?>
			
		</section>


         <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <nav>
			<ul>
				<li><a href="index.php" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Receitas" alt="Receitas">Receitas</a></li>
				<li><a href="#" title="Redes Sociais" alt="Redes Sociais">Redes Sociais</a></li>
				<li><a href="#" title="Fale Conosco" alt="Fale Conosco">Fale Conosco</a></li>
			</ul>
                </header>              
            </div>
        </article>
	</main>

	<footer>
	<p>Ademir Ferreira Leite RA-21016055-5  MAPA BACK END I    UNICESUMAR:2022</p>
	</footer>
</body>
</html>