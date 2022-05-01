

<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- <! Bootstrap Scripts --> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Montserrat:wght@900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Niconne&family=Vast+Shadow&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Poppins&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <title>KTcargo</title>
</head>

<body class="handheld-toolbar-enabled" data-new-gr-c-s-check-loaded="14.1001.0" data-gr-ext-installed>
  <!-- Sign in modal -->
  <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">
                <i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
            <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false">
                <i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
          </ul>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <div class="modal-body tab-content py-4">

          <form action="/login" method="POST" class="needs-validation tab-pane fade show active" autocomplete="off" novalidate="" id="signin-tab">
            <div class="mb-3">
              <label class="form-label" for="si-email">Username or email</label>
              <input class="form-control" type="email" id="si-email" placeholder=" " required="">
              <div class="invalid-feedback">Please provide a valid Username.</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="si-password">Password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="si-password" required="">
                <label class="password-toggle-btn" aria-label="Show/hide password">Show password
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <div class="mb-3 d-flex flex-wrap justify-content-between">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="si-remember">
                <label class="form-check-label" for="si-remember">Remember me</label>
              </div><a class="fs-sm" href="#">Forgot password?</a>
            </div>
            <a href="customerInformation.php" class="btn btn-primary">Sign In</a>
          </form>


          <form action="/register" method="POST" class="needs-validation tab-pane fade" autocomplete="off" novalidate="" id="signup-tab">
            <div class="mb-3">
              <label class="form-label" for="su-name">Full name</label>
              <input class="form-control" type="text" id="su-name" placeholder=" " required="">
              <div class="invalid-feedback">Please fill in your name.</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="su-name">Create Your Username</label>
              <input class="form-control" type="text" id="su-name" placeholder=" " required="">
              <div class="invalid-feedback">Please fill in your name.</div>
            </div>
            <div class="mb-3">
              <label for="su-email">Email address</label>
              <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required="">
              <div class="invalid-feedback">Please provide a valid email address.</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="su-password">Password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="su-password" required="">
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="su-password-confirm">Confirm password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="su-password-confirm" required="">
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <a href="customerInformation.html" class="btn btn-primary btn-shadow d-block w-100" >Sign up</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <section id="title">

    <div class="container-fluid">
      <!-- Nav Bar top -->
      <!-- LogoTitle -->

      <nav class="navbar fixed-top navbar-expand-lg navbar-light" href="index.php" style="background-color: #fff">
        <a class="navbar-logo  d-none  d-lg-flex flex-shrink-0" href="index.php" style="color: black">KTcargo</a>
        <!-- <div class="input-group d-none d-lg-flex flex-nowrap mx-4"> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">





            <li class="nav-item" href="index.php">
              <a class=" navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" >
                <div class="nav-link navbar-tool-icon-box"><i class=""></i>
                  <span class="navbar-tool-text ms-n3" >About</span>
                </div>


              </a>

            <li class="nav-item" href="index.php" >
              <a class=" navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" >
                <div class="nav-link navbar-tool-icon-box" style="text"><i class=""></i>
                  <span class="navbar-tool-text ms-n3">Contact</span>
                </div>
              </a>
            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item">
              <a class=" navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                <div class="nav-link navbar-tool-icon-box"><i class="bi bi-person-circle"></i>
                  <span class="navbar-tool-text ms-n3">Login</span>
                </div>
              </a>

            </li>


          </ul>

        </div>
    </div>

    <div class="navbar  navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2 bg-light"  >
      <a class="navbar-logo  d-lg-none my-3 flex-shrink-0" style="color: black" href="index.php">KTcargo</a>
      <!-- <div class="container"> -->
      <li class="d-lg-none my-3 nav-item" style="color:transparent;">
        <a class=" navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
          <div class="navbar-tool-icon-box"><i class="bi bi-person-circle"></i>
            <span class="navbar-tool-text ms-n3">Login</span>
          </div>
        </a>

      </li>

      <li class="d-lg-none my-3 nav-item" style="color:transparent;">
        <a class=" navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2 " href="index.php">
          <div class=" navbar-tool-icon-box"> <i class="bi bi-cart3"></i>
            <span class="navbar-tool-text ms-n3">Cart</span>
          </div>
        </a>
      </li>
      <div class="navbar-collapse collapse show" id="navbarCollapse" style="">
        <!-- Search-->
        <div class="input-group d-lg-none my-3">

          <input class="form-control rounded-start" type="text" placeholder="Search for products">
          <button type="submit" class=" btn-primary" style="height:38px;"><i class="fa fa-search"></i></button>

        </div>

      </div>
    </div>

  </section>

  <!-- ========================= SECTION MAIN ========================= -->
  <section class="section-intro padding-y-sm">
  <div class="container">

  <div class="intro-banner-wrap">
  	<img src="images/APS_28.jpg" class="img-fluid rounded"style="width:100%; height: auto;">
  </div>

  </div> <!-- container //  -->
  </section>
  <!-- ========================= SECTION MAIN END// ========================= -->

  <!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y-sm">
  <div class="col-md-6 px-3 px-md-5 py-5">
        <div class="d-flex align-items-center">
          <div class="mx-auto " style="max-width: 35rem;">
          <h5 class=" mb-2">Tracking Number</h5>
          <p class="fs-sm text-muted pb-2">Please! Enter The Tracking Number In One Line</p>
          <form action="tracking.php" class="needs-validation row g-4" method="post" novalidate="">

            <div class="col-12">
              <textarea class="form-control" rows="4" name="tracking" placeholder="EnterTracking Number" required=""></textarea>
            </div>

            <div class="col-12">
              <button class="btn btn-info btn-shadow" name="submit" type="submit">Tracking</button>
            </div>
          </form>
        </div>
        </div>
      </div>

</section>
<!-- ========================= SECTION  END// ========================= -->

  <!-- ========================= FOOTER SECTION ========================= -->

<hr class="hr-light mb-5">
    <footer class="bg-white pt-5">
      <div class="container">
          <section>
        <div class="row pb-2" style="color: transparent;">
          <div class="col-md-4 col-sm-6" href="index.php">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h5 class="widget-title text-dark">Contact</h5>

            </div>

          </div>
          <div class="col-md-4 col-sm-6" href="index.php">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h5 class="widget-title text-dark">About</h5>

            </div>

          </div>
          <div class="col-md-4" href="index.php">
            <div class="widget pb-2 mb-4">
              <h5 class="widget-title text-dark pb-1">© Copyright 2022</h5>

            </div>
          </div>
        </div>

        </section>
      </div>
      <!-- end the container -->
 </footer>
  <!-- ========================= END FOOTER SECTION ========================= -->



</body>

</html>
