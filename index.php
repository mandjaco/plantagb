<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>PLANTA | Plataforma do Mangal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

	<style>
		.espaceador{
			padding-top:40px;
		}

		#sub-rodape{
			background-color: #32CD32;
			padding: 15px 10px 15px 10px;
			color:white;
		}

		#sub-rodape a{
			color:white;
		}

	</style>


	<style>
		
	</style>


	<!--FORMATAÇÃO DA SUB-RODAPE DA PAGINA -->
	<link href="css/styless.css" rel="stylesheet">
</head>
<body>
<?php include('includes/header.php');?>

  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
			<div class="banner">
				<div class="container">
					<h1 class="wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> 
					Título de Carousel 1</h1>
				</div>
			</div>
			<div class="container">
            <div class="carousel-caption">
              <p>Descrição em sintise do Primeiro Carousel de imagem da Plataforma PLANTA. 
			  Descrição em sintise do Primeiro Carousel de imagem da Plataforma PLANTA.</p>
              <p><a class="btn btn-lg btn-success" href="#" role="button">Ler mais...</a></p>
			  &nbsp;&nbsp;
            </div>
          </div>
        </div>
        <div class="item">
			<div class="banner">
				<div class="container">
					<h1 class="wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> 
					Título de Carousel 2</h1>
				</div>
			</div>
			<div class="container">
				<div class="carousel-caption">
				<p>Descrição em sintise do Segundo Carousel de imagem da Plataforma PLANTA. 
				Descrição em sintise do Segundo Carousel de imagem da Plataforma PLANTA.</p>
				<p><a class="btn btn-lg btn-success" href="#" role="button">Ler mais...</a></p>
				&nbsp;&nbsp;
				</div>
			</div>
        </div>
        <div class="item">
			<div class="banner">
				<div class="container">
					<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> 
					Título de Carousel 3</h1>
				</div>
			</div>
			<div class="container">
				<div class="carousel-caption">
				<p>Descrição em sintise do Terceiro Carousel de imagem da Plataforma PLANTA. 
				Descrição em sintise do Terceiro Carousel de imagem da Plataforma PLANTA.</p>
				<p><a class="btn btn-lg btn-success" href="#" role="button">Ler mais...</a></p>
				&nbsp;&nbsp;
				</div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Seguinte</span>
      </a>
    </div><!-- /.carousel -->

		<!--- rupes ---->
	<div class="container">
		<div class="routes">

			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="color:#1ca11c; visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="#"><i class="fa fa-pagelines fa-5x"></i></a>
				</div>
				<div class="rup-rgt">
					<h3><a href="#">O MANGAL</a></h3>
					<h4>Pequena descrição sobre o componente em destaque</h4>
				</div>
					<div class="clearfix"></div>
			</div>

			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="#"><i class="fa fa-globe fa-5x"></i></a>
				</div>
				<div class="rup-rgt">
					<h3><a href="#">ARROZ E BOLANHAS</a></h3>
					<h4>Pequena descrição sobre o componente em destaque</h4>
				</div>
					<div class="clearfix"></div>
			</div>

			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="#"><i class="fa fa-leaf fa-5x"></i></a>
				</div>
				<div class="rup-rgt">
					<h3><a href="#">A BIODIVERSIDADE</a></h3>
					<h4>Pequena descrição sobre o componente em destaque</h4>
				</div>
					<div class="clearfix"></div>
			</div>
		
		</div>
	</div>
	<!--- /rupes ---->


		<div class="espaceador"></div>

		<!-- Cabeçalho dos blocos -->
		<div class="jumbotron" id="proverbio">
			<div class="container">
				<h1>PLANTA</h1>
				<p style="text-align: justify;">Plataforma sobre Paisagem do Mangal da Guiné-Bissau. <br>
				Em 2020, foi criado a Plataforma sobre paisagens de mangal da Guiné-Bissau – PLANTA a fim de combinar os esforços dos atores intervendo na area do mangal, reunindo recursos, facilitando a sua coordenação, promovendo a partilha de conhecimentos, harmonizando métodos e definir objetivos comuns nas áreas da investigação, educação, advocacia e angariação de fundos.</p>
				<p><a class="btn btn-success btn-lg" href="#" role="button">Ler mais &raquo;</a></p>
			</div>
		</div>
			<div class="clearfix"></div>

		<!-- Portfolio-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">PROJETOS</h3>
                    <h2 class="mb-5">Projetos Recentes da PLANTA</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">TITULO DO PROJETO</div>
                                    <p class="mb-0">Descrição em síntise do projeto e sobre autor encarregado pela implementação</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="images/mangrove2.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">TITULO DO PROJETO</div>
                                    <p class="mb-0">Descrição em síntise do projeto e sobre autor encarregado pela implementação</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="images/bgp1.jpg" alt="..." />
                        </a>
                    </div>
					
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">TITULO DO PROJETO</div>
                                    <p class="mb-0">Descrição em síntise do projeto e sobre autor encarregado pela implementação</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="images/bgp2.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">TITULO DO PROJETO</div>
                                    <p class="mb-0">Descrição em síntise do projeto e sobre autor encarregado pela implementação</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="images/Mangrove1.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>


		<div class="clearfix"></div>

</div>

		<!-- Sub-Rodapé da pagina -->
		<section class="content-section bg-success text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h2 class="mb-5">PLANTA</h2>
                    <h3 class="text-secondary mb-0">Guiné-Bissau</h3>
                </div>
				<br>
				<br>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
					<a href="#"><img src="./images/plantagb.png" style=" width: 150px; height: 150px;"></a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <h4><strong>Localização e Contatos</strong></h4>
						<br>
                        <p class="text-faded mb-0">34, Av. Unidade Africana, Bissau, Guiné-Bissau<br>
							geral@plantagbissau.org<br>
							+245 95 533 16 40</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
					<h4><strong>Ligações Importantes</strong></h4>
						<br>
                        <p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
						<p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
						<p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
						<p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
						<p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4><strong>Parceiros PLANTA</strong></h4>
                        <br>
                        <p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
						<p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
						<p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
						<p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
						<p class="ligacao"><a href="#" class="text-faded mb-0">Ligação 1</a></p>
                    </div>
                </div>
            </div>
        </section>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->



<!-- FORMATAÇAO DE SUB-RODAPE DA PAGINA -->

</body>
</html>