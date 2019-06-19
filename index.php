<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Cars Sale a Auto mobile Category Website Template | Home :: w3layouts</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<link href="class.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<?php
	$item = 0;
	include "Menu.php";
	
	?>

<!-- Se quiser usar.
	<div class="main">
		<div class="content-box">
			<div class="wrap">
				<div class="banner2">
					<a href="#">
						<div class="price">$5000</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="content-box1">
			<div class="wrap">
				<div class="banner2">
					<a href="#">
						<div class="price">$4000</div>
					</a>
				</div>
			</div>
		</div>
	</div>
-->

<!-- Se quiser usar.
	<div class="main-content">
		<div class="wrap">
			<div class="main-box">
				<div class="box_wrapper">
					<h1>Carros a venda</h1>
				</div>
				<div class="section group">
					<div class="col_1_of_4 span_1_of_4">
						<img src="images/pic.jpg" alt="" />
						<div class="grid_desc">
							<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
							<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
							<div class="price1" style="height: 19px;">
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span>
							</div>
						</div>
						<div class="Details">
							<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
								<span></span>
							</a>
						</div>
					</div>
-->
		<?php
			/*
			include "carro.incluir.php";
			*/
			include "lista.carros.php"; // text.
		?>					
				<div class="section group">
				<?php
				for( $i = 0; $i < count($codigovei); $i++)
				{
				?>
				<div class="carros">
					<div class="col_1_of_4 span_1_of_4">
						<img class="imagem" src="images/<?php echo $fotocarro1[$i]; ?>" alt="" />
							<div class="grid_desc">
								<p class="title"> <?php echo $marca[$i]; ?> </p>
								<p class="title1"> <?php echo $descricao[$i]; ?>. </p>
								<p class="title1"> <?php echo $portas[$i]; ?>. </p>
								<p class="title1"> <?php echo $ano_fab[$i]; ?> </p>
								<p class="title1"> <?php echo $ano_mod[$i]; ?> </p>
								<p class="title1"> <?php echo $placa[$i]; ?> </p>
								<p class="title1"> <?php echo $dtinclu[$i];?> </p>
								<?php /* ?>
								<p class=" <?php echo $ativo[$i] ?> ">Ativo:</p>
								<?php */ ?>
								
								<div class="price1" style="height: 19px;">
									<span class="reducedfrom">Valor: R$<?php echo $valor[$i]; ?> </span> <br>
									<span class="reducedfrom">Cor: <?php echo $cor[$i]; ?> </span> <br>
									<span class="reducedfrom">Modelo: <?php echo $modelo[$i]; ?> </span> <br>
								</div>
							</div> <br>
							<div class="Details">
								<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
									<span></span>
								</a>
							</div>
					</div>
				</div>
				<?php
					}
				?>	
					<div class="clear"></div>
				
			</div>
		</div>
	</div>
	<div class="copy-right">
		<div class="wrap">
			<p>Copyright &copy; 2013 Car Sale. All Rights Reserved | Design by
				<a href="http://w3layouts.com/"> W3layouts</a>
			</p>
		</div>
	</div>
</body>

</html>