<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Sibansos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <link href="../img/favicon" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->

    <link href="../../public/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->



    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="/" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="img/icon/logogarut.png" alt="Icon" />
        <h5 class="m-0 text-primary">Sistem Informasi Bantuan Sosial (SIBANSOS) <br>
          Kecamatan Leuwigoong Kabupaten Garut
         </h5>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Data Penerima</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="/bnpt" class="dropdown-item">Penerima BPNT</a>
              {{-- <a href="penerimapkh.html" class="dropdown-item">Penerima PKH</a>
              <a href="penerimapbi.html" class="dropdown-item">Penerima PBI</a> --}}
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Data Penyaluran</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="/agen" class="dropdown-item">Daftar Agen</a>
              <a href="/kpm" class="dropdown-item">Daftar KPM</a>
              <a href="/salur" class="dropdown-item">Jadwal Penyaluran</a>
            </div>
          </div>
          @auth
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Hi, {{ auth()->user()->name }}</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="/dashboard/penerimabnpt" class="dropdown-item">Dashboard</a>
              <form action="/logout" method="post">
                @csrf
                <button> <i class="bi bi-box-arrow-in-right"></i> Logout</button>
              </form>
            </div>
          </div>
          @else
          <a href="/login" class="nav-item nav-link"><i class="bi bi-box-arrow-in-right"></i>   Login</a>
          @endauth
        </div>
        
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    @yield('container')
   

    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
