@extends('layouts.adminapp')

@section('title')
    Admin Login | TRTD UKP
@endsection

@section('content-title')
    <h1>Edit Teks Ucapan TRTD</h1>
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
            <h2>Edit Teks Ucapan TRTD</h2>
        </div>
    </div> 
    <form action="{{ url('admin/ucapan/update') }}" method="post" enctype="multipart/form-data" id="Msg_Form">
        @csrf
        <input type="hidden" name="wid" value="{{ $wish->id }}">
        <input type="hidden" name="is_vip" value="0">
        <div class="row haft-form">
            <div class="col">
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <label for="name" class="form-label">Nama Lengkap : </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap"
                            value="{{ old('name', $wish->name) }}">
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group" id="formEmail">
                            <label for="inputEmail">Email </label>
                            <input type="text" class="form-control" name="email" id="inputEmail"
                                placeholder="exxxxx@email.com" value="{{ old('email', $wish->email) }}">
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group">
                            <label class="my-1 mr-2" for="kategori">Kategori</label>
                            <select class="custom-select my-1 mr-sm-2" id="kategori" name="kategori" aria-placeholder=""
                                required>
                                <option hidden value="0">Kategori</option>
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}" @if($role->id == $wish->role->id) selected @endif
                                    >{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3" id="formKategori2" @if($wish->role->id != 2) hidden @endif>
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
                <div class="row pt-3" id="formKategoriinput2" @if($wish->role->id != 2) hidden @endif>
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="inputdetail2" id="labelinputdetail2">Prodi/Program</label>
                            <input type="text" class="form-control" name="detail2" id="inputdetail2"
                                placeholder="Masukkan Prodi/Program"
                                value="{{ $wish->role->id == 2 ? $wish->detail2 : old('detail2') }}">
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3" id="formJurusan" @if($wish->role->id != 1 && $wish->role->id != 3) hidden
                    @endif>
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="inputJurusan">Prodi/Program</label>
                            <input type="text" class="form-control" name="jurusan" id="inputJurusan" placeholder="Jurusan"
                                value="{{ $wish->role->id == 1 ? $wish->detail1 : ($wish->role->id == 3 ? $wish->detail1 : old('jurusan')) }}">
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3" id="formAngkatan" @if($wish->role->id != 1 && $wish->role->id != 3) hidden
                    @endif>
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="inputAngkatan">Angkatan</label>
                            <input type="number" class="form-control" name="angkatan" id="inputAngkatan"
                                placeholder="Angkatan (Contoh &quot;2018&quot;)" min="1961" max="2020"
                                value="{{ $wish->role->id == 1 ? $wish->detail2 : ($wish->role->id == 3 ? $wish->detail2 : old('angkatan')) }}">
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group" id="formMsg">
                            <label for="notes">Ucapan Dalam Bentuk Teks (Max 400 Characters)</label>
                            <textarea class="form-control" name="wish" id="inputMsg" rows="3" placeholder="Message"
                                minlength="5" maxlength="400" required>{{ old('wish', $wish->wish) }}</textarea>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="row pt-2 pb-5">
            <div class="col text-center">
                <button class="btn haft-modal-btn submit-ucapan-foto">
                    <p style="margin: 0; font-size:15pt">Unggah</p>
                </button>
            </div>
        </div>
    </form>
    
</div>



@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $(document).on('submit', '#Msg_Form', function (e) {
            e.preventDefault();
            var formdata = new FormData(document.getElementById('Msg_Form'));
            var jc = $.dialog({
                title: '',
                content: '',
                closeIcon: false,
                onOpenBefore: function() {
                    this.showLoading(true);
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('admin.ucapan.update') }}",
                data: formdata,
                async: false,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function(){
                    jc.open();
                },
                complete: function(){
                    jc.close();
                },
                success: function (response) {
                    $.confirm({
                        title: 'Success',
                        content: 'Data successfully uploaded',
                        type: 'green',
                        typeAnimated: true,
                        buttons: {
                            close: function () {
                                location.reload();
                            }
                        }
                    });
                },
                error: function(response){
                    var message = null;
                    if (response.hasOwnProperty('responseJSON')) {
                        if (response.responseJSON.hasOwnProperty('message')) {
                            message = response.responseJSON.message;
                        }
                    }
                    $.confirm({
                        title: 'Error',
                        content: 'Something went wrong.<br>Error: '+ message,
                        type: 'red',
                        typeAnimated: true,
                        buttons: {
                            close: function () {
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection