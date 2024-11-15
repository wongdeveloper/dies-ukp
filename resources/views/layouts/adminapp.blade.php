<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>
        @yield('title')
    </title>

    {{-- FAVICON --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- ARCHITECT UI --}}
    <link rel="stylesheet" href="{{asset('assets/architectui/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/architectui/assets/css/component.css')}}">
    <link rel="stylesheet" href="{{asset('assets/architectui/assets/css/croppie.css')}}">
    <link rel="stylesheet" href="{{asset('assets/architectui/assets/css/jquery-ui.css')}}">
    <link href="{{asset('assets/architectui/main.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('assets/architectui/assets/scripts/main.js')}}"></script>

    {{-- extensions --}}

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

    {{-- INTERNAL JS --}}
    <script src="{{ asset('js/ucapan.js')}}"></script>
    
    {{-- JQUEY DATATABLES --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal-video.min.css') }}">
    <script src="{{ asset('js/jquery-modal-video.min.js') }}"></script>
    
    {{-- Croppie --}}
    <link rel="stylesheet" href="{{ asset('css/croppie.css') }}">
    <script src="{{ asset('js/croppie.min.js') }}"></script>
    <script src="{{ asset('js/exif.js') }}"></script>
  
</head>
<style>
    .haft-form{
        width: auto !important;
        background-color: #fff !important;
        
    }
    .rwd-table {
        margin: 1em 0;
        min-width: 300px;
    }

    .rwd-table th {
        display: none;
        background-color: #D02762;
        color: #fff !important;
    }

    .rwd-table td {
        display: block;
    }

    .rwd-table td:first-child {
        padding-top: .5em;
    }

    .rwd-table td:last-child {
        padding-bottom: .5em;
    }

    .rwd-table td:before {
        content: attr(data-th) ": ";
        font-weight: bold;
        width: 6.5em;
        display: inline-block;
    }

    @media (min-width: 480px) {
        .rwd-table td:before {
            display: none;
        }
    }

    .rwd-table th,
    .rwd-table td {
        text-align: left;
    }

    @media (min-width: 480px) {

        .rwd-table th,
        .rwd-table td {
            display: table-cell;
            padding: .25em .5em;
        }

        .rwd-table th:first-child,
        .rwd-table td:first-child {
            padding-left: 0;
        }

        .rwd-table th:last-child,
        .rwd-table td:last-child {
            padding-right: 0;
        }
    }

    .rwd-table {
        color: black;
        border-radius: .4em;
        overflow: hidden;
    }

    .rwd-table th,
    .rwd-table td {
        margin: .5em 1em;
    }

    @media (min-width: 480px) {

        .rwd-table th,
        .rwd-table td {
            padding: 1em !important;
        }
    }

    .rwd-table th,
    .rwd-table td:before {
        color: black;
    }

    @keyframes type-green {

        1%,
        100% {
            border-color: #D02762 !important;
        }

        50% {
            border-color: #D02762 !important;
        }
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-green {
        background-color: #D02762 !important;
    }

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal2 {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1000;
        /* Sit on top */
        /* padding-top: 100px; */
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
        justify-content: center;
    }

    /* Modal Content (image) */
    .modal-content2 {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 400px;
        height: auto;
    }

    /* Caption of Modal Image */
    #caption2 {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content2,
    #caption2 {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close2 {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close2:hover,
    .close2:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content2 {
            width: 100%;
        }
    }

    .bg-light {

        transition: ease-in 0.5s !important;

    }

    .bg-light-lg {

        transition: ease-in 0.5s !important;

    }

    .navbar-toggler {

        font-size: 1.75rem !important;

    }

    .bar-light {

        transition: ease-in 0.5s !important;

    }

    .font-lg li a {

        font-size: 30px !important;

    }

    .acxs {
        font-family: "Font Awesome 5 Free" !important;
        color: white !important;
    }
    /* HAFT MODAL */
        .haft-header-modal{
            width: 100% !important;
            background-color: #1B325E !important;
            color:#fff !important;
            font-weight: bold !important;
            height: 65px !important;
            font-size: 14pt !important;
            
        }
        .haft-modal-btn{
            cursor: pointer;
            background-color: #D02762!important;
            border: 2px solid white !important;
            color: white !important;
            border-radius: 20px !important;
            min-width: 80px !important;
            min-height: 45px !important;
        }
        .haft-modal-btn:hover{
            cursor: pointer;
            background-color: white !important;
            border: 2px solid #D02762 !important;
            color: #D02762 !important;
            border-radius: 20px !important;
            
        }
        a{
            text-decoration: none !important;
        }

    


    /* =================== */

    @media only screen and (max-width: 991px) {
        #content {
            width: 100vw !important;
            min-width: 100vw !important;
            max-width: 100vw !important;
            margin-top: 5rem !important;
        }

        #content.active {
            width: 100vw !important;
            min-width: 100vw !important;
            max-width: 100vw !important;
        }

        .container {
            width: 100vw !important;
            max-width: 100vw !important;
        }

    }

    .image-preview {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        max-width: 100%;
        height: auto;
    }

    .image-preview:hover {opacity: 0.7;}

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
</style>

<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        <div class="app-header header-shadow  header-text-dark" style="background-color:#1B325E">
            @include('admin.header')
        </div>
        
        <div class="ui-theme-settings">
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                </div>
            </div>
        </div>

        <div class="app-main ">
            <div class="app-sidebar sidebar-shadow sidebar-text-light" style="background-color:#F6AD3C">
                @include('admin.sidebar')
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close"
                            aria-label="Close" data-bs-dismiss="alert"><span
                                aria-hidden="true">×</span></button>{{ Session::get( 'error' ) }}</div>
                    @endif
                    
                    @if(Session::has('warning'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert"><button type="button" class="close"
                            aria-label="Close" data-bs-dismiss="alert"><span
                                aria-hidden="true">×</span></button>{{ Session::get( 'warning' ) }}</div>
                    @endif
                    
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close"
                            aria-label="Close" data-bs-dismiss="alert"><span
                                aria-hidden="true">×</span></button>{{ Session::get( 'success' ) }}</div>
                    @endif
                    
                    @if(Session::has('info'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert"><button type="button" class="close"
                            aria-label="Close" data-bs-dismiss="alert"><span
                                aria-hidden="true">×</span></button>{{ Session::get( 'info' ) }}</div>
                    @endif
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                @yield('content-title')
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>

   
   {{-- Modal Image --}}
    <div id="imageModal" class="modal-custom-image">
        <span class="close-custom">&times;</span>
        <img class="modal-content-custom" id="img01">
        <div id="caption-custom"></div>
    </div>
</body>
<script>
    $(document).on('click', '.image-preview', function () {
        var modal = document.getElementById("imageModal");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption-custom");

        modal.style.display = "block";
        modalImg.src = $(this).data('src');
    });

    $(document).on('click', '.close-custom', function () {
        var modal = document.getElementById("imageModal");
        modal.style.display = "none";
    });
</script>
@yield('js')

{{-- <!-- <script type="text/javascript" src="/admin/login/architectui/assets/scripts/main.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('assets/js/vanilla.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://kit.fontawesome.com/158176bbc5.js" crossorigin="anonymous"></script>
<!-- <script src="https://draggabilly.desandro.com/draggabilly.pkgd.js"></script> -->
<!-- <script src="/assets/scripts/modal-image.js"></script> -->
<script src="{{asset('assets/architectui/assets/scripts/jquery.custom-file-input.js')}}"></script>
<script src="{{asset('assets/architectui/assets/scripts/croppie.js')}}"></script>
<script src="{{asset('assets/architectui/assets/scripts/exif.js')}}"></script>
<script src="{{asset('assets/architectui/assets/scripts/jquery-ui.js')}}"></script>
<!-- <script src="/admin/login/assets/scripts/check-it.js"></script> -->
<!-- <script src="/admin/admin.js"></script> -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script> --}}



</html>