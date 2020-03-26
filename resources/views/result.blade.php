<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Sebaran Covid19 </title>
    <link href="{{ asset('asset/style_u24mar.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('asset/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body onload="myFunction()">
    <script src="{{ asset('asset/scripts.js') }}"></script>

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

    <div style="display:none;" id="myDiv2" class="topbar2 animate-bottom container">
        <div class="row">
            <div class="col-12">
                <h5>Hasil Pencarian</h5>
            </div>
        </div>
        @if($data_pos != null) 
        <div class="row">
            <div class="col-12 d-md-none">
                <div style="padding:0px 20px;" class="box-border-grey">
                    Kecamatan {{ $data_pos->kecamatan}}, {{ $data_pos->provinsi }}
                </div>
                
            </div>
        </div>
        
        @endif
        

        @if($data_pos == null)
        <div class="row">
            <div class="col-12">
                <h3 class="alert alert-danger">Kode Pos tidak valid</h3>
            </div>
        </div>
        @else
     
        

        <div class="row">
            <div class="col-12 col-md left mt-10">
                <div class="box-data box-data-bg-red">
                    <div class="row">
                        <div class="col-7">
                            <span class="box-data-number box-data-number-red"><b id="positif">{{ $data['data_master_positif'] }}</b></span>
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
                            <span class="box-data-number box-data-number-yellow"><b id="odp">{{ $data['data_master_odp'] }}</b></span>
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
                            <span class="box-data-number box-data-number-purple"><b id="pdp">{{ $data['data_master_pdp'] }}</b></span>
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

                <div class="row">
                    <div class="col-12">
                        <div class="dataupdate">
                            <p>Data Update {{ $data['tanggal_input']->tanggal_input }}</p>
                            <p style="margin-top: -20px">
                                <small>
                                    <i>*sumber :</i>
                                    <a href="http://corona.jogjaprov.go.id/map-covid-19-diy">
                                        <i>http://corona.jogjaprov.go.id/map-covid-19-diy</i>
                                    </a>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
        @endif
    </div>

    <div style="display:none;" id="myDiv3" class="topbar3 animate-bottom mt-20">
        <div class="row">
            <div class="col-6 col-md left">
                <div class="left3">
                    
                    <span class="kodepos text-color-grey">Kode Pos</span>
                    <a href="{{ route('kode.pos') }}">
                        <span class="ubah">UBAH</span>
                    </a>
                    <p class="postalcode text-lg"><b id="kodepos">{{ $kode_pos }}</b></p>
                    @if($data_pos == null)
                    <p id="namakecamatan">Kode Pos tidak valid</p>
                    @else
                    <p id="namakecamatan" class="d-none d-md-block d-xl-block">Kecamatan {{ $data_pos->kecamatan}}, {{ $data_pos->provinsi }}</p>
                    @endif
                </div>
            </div>
            @if($data_pos == null)
            {{--  <div class="row"></div>  --}}
            @else
            <div class="col-6 col-md right">
                <div class="right3 text-right text-md-left">
                    <span class="kodepos text-color-grey">Populasi</span>
                    <div class="row">
                        <div class="text-right text-md-left">
                            @if($data['populasi'] == null)
                            <span class="text-lg"><strong id="populasi">0</strong></span>
                            @else
                            <span class="text-lg"><b id="populasi">{{ number_format($data['populasi']->jumlah_populasi, 0, ',', '.') }}</b></span>
                            @endif
                            <span class="jiwa text-right">Jiwa</span>
                        </div>
                    </div>
                    <p id="namakecamatan" class="d-none d-md-block">Kecamatan {{ $data_pos->kecamatan}}, {{ $data_pos->provinsi }}</p>
                </div>
            </div>
            @endif
        </div>
       
    </div>

    <br>
    <div id="myDivfooter" style="display:none;" class="container-fluid footer_jog text-center">
        <p>
            <center>© Official website Pemerintah Daerah DIY. 2020<center>
        </p>
    </div>



    <script>
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
        }
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
            document.getElementById("myDiv2").style.display = "block";
            document.getElementById("myDiv3").style.display = "block";
            document.getElementById("myDivfooter").style.display = "block";
        }
    </script>
</body>

<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

</html>