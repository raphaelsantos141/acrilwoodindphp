<!-- Site criado por: @raphael.adesign
 
Atualizado: 03/09/2024

-->

<?php
include 'db.php';

// Buscar conteúdo da seção "sobre_nos"
$query = $pdo->query("SELECT conteudo FROM conteudo WHERE secao = 'sobre_nos'");
$sobreNos = $query->fetch(PDO::FETCH_ASSOC)['conteudo'];
?>

<!DOCTYPE html>
<html lang="br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acrilwood Ind.</title>
  <meta name="description"
    content="Manipulamos produtos de acrílico e MDF com qualidade e design. Desde displays, Pontos de vendas até móveis e peças decorativas.">
  <meta name="author" content="ACrilwood Ind">

  <!-- Favicons
    ================================================== -->
  <link rel="icon" type="image/x-icon" href="img/Logo_Fabrica_Icone.png">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

  <!-- Stylesheet
    ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/modernizr.custom.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <div id="top"></div><!--Botão Voltar ao topo-->
  <a href="https://wa.me/5511947419444/" class="whatsapp-float" target="_blank">
    <img src="https://res.cloudinary.com/criarmeulink/image/upload/v1596586487/whatsapp_64_atbpue.png" alt="WhatsApp">
  </a>
  <!-- Header -->
  <header id="header">
    <div class="introindex">
      <!-- Vídeo de fundo com YouTube -->
      <div class="video-background">
        <iframe src="https://www.youtube.com/embed/R5dRgn-YM_8?autoplay=1&mute=1&loop=1&playlist=R5dRgn-YM_8&controls=0&modestbranding=1"
          frameborder="0"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen>
        </iframe>
        <!-- Camada de escurecimento -->
        <div class="overlay"></div>
      </div>

      <div class="containerindex">
        <div class="row">
          <div class="intro-text">
            <br>
            <img src="img/Logo_Fabrica_White.png" class="Logo acrilwood ind." width="800" height="100">
            <br> <br> <br>
            <hr>
            <p>Acrílicos • Modernidade • Versatilidade</p>
            <a href="#about" class="btn btn-intro btn-lg page-scroll">Saiba Mais</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Navigation -->
  <div id="nav">
    <nav class="navbar navbar-custom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i
              class="fa fa-bars"></i> </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-main-collapse">
          <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li class="hidden"> <a href="#page-top"></a> </li>
            <li> <a class="page-scroll" href="#about">Sobre Nós</a> </li>
            <li> <a class="page-scroll" href="#portfolio">Portfolio</a> </li>
            <li> <a class="page-scroll" href="#contact">Contato</a> </li>
            <!-- <li> <a class="page-scroll" href="servicos.html">Serviços</a> </li>-->
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['logado']) && $_SESSION['logado']): ?>
              <li><a href="logout.php" class="btn btn-default">Logout</a></li>
            <?php else: ?>
              <li><a href="login.php" class="btn btn-default" id="loginButton">Login</a></li>
            <?php endif; ?>
          </ul>

        </div>
      </div>
    </nav>
  </div>
  <!-- About Section -->

  <!-- Sobre Nós Section -->
  <div id="about">
    <div class="container">
      <div class="section-title text-center">
        <h2>Sobre nós</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-12 text-center"><img src="img/Logo_Fabrica_Icone.png" class="img-responsive"></div>
        <div class="col-md-8 col-md-offset-2">
          <div class="about-text">
            <p><?php echo $sobreNos; ?></p> <!-- Aqui será exibido o conteúdo dinâmico -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Section -->
  <div id="portfolio">
    <div class="container">
      <div class="section-title text-center center">
        <h2>Portfolio</h2>
        <hr>
      </div>
      <div class="categories">
        <ul class="cat">
          <li>
            <h2>Modelo de Produto</h2>
            <br>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">Todos</a></li>
              <li><a href="#" data-filter=".adesivos">Adesivos</a></li>
              <li><a href="#" data-filter=".baldes">Baldes</a></li>
              <li><a href="#" data-filter=".bandejas">Bandejas</a></li>
              <li><a href="#" data-filter=".banner">Banner </a></li>
              <li><a href="#" data-filter=".brindes">Brindes</a></li>
              <li><a href="#" data-filter=".clipstrip">Clip Strip</a></li>
              <li><a href="#" data-filter=".crossmerchandising">Cross Merchandising</a></li>
              <li><a href="#" data-filter=".decor">Decoração</a></li>
              <li><a href="#" data-filter=".display_balcao">Display de Balcão</a></li>
              <li><a href="#" data-filter=".display_chao">Display de Chão</a></li>
              <li><a href="#" data-filter=".display_gondola">Display de Gondola (clip strip / Carona)</a></li>
              <li><a href="#" data-filter=".display_mesa">Display de Mesa</a></li>
              <li><a href="#" data-filter=".display_parede">Display de Parede</a></li>
              <li><a href="#" data-filter=".display_vitrine">Display de Vitrine</a></li>
              <li><a href="#" data-filter=".glorifier">Glorifier</a></li>
              <li><a href="#" data-filter=".logotipoaltorelevo">Letreiro</a></li>
              <li><a href="#" data-filter=".neon">Letreiro Neon</a></li>
              <li><a href="#" data-filter=".lona">Lona com impressão</a></li>
              <li><a href="#" data-filter=".display_luminoso">Luminoso</a></li>
              <li><a href="#" data-filter=".pecatecnica">Peça Técnica</a></li>
              <li><a href="#" data-filter=".projetosespeciais">Projetos Especiais Ambientação</a></li>
              <li><a href="#" data-filter=".quiosque">Quiosque</a></li>
              <li><a href="#" data-filter=".totem">Totem</a></li>
              <li><a href="#" data-filter=".trofeu">Troféus & Medalhas</a></li>
            </ol>

            <!-- <h2>Segmento De Mercado</h2>
          <br>
          <ol class="type">
            <li><a href="#" data-filter=".alimenticio">Alimentício</a></li>
            <li><a href="#" data-filter=".bebidas">Bebidas</a></li>
            <li><a href="#" data-filter=".com_visual">Comunicação Visual</a></li>
            <li><a href="#" data-filter=".cosmeticos">Cosméticos</a></li>
            <li><a href="#" data-filter=".eletronicos">Eletrônicos</a></li>
            <li><a href="#" data-filter=".oculos">Óculos</a></li>
            <li><a href="#" data-filter=".papelaria">Papelaria</a></li>
            <li><a href="#" data-filter=".injetados">Produtos Injetados</a></li>
            <li><a href="#" data-filter=".relogios">Relógios</a></li>
            <li><a href="#" data-filter=".outros">Outros</a></li>
          </ol>
        </li>-->
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="row">
        <div class="portfolio-items">

          <div class="col-sm-6 col-md-3 col-lg-3 baldes && injetados">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/01-bd-transparente-large.jpg" title="Balde Transparente"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Balde Transparente</h4>
                  </div>
                  <img src="img/portfolio/01-bd-transparente-large.jpg" class="img-responsive"
                    alt="balde transparente sobre uma mesa branco com fundo azul">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 baldes && injetados">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/02-bd-rosa-large.jpg" title="Balde Rosa"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Balde Rosa</h4>
                  </div>
                  <img src="img/portfolio/02-bd-rosa-large.jpg" class="img-responsive"
                    alt="Balde rosa sobre uma mesa branco e parede azul claro">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 bandejas && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/03-bj-bacardi-large.jpg" title="Bandeja Bacardi"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Bandeja Bacardi</h4>
                  </div>
                  <img src="img/portfolio/03-bj-bacardi-large.jpg" class="img-responsive"
                    alt="Bandeja preta redonda com logo bacardi no centro escrito bacardi 1862">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 bandejas && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/04-bj-oldeight-large.jpg" title="Bandeja Old Eight"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Bandeja Old Eight</h4>
                  </div>
                  <img src="img/portfolio/04-bj-oldeight-large.jpg" class="img-responsive"
                    alt="Bandeja preta com fundo vermelho, possui alças e na frente escrito Old Eight">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_balcao && papelaria">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/05-db-lequehorizontal-large.jpg"
                  title="Display Microline Compactor" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display Microline Compactor</h4>
                  </div>
                  <img src="img/portfolio/05-db-lequehorizontal-large.jpg" class="img-responsive"
                    alt="Display Leque Horizontal">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_balcao && relogios">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/06-db-duplafacemontecarlo-large.jpg"
                  title="Dupla Face Fossil" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dupla Face Fossil</h4>
                  </div>
                  <img src="img/portfolio/06-db-duplafacemontecarlo-large.jpg" class="img-responsive"
                    alt="Display Dupla Face Fossil">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_chao && papelaria">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/07-dc-chaocrown-large.jpg" title="Display de Chão Crown"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display de Chão Crown</h4>
                  </div>
                  <img src="img/portfolio/07-dc-chaocrown-large.jpg" class="img-responsive" alt="Display de Chão Crown">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_chao && papelaria && projetosespeciais">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/08-dc-chaocompactor-large.jpg"
                  title="Display de Chão Compactor" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display de Chão Compactor</h4>
                  </div>
                  <img src="img/portfolio/08-dc-chaocompactor-large.jpg" class="img-responsive"
                    alt="Display de Chão Compactor">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_gondola && cosmeticos">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/09-dg-gondolapureshower-large.jpg"
                  title="Display Ponta de Gondola Pure Shower" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display Ponta de Gondola Pure Shower</h4>
                  </div>
                  <img src="img/portfolio/09-dg-gondolapureshower-large.jpg" class="img-responsive"
                    alt="Display Ponta de Gondola Pure Shower">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_gondola && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/10-dg-gondolaaperol-large.jpg"
                  title="Display de Gondola Aperol" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display de Gondola Aperol</h4>
                  </div>
                  <img src="img/portfolio/10-dg-gondolaaperol-large.jpg" class="img-responsive"
                    alt="Display de Gondola Aperol">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_vitrine && eletronicos">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/11-dv-displayvitrinesony-large.jpg"
                  title="Display Notebook e Fone Sony" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display Notebook e Fone Sony</h4>
                  </div>
                  <img src="img/portfolio/11-dv-displayvitrinesony-large.jpg" class="img-responsive"
                    alt="Display Notebook e Fone Sony">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_vitrine && relogios">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/12-dv-glorificadortechnos-large.jpg"
                  title="Glorificador Technos" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Glorificador Technos</h4>
                  </div>
                  <img src="img/portfolio/12-dv-glorificadortechnos-large.jpg" class="img-responsive"
                    alt="Glorificador Technos">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_luminoso && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/13-dl-absolutluminoso-large.jpg"
                  title="Display Luminoso Absolut" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display Luminoso Absolut</h4>
                  </div>
                  <img src="img/portfolio/13-dl-absolutluminoso-large.jpg" class="img-responsive"
                    alt="Display Luminoso Absolut">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_luminoso && cosmeticos">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/14-dl-rustyluminoso-large.jpg" title="Luminoso Rusty"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Luminoso Rusty</h4>
                  </div>
                  <img src="img/portfolio/14-dl-rustyluminoso-large.jpg" class="img-responsive" alt="Luminoso Rusty">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 trofeu && cosmeticos">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/15-tf-chillibeanstrofeu-large.jpg"
                  title="Troféu Chilli Beans" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Troféu Chilli Beans</h4>
                  </div>
                  <img src="img/portfolio/15-tf-chillibeanstrofeu-large.jpg" class="img-responsive"
                    alt="Troféu Chilli Beans">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 trofeu && com_visual">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/16-tf-mitsubishimedalha-large.jpg"
                  title="Medalha Mitsubishi" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Medalha Mitsubishi</h4>
                  </div>
                  <img src="img/portfolio/16-tf-mitsubishimedalha-large.jpg" class="img-responsive"
                    alt="Medalha Mitsubishi">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 adesivos && com_visual">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/17-ad-adesivos1.png" title="Adesivos Master Chef"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Adesivos Master Chef</h4>
                  </div>
                  <img src="img/portfolio/17-ad-adesivos1.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 adesivos && com_visual">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/18-ad-adesivosmizotakoyaki.png"
                  title="Adesivos Mizo Takoyaki" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Adesivos Mizo Takoyaki</h4>
                  </div>
                  <img src="img/portfolio/18-ad-adesivosmizotakoyaki.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 baldes && injetados">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/19-bd-BaldeHeineken.png" title="Balde de Gelo Quadrado"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Balde de Gelo Quadrado</h4>
                  </div>
                  <img src="img/portfolio/19-bd-BaldeHeineken.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 baldes && injetados">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/20-bd-tonica.png" title="Balde de Gelo"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Balde de Gelo</h4>
                  </div>
                  <img src="img/portfolio/20-bd-tonica.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 baldes && injetados">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/21-bd-baldedegelogourmet.png" title="Balde de Gelo Gourmet"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Balde de Gelo Gourmet</h4>
                  </div>
                  <img src="img/portfolio/21-bd-baldedegelogourmet.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 baldes && injetados">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/22-bd-baldegelo1litros.png" title="Balde de Gelo 1,6 litros"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Balde de Gelo 1,6 litros</h4>
                  </div>
                  <img src="img/portfolio/22-bd-baldegelo1litros.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 baldes && injetados">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/23-bd-baldeskyvodka.png" title="Balde Sky Vodka"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Balde Sky Vodka</h4>
                  </div>
                  <img src="img/portfolio/23-bd-baldeskyvodka.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 bandejas && injetados">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/24-bj-bandejaredonda.png" title="Bandeja Redonda"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Bandeja Redonda</h4>
                  </div>
                  <img src="img/portfolio/24-bj-bandejaredonda.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 bandejas && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/25-bj-bandejanatunobilis.png" title="Bandeja Natu Nobilis"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Bandeja Natu Nobilis</h4>
                  </div>
                  <img src="img/portfolio/25-bj-bandejanatunobilis.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 bandejas && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/26-bj-bandejaamstel.png" title="Bandeja Amstel"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Bandeja Amstel</h4>
                  </div>
                  <img src="img/portfolio/26-bj-bandejaamstel.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 bandejas && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/27-bjp-bandejaespolon.png" title="Bandeja Espolon"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Bandeja Espolon</h4>
                  </div>
                  <img src="img/portfolio/27-bjp-bandejaespolon.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 bandejas && alimenticio">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/28-bjp-bandejajapafood.png" title="Bandeja Japa Food"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Bandeja Japa Food</h4>
                  </div>
                  <img src="img/portfolio/28-bjp-bandejajapafood.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 brindes ">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/29-bnd-blaze.png" title="Chaveiro Aniversário"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Chaveiro Aniversário</h4>
                  </div>
                  <img src="img/portfolio/29-bnd-blaze.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 brindes ">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/30-bnd-brindereserva.png" title="Brinde Reserva"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Brinde Reserva</h4>
                  </div>
                  <img src="img/portfolio/30-bnd-brindereserva.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 crossmerchandising && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/31-cross-jameson e ballantines.png"
                  title="Cross Merchandising Jameson e Ballantines" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Cross Merchandising Jameson e Ballantines</h4>
                  </div>
                  <img src="img/portfolio/31-cross-jameson e ballantines.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 clipstrip && alimenticio">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/32-cross-delicia.png" title="Cross Merchandising Delicia"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Clip Strip Delicia</h4>
                  </div>
                  <img src="img/portfolio/32-cross-delicia.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 projetosespeciais && com_visual">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/33-projetoespecial-BEI.png" title="Premio BEI"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Premio BEI</h4>
                  </div>
                  <img src="img/portfolio/33-projetoespecial-BEI.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 projetosespeciais && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/34-projetosepeciais-arvoreteachers.png"
                  title="Árvore de Natal Teacher's" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Árvore de Natal Teacher's</h4>
                  </div>
                  <img src="img/portfolio/34-projetosepeciais-arvoreteachers.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 decor && outros">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/35-decor-ghostbusters.png"
                  title="Decoração Ghostbusters em Acrílico" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Decoração Ghostbusters em Acrílico</h4>
                  </div>
                  <img src="img/portfolio/35-decor-ghostbusters.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 decor && outros">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/36-decor-gtavi.png" title="Decoração GTA VI em Acrílico"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Decoração GTA VI em Acrílico</h4>
                  </div>
                  <img src="img/portfolio/36-decor-gtavi.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_mesa && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/37-dm-tabletent.png" title="Table Tent Absolut/Chivas"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Table Tent Absolut/Chivas</h4>
                  </div>
                  <img src="img/portfolio/37-dm-tabletent.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_mesa && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/38-dm-tabletentabsolut.png" title="Table Tent Absolut"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Table Tent Absolut</h4>
                  </div>
                  <img src="img/portfolio/38-dm-tabletentabsolut.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_parede && outros">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/39-dp-tegma.png" title="Display de Parede Tegma"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display de Parede Tegma</h4>
                  </div>
                  <img src="img/portfolio/39-dp-tegma.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_parede && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/40-dp-bacardi.png" title="Display de Parede Bacardi"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display de Parede Bacardi</h4>
                  </div>
                  <img src="img/portfolio/40-dp-bacardi.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_vitrine && oculos">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/41-dv-mormaii.png" title="Display de Vitrine Mormaii"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display de Vitrine Mormaii</h4>
                  </div>
                  <img src="img/portfolio/41-dv-mormaii.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_vitrine && oculos">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/42-dv-colcci.png" title="Display de Vitrine Colcci"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display de Vitrine Colcci</h4>
                  </div>
                  <img src="img/portfolio/42-dv-colcci.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 glorifier && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/43-gf-glorifiers.png" title="Glorifiers"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Glorifiers</h4>
                  </div>
                  <img src="img/portfolio/43-gf-glorifiers.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 glorifier && bebidas">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/44-gf-wyborowa.png" title="Glorifier Wyborowa"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Glorifier Wyborowa</h4>
                  </div>
                  <img src="img/portfolio/44-gf-wyborowa.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 logotipoaltorelevo && com_visual">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/45-lt-LetrasReserva.png" title="Reserva"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Reserva</h4>
                  </div>
                  <img src="img/portfolio/45-lt-LetrasReserva.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 logotipoaltorelevo && com_visual">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/46-lt-letrasache.png" title="Letras Ache"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Letras Ache</h4>
                  </div>
                  <img src="img/portfolio/46-lt-letrasache.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 lona && com_visual">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/47-ln-lona1.png" title="Lona Virada Paulista"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Lona Virada Paulista</h4>
                  </div>
                  <img src="img/portfolio/47-ln-lona1.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 lona && com_visual">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/48-ln-lona2.png" title="Lona Vozes Forró"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Lona Vozes Forró</h4>
                  </div>
                  <img src="img/portfolio/48-ln-lona2.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 pecatecnica && outros">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/49-pt-wps.png" title="Leitor de cadastramento WPS"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Leitor de cadastramento WPS</h4>
                  </div>
                  <img src="img/portfolio/49-pt-wps.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 pecatecnica && outros">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/50-pt-grw.png" title="Interfone em Acrílico"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Interfone em Acrílico</h4>
                  </div>
                  <img src="img/portfolio/50-pt-grw.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 quiosque && cosmeticos">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/51-q-quiosquerevlon.png" title="Quiosque Revlon"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Quiosque Revlon</h4>
                  </div>
                  <img src="img/portfolio/51-q-quiosquerevlon.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 quiosque && oculos">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/52-q-quiosquechillibeans.png" title="Quiosque Chilli Beans"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Quiosque Chilli Beans</h4>
                  </div>
                  <img src="img/portfolio/52-q-quiosquechillibeans.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 totem && relogios">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/53-tt-torregiratoriatechnos.png"
                  title="Torre Giratória Technos" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Torre Giratória Technos</h4>
                  </div>
                  <img src="img/portfolio/53-tt-torregiratoriatechnos.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 totem && papelaria">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/54-tt-crown.png" title="Totem Slim Crown"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Totem Slim Crown</h4>
                  </div>
                  <img src="img/portfolio/54-tt-crown.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 neon && outros">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/55-ltn-victorefrancisco.png" title="Neon Victor & Franco"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Neon Victor & Franco</h4>
                  </div>
                  <img src="img/portfolio/55-ltn-victorefrancisco.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 neon && outros">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/56-ltn-pablomarcal.png" title="Neon Pablo Marçal"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Neon Pablo Marçal</h4>
                  </div>
                  <img src="img/portfolio/56-ltn-pablomarcal.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 neon && outros">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/57-ltn-patacho.png" title="Neon Patacho"
                  data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Neon Patacho</h4>
                  </div>
                  <img src="img/portfolio/57-ltn-patacho.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 display_balcao && outros">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/58-db-raquete-live.png"
                  title="Display Balcão Suporte Raquete Beach Tennis" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Display Balcão Suporte Raquete Beach Tennis</h4>
                  </div>
                  <img src="img/portfolio/58-db-raquete-live.png" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div id="contact" class="text-center">
    <div class="container">
      <div class="section-title center">
        <h2>Contato</h2>
        <hr>
      </div>

      <div class="contact-links">
        <a class="link-type" linktype="email" title="Entrar em contato" href="mailto:diogo@acrilwood.com.br"
          target="_blank">
          <div class="link-type-icon">
            <img src="https://res.cloudinary.com/criarmeulink/image/upload/v1596586487/email_co0abg.png"
              alt="Entre em contato por email">
          </div>
          <div class="link-type-text">
            Entre em contato por email
          </div>
        </a>
        <a class="link-type" linktype="whatsapp" title="Entrar em contato" href="https://wa.me/5511947419444/"
          target="_blank">
          <div class="link-type-icon">
            <img src="https://res.cloudinary.com/criarmeulink/image/upload/v1596586487/whatsapp_64_atbpue.png"
              alt="Entre em contato pelo whatsapp">
          </div>
          <div class="link-type-text">
            Entre em contato pelo whatsapp
          </div>
        </a>
      </div>
    </div>


    <br><br><br><br><br><br>
    <div class="localizacao">
      <ul>
        <h2>Localização</h2>
        <hr><br>
        <li><iframe id="mapa"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14615.726909778463!2d-46.3488058!3d-23.6783994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce73f6e2713d8f%3A0x65ebcb80af85e977!2sMKT%20PDV!5e0!3m2!1spt-BR!2sbr!4v1711636281852!5m2!1spt-BR!2sbr"
            frameborder="0" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe></li>
        <br>
        <li><strong>Endereço: </strong>
          <p>R. Siqueira, 265 - Centro Ouro Fino Paulista,
            Ribeirão Pires - SP, 09443-400</p>
        </li>
        <li><strong>Telefone: </strong>
          <p>(11) 2770-1214</p>
        </li>
        <li><strong>Email: </strong>
          <p>diogo@acrilwood.com.br</p>
        </li>
      </ul>
    </div>

    <!-- Social -->
    <div class="social">
      <ul>
        <li><a href="https://wa.me/5511947419444" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="https://www.instagram.com/acrilwood.ind/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.linkedin.com/company/acrilwood-ind" target="_blank"><i class="fa fa-linkedin"></i></a>
        </li>
      </ul>
    </div>
  </div>
  </div>
  </div>
  <div id="footer">
    <div class="container text-center">
      <div class="fnav">
        <p>Designed by <a href="https://www.instagram.com/raphael.adesign/" target="_blank" rel="nofollow">Raphael
            Augusto Design</a></p>
      </div>
    </div>
  </div>
  <a href="#top" class="back-to-top" id="btnTop" title="Voltar ao Topo">↑</a>
  <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/SmoothScroll.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="js/contact_me.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>