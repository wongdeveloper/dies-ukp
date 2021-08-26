@extends('layouts.adminapp')

@section('title')
    Admin Login | TRTD UKP
@endsection

@section('content-title')
    <h1>Edit Tanggal Countdown</h1>
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
    <form action="{{ route('admin.countdown.update') }}" method="post" id="Msg_Form">
        @csrf
        <input type="hidden" name="cid" value="{{ $countdown->id }}">
        <div class="row pt-3 ps-3 haft-form-header">
            <div class="col">
                <h2>Edit Countdown</h2>
            </div>
        </div> 
        <div class="row">
            <div class="col">
                <div class="row pt-3">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <label for="title" class="form-label">Tanggal Waktu Countdown (WIB) : </label>
                        <input type="datetime-local" class="form-control" id="countdown" name="dc" value="{{ old('cd', $countdown->rfc_format) }}">
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="row pt-2 pb-5">
            <div class="col text-center">
                <button class="btn haft-modal-btn submit-ucapan-foto">
                    <p style="margin: 0; font-size:15pt">Submit</p>
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
                url: "{{ route('admin.countdown.update') }}",
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