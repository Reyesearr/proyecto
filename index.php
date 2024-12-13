<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ELEMENTS</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/2227b9baa1.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
/* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    text-align: justify;
}

/* Contenedor principal */
.contenedor {
    max-width: 2000px;
    margin: 50px auto; /* Centra horizontalmente */
    padding: 20px;
    background-color: transparent;
    border-radius: 10px;
    
}

/* Título */
.titulo-menu {
    font-size: 28px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

/* Menú de fotos */
.menu-fotos {
    display: flex;
    justify-content: center;
    flex-wrap: wrap; /* Permite que se ajuste automáticamente */
    gap: 20px;
}

/* Elementos del menú */
.menu-item {
    text-decoration: none;
    color: #333;
    text-align: center;
    flex: 1 1 200px; /* Ancho mínimo 200px, ajustable */
}

.menu-item img {
    width: 180px;
    height: 180px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #ddd;
    transition: border-color 0.3s, transform 0.3s;
}

.menu-item span {
    display: block;
    margin-top: 10px;
    font-size: 18px;
    font-weight: bold;
}

/* Hover solo en la imagen */
.menu-item img:hover {
    border-color:rgb(50, 206, 45);
    transform: scale(1.5);
}



  </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header>
      <?php require_once 'header.php'; ?>
   </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">

      <div class="slider_bg-container">

      </div>
      <div class="slider-container">

        <div class="detail-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
          <h1>
            DESCUBRIENDO <br>
            ALGO <br>
            DELICIOSO
          </h1>
          <p>
               "Disfruta cada rebanada con nuestras irresistibles pizzas, preparadas con los ingredientes más frescos y horneadas a la perfección."
          </p>
          <div>
            
          </div>
        </div>
        <div class="img-box">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/photo1.png" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/foto2.png" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/aea.png" alt="">
              </div>
            </div>

          </div>

        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h6>
              ACERCA
            </h6>
            <div class="custom_heading-container">
              <h2>
              
                 Nosostros
              </h2>
              <hr>
            </div>
            <p class="text-justify">
            En Ravello’s, nuestra pasión por la pizza va más allá de lo que ves en el menú. Somos una pizzería familiar que comenzó con el sueño de llevar el verdadero sabor de Italia a nuestra ciudad. Inspirados por las recetas tradicionales italianas y con un toque de innovación, cada pizza que preparamos es el resultado de nuestra dedicación por ofrecerte la mejor calidad en cada bocado. Te invitamos a disfrutar con nosotros de una experiencia única que combine tradición, sabor y amor por lo que hacemos. ¡Bienvenidos a Ravello’s!


            </p>
            <div>
              
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/photo59.png" alt="" width="20" height="450">
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- end about section -->

  <!-- service section -->

  <section class="service_section layout_padding">
  <div class="contenedor">
        <h1 class="titulo-menu">Selecciona una Opción</h1>
        <div class="menu-fotos">
            <a href="#opcion1" class="menu-item">
                <img src="images/hawaiana.png" alt="Opción 1">
                <span>Pizza Hawaiana</span>
            </a>
            <a href="#opcion2" class="menu-item">
                <img src="images/americana.png" alt="Opción 2">
                <span>Pizza Americana</span>
            </a>
            <a href="#opcion3" class="menu-item">
                <img src="images/margarita.png" alt="Opción 3">
                <span>Pizza Margarita</span>
            </a>
            <a href="#opcion3" class="menu-item">
                <img src="images/pepperoni.png" alt="Opción 3">
                <span>Pizza Pepperoni</span>
            </a>
            <a href="#opcion3" class="menu-item">
                <img src="images/olive mixes.png" alt="Opción 3">
                <span>Pizza Olive Mixes</span>
            </a>
        </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- news section -->

  <section class="news_section layout_padding">
    <div class="container">
      <div class="d-flex flex-column align-items-end">
        <div class="custom_heading-container">
          <hr>
          <h2>
           Compromiso
          </h2>

        </div>
        <p class="text-justify">
        "En Ravello's Pizza, nuestro compromiso es brindarte una experiencia inolvidable. Desde la atención al cliente hasta la ca
        lidad de nuestros platos, cada detalle cuenta para que disfrutes de una velada única con tus seres queridos." deglosae en 3 apra una pizeria
        </p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/photo1.png" alt="">
            </div>
            <div class="action-box">
              <div class="action">
             
              </div>
            </div>
            <div class="detail-box">
              <h4 class="text-justify">
              Calidad en Cada Bocado
              </h4>
              <p class="text-justify">
              "Nos esforzamos por ofrecerte siempre pizzas frescas, elaboradas con ingredientes de p
              rimera calidad. Cada receta es cuidadosamente preparada para garantizar un sabor auténtico y delicioso en cada bocado."
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/atencion.jpeg" alt="">
            </div>
            <div class="action-box">
              <div class="action">
               
              </div>
            </div>
            <div class="detail-box">
              <h4 class="text-justify">
              Atención que Hace la Diferencia

              </h4>
              <p class="text-justify">
              "Tu satisfacción es nuestra prioridad. Nuestro equipo está capacitado para 
              brindarte un servicio amable, rápido y personalizado, asegurándonos de que tu visita sea agradable y libre de preocupaciones."
              </p>
           
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/ambiente.png" alt="">
            </div>
            <div class="action-box">
           
            </div>
            <div class="detail-box">
              <h4 class="text-justify">
              Un Ambiente para Compartir
              </h4>
              <p class="text-justify">
              "Creemos que las mejores experiencias se disfrutan en buena compañía. P
              or eso, hemos diseñado un espacio acogedor y familiar, ideal para compartir momentos especiales con tus seres queridos."
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end news section -->

  <!-- subscribe section -->
<!--
  <section class="subscribe_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>
            subscribe our <br>
            <span>
              Newsletter
            </span>
          </h2>
        </div>
        <div class="col-md-8">
          <form action="">
            <input type="text" placeholder="Enter your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  -->

  <!-- end subscribe section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          What is Say Our Clients
        </h2>
        <hr>
      </div>
      <div class="client_container layout_padding-top">
        <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="detail-box">
                  <p>
                  "¡La mejor pizza que he probado en mucho tiempo! La masa está en su punto, los ingredientes son frescos y el sabor es espectacular. 
                   Definitivamente regresaré con amigos."

                  </p>
                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client.png" alt="">
                  </div>
                  <div class="name">
                    <h5>
                    María López
                    </h5>
                    <h6>
                    Gerente de Marketing
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="detail-box">
                  <p>
                  "Me encantó la atención al cliente. Además, la pizza vegetariana es increíblemente sabrosa. Se nota que cuidan cada detalle."
                  </p>
                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client.png" alt="">
                  </div>
                  <div class="name">
                    <h5>
                    Carlos Pérez
                    </h5>
                    <h6>
                    Analista Financiero
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="detail-box">
                  <p>
                  "El ambiente del restaurante es muy acogedor, y la pizza de cuatro quesos es simplemente deliciosa. ¡Mi nueva pizzería favorita!"
                  </p>
                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client.png" alt="">
                  </div>
                  <div class="name">
                    <h5>
                    Ana Torres
                    </h5>
                    <h6>
                     Profesora
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- end client section -->


  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="d-flex flex-column align-items-end">
        <div class="custom_heading-container">
          <hr>
          <h2>
            Contact Us
          </h2>
        </div>
      </div>
      <div class="layout_padding-top layout_padding2-bottom">
        <div class="row">
          <div class="col-md-7">
            <form action="" method="post">
            <?php include 'controlador/registro.php'; ?>
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name" name="nombre">
                  </div>
                  <div>
                    <input type="email" placeholder="Email" name="email">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" name="telefono">
                  </div>
                  <div class="">
                    <input type="text" placeholder="Message" class="message_input" name="mensaje"> 
                  </div>
                  <div class="mt-5">
                    <button type="submit" name="btnregistrar">
                      send
                    </button>
                  </div>
                </div>

              </div>

            </form>
          </div>
          <div class="col-md-5">
            <div class="map-box">
              <div id="map">
                <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.5480562594576!2d-75.70443402409201!3d-14.044782782315444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91111d4d78b807fb%3A0x894e82f73ce085af!2sInstituto%20de%20Educacion%20Superior%20Tecnol%C3%B3gico%20Privado%20Parcona!5e0!3m2!1ses-419!2spe!4v1733758262941!5m2!1ses-419!2spe" 
                    width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact_items">

        <a href="">
          <div class="item ">
            <div class="img-box box-2">

            </div>
            <div class="detail-box">
              <p>
                +51 945 270 739
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">

            </div>
            <div class="detail-box">
              <p>
                ravelo@gmail.com
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-1">

            </div>
            <div class="detail-box">
              <p>
                Insti de Parcona ;V
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>


  <footer>
      <?php require_once 'footer.php'; ?>
  </footer>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</body>

</html>