<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>


    {{-- extensions --}}

    {{-- FAVICON --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- bootstrap extension --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{--CSS--}}

    {{-- JQUERRY --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- JQUERRY CONFIRM --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css"
        integrity="sha512-0V10q+b1Iumz67sVDL8LPFZEEavo6H/nBSyghr7mm9JEQkOAm91HNoZQRvQdjennBb/oEuW+8oZHVpIKq+d25g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"
        integrity="sha512-zP5W8791v1A6FToy+viyoyUUyjCzx+4K8XZCKzW28AnCoepPNIXecxh9mvGuy3Rt78OzEsU+VCvcObwAMvBAww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--FONT--}}

    {{-- CDN w3SCHOOL BUAT NAVBAR --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    @yield('custom-import')

    {{-- @include('sweetalert::alert') --}}
</head>
<style>
    .haft-navbar-nomobile {
        background-color: #F9F2EA !important;
    }
    .haft-navbar-mobile {
        background-color: #F9F2EA !important;
    }
    .vl {
        border-left: 1px solid black;
        height: 50px;
    }   
    .v2 {
        border-left: 2px solid white;
        height: 100px;
    } 
    li{
        display: inline;
    }
    li a{
        text-decoration: none !important;
        color: #031322 !important;
        padding: 20px;
        font-weight: bold;
    }
    li a:hover{
        color: #D02762 !important;
    }

    a{
        color: #031322 !important;
    }

    /* NAVBAR */
    .topnav {
        overflow: hidden;
        position: relative;
    }

    .topnav #myLinks {
        display: none;
    }

    .topnav a {
        color: white;
        text-decoration: none;
        font-size: 17px;
        display: block;
    }

    .topnav a.icon {
        background-color: #F9F2EA !important;
        display: block;
        position: absolute;
        right: 0;
        top: 0;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .active {
        background-color: #F9F2EA !important;
    }
    /* JARAK */

    /* FOOTER */
    .haft-footer-nomobile{
        min-height: 400px !important;
        background-color: #031322 !important;
        color: white !important;
    }
    .haft-footer-mobile{
        min-height: 400px !important;
        background-color: #031322 !important;
        color: white !important;
    }
    .bar1, .bar2, .bar3 {
        width: 35px;
        height: 5px;
        background-color: #333;
        margin: 6px 0;
        transition: 0.4s;
    }

    .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
        transform: rotate(-45deg) translate(-9px, 6px);
    }

    .change .bar2 {opacity: 0;}

    .change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-8px, -8px);
    }
    @media only screen and (max-width: 1200px) {

    }

    @media only screen and (max-width: 768px) {

    }

    @media only screen and (max-width: 527px) {

    }

    @media only screen and (max-width: 391px) {
        
        
    }
</style>

<body style="background-color: #FFFCF5;">

    {{-- BUAT NON HP --}}
    <nav class="haft-navbar-nomobile d-none d-lg-block">
        <div class="container-fluid ">
            <div class="row pt-3 pb-3 ">

                <div class="col-1">
                    {{-- BUAT SPACE --}}
                </div>
                <div class="col-2 logo">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{asset('assets/images/logo_ukp.png')}}" alt="" width="55"
                                        class="d-inline-block pe-2">
                        </div>
                        <div class="col-1">
                            <div class="vl"></div>
                        </div>
                        <div class="col-4">
                            <img src="{{asset('assets/images/logo_60tahun_nopadding.png')}}" alt="" width="65"
                                        class="d-inline-block pe-2">
                        </div>
                        <div class="col-4">
                            {{-- BUAT SPACE --}}
                        </div>
                    </div>
                    
                            
                </div>
                <div class="col-3">
                    {{-- BUAT SPACE --}}
                </div>
                <div class="col-6 pt-3">
                    <ul>
                        <li> <a href="/">Beranda</a> </li>
                        <li> <a href="/Ucapan">Ucapan</a> </li>
                        <li> <a href="/Kegiatan">Kegiatan</a> </li>
                        <li> <a href="/Tentang">Tentang TRTD</a> </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>

    {{-- BUAT HP --}}
    <nav class="haft-navbar-mobile d-block d-lg-none">
        <div class="container-fluid ">
            <div class="topnav">
                <div class="row pt-3 pb-3">
                    <div class="col-1">
                        {{-- BUAT SPACE --}}
                    </div>
                    <div class="col-6 logo active">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{asset('assets/images/logo_ukp.png')}}" alt="" width="55"
                                            class="d-inline-block pe-2">
                            </div>
                            <div class="col-2">
                                <div class="vl"></div>
                            </div>
                            <div class="col-5">
                                <img src="{{asset('assets/images/logo_60tahun_nopadding.png')}}" alt="" width="65"
                                            class="d-inline-block pe-2">
                            </div>
                        </div>
                        
                                
                    </div>
                    <div class="col-5">
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </a>
                    </div>
                </div>
                <div id="myLinks" class="option">
                    <a href="/">Beranda</a>
                    <a href="/Ucapan">Ucapan</a>
                    <a href="/Kegiatan">Kegiatan</a>
                    <a href="/Tentang">Tentang TRTD</a>
                </div>
                
            </div>
            
        </div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>

    <footer class="haft-footer-nomobile pt-5 position-relative w-100 d-none d-md-block" style="bottom: 0" id="footer">
        <div class="container-fluid">
            <div class="row pt-2">
                <div class="col-2">

                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-5">
                            <img src="{{asset('assets/images/logo_ukp.png')}}" alt="" width="100"
                                        class="d-inline-block pe-2">
                        </div>
                        <div class="col-1">
                            <div class="v2"></div>
                        </div>
                        <div class="col-5">
                            <img src="{{asset('assets/images/logo_60tahun_nopadding.png')}}" alt="" width="110"
                                        class="d-inline-block pe-2">
                        </div>
                        <div class="col-1">
                            {{-- BUAT SPACE --}}
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <ul>
                        <li><h2>Tautan</h2></li>
                        <li><p>UK Petra</p></li>
                        <li><p>Plasma Petra</p></li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li><h2>Contact</h2></li>
                        <li><p>Phone: +62 31 2983000</p></li>
                        <li><p>Fax: +62 31 8436418</p></li>
                        <li><p>Email: info@petra.ac.id</p></li>
                    </ul>
                </div>
                <div class="col-1">

                </div>
            </div>
        </div>
    </footer>

    <footer class="haft-footer-mobile pt-5 position-relative w-100 d-block d-md-none" style="bottom: 0" id="footer">
        <div class="container-fluid">
            <div class="row pt-2">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-5">
                            <img src="{{asset('assets/images/logo_ukp.png')}}" alt="" width="100"
                                        class="d-inline-block pe-2">
                        </div>
                        <div class="col-2">
                            <div class="v2"></div>
                        </div>
                        <div class="col-5">
                            <img src="{{asset('assets/images/logo_60tahun_nopadding.png')}}" alt="" width="110"
                                        class="d-inline-block pe-2">
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row pt-4">
                <div class="col-6">
                    <ul>
                        <li><h2>Tautan</h2></li>
                        <li><p>UK Petra</p></li>
                        <li><p>Plasma Petra</p></li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul>
                        <li><h2>Contact</h2></li>
                        <li><p>Phone: +62 31 2983000</p></li>
                        <li><p>Fax: +62 31 8436418</p></li>
                        <li><p>Email: info@petra.ac.id</p></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </footer>


</body>


@yield('js')

<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    
</script>

</html>