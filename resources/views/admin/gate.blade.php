<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Admin Log in Gate | TRTD UKP
    </title>


    {{-- extensions --}}

    {{-- FAVICON --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    {{-- bootstrap extension --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{--CSS--}}

    {{-- JQUERRY --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- JQUERRY CONFIRM --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css"
        integrity="sha512-0V10q+b1Iumz67sVDL8LPFZEEavo6H/nBSyghr7mm9JEQkOAm91HNoZQRvQdjennBb/oEuW+8oZHVpIKq+d25g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"
        integrity="sha512-zP5W8791v1A6FToy+viyoyUUyjCzx+4K8XZCKzW28AnCoepPNIXecxh9mvGuy3Rt78OzEsU+VCvcObwAMvBAww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--FONT--}}

    {{-- GOOGLE API --}}
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

    {{-- CAPTCHA API --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>
<style>
    .haft-navbar {
        background-color: #49EFC7;
    }
    input[type=text]{
        border-radius:30px;
        border: 1px solid #1B325E !important;
    }
    input[type=password]{
        border-radius:30px;
        border: 1px solid #1B325E !important;
    }
    .haft-login-btn {
        border-radius: 20px;
        cursor: pointer;
        background-color: #1B325E;
        border: 2px solid white;
        width: 100%;
        color: white;
    }

    .haft-card{
        border: 1px solid #1B325E !important;
        max-width: 540px; 
        background-color:#ffff; 
        border-radius:30px;
    }

    .haft-login-btn:hover {
        border-radius: 20px;
        cursor: pointer;
        background-color: white !important;
        border: 2px solid #1B325E !important;
        color: #1B325E !important;
    }

    .haft-footer {
        min-height: 200px;
        background-color: #49EFC7;
    }

    a {
        text-decoration: none !important;
        color: black !important
    }

    @media only screen and (max-width: 1200px) {}

    @media only screen and (max-width: 768px) {}

    @media only screen and (max-width: 527px) {}

    @media only screen and (max-width: 391px) {}
</style>

<body style="background-color: #F6AD3C">
    <div style="min-height: 100vh;">
        <div class="p-4 p-md-1" style="padding-top: 15%!important;">
            <div class="card mb-3 mx-auto p-3 mt-5 mt-md-3 haft-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <div class="row ps-3 pt-4">
                            <div class="col">
                                <img src="{{asset('assets/images/logo_60tahun_nopadding.png')}}" alt="" width="auto" height="150px" class="card-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#1B325E">Login</h5>
                            <div class="card-text">
                                <form action="{{ route('admin.login') }}" method="post">
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" placeholder="Password" name="password" id="password"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            {{-- BUAT SPACE --}}
                                        </div>
                                        <div class="col-5">
                                            <button type="submit" class="btn haft-login-btn" name="login" id="login">Sign In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>