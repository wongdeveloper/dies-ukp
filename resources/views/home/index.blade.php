@extends('layouts.app')

@section('title')
    Beranda | TRTD UKP 60th
@endsection
<style>
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
        min-height: 135px !important;
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
        min-height: 135px !important;
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
        min-height: 135px !important;
        height: auto !important;
        border: 5px solid #F6AD3C!important;
    }
    h1{
        font-size: 35pt !important;
    }
    @media only screen and (max-width: 1200px) {
      
    }
    
</style>
@section('content')
<div class="comtainer-fluid count-down">
    <div class="row pt-5 pb-5">        
        <div class="col-3 d-none d-md-block">
            {{-- BUAT SPACE NON HP --}}
        </div>


        {{-- BUAT NON HP --}}
        <div class="col-6 d-none d-lg-block">
            <div class="row">
                
                <div class="col-3">
                    <div class="col count-down-blue">

                    </div>
                </div>
                <div class="col-1 pt-5 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-3">
                    <div class="col count-down-yellow">

                    </div>
                </div>
                <div class="col-1 pt-5 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-3">
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
                <div class="col-1 pt-5 text-center">
                    <h1 style="font-weight: bold">:</h1>
                </div>
                <div class="col-3">
                    <div class="col count-down-yellow-mobile">

                    </div>
                </div>
                <div class="col-1 pt-5 text-center">
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
        <div class="col-2">

        </div>
        <div class="col-8">
            <center>
                <h3>“To The Rock Turns Diamond”</h3>
            </center>
            
        </div>
        <div class="col-2"></div>
    </div>
</div>
    
@endsection

@section('js')

@endsection