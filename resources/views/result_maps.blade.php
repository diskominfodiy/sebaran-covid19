<html>

<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>Sebaran Covid19 </title>
    <link href="{{ asset('asset/style_u24mar.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="{{ asset('asset/img/favicon.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>@yield('title')</title>
</head>


<body onload="myFunction()">
    <div id="loader"></div>


    <div style="display:none;" id="myDiv" class="line">
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
    </div>


    <div style="display:none;" id="radiusblock" class="container">
        <div class="row">
            <div class="col-12">
                <button id="3" type="button" data-clicked="yes" class="btnmaps3 radius btnmapsactive">Radius <b>3 km</b></button>
                <button id="5" type="button" data-clicked="yes" class="btnmaps5 radius">Radius <b>5 km</b></button>
                <button id="7" type="button" data-clicked="yes" class="btnmaps10 radius">Radius <b>7 km</b></button>
            </div>
            <div class="col-12">
                <div class="alert alert-danger mt-20" id="alert" style="display:none">
                    ! GPS Tidak Terdeteksi
                </div>
            </div>
        </div>

    </div>



    <div style="display:none;" id="myDiv3" class="topbar22 animate-bottom container">
        <div class="row">
            <div class="col-12">
                <h5>Hasil Pencarian</h5>
            </div>
        </div>
        <div class="dataupdate">
            <p class="lokasir">Berikut data PDP, ODP, dan Positif COVID-19 dari jarak <b><span id="radius"></span></b>
                km lokasi anda sekarang.</b></p>
        </div>
        <div class="row">
            <div class="col-12 col-md left mt-10">
                <div class="box-data box-data-bg-red">
                    <div class="row">
                        <div class="col-7">
                            <span class="box-data-number box-data-number-red">
                                <strong id="positif">
                                    -
                                </strong>
                            </span>
                            <span class="text" style="display:inline-block">Positif</span>
                        </div>
                        <div class="col-5">
                            <p class="status">Positif Terkena COVID-19</p>
                        </div>

                    </div>
                    
                </div>
            </div>
          
            <div class="col-12 col-md mid mt-10">
                <div class="box-data box-data-bg-yellow">
                    <div class="row">
                        <div class="col-7">
                            <span class="box-data-number box-data-number-yellow">
                                <strong id="odp">
                                    -
                                </strong>
                            </span>
                            <span class="text">ODP</span>
                        </div>
                        <div class="col-5">
                            <p class="status">Orang Dalam Pemantauan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md col-md right mt-10">
                <div class="box-data box-data-bg-purple">
                    <div class="row">
                        <div class="col-7">
                            <span class="box-data-number box-data-number-purple">
                                <b id="pdp">
                                    -
                                </b>
                            </span>
                            <span class="text">PDP</span>
                        </div>
                        <div class="col-5">
                            <p class="status">Pasien Dalam Pengawasan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br>
        <font color="red"><b>Tetap selalu waspada, lindungi diri, lindungi sesama, dan mari bersatu, bekerja sama,
                gotong royong menghadapi COVID-19. Social Distancing !</b></font>
    </div>

    <div style="display:none;" id="myDiv4" class="topbar44 animate-bottom container">
        <div class="row">
            <div class="col-md col-lg left">
                <p class="mlokasi"></p>
                <p class="mdiperbarui">Diperbarui </p>
                <p class="mdiperbarui2" id="tanggal_input"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md col-lg left">
                <p class="sumber"><i>*sumber : <a
                            href="http://corona.jogjaprov.go.id/map-covid-19-diy">http://corona.jogjaprov.go.id/map-covid-19-diy</a></i>
                </p>
            </div>
        </div>
    </div>
    

    <div style="display:none;margin-top:25px;" id="myDiv2" class="maps animate-bottom container padding-0">
        <div id="embedMap" style="padding-bottom:20px"></div>
    </div>

    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <center> <span style="display:none;" id="petas" class="peta"> </span></center>
            </div>
        </div>
    </div>
    

    <div id="myDivfooter" style="display:none;" class="container-fluid footer_jog text-center">
        <p>
            <center>© Official website Pemerintah Daerah DIY. 2020<center>
        </p>
    </div>

    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
            document.getElementById("myDiv2").style.display = "block";
            document.getElementById("myDiv3").style.display = "block";
            document.getElementById("myDiv4").style.display = "block";
            document.getElementById("myDivfooter").style.display = "block";
            document.getElementById("radiusblock").style.display = "block";
            document.getElementById("petas").style.display = "block";
        }

        $(document).ready(function () {

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var long = position.coords.longitude;
                    var lat = position.coords.latitude;

                    var dvwidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                    var usewidth = dvwidth < 576 ? (95*dvwidth/100) : 770;
                    var useheight = (usewidth==770) ? 450 : 250;


                    var mapLink =
                        '<iframe style="pointer-events: none;" src="https://maps.google.com/maps?q=' +
                        lat +
                        ',' + long +
                        '&hl=en&z=14&amp;output=embed" width="'+usewidth+'" height="'+useheight+'" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';

                    document.getElementById("embedMap").innerHTML = mapLink;

                    $(".radius").click(function () {
                        var $this = $(this);
                        if ($this.data('clicked')) {
                            $('#radius').html(this.id);
                            
                            $.ajax({
                                type: 'POST',
                                url: "{{ route('getcoordradius') }}",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    lat: lat,
                                    lng: long,
                                    kmrad: this.id
                                },
                                cache: false,
                                success: function (data) {
                                    
                                    $(".radius").removeClass('btnmapsactive');
                                    $this.addClass('btnmapsactive');
                                    
                                    $('#odp').html(data['data']['odp']);
                                    $('#pdp').html(data['data']['pdp']);
                                    $('#positif').html(data['data']['positif']);
                                    $('#tanggal_input').html(data['data'][
                                        'tanggal_input'
                                    ]);
                                    

                                    $('.peta').html(
                                        "Titik pada peta diatas adalah titik posisi anda sekarang. Peta diatas tidak menampilkan lokasi persebaran Covid-19."
                                        );

                                    data['data']['kecamatan'].forEach(myFunction);

                                    function myFunction(item, index) {
                                        $('#daerah').html(item);
                                    }
                                },
                                error: function(err) {
                                    $("#alert").html("Terjadi kesalahan pada sistem");
                                    $("#alert").show();
                                    $('#odp').html("Err");
                                    $('#pdp').html("Err");
                                    $('#positif').html("Err");
                                }
                            });
                        }
                    });
                    $('#radius').html('3');
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getcoordradius') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            lat: lat,
                            lng: long,
                            kmrad: 3
                        },
                        cache: false,
                        success: function (data) {
                            $('#odp').html(data['data']['odp']);
                            $('#pdp').html(data['data']['pdp']);
                            $('#positif').html(data['data']['positif']);
                            $('#tanggal_input').html(data['data']['tanggal_input']);
                            $('.peta').html(
                                "Titik pada peta diatas adalah titik posisi anda sekarang. Peta diatas tidak menampilkan lokasi persebaran Covid-19."
                                );

                            data['data']['kecamatan'].forEach(myFunction);

                            function myFunction(item, index) {
                                $('#daerah').html(item);
                            }
                        },
                        error: function(err) {
                            $("#alert").html("Terjadi kesalahan pada sistem");
                            $("#alert").show();
                            $('#odp').html("Err");
                            $('#pdp').html("Err");
                            $('#positif').html("Err");
                        }
                    });

                },
                function (err){
                    $("#alert").html("! GPS Tidak Terdeteksi")
                    $("#alert").show();
                }
                
                );
            } else {
                alert("Sorry, your browser does not support HTML5 geolocation.");
                $("#alert").html("! GPS Tidak Terdeteksi")
                $("#alert").show();
            }
        });
    </script>

</body>

</html>