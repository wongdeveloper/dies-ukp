@extends('layouts.app')

@section('title')
    Beranda | TRTD UKP 60th
@endsection
<style>

    /* ============ COUNTDOWN CSS ================= */
    .count-down{
        min-height: 400px !important;
        width: 100% !important;
    }
    .count-down-pink{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: 150px !important;
        min-height: 150px !important;
        border: 10px solid #D02762!important;
    }
    .count-down-blue{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: 150px !important;
        min-height: 150px !important;
        border: 10px solid #1B325E!important;
    }
    .count-down-yellow{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: 150px !important;
        min-height: 150px !important;
        border: 10px solid #F6AD3C!important;
    }

    .count-down-pink-mobile{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: auto !important;
        min-width: 80px !important;
        max-width: 150px !important;
        max-height: 150px !important;
        min-height: 90px !important;
        height: auto !important;
        border: 5px solid #D02762!important;
    }
    .count-down-blue-mobile{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: auto !important;
        min-width: 80px !important;
        max-width: 150px !important;
        max-height: 150px !important;
        min-height: 90px !important;
        height: auto !important;
        border: 5px solid #1B325E!important;
    }
    .count-down-yellow-mobile{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: auto !important;
        min-width: 80px !important;
        max-width: 150px !important;
        max-height: 150px !important;
        min-height: 90px !important;
        height: auto !important;
        border: 5px solid #F6AD3C!important;
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
    .link-article a{
        text-decoration: none !important;
        font-weight: bold !important;
        color: #D02762 !important;
    }
    


    /* ========================= */

    /* TENTANG TRTD */
    .tentang-img{
        border-radius: 0 !important;
        min-width: 200px !important;
        max-width: 400px !important;
        min-height: 300px !important;
        background-color:#D02762 !important;
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
            min-width: 80px !important;
            max-width: 150px !important;
            max-height: 150px !important;
            min-height: 135px !important;
            height: auto !important;
            border: 8px solid #D02762!important;
        }
        .count-down-blue-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            min-width: 80px !important;
            max-width: 150px !important;
            max-height: 150px !important;
            min-height: 135px !important;
            height: auto !important;
            border: 8px solid #1B325E!important;
        }
        .count-down-yellow-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            min-width: 80px !important;
            max-width: 150px !important;
            max-height: 150px !important;
            min-height: 135px !important;
            height: auto !important;
            border: 8px solid #F6AD3C!important;
        }
    }
    @media only screen and (max-width: 527px) {
        .count-down-pink-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            min-width: 95px !important;
            max-width: 150px !important;
            max-height: 150px !important;
            min-height: 90px !important;
            height: auto !important;
            border: 8px solid #D02762!important;
        }
        .count-down-blue-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            min-width: 95px !important;
            max-width: 150px !important;
            max-height: 150px !important;
            min-height: 90px !important;
            height: auto !important;
            border: 8px solid #1B325E!important;
        }
        .count-down-yellow-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            min-width: 95px !important;
            max-width: 150px !important;
            max-height: 150px !important;
            min-height: 90px !important;
            height: auto !important;
            border: 8px solid #F6AD3C!important;
        }
    }
    @media only screen and (max-width: 391px) {
        .count-down-pink-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            min-width: 80px !important;
            max-width: 150px !important;
            max-height: 150px !important;
            min-height: 70px !important;
            height: auto !important;
            border: 8px solid #D02762!important;
        }
        .count-down-blue-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            min-width: 80px !important;
            max-width: 150px !important;
            max-height: 150px !important;
            min-height: 70px !important;
            height: auto !important;
            border: 8px solid #1B325E!important;
        }
        .count-down-yellow-mobile{
            border-radius:100px;
            background-color: #FFFCF5 !important;
            width: auto !important;
            min-width: 80px !important;
            max-width: 150px !important;
            max-height: 150px !important;
            min-height: 70px !important;
            height: auto !important;
            border: 8px solid #F6AD3C!important;
        }
        
    }
    
</style>
@section('content')
<div class="container-fluid count-down">
    <div class="row pt-5 pb-5">        
        <div class="col-3 d-none d-md-block">
            {{-- BUAT SPACE NON HP --}}
        </div>


        {{-- BUAT NON HP --}}
        <div class="col-6 d-none d-lg-block ">
            <div class="row">
                
                <div class="col-3 ">
                    <div class="col count-down-blue">

                    </div>
                </div>
                <div class="col-1 pt-5 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-3 ">
                    <div class="col count-down-yellow">

                    </div>
                </div>
                <div class="col-1 pt-5 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-3 ">
                    <div class="col count-down-pink">

                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>


        {{-- BUAT HP --}}
        <div class="col-12 d-block d-lg-none">
            <div class="row ps-3">
                
                <div class="col-3">
                    <div class="col count-down-blue-mobile">

                    </div>
                </div>
                <div class="col-1 pt-2 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-3">
                    <div class="col count-down-yellow-mobile">

                    </div>
                </div>
                <div class="col-1 pt-2 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-3">
                    <div class="col count-down-pink-mobile">

                    </div>
                </div>
                
            </div>
            
        </div>

        <div class="col-3 d-none d-md-block">
             {{-- BUAT SPACE NON HP --}}
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 text-center">
            <h3>“To The Rock Turns Diamond”</h3>
            
        </div>
        <div class="col-1"></div>
    </div>
</div>

<div class="row pt-5 ps-2 ms-0 haft-title-ucapan-box">
    <div class="row pt-2">
        <div class="col-2"></div>
        <div class="col-8">
            <h2>Ucapan untuk Dies Natalies ke-60 UK-Petra </h2>
        </div>
        <div class="col-2"></div>
    </div>
    
</div>

<div class="row ms-0 video-container-yellow">
    <center>
        <div class="row pt-5">
            <div class="col">
                <h1>EMBED VIDEO</h1>
            </div>
        </div>
    </center>
</div>

<div class="pt-5 pb-2 d-flex flex-row flex-nowrap overflow-auto ">
    <div class="card card-block mx-2 haft-card-galeri-pink " >
        <div class="row pt-4">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-img">

                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Judul Foto</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        
    </div>
    <div class="card card-block mx-2 haft-card-galeri-yellow">
        <div class="row pt-4">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-img">

                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Judul Foto</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
    <div class="card card-block mx-2 haft-card-galeri-yellow">
        <div class="row pt-4">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-img">

                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Judul Foto</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>   
    <div class="card card-block mx-2 haft-card-galeri-blue">
        <div class="row pt-4">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-img">

                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Judul Foto</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
    <div class="card card-block mx-2 haft-card-galeri-pink">
        <div class="row pt-4">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-img">

                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Judul Foto</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
    <div class="card card-block mx-2 haft-card-galeri-yellow">
        <div class="row pt-4">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-img">

                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Judul Foto</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>   
    <div class="card card-block mx-2 haft-card-galeri-pink">
        <div class="row pt-4">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-img">

                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Judul Foto</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div> 
</div>

<div class="pt-5 pb-2 d-flex flex-row flex-nowrap overflow-auto ">
    <div class="card card-block mx-2 haft-card-vip-pink">
        <div class="row pt-4">
            <div class="col-3">

            </div>
            <div class="col-6">
                <center>
                    <div class="haft-vip-card-img">

                    </div>
                </center>
                
            </div>
            <div class="col-3">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Budi Budiman</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="jabatan">"CEO PT BAROKAH JAYA"</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-1">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-wish">
                    <center>
                        <div class="row">
                            <div class="col">
                                <p class="wish">" Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias officia nobis est officiis dolore reiciendis modi commodi accusantium in velit facere, inventore sit suscipit veritatis porro consequuntur impedit. Est, ea? "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        
        
    </div>
    <div class="card card-block mx-2 haft-card-vip-yellow">
        <div class="row pt-4">
            <div class="col-3">

            </div>
            <div class="col-6">
                <center>
                    <div class="haft-vip-card-img">

                    </div>
                </center>
                
            </div>
            <div class="col-3">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Budi Budiman</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="jabatan">"CEO PT BAROKAH JAYA"</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-1">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-wish">
                    <center>
                        <div class="row">
                            <div class="col">
                                <p class="wish">" Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias officia nobis est officiis dolore reiciendis modi commodi accusantium in velit facere, inventore sit suscipit veritatis porro consequuntur impedit. Est, ea? "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        
        
    </div>
    <div class="card card-block mx-2 haft-card-vip-blue">
        <div class="row pt-4">
            <div class="col-3">

            </div>
            <div class="col-6">
                <center>
                    <div class="haft-vip-card-img">

                    </div>
                </center>
                
            </div>
            <div class="col-3">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Budi Budiman</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="jabatan">"CEO PT BAROKAH JAYA"</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-1">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-wish">
                    <center>
                        <div class="row">
                            <div class="col">
                                <p class="wish">" Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias officia nobis est officiis dolore reiciendis modi commodi accusantium in velit facere, inventore sit suscipit veritatis porro consequuntur impedit. Est, ea? "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        
        
    </div>
    <div class="card card-block mx-2 haft-card-vip-pink">
        <div class="row pt-4">
            <div class="col-3">

            </div>
            <div class="col-6">
                <center>
                    <div class="haft-vip-card-img">

                    </div>
                </center>
                
            </div>
            <div class="col-3">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Budi Budiman</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="jabatan">"CEO PT BAROKAH JAYA"</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-1">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-wish">
                    <center>
                        <div class="row">
                            <div class="col">
                                <p class="wish">" Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias officia nobis est officiis dolore reiciendis modi commodi accusantium in velit facere, inventore sit suscipit veritatis porro consequuntur impedit. Est, ea? "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        
        
    </div>
    <div class="card card-block mx-2 haft-card-vip-blue">
        <div class="row pt-4">
            <div class="col-3">

            </div>
            <div class="col-6">
                <center>
                    <div class="haft-vip-card-img">

                    </div>
                </center>
                
            </div>
            <div class="col-3">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Budi Budiman</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="jabatan">"CEO PT BAROKAH JAYA"</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-1">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-wish">
                    <center>
                        <div class="row">
                            <div class="col">
                                <p class="wish">" Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias officia nobis est officiis dolore reiciendis modi commodi accusantium in velit facere, inventore sit suscipit veritatis porro consequuntur impedit. Est, ea? "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        
        
    </div>
    <div class="card card-block mx-2 haft-card-vip-yellow">
        <div class="row pt-4">
            <div class="col-3">

            </div>
            <div class="col-6">
                <center>
                    <div class="haft-vip-card-img">

                    </div>
                </center>
                
            </div>
            <div class="col-3">

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-text">
                    <center>
                        <div class="row">
                            <div class="col">
                                <h5>Budi Budiman</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="jabatan">"CEO PT BAROKAH JAYA"</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row pt-1">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="haft-vip-card-wish">
                    <center>
                        <div class="row">
                            <div class="col">
                                <p class="wish">" Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias officia nobis est officiis dolore reiciendis modi commodi accusantium in velit facere, inventore sit suscipit veritatis porro consequuntur impedit. Est, ea? "</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        
        
    </div>
</div>

<div class="pt-3 pb-4">
    <center>
        <div class="haft-btn-pink btn pt-2">
            <p>Unggah Ucapanmu</p>
        </div>
    </center>
</div>

<div class="row pt-5 ps-2 ms-0 haft-title-yellow">
    <div class="row pt-2">
        <div class="col-2"></div>
        <div class="col-8">
            <h2>Kegiatan TRTD</h2>
        </div>
        <div class="col-2"></div>
    </div>
    
</div>

<div class="container">
    <div class="row pt-5 pb-2">
        <div class="col-1">
            {{-- SPACE --}}
        </div>
        <div class="col-10 pt-3 pb-4 haft-article-card shadow p-3 mb-5 bg-white">
            <div class="row ps-4 pe-2 ">
                <div class="col-3 article-img">
                    {{-- BUAT GAMBAR --}}
                </div>
                <div class="col-9 ps-4">
                    <div class="row pt-2 title-article">
                        <h2>Judul Kegiatan</h2>
                    </div>
                    <div class="row pt-1 text-article">
                        <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, mollitia eius qui, error veritatis quibusdam officiis repellendus doloribus, delectus provident ea cum impedit! Quis nihil sit id, reiciendis magni corporis! "</p>
                    </div>
                    <div class="row link-article">
                        <p> <a href="#"> Read More</a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1">
            {{-- SPACE --}}
        </div>
    </div>
    <div class="row pt-5 pb-2">
        <div class="col-1">
            {{-- SPACE --}}
        </div>
        <div class="col-10 pt-3 pb-4 haft-article-card shadow p-3 mb-5 bg-white">
            <div class="row ps-4 pe-2 ">
                <div class="col-3 article-img">
                    {{-- BUAT GAMBAR --}}
                </div>
                <div class="col-9 ps-4">
                    <div class="row pt-2 title-article">
                        <h2>Judul Kegiatan</h2>
                    </div>
                    <div class="row pt-1 text-article">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem assumenda ratione beatae, iure placeat asperiores quia aliquam! Error, commodi dolores, soluta, expedita numquam enim omnis laborum ex maiores iure saepe? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque veniam quam numquam voluptate distinctio sapiente quaerat aperiam, impedit corporis molestiae dolore a, illum maxime earum dignissimos odio? Incidunt, corporis velit.</p>
                    </div>
                    <div class="row link-article">
                        <p> <a href="#"> Read More</a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1">
            {{-- SPACE --}}
        </div>
    </div>
    <div class="row pt-5 pb-2">
        <div class="col-1">
            {{-- SPACE --}}
        </div>
        <div class="col-10 pt-3 pb-4 haft-article-card shadow p-3 mb-5 bg-white">
            <div class="row ps-4 pe-2 ">
                <div class="col-3 article-img">
                    {{-- BUAT GAMBAR --}}
                </div>
                <div class="col-9 ps-4">
                    <div class="row pt-2 title-article">
                        <h2>Judul Kegiatan</h2>
                    </div>
                    <div class="row pt-1 text-article">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem assumenda ratione beatae, iure placeat asperiores quia aliquam! Error, commodi dolores, soluta, expedita numquam enim omnis laborum ex maiores iure saepe? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque veniam quam numquam voluptate distinctio sapiente quaerat aperiam, impedit corporis molestiae dolore a, illum maxime earum dignissimos odio? Incidunt, corporis velit.</p>
                    </div>
                    <div class="row link-article">
                        <p> <a href="#"> Read More</a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1">
            {{-- SPACE --}}
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col">
            <center>
                <h3><a href="/Kegiatan" style="color: #D02762 !important ;text-decoration:none;cursor: pointer;">  Lihat Kegiatan Lainnya</a></h3>
            </center>
        </div>
    </div>
</div>


<div class="row pt-5 ps-2 ms-0 haft-title-pink">
    <div class="row pt-2">
        <div class="col-2"></div>
        <div class="col-8">
            <h2>Tentang TRTD</h2>
        </div>
        <div class="col-2"></div>
    </div>
    
</div>

<div class="container pb-4">
    <div class="row pt-5 pb-2 ps-3">
        <div class="col-1">
            {{-- BUAT SPACE --}}
        </div>
        <div class="col-10">
            <div class="row ps-4 pe-2 ">
                <div class="col-4 tentang-img">
                    {{-- BUAT GAMBAR --}}
                </div>
                <div class="col-8 ps-4">
                    <div class="row pt-1 text-tentang">
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita non similique repellendus, rerum corrupti soluta, voluptate maxime eos aliquam nostrum, harum sed odit? Vitae hic, quos magnam nihil iste quo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem assumenda ratione beatae, iure placeat asperiores quia aliquam! Error, commodi dolores, soluta, expedita numquam enim omnis laborum ex maiores iure saepe? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque veniam quam numquam voluptate distinctio sapiente quaerat aperiam, impedit corporis molestiae dolore a, illum maxime earum dignissimos odio? Incidunt, corporis velit.</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-1">
            {{-- BUAT SPACE --}}
        </div>
    </div>
    <div class="row pt-5 pb-5">
        <div class="col">
            <center>
                <h3><a href="#" style="color: #D02762 !important ;text-decoration:none;cursor: pointer;">Lihat Selengkapnya</a></h3>
            </center>
        </div>
    </div>
</div>




    
@endsection

@section('js')

@endsection