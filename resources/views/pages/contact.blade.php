<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Jabatan</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <style>
        /* CSS untuk gambar latar belakang */
        .header_section {
            background-image: url('images/masjid-2.webp');
            background-size: cover;
            background-position: center;
        }

        /* CSS untuk warna latar belakang tema web masjid */
        .background-masjid {
            background-color: #1C3648, #3C6B87;
        }
    </style>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="header_main">
            <div class="mobile_menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="logo_mobile"><a href="/"><img src="images/MASJID.png"></a></div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/services">Kegiatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/blog">Jabatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/contact">Donasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href="login">Login / Register</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="logo"><a href="/"><img src="images/MASJID.png"></a></div>
                <div class="menu_main">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/services">Kagiatan</a></li>
                        <li><a href="/blog">Jabatan</a></li>
                        <li><a href="/contact">Donasi</a></li>
                        <li>
                            <a href="/login">Login / Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- contact section start -->
    <div class="about_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital_main">
                        <h1 class="mt-4">Donasi</h1>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-masjid">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tanggal</th>
                                                <th>Nominal</th>
                                                <th>Nama Donatur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($donasis as $donasi)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $donasi->tanggal }}</td>
                                                    <td>{{ $donasi->nominal }}</td>
                                                    <td>{{ $donasi->nama_donatur }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/masjid-1.webp') }}" class="img-fluid" alt="Masjid">
                </div>
            </div>
        </div>
    </div>

    <style>
        .table-masjid {
            background-color: #f5f5f5;
        }

        .table-masjid th {
            background-color: #777;
            color: #fff;
        }

        .table-masjid td {
            background-color: #ddd;
        }
    </style>


    <!-- contact section end -->
    <!-- footer section start -->


    <div class="location_main">
        <div class="call_text"><img src="images/call-icon.png"></div>
        <div class="call_text"><a href="#">Call +01 1234567890</a></div>
        <div class="call_text"><img src="images/mail-icon.png"></div>
        <div class="call_text"><a href="mailto:anisafatonati521@gmail.com">anisafatonati521@gmail.com</a>
        </div>
    </div>
    <div class="social_icon">
        <ul>
            <li><a href="#"><img src="images/fb-icon.png"></a></li>
            <li><a href="#"><img src="images/twitter-icon.png"></a></li>
            <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
            <li><a href="#"><img src="images/instagram-icon.png"></a></li>
        </ul>
    </div>
    </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Tugas Projek Pemrograman Web 2 <a href="https://html.design">
                    Anisa Fatonati & Lutfi</a> TI06 <a href="https://youtube.com/@anisafatonati">Youtube</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <!-- Javascript files -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi navbar responsive
            $('.navbar-toggler').on('click', function() {
                $('.navbar-collapse').toggleClass('show');
            });
        });
    </script>

</body>

</html>