<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Grupo de Pesquisa Tecnológica Smart Campus do Instituto Federal de São Paulo Campus Catanduva">
    <meta name="description" content="O IFSP é uma instituição federal de educação, ciência e tecnologia que visa impulsionar o desenvolvimento sustentável das regiões onde atua.">
    <meta name="keywords" content="ifsp,inovação,pesquisa,extensão,ensino,rede_federal,academia,indústria,parceria,cooperação,desenvolvimento, inovação,empreendedorismo,ciência,pesquisa,extensão,ensino,rede_federal,academia,indústria,parceria,cooperação,desenvolvimento,ifsp, smart campus, Catanduva, internet das coisas">
    <title>Campus Inteligente - IFSP Catanduva</title>
    <link rel="icon" type="http://smartcampus.ctd.ifsp.edu.br/bootstripe/image/png" href="https://ctd.ifsp.edu.br/templates/padraogoverno01/favicon.ico">
      <!-- Google fonts Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- JavaScript Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg  bg-primary-color" id="navbar">
      <div class="container py-3">
        <a class="navbar-brand" href="index.php">
         
          
          <div class="d-block d-md-none"> <img  src="img/logo-instituto-vertical.fa5ca40e.png" alt="Instituto Federal de São Paulo" width="50px" height="60px">Smart Campus</div>
           <div class="d-none d-md-block d-lg-none"><img  src="img/logo-instituto-vertical.fa5ca40e.png" alt="Instituto Federal de São Paulo" width="50px" height="60px"><span>Smart Campus Catanduva</span></div>
           <div class="d-none d-lg-block"><img  src="img/logo-instituto-vertical.fa5ca40e.png" alt="Instituto Federal de São Paulo" width="60px" height="80px"><span>Smart Campus IFSP Catanduva</span>  </div>
          

          
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbar-items"
          aria-controls="navbar-items"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar-items">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=sobre">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=projetos">Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=water">Water</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=energy">Energy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=estacao">Metereológica</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>

   
<!-- corpo   -->
<?php
 
 if(isset($_GET['pagina']) || isset($_POST['buscawaterdia']) )  {


 switch ($_GET['pagina']) {


   case 'water':
   include 'php/graficowater.php';
   break;

   case 'casa':
    include 'php/graficocasa.php';
    break;

   case 'energy':
   include 'php/graficosolar.php';
   break;

   
   case 'estacao':
    include 'php/estacao.php';
   break;

   default:
  # include 'php/capa.php';

   break;
 } 

 switch ($_POST['buscawaterdia']) 
       {


        case 'escolhadia':
                 include 'php/graficowater.php';
                 echo "<BR>escolheu fonte dia : ";
                 echo $_POST['fonte'];
                 echo "<BR>escolheu datainicial :";
                 echo $_POST['datainicial'];
                 echo "<BR>escolheu datafinal :";
                 echo $_POST['datafinal'];
                 break;
      
      
       }

  switch ($_POST['buscaenergiadia']) 
       {


        case 'escolhadia':
                 include 'php/graficowater.php';
                 echo "<BR>escolheu fonte dia : ";
                 echo $_POST['fonte'];
                 echo "<BR>escolheu datainicial :";
                 echo $_POST['datainicial'];
                 echo "<BR>escolheu datafinal :";
                 echo $_POST['datafinal'];
                 break;
      
      
       }       

 } else {
//   include 'php/capa.php';




}



?>

        <!-- FOOTER -->
    <footer class="container-fluid bg-dark-color" id="footer">
      <div class="container">
       
          <!-- FOOTER DETAILS -->
          <div class="col-12" id="footer-details">
            <div class="row">
           
            <div class="col-12 col-md-4" id="contact-container">
                
            <h3>Contatos:</h3>
            <p class="secondary-color">IFSP Catanduva</p>
                <p class="secondary-color">(17) 3524-9710</p>
                <p class="secondary-color">smartcampusctd@ifsp.edu.br</p>
                <p class="secondary-color">Catanduva-SP+</p>
              </div>

              <div class="col-12 col-md-4" id="news-container">
            
                <p class="secondary-color">
                  Inscreva-se                </p>
                <form>


                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Digite o seu e-mail"
                    />
                  </div>
                  <button class="btn btn-dark">Inscrever</button>
                </form>
              </div>
            
              <div class="col-12 col-md-4" id="links-container">
                <div class="row">
                  <h4>Você pode estar buscando por:</h4>
                  <div class="col-6">
                    <ul class="list-unstyled">
                      <li><a href="#" class="secondary-color">Projetos</a></li>
                      <li><a href="#" class="secondary-color">Tutoriais</a></li>
                      <li><a href="#" class="secondary-color">Parcerias</a></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled">
                      <li><a href="#" class="secondary-color">IFSP Catanduva</a></li>
                      <li>
                        <a href="#" class="secondary-color">Cursos</a>
                      </li>
                      <li><a href="#" class="secondary-color">Especializações</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FOOTER BOTTOM -->
          <div class="col-12" id="footer-bottom">
            <div class="row justify-content-between">
              <div class="col-12 col-md-3">
                <p class="secondary-color">Campus Inteligente IFSP Catanduva 2021</p>

              </div>

              <div class="col-12 col-md-3">
              <span class="badge badge-default"> Website desenvolvido por <a href="mailto:mchavesferreira@ifsp.edu.br" target="_blank">Marcos Chaves</a></span>
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
