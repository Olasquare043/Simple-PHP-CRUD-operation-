<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Miracle Assignment</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
        <!--Main Navigation-->
    <header>
      <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 100vh;
        }

        .carousel-item:nth-child(1) {
          background-image: url('img/IMG1.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(2) {
          background-image: url('img/IMG2.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(3) {
          background-image: url('img/IMG3.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #introCarousel {
            margin-top: -58.59px;
          }
          #introCarousel,
          .carousel-inner,
          .carousel-item,
          .carousel-item.active {
            height: 50vh;
          }
        }

        .navbar .nav-link {
          color: #fff !important;
        }
      </style>

      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <!-- Navbar brand -->
          <a class="navbar-brand nav-link" target="_blank" href="index.php">
            <strong>ARIKE School</strong>
          </a>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="add.php" rel="nofollow"
                  >Add New Student </a>
              </li>
               <li class="nav-item">
                <a class="nav-link text-white" href="list.php" rel="nofollow"
                  >Student List </a>
              </li>
            </ul>
            <ul class="navbar-nav d-flex flex-row">
              <!-- Icons -->
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link text-white" href="https://www.youtube.com/" rel="nofollow"
                  target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link text-white"  href="https://www.facebook.com/miracle.adenigbagbe" rel="nofollow" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link text-white" href="https://twitter.com/" rel="nofollow" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link text-white" href="https://github.com/mdbootstrap/" rel="nofollow" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Carousel wrapper -->
      <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h1 class="mb-3">Learn More in Arike School</h1>
                  <h5 class="mb-4">Best & free guide on every professions</h5>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h2>School of the Best</h2>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div
              class="mask"
              style="
                background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                );
              "
            >
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h2>Miracle Arike Adenigbagbe </h2>
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://www.facebook.com/miracle.adenigbagbe"
                    target="_blank"
                    role="button"
                    >Know about the Founder of the School</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
      <div class="container">
        <!--Section: Content-->
        <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                <img src="img/IMG3.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
              <h4><strong>About Arike School</strong></h4>
              <p class="text-muted">
                Arike school is one of the best school in Nigeria. The school that offer best in all
                kind of knowlegde in every area of professions such as Computer science, Biology, Medicine, BioChemistry, BioChemistry,
                Geology, accounting, Business Administration, Mathematics,Statistics etc.
              </p>
              <p><strong>About Arike Founder</strong></p>
              <p class="text-muted">
                Adenigbagbe Miracle Arike is the co- Founder of Arike School. She is a native of Ipetujesha in Osun State, Nigeria. 
                She is a very pretty lady that alway enter Olasquare (the CEO of Olasquare Consults) eyes. Miracle is Olasquare everyday
                crush and the guy can never give up on her.
                Arike is very charming and adorable lady that every man wish to have. 
              </p>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>The Co Founder of Arike School</strong></h4>

          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="img/IMG1.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Pretty</h5>
                  <p class="card-text">
                    There were many pretty girls and Arike girls were among the prettiest.
                  </p>
                  <a href="#!" class="btn btn-primary">Like</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="img/IMG2.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Calm</h5>
                  <p class="card-text">
                    Her face wore a calm look of piety and resignation to the will of God.
                  </p>
                  <a href="#!" class="btn btn-primary">Kiss</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="img/IMG3.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Adorable</h5>
                  <p class="card-text">
                    Arike is the epitome of adorable, her dark eyes sparkling and warm, and her sweet glow fresh skin.
                  </p>
                  <a href="#!" class="btn btn-primary">Cheers</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

      </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <?php
    include("footer.php")
    ?>