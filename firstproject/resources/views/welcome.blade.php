<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>John Andrie Dalan</title>
  <meta name="title" content="Barber - Barbers & Hair Cutting">
  <meta name="description" content="This is a barber html template made by codewithsadee">


  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300,400;700&display=swap"
    rel="stylesheet">

  <!-- 
    - flaticon
  -->
  <link rel="stylesheet" href="assets/css/flaticon.min.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">

    <div class="header-top">
      <div class="container">

        <ul class="header-top-list">

          <li class="header-top-item">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">Call Us :</p>

            <a href="tel:01234567895" class="item-link">012 (345) 67 895</a>
          </li>

          <li class="header-top-item">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">Opening Hour :</p>

            <p class="item-text">Sunday - Friday, 08 am - 09 pm</p>
          </li>

          <li>
            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>

    <div class="header-bottom" data-header>
      <div class="container">

        <a href="#" class="logo">
          Barber
          <span class="span">Hair Salon</span>
        </a>

        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="#services" class="navbar-link" data-nav-link>Services</a>
            </li>

            <li class="navbar-item">
              <a href="#pricing" class="navbar-link" data-nav-link>Pricing</a>
            </li>

            <li class="navbar-item">
              <a href="#gallery" class="navbar-link" data-nav-link>Gallery</a>
            </li>

        
            <li class="navbar-item">
              <a href="#" class="navbar-link" data-nav-link>Contact</a>
            </li>

          </ul>
        </nav>

        <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

          

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-before has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-banner.jpg')">
        <div class="container">

          <h1 class="h1 hero-title">Barbers & Hair Cutting</h1>

          <p class="hero-text">
            Welcome to our barbershop, where style meets precision in every snip. Our skilled barbers craft confidence with each cut, ensuring you leave feeling empowered and rejuvenated.

          </p>

          <a href="#" class="btn has-before">
            <span class="span">Explore Our Services</span>

            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="services" aria-label="services">
        <div class="container">

          <h2 class="h2 section-title text-center">Service We Provide</h2>

          <p class="section-text text-center">
            Experience style and precision at our barbershop
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-salon"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Hair Cutting Style</a>
                </h3>

                <p class="card-text">
                    Experience style and precision at our barbershop
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-shampoo"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Hair Washing</a>
                </h3>

                <p class="card-text">
                    Experience style and precision at our barbershop
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-hot-stone"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Body Treatments</a>
                </h3>

                <p class="card-text">
                    Experience style and precision at our barbershop
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-treatment"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Beauty & Spa</a>
                </h3>

                <p class="card-text">
                    Experience style and precision at our barbershop
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-shaving-razor"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Stylist Shaving</a>
                </h3>

                <p class="card-text">
                    Experience style and precision at our barbershop
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-hair-dye"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Multi Hair Colors</a>
                </h3>

                <p class="card-text">
                    Experience style and precision at our barbershop
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





 
      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2024 <a href="#" class="copyright-link">BNTY</a>. All Rights Reserved.
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>