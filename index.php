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
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Receitas" alt="Receitas">Receitas</a></li>
				<li><a href="#" title="Redes Sociais" alt="Redes Sociais">Redes Sociais</a></li>
				<li><a href="#" title="Fale Conosco" alt="Fale Conosco">Fale Conosco</a></li>
			</ul>
		</nav>
	</header>	
	<main>
		<div class="main_cta">
			<div class="main_cta_logo">
				<img src="img/logo.png"/>	
			</div>
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Da nossa cozinha para sua mesa, sempre feito com amor e carinho para você.</h1>
                    </header>
                    <p> As melhores refeições que você já experimentou!</p>                 
         		</div>			
            </article>	
        </div>
		<section class="main_marmitas">
			<header class="main_marmitas_header">
				<h1>Conheça as Melhores Marmitas</h1>
				<p>Escolha a sua e faça seu pedido!</p>
			</header>
			<?php
				foreach($marmitas as $key => $value){
			?>
			<article>
				<a href="detalhes.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 80);?>...</p>
				<p>P = R$<?=$value['p'];?></p>
				<p>M = R$<?=$value['m'];?></p>
				<p>G = R$<?=$value['g'];?></p>
			</article>
			<?php
				}
			?>
			
		</section>
		<!--suport -->
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
        <!--3ª dobra-->
	</main>

	<footer>
	<p>Ademir Ferreira Leite RA-21016055-5  MAPA BACK END I    UNICESUMAR:2022</p>
	</footer>
</body>
</html>