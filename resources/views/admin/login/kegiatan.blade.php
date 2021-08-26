@extends('layouts.adminapp')

@section('title')
    Admin Login | TRTD UKP
@endsection

@section('content-title')
    <h1>List Kegiatan TRTD</h1>
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
    
</style>
@section('content')
<div class="row justify-content-end w-100 m-0">
    <a href="{{ url('/admin/kegiatan/create') }}" class="col-2 haft-btn-pink" >
        <p class="text-center pt-2">Unggah Kegiatan</p>
    </a>
</div>
<table class="rwd-table table table-borderless table-hover">
    <thead>
        <tr>
            
            <th>#</th>
            <th>Judul Kegiatan</th>
            <th>Foto Cover</th>
            <th>Deskripsi kegiatan</th>
            <th>Link Video</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $key => $blog)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $blog->title }}</td>
                <td>
                    <img src="{{ $blog->image->path }}" data-src="{{ $blog->image->path }}" alt="Click to Zoom"
                        class="image-preview" width="200" height="200">
                </td>
                <td>{{ $blog->description }}</td>
                <td>
                    @if(!is_null($blog->video))
                        <div class="haft-card-img overlay-container">
                            <img src="https://img.youtube.com/vi/{{ $blog->youtube_id }}/0.jpg" alt="" class="image">
                            <div class="overlay">
                                <a href="#" data-video-id="{{ $blog->youtube_id }}" class="overlay-icon modal-video-card"
                                    title="Play Video">
                                    <i class="fas fa-play" style="font-size: 20%!important"></i>
                                </a>
                            </div>
                        </div>
                    @else
                        No Video
                    @endif
                </td>
                <td nowrap="nowrap">
                    <center>
                        <button id="delete-blog-btn" class="btn btn-danger" data-id="{{ $blog->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </button>
                        <a href="{{ url('admin/kegiatan/edit/' . $blog->id) }}" id="edit-blog-btn" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil"
                                viewBox="0 0 16 16">
                                <path
                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </a>
                    </center>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    
    

@endsection

@section('js')
    <script>
        $('.modal-video-card').modalVideo();

        $(document).on('click', '[id="delete-blog-btn"]', function () {
            var id = $(this).data('id');
            $.confirm({
                title: 'Are You Sure?',
                content: 'Your Data Will be deleted',
                type: 'orange',
                typeAnimated: true,
                buttons: {
                    confirm: {
                        text: 'Confirm',
                        btnClass: 'btn-orange',
                        action: function(){
                            var self = this;
                            return $.ajax({
                                type: "GET",
                                url: "{{ url('admin/kegiatan/destroy/') }}"+ '/' +id,
                            }).done(function (response) {
                                location.reload();
                            }).fail(function(){
                                $.confirm({
                                    title: 'Encountered an error!',
                                    content: 'Something went wrong',
                                    type: 'red',
                                    typeAnimated: true,
                                    buttons: {
                                        tryAgain: {
                                            text: 'Try again',
                                            btnClass: 'btn-red',
                                            action: function(){
                                            }
                                        },
                                        close: function () {
                                        }
                                    }
                                });
                            });
                        }
                    },
                    close: function () {

                    }
                }
            });
        });
    </script>
@endsection