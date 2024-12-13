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
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header>
      <?php require_once 'header.php'; ?>
   </header>
    <!-- end header section -->
  </div>

  <!-- about section -->
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