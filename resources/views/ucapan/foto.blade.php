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
    <div class="container-fluid ucapan-foto">
        <div class="row pt-5 title">    
            <div class="col-2"></div>   
            <div class="col-4">
                <h1>Ucapan dalam Foto</h1>
            </div>
            <div class="col-3"></div>
            <div class="col-3 haft-btn-pink">
                <p class="text-center pt-2">Unggah Fotomu</p>
            </div>
        </div>
        <div class="row line-pink">
            <div class="col-2"></div>
            <div class="col-3">
                <hr style="border: 2px solid; opacity: 5; color:#D02762;">
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-2"></div>

            <div class="col-3">
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
            </div>
            <div class="col-3">
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
            </div>
            <div class="col-3">
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
            </div>

            <div class="col-1"></div>
        </div>
        <div class="row pt-3">
            <div class="col-2"></div>

            <div class="col-3">
                <div class="card card-block mx-2 haft-card-galeri-blue " >
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
            <div class="col-3">
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
            <div class="col-3">
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
            </div>

            <div class="col-1"></div>
        </div>
        <div class="row pt-3">
            <div class="col-2"></div>

            <div class="col-3">
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
            </div>
            <div class="col-3">
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
            </div>
            <div class="col-3">
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
            </div>

            <div class="col-1"></div>
        </div>
        <div class="row pt-3">
            <div class="col-2"></div>

            <div class="col-3">
                <div class="card card-block mx-2 haft-card-galeri-blue " >
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
            <div class="col-3">
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
            <div class="col-3">
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
            </div>

            <div class="col-1"></div>
        </div>
        

        <div class="row pt-5 pb-5"></div>
        

    </div>

</div>






    
@endsection

@section('js')

@endsection