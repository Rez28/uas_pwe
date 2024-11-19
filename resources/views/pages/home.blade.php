@extends('layouts.app')

@section('title', 'Welcome to Silat Championship')

@section('content')

<div class="container">
    <section class="hero">
        <div class="container text-center">
            <div class="row">
                <!-- Kolom untuk teks -->
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left">
                    <!-- Judul -->
                    <h1 class="lacquer-regular">Welcome to the Silat Championship</h1>
                    <!-- Deskripsi -->
                    <p class="exo-2-description mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, possimus id accusamus reprehenderit cum quam porro deleniti, tempora recusandae eius quia vero, officia cumque perspiciatis voluptate assumenda at rerum repellat.
                    </p>
                </div>
                <!-- Kolom untuk gambar -->
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

    <!-- Flexbox untuk item -->
    <div class="row">
        <div class="d-flex justify-content-center align-items-center m-4">
            <div class="contact-section">
                <div class="contact-item">
                  <i class="icon-location"></i>
                  <h3>Pay Us a Visit</h3>
                  <p>Union St, Seattle, WA 98101, United States</p>
                </div>
                <div class="contact-item">
                  <i class="icon-phone"></i>
                  <h3>Give Us a Call</h3>
                  <p>(110) 1111-1010</p>
                </div>
                <div class="contact-item">
                  <i class="icon-email"></i>
                  <h3>Send Us a Message</h3>
                  <p>Contact@HydraVTech.com</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
