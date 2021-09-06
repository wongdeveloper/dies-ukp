@extends('layouts.app')

@section('title')
    Beranda | TRTD UKP 60th
@endsection
<style>

    /* ============ COUNTDOWN CSS ================= */
    .space-non-hp{
        min-height: 200px !important;
        width: 100% !important;
    }
    .space-hp{
        min-height: 110px !important;
        width: 100% !important;
    }
    .count-down{
        min-height: 800px !important;
        width: 100% !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
        background-image: url({{asset('assets/images/bg-countdown.png')}});
        
    }
    .count-down-pink{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: 150px !important;
        min-height: 150px !important;
        border: 10px solid #D02762!important;
        white-space:nowrap;
        text-align: center;
    }
    .count-down-blue{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: 150px !important;
        min-height: 150px !important;
        border: 10px solid #1B325E!important;
        white-space:nowrap;
        text-align: center;
    }
    .count-down-yellow{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: 150px !important;
        min-height: 150px !important;
        border: 10px solid #F6AD3C!important;
        white-space:nowrap;
        text-align: center;
    }

    .count-down-pink-mobile{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: auto !important;
        min-width: 120px !important;
        max-width: 150px !important;
        max-height: 150px !important;
        min-height: 90px !important;
        height: auto !important;
        border: 5px solid #D02762!important;
        white-space:nowrap;
        text-align: center;
    }
    .count-down-blue-mobile{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: auto !important;
        min-width: 120px !important;
        max-width: 150px !important;
        max-height: 150px !important;
        min-height: 90px !important;
        height: auto !important;
        border: 5px solid #1B325E!important;
        white-space:nowrap;
        text-align: center;
    }
    .count-down-yellow-mobile{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: auto !important;
        min-width: 120px !important;
        max-width: 150px !important;
        max-height: 150px !important;
        min-height: 90px !important;
        height: auto !important;
        border: 5px solid #F6AD3C!important;
        white-space:nowrap;
        text-align: center;
    }

    /* ================================================ */

    h1{
        font-size: 35pt !important;
    }

    /* ===================== HEADER BOX ====================== */
    .haft-title-ucapan-box{
        background-color: #1B325E !important;
        color: #FFFCF5 !important;
        min-height: 130px !important;
        width: 100% !important;
    }
    .haft-title-yellow{
        background-color: #F6AD3C !important;
        color: #FFFCF5 !important;
        min-height: 130px !important;
        width: 100% !important;
    }
    .haft-title-pink{
        background-color: #D02762 !important;
        color: #FFFCF5 !important;
        min-height: 130px !important;
        width: 100% !important;
    }
    /* ================================================ */

    /* CONTAINER VIDEO HOME */

    .video-container-yellow{
        background-color: #F6AD3C !important;
        width: 100%;
        min-height: 300px;
        color: white !important;
    }
    /* ================================================ */

    /* ===================== CARD UCAPAN FOTO =========== */

    .haft-card-galeri-pink{
        min-width: 300px !important; 
        min-height: 200px !important;
        background-color: #D02762 !important;
        border-radius: 0px !important;
        max-width: ;
    }

    .haft-card-galeri-yellow{
        min-width: 300px !important; 
        min-height: 200px !important;
        border-radius: 0px !important;
        background-color: #F6AD3C !important;
    }
    .haft-card-galeri-blue{
        min-width: 300px !important; 
        min-height: 200px !important;
        border-radius: 0px !important;
        background-color: #1B325E !important;
    }
    /* ================================================ */

    /* ========================= HAFT BTN ================== */
    .haft-btn-pink {
        background-color: #D02762 !important;
        color:#FFFCF5 !important;
        width: 235px !important;
        height:50px !important;
        border-radius: 30px !important;
        
    }
    .haft-btn-pink p{
        font-size: 15pt !important;
    }
    /* ================================================ */

    /* ===================== CARD UCAPAN VIP =============== */

    .haft-card-vip-pink{
        min-width: 300px !important; 
        min-height: 200px !important;
        background-color: #D02762 !important;
        border-radius: 0px !important;
    }

    .haft-card-vip-yellow{
        min-width: 300px !important; 
        min-height: 200px !important;
        border-radius: 0px !important;
        background-color: #F6AD3C !important;
    }
    .haft-card-vip-blue{
        min-width: 300px !important; 
        min-height: 200px !important;
        border-radius: 0px !important;
        background-color: #1B325E !important;
    }
    .haft-vip-card-img{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: 75px !important;
        min-height: 75px !important;
    }

    .haft-card-img{
        background-color: #FFFCF5 !important;
        min-height: 200px;
    }

    .haft-card-text{
        color: #FFFCF5 !important;
    }
    .haft-card-text p{
        font-size: 8pt !important;
    }
    
    .haft-vip-card-text{
        color: #FFFCF5 !important;
    }
    .haft-vip-card-text p {
        font-size: 8pt !important;
        font-style: italic;
    }
    .haft-vip-card-wish{
        color: #FFFCF5 !important;
    }
    .wish{
        font-size: 12pt !important;
    }
    /* ============================================ */

    /* CARD KEGIATAN TRTD */

    .haft-article-card-mobile{
        min-width: 100% !important;
        width: auto !important;
        min-height: 250px !important;
        background-color: #FFFCF5;
        border-radius: 15px !important;
    }
    .article-img-mobile{
        border-radius: 30px !important;
        background-color: #F6AD3C !important;
    }
    .link-article a{
        text-decoration: none !important;
        font-weight: bold !important;
        color: #D02762 !important;
    }

    .haft-article-card{
        min-width: 100% !important;
        width: auto !important;
        min-height: 250px !important;
        background-color: #FFFCF5;
        border-radius: 15px !important;
    }
    .article-img{
        border-radius: 30px !important;
        min-width: 30px !important;
        max-width: 200px !important;
        min-height: 200px !important;
        background-color: #1B325E !important;
    }
    


    /* ========================= */

    /* TENTANG TRTD */
    .tentang-img{
        border-radius: 0 !important;
        min-width: 200px !important;
        max-width: 400px !important;
        min-height: 300px !important;
        /* background-color:#D02762 !important; */
    
    }
    .tentang-img-mobile{
        background-color: #D02762 !important;
    }
    .text-tentang{
        font-size: 14pt !important;
    }


    /* ================= */


    @media only screen and (max-width: 1200px) {
      
    }
    @media only screen and (max-width: 997px) {
        .count-down-pink-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            height: 110px !important;
            width: 110px !important;
            height: auto !important;
            border: 8px solid #D02762!important;
        }
        .count-down-blue-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            height: 110px !important;
            width: 110px !important;
            height: auto !important;
            border: 8px solid #1B325E!important;
        }
        .count-down-yellow-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            height: 110px !important;
            width: 110px !important;
            height: auto !important;
            border: 8px solid #F6AD3C!important;
        }
    }
    @media only screen and (max-width: 527px) {
        .count-down-pink-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            height: 110px !important;
            width: 110px !important;
            height: auto !important;
            border: 8px solid #D02762!important;
        }
        .count-down-blue-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            height: 110px !important;
            width: 110px !important;
            height: auto !important;
            border: 8px solid #1B325E!important;
        }
        .count-down-yellow-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            height: 110px !important;
            width: 110px !important;
            height: auto !important;
            border: 8px solid #F6AD3C!important;
        }
    }
    @media only screen and (max-width: 391px) {
        .count-down-pink-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            height: 110px !important;
            width: 110px !important;
            border: 8px solid #D02762!important;
        }
        .count-down-blue-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            height: 110px !important;
            width: 110px !important;
            border: 8px solid #1B325E!important;
        }
        .count-down-yellow-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            height: 110px !important;
            width: 110px !important;
            border: 8px solid #F6AD3C!important;
        }
        
    }
    .helper{
        vertical-align:middle;
        height: 80%;
        display: inline-block;
        width: 0;
        margin-left: -10px;
    }
    .day,.hour,.minute,.second{
        vertical-align:middle;
        display:inline-block;
        font-size: 40pt;
    }

    /* .active{
        background-color: #F6AD3C !important;
    } */

    .carousel-control-next, .carousel-control-prev{
        width: 10%!important;
    }
    
</style>
@section('content')
<div class="container-fluid count-down">
    @php
        $color_array = ["blue", "yellow", "pink"];
    @endphp
    <div class="row pt-5 d-none d-md-flex space-non-hp">
        {{-- BUAT SPACE --}}
    </div>
    <div class="row pt-5 d-flex d-md-none space-hp">
        {{-- BUAT SPACE --}}
    </div>
    <div class="row pt-5 pb-5">        
        <div class="col-3 d-none d-md-block">
            {{-- BUAT SPACE NON HP --}}
        </div>


        {{-- BUAT NON HP --}}
        <div class="col-7 d-none d-lg-block ">
            <div class="row ">
                <div class="col-2 ">
                    <div class="col count-down-pink">
                        <span class="helper"></span>
                        <div class="day">0</div>
                    </div>
                </div>
                <div class="col-1 pt-5 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-2 ">
                    <div class="col count-down-blue">
                        <span class="helper"></span>
                        <div class="hour">0</div>
                    </div>
                </div>
                <div class="col-1 pt-5 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-2 ">
                    <div class="col count-down-yellow">
                        <span class="helper"></span>
                        <div class="minute">0</div>
                    </div>
                </div>
                <div class="col-1 pt-5 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-2 ">
                    <div class="col count-down-pink">
                        <span class="helper"></span>
                        <div class="second">0</div>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-2 text-center" style="font-weight:bold !important;">
                    <p style="font-size: 20pt">Hari</p>
                </div>
                <div class="col-1 pt-5 text-center">
                   {{-- buat space --}}
                </div>
                <div class="col-2 text-center" style="font-weight:bold !important;">
                    <p style="font-size: 20pt">Jam</p>
                </div>
                <div class="col-1 pt-5 text-center">
                    {{-- buat space --}}
                </div>
                <div class="col-2 text-center" style="font-weight:bold !important;">
                    <p style="font-size: 20pt">Menit</p>
                </div>
                <div class="col-1 pt-5 text-center">
                    {{-- buat space --}}
                </div>
                <div class="col-2 text-center" style="font-weight:bold !important;">
                    <p style="font-size: 20pt">Detik</p>
                </div>
                
                
                <!-- <div class="col-1"></div> -->
            </div>
        </div>

        <div class="col-2 d-none d-md-block">
            {{-- BUAT SPACE NON HP --}}
        </div>

        {{-- BUAT HP --}}
        <div class="col-12 d-block d-lg-none">
            <div class="row ps-3 pb-3">
                <div class="col-5">
                    <div class="col count-down-pink-mobile">
                        <span class="helper"></span>
                        <div class="day">0</div>
                    </div>
                </div>
                <div class="col-1 pt-4 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-5 ps-4">
                    <div class="col count-down-blue-mobile">
                        <span class="helper"></span>
                        <div class="hour">0</div>
                    </div>
                </div>
            </div>
            <div class="row ps-3 pt-2">
                <div class="col-5 text-center" style="font-weight:bold !important;">
                    <p style="font-size: 20pt">Hari</p>
                </div>
                <div class="col-1 pt-2 text-center">
                    {{-- BUAT SPACE --}}
                </div>
                <div class="col-5 text-center" style="font-weight:bold !important;">
                    <p style="font-size: 20pt">Jam</p>
                </div>
            </div>
            <div class="row ps-3 pt-5">
                <div class="col-5">
                    <div class="col count-down-yellow-mobile">
                        <span class="helper"></span>
                        <div class="minute">0</div>
                    </div>
                </div>
                <div class="col-1 pt-4 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-5 ps-4">
                    <div class="col count-down-pink-mobile">
                        <span class="helper"></span>
                        <div class="second">0</div>
                    </div>
                </div>
            </div>
            <div class="row ps-3 pt-2">
                <div class="col-5 text-center" style="font-weight:bold !important;">
                    <p style="font-size: 20pt">Menit</p>
                </div>
                <div class="col-1 pt-2 text-center">
                    {{-- BUAT SPACE --}}
                </div>
                <div class="col-5 text-center" style="font-weight:bold !important;">
                    <p style="font-size: 20pt">Detik</p>
                </div>
            </div>
        </div>

        <div class="col-3 d-none d-md-block">
             {{-- BUAT SPACE NON HP --}}
        </div>
    </div>
    <div class="row">
        <center>
            <div class="col-12 " style="font-weight: bold">
                <h2>“The Rock Turns Diamond”</h2>
                
            </div>
        </center>
        
       
    </div>
</div>

{{-- BUAT NON HP --}}
    <div class="row pt-5 ps-2 ms-0 haft-title-ucapan-box d-none d-md-flex">
        <div class="row pt-2">
            <div class="col-2"></div>
            <div class="col-8">
                <h2>Ucapan untuk Dies Natalies ke-60 UK-Petra </h2>
            </div>
            <div class="col-2"></div>
        </div>
        
    </div>
{{-- =============== --}}

{{-- BUAT HP  --}}
    <div class="row pt-4 ps-2 ms-0 haft-title-ucapan-box d-flex d-md-none">
        <div class="row pt-2">
            <div class="col-12">
                <h2>Ucapan untuk Dies Natalies ke-60 UK-Petra </h2>
            </div>
        </div>
        
    </div>
{{-- +++++++++ --}}

<div class="row ms-0 video-container-yellow">
    <center>
        <div class="row pt-5">
            <div class="col-12 h-100 pb-5">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($embed_videos as $key => $embed_video)
                            @if($key == 0)
                                <div class="carousel-item active" style="background-color: #F6AD3C!important">
                                    <iframe class="d-block" width="80%" height="500" src="https://www.youtube.com/embed/{{ $embed_video->youtube_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            @else
                                <div class="carousel-item" style="background-color: #F6AD3C!important">
                                    <iframe class="d-block" width="80%" height="500" src="https://www.youtube.com/embed/{{ $embed_video->youtube_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </center>
</div>

<div class="pt-5 pb-2 d-flex flex-row flex-nowrap overflow-auto ">
    @foreach($wish_images as $key => $wish_image)
        <div class="card card-block mx-2 haft-card-galeri-{{ $color_array[($key+rand(0,100))%3] }}" style="max-width: 300px !important;">
            <div class="row pt-4">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="haft-card-img image-responsive-container">
                        <img src="{{ asset($wish_image->image->path) }}" class="image image-responsive-middle" alt="View Image" style="max-height: 403px">
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row pt-2">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="haft-card-text">
                        <center>
                            <div class="row">
                                <div class="col">
                                    <h5>{{ $wish_image->image_title }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>" {{ $wish_image->wish }} "</p>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div> 
    @endforeach
</div>

{{-- <div class="pt-5 pb-2 d-flex flex-row flex-nowrap overflow-auto ">
    @foreach($wish_vips as $key => $wish_vip)
        <div class="card card-block mx-2 haft-card-vip-{{ $color_array[($key+rand(0,100))%3] }}">
            <div class="row pt-4">
                <div class="col-3"></div>
                <div class="col-6">
                    <center>
                        <div class="haft-vip-card-img" style="background-image: url('{{ $wish_vip->image->path }}'); background-size: 100% 100%; background-repeat: no-repeat">
                        </div>
                    </center>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row pt-2">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="haft-vip-card-text">
                        <center>
                            <div class="row">
                                <div class="col">
                                    <h5>{{ $wish_vip->name }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="jabatan">"{{ $wish_vip->detail2 }} {{ $wish_vip->detail1 }}"</p>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row pt-1">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="haft-vip-card-wish">
                        <center>
                            <div class="row">
                                <div class="col">
                                    <p class="wish">" {{ $wish_vip->wish }} "</p>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    @endforeach
</div> --}}

<div class="pt-5 pb-2 d-flex flex-row flex-nowrap overflow-auto ">
    @foreach ($wish_texts as $key => $wish_text)
        <div class="card card-block mx-2 haft-card-vip-{{ $color_array[($key+rand(0,100))%3] }}" style="max-width: 300px">
            <div class="row pt-2">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="haft-vip-card-text">
                        <center>
                            <div class="row">
                                <div class="col">
                                    <h5>{{ $wish_text->name }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="jabatan">{{ $wish_text->role->name }}</p>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row pt-1">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="haft-vip-card-wish">
                        <center>
                            <div class="row">
                                <div class="col">
                                    <p class="wish">" {{ $wish_text->wish }} "</p>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    @endforeach
</div>

<div class="pt-3 pb-4">
    <center>
        <a href="/Ucapan" class="haft-btn-pink btn pt-2">
            <p>Unggah Ucapanmu</p>
        </a>
    </center>
</div>

{{-- BUAT NON HP --}}
    <div class="row pt-5 ps-2 ms-0 haft-title-yellow d-none d-md-flex">
        <div class="row pt-2">
            <div class="col-2"></div>
            <div class="col-8">
                <h2>Kegiatan TRTD</h2>
            </div>
            <div class="col-2"></div>
        </div>
        
    </div>
{{-- ================== --}}

{{-- BUAT HP --}}
    <div class="row pt-4 ps-2 ms-0 haft-title-yellow d-flex d-md-none">
        <div class="row pt-2">
            <div class="col-12">
                <h2 style="font-size:26pt;">Kegiatan TRTD</h2 >
            </div>
        </div>
        
    </div>
{{-- ================== --}}

<div class="container pt-3">
    {{-- BUAT NON HP --}}
        @foreach($blogs as $key => $blog)
            <div class="row pt-2 d-none d-md-flex">
                <div class="col-1">
                    {{-- SPACE --}}
                </div>
                <div class="col-10 pt-3 pb-4 haft-article-card shadow p-3 mb-5 bg-white">
                    <div class="row ps-4 pe-2 ">
                        <div class="col-3 article-img p-0 m-0">
                            <img src="{{ asset($blog->image->path) }}" alt="" width="100%" height="auto" style="border-radius: 30px">
                        </div>
                        <div class="col-9 ps-4">
                            <div class="row pt-2 title-article">
                                <h2>{{ $blog->title }}</h2>
                            </div>
                            <div class="row pt-1 text-article">
                                @php
                                    $preview_text = $blog->description;
                                    if (strlen($preview_text) > 50) {
                                        $preview_text = Str::substr($preview_text, 0, 50);
                                    }
                                    $preview_text .= '...';
                                @endphp
                                <p>{{ $preview_text }}</p>
                            </div>
                            <div class="row link-article">
                                <p><a href="{{ url('/Kegiatan/' . $blog->slug) }}"> Read More</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    {{-- SPACE --}}
                </div>
            </div>
        @endforeach
        <div class="row pt-2 pb-4 d-none d-md-flex">
            <div class="col">
                <center>
                    <h3><a href="/Kegiatan" style="color: #D02762 !important ;text-decoration:none;cursor: pointer;">  Lihat Kegiatan Lainnya</a></h3>
                </center>
            </div>
        </div>
    {{-- ================== --}}
    
    {{-- BUAT HP --}}
        @foreach($blogs as $key => $blog)
            <div class="row d-flex d-md-none">
                <div class="col-12 pt-3 pb-4 haft-article-card-mobile shadow p-3 mb-5 bg-white">
                    <div class="row ps-4 pe-2 ">
                        <div class="col-5 article-img-mobile" style="background-image: url('{{ $blog->image->path }}'); background-size: 100% 100%">
                            <!-- <img src="{{ asset($blog->image->path) }}" alt="" width="100%" height="auto" style="border-radius: 30px"> -->
                        </div>
                        <div class="col-7 ps-4">
                            <div class="row pt-2 title-article">
                                <h2 style="font-size:1.2rem">{{ $blog->title }}</h2>
                            </div>
                            <div class="row pt-1 text-article">
                                <p style="font-size:0.7rem">
                                    @php
                                        $preview_text = $blog->description;
                                        if (strlen($preview_text) > 50) {
                                            $preview_text = Str::substr($preview_text, 0, 50);
                                        }
                                        $preview_text .= '...';
                                    @endphp
                                    <p>{{ $preview_text }}</p>
                                </p>
                            </div>
                            <div class="row link-article">
                                <p><a href="{{ url('/Kegiatan/' . $blog->slug) }}"> Read More</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    {{-- ================== --}}
</div>

{{-- BUAT NON HP --}}
    <div class="row pt-5 ps-2 ms-0 haft-title-pink d-none d-md-flex">
        <div class="row pt-2">
            <div class="col-2"></div>
            <div class="col-8">
                <h2>Tentang TRTD</h2>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
{{-- ================== --}}

{{-- BUAT HP --}}
    <div class="row pt-4 ps-2 ms-0 haft-title-pink d-flex d-md-none">
        <div class="row pt-2">
            <div class="col-12">
                <h2 style="font-size:26pt;">Tentang TRTD</h2>
            </div>
        </div>
    </div>
{{-- ================== --}}

<div class="container pb-4">
    {{-- BUAT NON HP --}}
        <div class="row pt-5 pb-2 ps-3 d-none d-md-flex">
            <div class="col-1">
                {{-- BUAT SPACE --}}
            </div>
            <div class="col-10">
                <div class="row ps-4 pe-2 ">
                    <div class="col-4 tentang-img">
                        <img src="{{asset('assets/images/gambar-tentang.jpg')}}" alt="" width="290" height="330">
                    </div>
                    <div class="col-8 ps-4">
                        <div class="row pt-1 text-tentang">
                            <p style="font-size:1.2rem;text-align: justify">
                                Pada tanggal 22 September 2021, UK Petra akan merayakan ulang tahunnya yang ke 60. 
                                Perayaan ulang tahun ini bertajuk <span style="font-style: italic">The Rock Turns Diamond!</span> (TRTD). 
                                Petra, Sang Batu Karang, mencapai ulang tahun berliannya. 
                                Perayaan TRTD ini mengambil tema “<span style="font-style: italic">De<span style="font-weight:bold">light</span>ful Petra, De<span style="font-weight:bold">light</span>ed World </span>”. 
                                Tema ini memiliki dua makna. Pertama, UK Petra yang penuh sukacita membuat dunia turut bergembira.  
                                Tema ini juga berisi harapan UK Petra yang dipenuhi dengan nilai LIGHT dapat menyemai nilai-nilai 
                                tersebut di dalam masyarakat melalui pengajaran, penelitian, dan pengabdiannya.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-1">
                {{-- BUAT SPACE --}}
            </div>
        </div>
        <div class="row pt-5 pb-5 d-none d-md-flex">
            <div class="col">
                <center>
                    <h3><a href="/Tentang" style="color: #D02762 !important ;text-decoration:none;cursor: pointer;">Lihat Selengkapnya</a></h3>
                </center>
            </div>
        </div>
    {{-- ================== --}}

    {{-- BUAT HP --}}
        <div class="row pt-2 pb-2 ps-1 d-flex d-md-none">
            <div class="col-11">
                <div class="row ps-4 pe-2 ">
                    {{-- <div class="col-7 tentang-img-mobile">
                        <img src="{{asset('assets/images/gambar-tentang.jpg')}}" alt="" width="50" height="70">
                    </div> --}}
                    <div class="col ps-4">
                        <div class="row pt-1 text-tentang">
                            <p style="font-size:0.8rem;text-align: justify">
                                Pada tanggal 22 September 2021, UK Petra akan merayakan ulang tahunnya yang ke 60. 
                                Perayaan ulang tahun ini bertajuk <span style="font-style: italic">The Rock Turns Diamond!</span> (TRTD). 
                                Petra, Sang Batu Karang, mencapai ulang tahun berliannya. 
                                Perayaan TRTD ini mengambil tema “<span style="font-style: italic">De<span style="font-weight:bold">light</span>ful Petra, De<span style="font-weight:bold">light</span>ed World </span>”. 
                                Tema ini memiliki dua makna. Pertama, UK Petra yang penuh sukacita membuat dunia turut bergembira.  
                                Tema ini juga berisi harapan UK Petra yang dipenuhi dengan nilai LIGHT dapat menyemai nilai-nilai 
                                tersebut di dalam masyarakat melalui pengajaran, penelitian, dan pengabdiannya.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-1">
                {{-- BUAT SPACE --}}
            </div>
        </div>
        <div class="row pt-5 pb-5 d-flex d-md-none">
            <div class="col">
                <center>
                    <h3><a href="/Tentang" style="color: #D02762 !important ;text-decoration:none;cursor: pointer;">Lihat Selengkapnya</a></h3>
                </center>
            </div>
        </div>
    {{-- ================== --}}
</div>




    
@endsection

@section('js')
    <script>
        var countDownDate;
        $.ajax({
            type: "GET",
            url: "{{ url('/get_countdown') }}",
            success: function (response) {
                console.log(response);
                countDownDate = new Date(response.date_countdown).getTime();
            }
        });
        // Set the date we're counting down to
        // var countDownDate = new Date("Nov 24, 2021 00:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            // + minutes + "m " + seconds + "s ";
            $('.day').text(days);
            $('.hour').text(hours);
            $('.minute').text(minutes);
            $('.second').text(seconds);

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                // document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection