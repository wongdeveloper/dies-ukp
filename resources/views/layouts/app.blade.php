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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    {{-- CDN w3SCHOOL BUAT NAVBAR --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- INTERNAL JS --}}
    <script src="{{ asset('js/ucapan.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal-video.min.css') }}">
    <script src="{{ asset('js/jquery-modal-video.min.js') }}"></script>

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
    .v2-mobile{
        border-left: 2px solid white;
        height: 70px;
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

    .option{
        text-decoration: none !important;
        color: #031322 !important;
        font-weight: bold;
    }

    .option a:hover{
        color: #D02762 !important;
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
        right: 15;
        top: 15;
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
        margin: 6px 0;
        transition: 0.4s;
    }
    .bar1{
        background-color: #031322;
    }
    .bar2{
        background-color: #F6AD3C;
    }
    .bar3{
        background-color: #D02762;
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

    .alert-dismissible .close{
        position:absolute;
        top:0;
        right:0;
        padding:.75rem 1.25rem;
        color:inherit
    }
    .alert-dismissible .close{
        top:10px;
        right:5px;
        padding:5px
    }
    .close{
        float:right;
        font-size:1.5rem;
        font-weight:700;
        line-height:1;
        color:#000;
        text-shadow:0 1px 0#fff;
        opacity:.5
    }
    .close:hover{
        color:#000;
        text-decoration:none
    }
    .close:not(:disabled):not(.disabled){
        cursor:pointer
    }
    .close:not(:disabled):not(.disabled):hover,.close:not(:disabled):not(.disabled):focus{
        opacity:.75
    }
    button.close{
        padding:0;
        background-color:transparent;
        border:0;
        appearance:none
    }
    a.close.disabled{
        pointer-events:none
    }

    /* Container needed to position the overlay. Adjust the width as needed */
    .overlay-container {
        position: relative;
        width: 100%;
        max-width: 400px;
    }
    
    /* Make the image to responsive */
    .image {
        width: 100%;
        height: auto;
    }
    
    /* The overlay effect (full height and width) - lays on top of the container and over the image */
    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .3s ease;
        background-color:rgba(0, 0, 0, 0.7);
    }
    
    /* When you mouse over the container, fade in the overlay icon*/
    .overlay-container:hover .overlay {
        opacity: 1;
    }
    
    /* The icon inside the overlay is positioned in the middle vertically and horizontally */
    .overlay-icon {
        color: white;
        font-size: 100px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
    
    /* When you move the mouse over the icon, change color */
    .fa-play:hover {
        color: #eee;
    }

    .fa-play {
        color: white;
    }

    .fa-search{
        color: white;
    }

    .fa-search:hover{
        color: #eee;
    }


    .image-responsive-container{
        white-space: nowrap;
        text-align: center;
    }

    .image-responsive-middle{
        vertical-align: middle;
        margin-left: -5px;
    }

    .image-responsive-container:before,
    .image-responsive-container_before {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle;
    }

    .image-responsive-container {
        list-style:none;
        behavior: expression(
        function(t){
        t.insertAdjacentHTML('afterBegin','<span class="frame_before"></span>');
        t.runtimeStyle.behavior = 'none';
        }(this)
        );
    }
    
    /* The Modal (background) */
    .modal-custom-image {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 10000; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }
    
    /* Modal Content (Image) */
    .modal-content-custom {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }
    
    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption-custom {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }
    
    /* Add Animation - Zoom in the Modal */
    .modal-content-custom, #caption-custom {
        animation-name: zoom;
        animation-duration: 0.6s;
    }
    
    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }
    
    /* The Close Button */
    .close-custom {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }
    
    .close-custom:hover,
    .close-custom:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }
    
    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content-custom {
            width: 100%;
        }
    }

</style>

<body style="background-color: #F9F2EA;">

    {{-- BUAT NON HP --}}
    <nav class="haft-navbar-nomobile d-none d-lg-block sticky-top shadow-sm">
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
                            <img src="{{asset('assets/images/logo_60tahun_nopadding.png')}}" alt="" width="55"
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
    <nav class="haft-navbar-mobile d-block d-lg-none sticky-top shadow-sm">
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
                                <img src="{{asset('assets/images/logo_dies_circle.png')}}" alt="" width="55"
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
                    <div class="row pt-2 ps-2">
                        <div class="col">   
                            <a href="/">Beranda</a>
                        </div>
                    </div>
                    <div class="row pt-2 ps-2">
                        <div class="col">
                            <a href="/Ucapan">Ucapan</a>
                        </div>
                    </div>
                    <div class="row pt-2 ps-2">
                        <div class="col">
                            <a href="/Kegiatan">Kegiatan</a>
                        </div>
                    </div>
                    <div class="row pt-2 ps-2">
                        <div class="col">
                            <a href="/Tentang">Tentang TRTD</a>
                        </div>
                    </div>
                    <div class="row pb-2"></div>
                </div>
                
            </div>
            
        </div>
    </nav>
    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close"
            aria-label="Close" data-bs-dismiss="alert"><span aria-hidden="true">×</span></button>{{ Session::get( 'error' ) }}</div>
    @endif

    @if(Session::has('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert"><button type="button" class="close"
            aria-label="Close" data-bs-dismiss="alert"><span aria-hidden="true">×</span></button>{{ Session::get( 'warning' ) }}</div>
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close"
            aria-label="Close" data-bs-dismiss="alert"><span aria-hidden="true">×</span></button>{{ Session::get( 'success' ) }}</div>
    @endif

    @if(Session::has('info'))
        <div class="alert alert-info alert-dismissible fade show" role="alert"><button type="button" class="close"
            aria-label="Close" data-bs-dismiss="alert"><span aria-hidden="true">×</span></button>{{ Session::get( 'info' ) }}</div>
    @endif
    @yield('content')

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
                            <img src="{{asset('assets/images/logo_dies_circle.png')}}" alt="" width="110"
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
                            <img src="{{asset('assets/images/logo_ukp.png')}}" alt="" width="80"
                                        class="d-inline-block pe-2">
                        </div>
                        <div class="col-2">
                            <div class="v2-mobile"></div>
                        </div>
                        <div class="col-5">
                            <img src="{{asset('assets/images/logo_dies_circle.png')}}" alt="" width="90"
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
    function extractVideoID(url) {
        var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
        var match = url.match(regExp);
        if (match && match[7].length == 11) {
            return match[7];
        } else {
            alert("Could not extract video ID.");
        }
    }
    
    $('.modal-video-card').modalVideo();
</script>

</html>