    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sistem Informasi - Tanaman Organik</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid bg-white sticky-top">
            <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.php" class="navbar-brand d-lg-none">

                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="datasayuran.php" class="nav-item nav-link">Jenis Sayuran</a> 
                        <a href="manfaatsayuran.php" class="nav-item nav-link">Manfaat Sayuran</a>  
                        <a href="video.php" class="nav-item nav-link">Video Pengolahan & Penanaman</a>
            </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Page Header Start -->
        <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5 ">
                <h1 class="display-4 text-dark mb-4 animated slideInDown">Video Pengolahan</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <!-- Contoh pagination menggunakan Bootstrap -->
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle text-white" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Temukan Sayuran
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="video.php">Sawi</a></li>
                            <li><a class="dropdown-item" href="videokangkung.php">Kangkung</a></li>
                            <li><a class="dropdown-item" href="videoterong.php">Terong</a></li>
                            <li><a class="dropdown-item" href="videobayam.php">Bayam</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item active" href="video.php">Kembali</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        
        

        <!---video-->
        <div class="container px-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">
                <div class="col mb-4">
                    <div class="card" style="max-width: 18rem;">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315"
                                src="https://drive.google.com/file/d/1wwv_r2Mw6-R5Duq3_2zrevcYJDcZaw4-/preview"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <H6 class="card-title">TUMIS TAHU TERONG</H6>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card" style="max-width: 18rem;">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315"
                                src="https://drive.google.com/file/d/1_xwGp91PQebZCXDZznsZGpsPMvSWAJDS/preview"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <H6 class="card-title">TERONG GORENG TEPUNG</H6>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card" style="max-width: 18rem;">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315"
                                src="https://drive.google.com/file/d/1knLlKlq9CL0O5pw8DnmSTZZj-lM3NKoO/preview"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">TERONG DADU KRISPI</h6>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card" style="max-width: 18rem;">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315"
                                src="https://drive.google.com/file/d/1rt1TgyWu16tvaACYZROSQ8dao0xXKjPd/preview"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">SAMBEL TERONG PENYET</h6>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card" style="max-width: 18rem;">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315"
                                src="https://drive.google.com/file/d/1FlNVfm5EzFegeNlEqGwmjy7KF_5rbqkg/preview"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">GRILLED TERONG</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <!---end video-->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    </html>