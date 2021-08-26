@extends('layouts.app')

@section('title')
    Beranda | TRTD UKP 60th
@endsection
<style>

    .ucapan-content{
        min-height:500px !important ;
    }




    /* ===================== CARD UCAPAN FOTO =========== */

    .haft-card-galeri-pink{
        min-width: 300px !important; 
        min-height: 200px !important;
        background-color: #D02762 !important;
        border-radius: 0px !important;
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
        font-weight: bold !important;
    }

    .haft-btn-yellow {
        background-color: #F6AD3C !important;
        color:#FFFCF5 !important;
        width: 235px !important;
        height:50px !important;
        border-radius: 30px !important;
        
        
    }
    .haft-btn-yellow p{
        font-size: 15pt !important;
        font-weight: bold !important;
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



    @media only screen and (max-width: 1200px) {
      
    }
    @media only screen and (max-width: 997px) {
        
    }
    @media only screen and (max-width: 527px) {
        
    }
    @media only screen and (max-width: 391px) {
        
        
    }
    
</style>
@section('content')
<div class="ucapan-content">
    @php
        $color_array = ["blue", "yellow", "pink"];
    @endphp
    <div class="container-fluid ucapan-video">
        {{-- BUAT NON HP --}}
            <div class="row pt-5 title d-none d-md-flex">
                <div class="col-2"></div>        
                <div class="col-10">
                    <h1>Ucapan dalam Video</h1>
                </div>
            </div>
            <div class="row line-blue d-none d-md-flex">
                <div class="col-2"></div>
                <div class="col-3">
                    <hr style="border: 2px solid; opacity: 5; color:#1B325E;">
                </div>
            </div>
        {{-- ============== --}}

        {{-- BUAT HP --}}
            <div class="row pt-5 title d-flex d-md-none">     
                <div class="col">
                    <h1>Ucapan dalam Video</h1>
                </div>
            </div>
            <div class="row line-blue d-flex d-md-none">
                <div class="col-6">
                    <hr style="border: 2px solid; opacity: 5; color:#1B325E;">
                </div>
            </div>
        {{-- +++++++++ --}}



        {{-- BUAT NON HP --}}
            <div class="row pt-3 d-none d-md-flex">
                @foreach ($wish_videos as $key => $wish_video)
                    @if ($key % 3 == 0)
                        <div class="col-2"></div>
                    @endif
                    <div class="col-3 mt-3">
                        <div class="card card-block mx-2 haft-card-galeri-{{ $color_array[($key+rand(0,100))%3] }}">
                            <div class="row pt-4">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <div class="haft-card-img overlay-container">
                                        <img src="https://img.youtube.com/vi/{{ $wish_video->youtube_id }}/0.jpg" alt="" class="image">
                                        <div class="overlay">
                                            <a href="#" data-video-id="{{ $wish_video->youtube_id }}" class="overlay-icon modal-video-card" title="Play Video">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
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
                                                    <h5>{{ $wish_video->video_title }}</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>" {{ $wish_video->wish }} "</p>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                    @if (($key+1) % 3 == 0 || (count($wish_videos)-1) == ($key))
                        <div class="col-1"></div>
                    @endif
                @endforeach
            </div>
        {{-- ========== --}}

        {{-- BUAT HP --}}
            <div class="pt-5 pb-2 d-flex d-md-none flex-row flex-nowrap overflow-auto ">
                @foreach ($wish_videos as $wish_video)
                    <div class="card card-block mx-2 haft-card-galeri-{{ $color_array[($key+rand(0,100))%3] }}">
                        <div class="row pt-4">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="haft-card-img overlay-container">
                                    <img src="https://img.youtube.com/vi/{{ $wish_video->youtube_id }}/0.jpg" alt="" class="image">
                                    <div class="overlay">
                                        <a href="#" data-video-id="{{ $wish_video->youtube_id }}" class="overlay-icon modal-video-card" title="Play Video">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
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
                                                <h5>{{ $wish_video->video_title }}</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p>" {{ $wish_video->wish }} "</p>
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
        {{-- +++++++++ --}}
        <div class="row pt-5 pb-5"></div>
    </div>
    
    
    

    

</div>






    
@endsection

@section('js')

@endsection