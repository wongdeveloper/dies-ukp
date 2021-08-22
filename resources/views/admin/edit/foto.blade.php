@extends('layouts.adminapp')

@section('title')
    Admin Login | TRTD UKP
@endsection

@section('content-title')
    <h1>Edit Foto Ucapan TRTD</h1>
@endsection

<style>
    .haft-btn-pink {
        background-color: #D02762 !important;
        color:#FFFCF5 !important;
        width: auto !important;
        height: 45px !important;
        border-radius: 30px !important;
        
        
    }
    .haft-btn-pink p{
        font-size: 12pt !important;
        font-weight: bold !important;
    }
    .haft-form-header{
        background-color:#1B325E !important;
        color: #fff;
        width: auto !important;
        min-height: 70px !important;
    }
</style>
@section('content')

<div class="container haft-form">
    <div class="row pt-3 ps-3 haft-form-header">
        <div class="col">
            <h2>Edit Foto Ucapan TRTD</h2>
        </div>
    </div> 
    <form action="#" method="post" enctype="multipart/form-data" id="Msg_Form">
        @csrf
        <div class="row">
            <div class="col">
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <label for="title" class="form-label">Judul Video : </label>
                        <input type="text" class="form-control" id="title" name="title"placeholder="Judul Kegiatan">
                    </div>
                    <div class="col-1"></div>
                </div>
               
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <label for="videolink" class="form-label">Caption Video : </label>
                        <input type="text" class="form-control" id="videolink" name="videolink"placeholder="Link Video">
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <label for="videolink" class="form-label">Link Video : </label>
                        <input type="text" class="form-control" id="videolink" name="videolink"placeholder="Link Video">
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </form>
    <div class="row pt-2 pb-5">
        <div class="col text-center">
            <button class="btn haft-modal-btn submit-ucapan-foto" data-bs-dismiss="modal">
                <p style="margin: 0; font-size:15pt">Unggah</p>
            </button>
        </div>
    </div>
    
</div>



@endsection

@section('js')

@endsection