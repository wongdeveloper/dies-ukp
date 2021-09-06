@extends('layouts.app-en')

@section('title')
    Text Wishes | TRTD UKP 60th
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
    <div class="container-fluid ucapan-teks">

        {{-- BUAT NON HP --}}
            <div class="row pt-5 title d-none d-md-flex">
                <div class="col-2"></div>        
                <div class="col-4">
                    <h1>Wishes in Text</h1>
                </div>
                <div class="col-3"></div>
                <div class="col-3 haft-btn-yellow" data-bs-toggle="modal" data-bs-target="#modal-ucapan-foto">
                    <p class="text-center pt-2">Upload your Wishes</p>
                </div>
            </div>
            <div class="row line-yellow d-none d-md-flex">
                <div class="col-2"></div>
                <div class="col-3">
                    <hr style="border: 2px solid; opacity: 5; color:#F6AD3C;">
                </div>
            </div>
        {{-- ---------------- --}}

        {{-- BUAT HP --}}
            <div class="row pt-5 title d-flex d-md-none">     
                <div class="col-10">
                    <h1>Wishes in Text</h1>
                </div>
            </div>
            <div class="row line-yellow d-flex d-md-none">
                <div class="col-6">
                    <hr style="border: 2px solid; opacity: 5; color:#F6AD3C;">
                </div>
            </div>
            <div class="row ps-2 d-flex d-md-none">
                <div class="col-10 haft-btn-yellow" data-bs-toggle="modal" data-bs-target="#modal-ucapan-foto">
                    <p class="text-center pt-2">Upload your Wishes</p>
                </div>
            </div>
        {{-- ========= --}}
        
        {{-- BUAT NON HP --}}
            <div class="row pt-3 d-none d-md-flex">
                {{-- @foreach ($wish_texts as $key => $wish_text)
                    @if ($key % 3 == 0)
                        <div class="col-2"></div>
                    @endif
                    <div class="col-3 mt-3">
                        <div class="card card-block mx-2 haft-card-vip-{{ $color_array[($key+rand(0,100))%3] }}">
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
                    </div>
                    @if (($key+1) % 3 == 0 || (count($wish_texts)-1) == ($key))
                        <div class="col-1"></div>
                    @endif
                @endforeach --}}
            </div>
        {{-- +++++++++++ --}}

        {{-- BUAT HP --}}
        <div class="pt-5 pb-2 d-flex d-md-none flex-row flex-nowrap overflow-auto ">
            {{-- @foreach ($wish_texts as $wish_text)
                <div class="card card-block mx-2 haft-card-vip-{{ $color_array[($key+rand(0,100))%3] }}">
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
            @endforeach --}}
        </div>
        {{-- ======= --}}
    </div>

    <div class="row pt-5 pb-5"></div>
</div>

{{-- Modal Ucapan --}}
<div class="modal fade haft-modal" id="modal-ucapan-foto" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="row p-0 m-0 pt-3 ps-3 haft-header-modal">
                <div class="col">
                    <h3 style="">Upload your Wishes !</h3>
                </div>
            </div>
            <form action="{{ url('wish/store') }}" method="post" enctype="multipart/form-data" id="Msg_Form">
                @csrf
                <div class="row haft-form">
                    <div class="col">
                        <div class="row pt-3">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="name" class="form-label">Full Name : </label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Full Name">
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="form-group" id="formEmail">
                                    <label for="inputEmail">Email </label>
                                    <input type="text" class="form-control" name="email" id="inputEmail"
                                        placeholder="exxxxx@email.com">
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label class="my-1 mr-2" for="kategori">Category</label>
                                    <select class="custom-select my-1 mr-sm-2" id="kategori" name="kategori"
                                        aria-placeholder="" required>
                                        <option hidden value="0">Category</option>
                                        {{-- @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row pt-3" id="formKategori2" hidden>
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="detail1" id="inlineRadio1"
                                            value="Prodi/Program" checked>
                                        <label class="form-check-label" for="inlineRadio1">Prodi/Program</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="detail1" id="inlineRadio2"
                                            value="Biro/Unit">
                                        <label class="form-check-label" for="inlineRadio2">Biro/Unit</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row pt-3" id="formKategoriinput2" hidden>
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="inputdetail2" id="labelinputdetail2">Prodi/Program</label>
                                    <input type="text" class="form-control" name="detail2" id="inputdetail2"
                                        placeholder="Masukkan Prodi/Program">
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row pt-3" id="formJurusan" hidden>
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="inputJurusan">Prodi/Program</label>
                                    <input type="text" class="form-control" name="jurusan" id="inputJurusan"
                                        placeholder="Jurusan">
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row pt-3" id="formAngkatan" hidden>
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="inputAngkatan">Angkatan</label>
                                    <input type="number" class="form-control" name="angkatan" id="inputAngkatan"
                                        placeholder="Angkatan (Contoh &quot;2018&quot;)" min="1961" max="2020">
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="form-group" id="formMsg">
                                    <label for="notes">Wishes in Words (Max 400 Characters)</label>
                                    <textarea class="form-control" name="wish" id="inputMsg" rows="3"
                                        placeholder="Message" minlength="5" maxlength="400" required></textarea>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
                <div class="row pt-2 pb-5">
                    <div class="col text-center">
                        <button class="btn haft-modal-btn submit-ucapan-foto">
                            <p style="margin: 0; font-size:15pt">Upload</p>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





    
@endsection

@section('js')
    <script>
        $(document).on('hidden.bs.modal', '#modal-ucapan-foto', function () {
            $('#Msg_Form')[0].reset();
        });
    </script>
@endsection