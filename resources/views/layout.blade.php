<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Photo Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{url("assets/css.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url("assets//A.css")}}">
</head>

<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body">
                <ul class="site-nav-wrap">
                    <li class="active"><a href="#">Halaman Utama</a></li>
                    <li><a href="#">Tambah foto</a></li>
                </ul>
            </div>
        </div>
        <header class="header-bar d-flex d-lg-block align-items-center aos-init aos-animate" data-aos="fade-left">
            <div class="site-logo">
                <a href="https://preview.colorlib.com/theme/shutter/index.html">Shutter</a>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#"
                    class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
            <div class="main-menu">
                <ul class="js-clone-nav">
                    <li><a href="/">Halaman Utama</a></li>
                    <li><a href="/add">Tambah Foto</a></li>
                </ul>
            </div>
        </header>
        <main class="main-content" style="padding: 10px">
            <div class="container-fluid photos">
                @yield('pageContent')
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center py-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright ©<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div> <!-- .site-wrap -->
    <script src="{{url("assets//jquery-3.js")}}"></script>
    <script src="{{url("assets//jquery-migrate-3.js")}}"></script>
    <script src="{{url("assets//bootstrap.js")}}"></script>
    <script src="{{url("assets//owl.js")}}"></script>
    <script src="{{url("assets//bootstrap-datepicker.js")}}"></script>
    <script src="{{url("assets//jquery.js")}}"></script>
    <script async="" src="{{url("assets//js.js")}}"></script>

</body>

</html>
