@extends('layouts.admin')
@section('title')
    Admin Page
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Welcome !</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
  <div class="col-md-12">
      <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 tales" src="./assets/img/gambar7.jpg" height="400px" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 tales" src="./assets/img/gambar2.png"  height="400px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 tales" src="./assets/img/gambar3.png" height="400px" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

</div>


</div>

</div>
<p></p>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">LUCKY SHOP</h1>
    <p class="lead">Handphone saat ini sudah menjadi salah satu barang yang tak bisa lepas dari tangan. Entah untuk menunjang pekerjaan atau hanya sekadar bergaya, orang merasa harus memiliki handphone di era serba digital ini. Masyarakat bisa leluasa memilih tipe handphone yang dibutuhkannya dengan harga yang semakin murah dan program yang semakin canggih. Bila Anda adalah penjual handphone di toko online, Anda perlu tahu komponen-komponen dari deskripsi tentang handphone yang perlu dicantumkan agar jualan Anda laris.
        Hal pertama yang menjadi pertimbangan saat membeli handphone biasanya dari segi harga, perbandingan, dan spesifikasi yang tercantum. Tuliskan sedetail mungkin spesifikasi dari handphone yang Anda jual agar pelanggan merasa puas dan nyaman saat memilih. Hal selanjutnya yang dipertimbangkan pembeli biasanya adalah kemampuan khusus yang ada pada handphone tersebut dan tidak dimiliki produk sejenis dengan harga sama. Nah, di sini Anda dapat memberikan deskripsi yang lebih persuasif agar pembeli tertarik. Tidak hanya fitur unggulan, saat ini para pengguna ponsel pintar sangat memerhatikan kondisi fisik. Bagi sebagian orang, hanya melihat foto produk pada halaman deskripsi tentang ponsel saja tidak cukup. Karena itu, Anda perlu memberikan deskripsi yang sifatnya menggambarkan desain fisik ponsel.
    </p>
  </div>
</div>

@endsection
