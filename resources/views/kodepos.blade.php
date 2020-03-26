 
@extends('layouts.app')
@section('title', 'Relawan Digital COVID-19')

@section('content')
<div class="row">
  <div class="col-md-6 offset-md-3 col-12">
    <div class="header">
      <img class="logo" src="{{ asset('asset/img/logo.svg') }}">
    </div>
  </div>
    
</div>
        
<div class="row">
  <div class="col-12 col-md-6 offset-md-3">
    <div class="middle">
      <p>Apakah terdapat data Pasien Dalam Pemantauan (PDP), Orang Dalam Pemantauan (ODP), atau Positif COVID-19 (Positif) di kecamatan anda?</p>  
      <p class="P2">Masukkan Kode Pos</p>
      <form action="{{ route('result') }}" method="POST">
      @csrf
          <input type="text" id="fname" name="kode_pos" required>
          <button class="btn">SCAN</button>
      </form>
    </div>
  </div>
    
</div>

<div class="row">
  <div class="col-12 col-md-6 offset-md-3">
    <div class="disclaimer">
      <p class="P1">Disclaimer</p>

      <p class="P">* COVID-19 Area Scanner ini hanya menjangkau D. I. Yogyakarta.</b></p>

      <p class="P">* Seluruh data bersumber dari portal resmi publikasi data terkait COVID-19 milik Pemerintah D. I. Yogyakarta.
      </p>

      <p class="P">* Titik lokasi yang terdapat dalam peta tidak menggambarkan alamat rumah pasien melainkan lokasi wilayah kecamatan domisili pasien.</p>
    </div>
  </div>
  
</div>

<div class="row">
  <div class="col-12 col-md-6 offset-md-3">
    <div class="footer text-center">
      <p>Copyright © 2020 Relawan Digital COVID-19</p>
    </div>
      
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

  <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">About Us</h4>
      </div>
      <div class="modal-body">
        <p>Relawan Digital COVID-19 merupakan sekumpulan pegiat teknologi yang berasal dari berbagai latar belakang dan beberapa daerah di Indonesia. <br><br>Seluruh kode COVID-19 Area Scanner merupakan kode terbuka (open source), permintaan kode dapat menghubungi email relawandigitalcovid19@gmail.com. <br><br>Tetap selalu waspada, lindungi diri, lindungi sesama mari bersatu, bekerja sama, gotong royong menghadapi COVID-19. Social Distancing !</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endsection