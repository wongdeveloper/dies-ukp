@extends('layouts.app')

@section('title')
    Tentang | TRTD UKP 60th
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

    /* HAFT MODAL */
    .haft-header-modal{
        width: 100%;
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
    


    /* =================== */

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
    /* ISI TENTANG */
        .container-isi-blue{
            background-color: #1B325E !important;
            width: auto !important;
            min-height: 300px !important;
        }
        .container-isi-pink{
            background-color: #D02762 !important;
            width: auto !important;
            min-height: 300px !important;
        }
        .container-isi-yellow{
            background-color: #F6AD3C !important;
            width: auto !important;
            min-height: 300px !important;
        }
        .container-img{
            background-color: #fff;
            min-height: 300px !important;
        }
        .container-teks{
            color: #fff !important;
        }

    /* ================= */



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
    
    {{-- BUAT NON HP --}}
        <div class="container-fluid pb-5 ucapan-teks d-none d-md-block">
            <div class="row pt-5 title">
                <div class="col-2"></div>        
                <div class="col-4">
                    <h1>Tentang TRTD</h1>
                </div>
                <div class="col-6"></div>
                
            </div>
            <div class="row line-pink">
                <div class="col-2"></div>
                <div class="col-3">
                    <hr style="border: 2px solid; opacity: 5; color: #D02762;">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col container-isi-blue">
                    <div class="row">
                        <div class="col-2">
                            {{-- BUAT JARAK --}}
                        </div>
                        <div class="col-3 container-img">
    
                        </div>
                        <div class="col-6 pt-5 container-teks">
                            <div class="row">
                                <div class="col">
                                    <h1>Judul Section</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rem voluptate tempora cumque tempore voluptas earum animi voluptatibus nihil laborum dicta pariatur, vitae in quia eligendi nemo aliquid, maxime sunt!</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-1"></div>
                    </div>
                    
                </div>
            </div>
            <div class="row pt-4">
                <div class="col container-isi-pink" style="text-align: right">
                    <div class="row">
                        <div class="col-1">
                            {{-- BUAT JARAK --}}
                        </div>
                        <div class="col-6 pt-5 container-teks">
                            <div class="row">
                                <div class="col">
                                    <h1>Judul Section</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rem voluptate tempora cumque tempore voluptas earum animi voluptatibus nihil laborum dicta pariatur, vitae in quia eligendi nemo aliquid, maxime sunt!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 container-img">
    
                        </div>
                        <div class="col-2">
                            {{-- BUAT JARAK --}}
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col container-isi-yellow">
                    <div class="row">
                        <div class="col-2">
                            {{-- BUAT JARAK --}}
                        </div>
                        <div class="col-3 container-img">
    
                        </div>
                        <div class="col-6 pt-5 container-teks">
                            <div class="row">
                                <div class="col">
                                    <h1>Judul Section</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rem voluptate tempora cumque tempore voluptas earum animi voluptatibus nihil laborum dicta pariatur, vitae in quia eligendi nemo aliquid, maxime sunt!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
        </div>
    {{-- ---------------- --}}
    {{-- BUAT HP --}}
    <div class="container-fluid pb-5 ucapan-teks d-block d-md-none">
        <div class="row pt-5 title">
            <div class="col">
                <h1>Tentang TRTD</h1>
            </div>
            
        </div>
        <div class="row line-pink">
            <div class="col-6">
                <hr style="border: 2px solid; opacity: 5; color: #D02762;">
            </div>
        </div>
        <div class="row pt-4">
            <div class="col container-isi-blue">
                <div class="row">
                    <div class="col-1">
                        {{-- BUAT JARAK --}}
                    </div>
                    <div class="col-5 container-img">

                    </div>
                    <div class="col-6 pt-5 container-teks">
                        <div class="row">
                            <div class="col">
                                <h1 style="font-size: 1.2rem">Judul Section</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 0.7rem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rem voluptate tempora cumque tempore voluptas earum animi voluptatibus nihil laborum dicta pariatur, vitae in quia eligendi nemo aliquid, maxime sunt!</p>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="row pt-4">
            <div class="col container-isi-pink" style="text-align: right">
                <div class="row">
                    <div class="col-6 pt-5 container-teks">
                        <div class="row">
                            <div class="col">
                                <h1 style="font-size: 1.2rem">Judul Section</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 0.7rem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rem voluptate tempora cumque tempore voluptas earum animi voluptatibus nihil laborum dicta pariatur, vitae in quia eligendi nemo aliquid, maxime sunt!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 container-img">

                    </div>
                    <div class="col-1">
                        {{-- BUAT JARAK --}}
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col container-isi-yellow">
                <div class="row">
                    <div class="col-1">
                        {{-- BUAT JARAK --}}
                    </div>
                    <div class="col-5 container-img">

                    </div>
                    <div class="col-6 pt-5 container-teks">
                        <div class="row">
                            <div class="col">
                                <h1 style="font-size: 1.2rem">Judul Section</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 0.7rem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rem voluptate tempora cumque tempore voluptas earum animi voluptatibus nihil laborum dicta pariatur, vitae in quia eligendi nemo aliquid, maxime sunt!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    {{-- ---------------- --}}
    

   

</div>







    
@endsection

@section('js')

@endsection