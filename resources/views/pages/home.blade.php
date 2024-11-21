@extends('layouts.app')

@section('title', 'Welcome to Silat Championship')

@section('content')

<div class="container">
    <section class="hero">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left">
                    <h1 class="lacquer-regular">Ayo <span>Bergabung</span> dan  <span>Tunjukkan</span> Keahlianmu!</h1>
                    <p class="exo-2-description mt-3">
                        Tidak ada waktu untuk ragu! Daftarkan dirimu sekarang di <span>The Silat Championship</span> dan tunjukkan kemampuan terbaikmu di arena pencak silat!
                    </p>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="image-wrapper"> 
                        <img src="{{ asset('images/Gambar 2.jpg') }}" alt="silat" class="clipped-image">
                    </div>
                </div>
                <div >
                    <button type="button" class="btn-dftr btn-dark">Silahkan Daftar</button>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="d-flex justify-content-center align-items-center m-5">
            <div class="contact-section">
                <div class="contact-item">
                  <i class="icon-location"></i>
                  <h3>Cari Lokasi</h3>
                  <p>Gelanggang Olah Raga ( GOR) Gondrong</p>
                </div>
                <div class="divider"></div>
                <div class="contact-item">
                  <i class="icon-phone"></i>
                  <h3>Kontak</h3>
                  <p>(+62) 857 7884 3078</p>
                </div>
                <div class="divider"></div>
                <div class="contact-item">
                  <i class="icon-email"></i>
                  <h3>Gmail</h3>
                  <p>Pencak_Silat@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="">
                <div class="image-wrapper2"> 
                    <img src="{{ asset('images/Gambar 2.jpg') }}" alt="silat" class="clipped-image2">
                </div>
            </div>
            <div class="col-6 ml-auto">
                <h1>Apa Itu <span >Pencak Silat?</span></h1>
                <p class="text-justify-between">
                    Pencak silat adalah seni bela diri tradisional yang berasal dari Asia Tenggara, terutama berkembang di Indonesia, Malaysia, Brunei, Singapura, dan Thailand Selatan. Seni ini menggabungkan gerakan yang indah dan teratur dengan teknik bertahan diri yang efektif, termasuk serangan, tangkisan, kuncian, hingga penggunaan senjata tradisional. Selain sebagai olahraga, pencak silat juga memiliki nilai budaya dan spiritual, mengajarkan etika, disiplin, serta penghormatan kepada sesama. Saat ini, pencak silat telah menjadi cabang olahraga yang diakui secara internasional, dengan kompetisi tingkat dunia dan pengakuan UNESCO sebagai Warisan Budaya Tak Benda pada tahun 2019.
                </p>
            </div>
        </div>
    </div>
    <div class="timeline justify-content-center">
        <h1>Alur Pendaftaran</h1>
            <!-- SVG untuk Gelombang -->
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 200" preserveAspectRatio="none">
              <!-- Gelombang -->
              <path d="M0 100 Q100 50, 200 100 T400 100 T600 100 T800 100" 
                    fill="none" stroke="#6a5acd" stroke-width="8" />
            </svg>
        
            <!-- Lingkaran dengan Angka -->
            <div class="step" style="left: 10%">
              <div class="circle">
                <span class="number">01</span>
              </div>
              <p class="description">Isi Formulir Pendaftaran</p>
            </div>
            <div class="step" style="left: 35%">
              <div class="circle">
                <span class="number">02</span>
              </div>
              <p class="description">Unggah Dokumen</p>
            </div>
            <div class="step" style="left: 60%">
              <div class="circle">
                <span class="number">03</span>
              </div>
              <p class="description">Verifikasi Data</p>
            </div>
            <div class="step" style="left: 85%">
              <div class="circle">
                <span class="number">04</span>
              </div>
              <p class="description">Pendaftaran Berhasil</p>
          </div>
    </div>
    
</div>

@endsection
