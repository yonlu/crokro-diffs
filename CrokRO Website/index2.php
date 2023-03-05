<?php 

/* Include Useronline Counter Script */
include("useronline.php");

?>
<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome CDN -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
  <title>CrokRO</title>
</head>

<body>
  <div class="wrapper">
    <!-- Section: Navbar -->
    <div class="navbar-fixed">
      <nav class="pink lighten-3">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#home" class="brand-logo">CrokRO</a>          
            <a href="#" data-activates="mobile-nav" class="button-collapse right">
              <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="#home">Início</a>
              </li>
              <li>
                <a href="#news">Atualizações</a>
              </li>
              <li>
                <a href="#features">Informações</a>
              </li>
              <li>
                <a href="fluxcp" target="_blank">Painel de Controle</a>
              </li>
              <li>
                <a href="#discord"><i class="fab fa-discord fa-lg" style="margin-right: 5px;"></i>
                  Discord</a>
              </li>
              <li>                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- Side Nav -->
    <ul class="side-nav" id="mobile-nav">
      <li>
        <a href="#home">Início</a>
      </li>
      <li>
        <a href="#news">Atualizações</a>
      </li>
      <li>
        <a href="#features">Informações</a>
      </li>
      <li>
        <a href="fluxcp">Painel de Controle</a>
      </li>
      <li>
        <a href="#discord">Discord</a>
      </li>
    </ul>

    <!-- Section: Slider -->
    <section class="slider section-hero scrollspy" id="home">
      <ul class="slides">
        <li>
          <img src="img/hero.jpg">          
          <div class="caption center-align">            
            <h2 class="hero-title">Bem vindo ao CrokRO!</h2>
            <h5 class="light grey-text text-lighten-3">
              Servidor com progressão PVP/PVE & WoE,Conteúdo Exclusivo, Level: 254/70, Online Desde 2018.<br>
              Episódio 14.1, Pré-Renovação.
            </h5>
            <div class="hero-btn-container">
              <a class="hero-btn waves-effect waves-light pink lighten-3 btn-large" href="https://drive.google.com/file/d/1KKmgWufVbfN-fsVxm8ulyVj2YJdcjplc/view" target="_blank"><i class="material-icons left">file_download</i>DOWNLOAD CrokRO</a>
              <a class="hero-btn waves-effect waves-light blue darken-4 btn-large" href="fluxcp" target="_blank"><i class="material-icons left">assignment_ind
                </i>REGISTRE AGORA</a>
                <p>There are currently <?php echo $usersonline; ?> in our server.</p>
            </div>              
          </div>
        </li>
      </ul>
    </section>

    <!-- Section: News Grid -->
    <section class="section section-news scrollspy" id="news">
      <div class="container">
        <h4 class="news-text">Últimas Atualizações</h2>
      </div>        
      <div class="container news-container">
        
        <div class="box main orange-border-bottom modal-trigger" href="#news1-modal">
          <div class="news-info">
            Feb 28, 2018
            <span class="label news">Novidades</span>
          </div>               
        </div>

        <div class="box a orange-border-bottom">

        </div>

        <div class="box b orange-border-bottom">
                    
        </div>
        <div class="box c orange-border-bottom"></div>
        <div class="box d orange-border-bottom"></div>
      </div>
    </section>

    <!-- Section: Features -->
    <section class="section section-features scrollspy" id="features">
      <div class="container">
        <h4 class="news-text">Informações</h4>
      </div>
      
        <div class="container">
            <div class="row">    
              <div class="col s12 m6">
                <div class="feature-box">
                  <div class="feature-icon">
                    <img src="img/succubus.png" alt="">
                  </div>
                  <h3>Orientado à Progressão PvP & PvE</h3>
                  <p>Nosso servidor é totalmente balanceado, para aqueles que gostam de demonstrar suas habilidades e força contra outros players com o nosso sistema PvP, Mas também para aqueles que gostam de se aventurar pelos mapas de Rune-Midgard atrás de aventuras e desafios! Nosso sistema de balanceamento recompensa tanto os Players voltados ao conteúdo PvP, quanto aos players voltados a progressão e conteúdo PvE.</p>
                </div>
              </div>
  
            <div class="col s12 m6">
              <div class="feature-box">
                <div class="feature-icon">
                  <img src="img/zealotus.png" alt="">
                </div>
                <h3>Episódio 14.1</h3>
                <p>Continuando as aventuras fora da dimensão de Rune-Midgard, era a vez dos jogadores explorarem mais o lado da raça das fadas, os Esplêndidos. Só então se confirmou que eles não eram nativos de Ash Vacuum, mas na verdade vinham da dimensão de Alfheim. Contudo, a ponte de Bifröst, que ligava as duas dimensões, encontrava-se agora coberta por um estranho labirinto de neblina e cabia aos jogadores solucionar esse problema!</p>
              </div>
            </div>
  
              <div class="col s12 m6">
                <div class="feature-box">
                  <div class="feature-icon">
                    <img src="img/icon3.png" alt="">
                  </div>
                  <h3>Pré-Renovação</h3>
                  <p>Classes incluídas somente até as Transclasses, e Classes Exapandidas (Ninja, Mestre Taekwon, Espiritualista e Justiceiro).
                    Itens e fórmulas de dano baseados na Pré-Renovação. 
                  </p>
                </div>
              </div>
  
              <div class="col s12 m6">
                  <div class="feature-box">
                    <div class="feature-icon">
                      <img src="img/icon4.png" alt="">
                    </div>
                    <h3>Rates 30x/30x/10%</h3>
                    <!-- <p>Possuímos vários sistemas para auxiliar sua caminhada rumo ao 255, como: bônus de XP em grupo, evento Raça do dia e manuais de combate obtidos 
                        via pontos de voto.</p> -->
                    <p>Possuímos vários sistemas para auxiliar sua caminhada rumo ao 254, como: mapas com EXP dobrados, Customs equilibrados por classes, Eventos Diários com premiações exclusivas e e manuais de combate obtidos 
                      via pontos de voto.</p>
                  </div>
                </div>
    
              <div class="col s12 m6">
                <div class="feature-box">
                  <div class="feature-icon">
                    <img src="img/icon5.png" alt="">
                  </div>
                  <h3>Sistema PK</h3>
                  <p>O CrokRO possui alguns mapas com o sistema PK(Player Kill), são mapas de MVPs. Ex: Maya, Besouro-Ladrão-Dourado, Bispo Decadente. Para deixar o conteúdo mais divertido e competitivo!</p>
                </div>
              </div>
    
                <div class="col s12 m6">
                  <div class="feature-box">
                    <div class="feature-icon">
                      <img src="img/icon6.png" alt="">
                    </div>
                    <h3>Balanceamento de Classes</h3>
                    <p>CrokRO possui Custom Itens voltado ao balanceamento de todas as classes, para que todos possam se divertir e não deixar nenhuma classe de fora!</p>
                  </div>
                </div>
  
                <!-- <div class="col s12 m6">
                  <div class="feature-box">
                    <div class="feature-icon">
                      <img src="img/icon7.png" alt="">
                    </div>
                    <h3>Full PvP</h3>
                    <p>With dynamic rates between 5/5/3 and 8/8/3, CrokRO provides an exciting and challenging twist to keep the adventure going!</p>
                  </div>
                </div> -->
      
                <!-- <div class="col s12 m6">
                  <div class="feature-box">
                    <div class="feature-icon">
                      <img src="img/icon8.png" alt="">
                    </div>
                    <h3>Episode 14.1</h3>
                    <p>With dynamic rates between 5/5/3 and 8/8/3, CrokRO provides an exciting and challenging twist to keep the adventure going!</p>
                  </div>
                </div> -->
      
                  <!-- <div class="col s12 m6">
                    <div class="feature-box">
                      <div class="feature-icon">
                        <img src="img/icon9.png" alt="">
                      </div>
                      <h3>Pre-Renewal</h3>
                      <p>With dynamic rates between 5/5/3 and 8/8/3, CrokRO provides an exciting and challenging twist to keep the adventure going!</p>
                    </div>
                  </div> -->

            </div>
          </div>
    </section>

    <a href="#" class="center button-features blue darken-4 white-text">Saiba mais sobre o servidor!</a>
 
    <!-- Section: Counter -->
    <section class="section section-stats parallax-container center">
      <div class="parallax">
        <img src="img/bg-overlay.png" alt="">
      </div>
      <div class="container counter-container">
        <div class="row">
  
          <div class="col s12 m4">
            <div class="card-panel pink lighten-3 white-text center">
              <i class="material-icons medium">insert_emoticon</i>
              <h5>Usuários Online</h5>
              <h3 class="count"><?php echo $usersonline; ?></h3>
              <div class="progress grey lighten-1">
                <div class="determinate white" style="width: 40%;"></div>
              </div>
            </div>
          </div>
  
          <div class="col s12 m4">
              <div class="card-panel center">
                <i class="material-icons medium pink-text lighten-3">mode_edit</i>
                <h5 class="pink-text lighten-3">Staff Online</h5>
                <h3 class="count pink-text lighten-3">3</h3>
                <div class="progress grey lighten-1">
                  <div class="determinate blue lighten-1" style="width: 90%;"></div>
                </div>
              </div>
          </div>
  
            <div class="col s12 m4">
                <div class="card-panel pink lighten-3 white-text center">
                  <i class="material-icons medium">mode_comment</i>
                  <h5>Contas Registradas</h5>
                  <h3 class="count">256</h3>
                  <div class="progress grey lighten-1">
                    <div class="determinate white" style="width: 65%;"></div>
                  </div>
                </div>
            </div>
        </div>
      </div>    
    </section>
    
    <!-- Footer -->
    <footer class="section">
      <p>CrokRO Copyright &copy; 2018</p>
    </footer>
    
    <!-- Fixed Action Button -->
    <div class="fixed-action-btn">
      <a href="#" class="btn-floating btn-large btn-floating pulse blue darken-4 z-depth-5">
        <i class="material-icons">settings</i>
      </a>
      <ul>
        <li>
          <a href="#downloads-modal" class="modal-trigger btn-floating blue darken-4">
            <i class="material-icons">file_download</i>
          </a>
        </li>
          
        <li>
          <a href="fluxcp" target="_blank" class="modal-trigger btn-floating blue darken-4">
            <i class="material-icons">supervisor_account</i>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Add Post Modal -->
  <div id="downloads-modal" class="modal">
    <div class="modal-content">
      <div class="container">
        <div class="row">
          <div class="col s12 m12 center">
            <h2>Download Links</h2>            
          </div>
        </div>

        <div class="row">
          <div class="col s12 m12 offset-m1">
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s6">
                    <a href="#tab1" class="purple-text">Google Drive</a>
                  </li>
                  <li class="tab col s6">
                    <a href="#tab2" class="purple-text">Media Fire</a>
                  </li>
                </ul>
              </div>
              <div id="tab1" class="col s12 m12">
                <a class="waves-effect waves-light btn blue darken-4" href="https://drive.google.com/file/d/1KKmgWufVbfN-fsVxm8ulyVj2YJdcjplc/view" target="_blank"><i class="material-icons left">cloud</i>Download</a>
              </div>
              <div id="tab2" class="col s12 m12">
                <a class="waves-effect waves-light btn blue darken-4" href="#" target="_blank"><i class="material-icons left">cloud</i>Download</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div id="news1-modal" class="modal">
    <div class="card">
      <div class="card-content">
        <div class="card-title">Card Title</div>
      </div>
    </div>
  </div> -->

  <!-- Preloader -->
  <div class="loader preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $('.section').hide();
    $('.wrapper').hide();

    setTimeout(function(){
      $(document).ready(function () {
      //Show sections
      $('.wrapper').fadeIn();
      $('.section').fadeIn();

      // Hide preloader
      $('.loader').fadeOut();


      // Init Slider
      $('.carousel.carousel-slider').carousel({fullWidth: true});


      // Init slider
      $('.slider').slider({
        indicators: false,
        height: 500,
        transition: 500,
        interval: 6000
      });

      // Init Side Nav
      $('.button-collapse').sideNav({
        edge: 'right',
      });

      // Init Modal
      $('.modal').modal();

      // Init Parallax
      $('.parallax').parallax();

      // Counter
      $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 3000,
          easing: 'swing',
          step: function(now) {
            $(this).text(Math.ceil(now));
          }
        });
      });
    
      // Init Scrollspy
      $('.scrollspy').scrollSpy();
    });
    }, 1000);
  </script>
</body>

</html>