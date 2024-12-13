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

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <script src="https://kit.fontawesome.com/2227b9baa1.js" crossorigin="anonymous"></script>
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
/* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    text-align: center;
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
    border-color: #ff5722;
    transform: scale(1.1);
}


  </style>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header>
      <?php require_once 'header.php'; ?>
   </header>
    <!-- end header section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
  <div class="contenedor">
        <h1 class="titulo-menu">Selecciona una Opción</h1>
        <div class="menu-fotos">
            <a href="#opcion1" class="menu-item">
                <img src="images/hawaiana.png" alt="Opción 1">
                <span>Pizza hawaiana</span>
            </a>
            <a href="#opcion2" class="menu-item">
                <img src="images/americana.png" alt="Opción 2">
                <span>Pizza americana</span>
            </a>
            <a href="#opcion3" class="menu-item">
                <img src="images/margarita.png" alt="Opción 3">
                <span>Pizza margarita</span>
            </a>
            <a href="#opcion3" class="menu-item">
                <img src="images/pepperoni.png" alt="Opción 3">
                <span>Pizza pepperoni</span>
            </a>
            <a href="#opcion3" class="menu-item">
                <img src="images/olive mixes.png" alt="Opción 3">
                <span>Pizza olive mixes</span>
            </a>
        </div>
    </div>
  </section>
  

  <!-- end service section -->



  <footer>
      <?php require_once 'footer.php'; ?>
  </footer>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</body>

</html>