@extends('layouts.adminapp')

@section('title')
    Admin Login | TRTD UKP
@endsection

@section('content-title')
    <h1>Unggah Teks Ucapan Undangan</h1>
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
    <form action="{{ route('admin.ucapan.store') }}" method="post" enctype="multipart/form-data" id="Msg_Form">
        @csrf
        <input type="hidden" name="is_vip" value="1">
        <input type="hidden" name="kategori" value="{{ $role->id }}">
        <div class="row pt-3 ps-3 haft-form-header">
            <div class="col">
                <h2>Unggah Teks Ucapan Undangan</h2>
            </div>
        </div> 
        <div class="row">
            <div class="col">
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="input">Unggah Foto Pemberi Ucapan</label>
                            <input type="file" class="image" name="image" id="coverimage">
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="croppie-modal" style="display: none">
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <label for="nama" class="form-label">Nama Pemberi Ucapan </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <label for="nama" class="form-label">Nama Perusahaan/Lembaga Pemberi Ucapan </label>
                        <input type="text" class="form-control" id="detail1" name="detail1"placeholder="Nama Lengkap">
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <label for="nama" class="form-label">Jabatan Pemberi Ucapan </label>
                        <input type="text" class="form-control" id="detail2" name="detail2"placeholder="Nama Lengkap">
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="form-group" id="formMsg">
                            <label for="notes">Ucapan Dalam Bentuk Teks (Max 400 Characters)</label>
                            <textarea class="form-control" name="wish" id="inputMsg" rows="3" placeholder="Message" minlength="5" maxlength="400" required></textarea>
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

        var resize = $('.croppie-modal').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport : {
                width: 277.5,
                height: 200,
                type: 'square'
            },
            boundary : {
                width: 300,
                height: 300
            }
        });

        $(document).on('change', '.image', function () {
            resize.show();
            var reader = new FileReader();
            reader.onload = function(e) {
                resize.croppie('bind', {
                    url: e.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
        });

        $(document).on('submit', '#Msg_Form', function (e) {
            e.preventDefault();
            resize.croppie('result', {
                type: 'blob',
                size: 'original',
                format: 'png',
                circle: false
            }).then(function(img){
                var formdata = new FormData(document.getElementById('Msg_Form'));
                formdata.append('image', img);
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
                    url: "{{ route('admin.ucapan.store') }}",
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
        });
    </script>
@endsection