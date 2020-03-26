<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

        <title>Sebaran Covid19 </title>
        <link href="{{ asset('asset/style_u24mar.css') }}" rel="stylesheet" />
        <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
        
        


        
        <link rel="icon" type="image/png" href="{{ asset('asset/img/favicon.png') }}">

        <title>@yield('title')</title>
    </head>

<body>
    <div class="container-fluid" style="background-color: black;">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="logoheader">
                    <a class="navbar-brand imgheader" href="https://corona.jogjaprov.go.id/">
                        <img src="{{ asset('asset/img/imgheader.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4">

                <div style="text-align: right;" class="justify-content-end">
                    @if (isset($is_home))
                    <a style="margin-top: 20px;" class="nav-link" href="https://corona.jogjaprov.go.id/">
                        <img
                            style="max-width: 15px;" src="https://sebaran-covid19.jogjaprov.go.id/asset/img/left.png">&nbsp;
                        &nbsp;
                        <b style="font-size: 15px;color: white;">Kembali Ke Halaman Utama</b>
                    </a>
                    @else 
                    <a style="margin-top: 20px;" class="nav-link" href="https://sebaran-covid19.jogjaprov.go.id">
                        <img
                            style="max-width: 15px;" src="https://sebaran-covid19.jogjaprov.go.id/asset/img/left.png">&nbsp;
                        &nbsp;
                        <b style="font-size: 15px;color: white;">Kembali Ke Halaman Utama</b>
                    </a>

                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="utama container">
        @yield('content')
    </div>


    <div class="container-fluid footer_jog text-center">
        <p>
            <center><small>© Official website Pemerintah Daerah DIY. 2020</small><center>
        </p>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
@stack('scripts')

</html>