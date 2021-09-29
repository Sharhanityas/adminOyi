@extends('client/layout')
{{-- <!-- title section --> --}}
@section('meta')
    <title>{{ $articles->judul_artikel }} | Outstanding Youth Indonesia</title>
    <meta name="description" content="{{ strip_tags(Illuminate\Support\Str::limit($articles->isi, 150)) }} | OYI (Outstanding Youth Indonesia)">
    <meta name="keywords" content="{{ 'artikel, sekolah, oyi, Outstanding Youth Indonesia, kampus, indonesia, event, event kampus' }}" />
    <meta name="subject" content="{{ $articles->judul_artikel }}">
    <meta name="language" content="ID">
    <meta name="url" content="{{ url('artikel/' . $articles->slug) }}">\

    <meta property="og:title" content="{{ $articles->judul_artikel }} | Outstanding Youth Indonesia" />
    <meta property="og:url" content="{{ url('artikel/' . $articles->slug) }}" />
    <meta property="og:description" content="{{ strip_tags(Illuminate\Support\Str::limit($articles->isi, 150)) }} | OYI (Outstanding Youth Indonesia)">
    <meta property="og:image" itemprop="image" content="{{ asset('storage/' . $articles->foto_article) }}">
    <meta property="og:site_name" content="OYI (Outstanding Youth Indonesia)" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />

@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
@endsection
@section('content')
    <div class="container text-center" style="margin-top: 100px;">
        <div class="mb-5" style="color: #FF4747;">
            <h1><strong>{{ $articles->judul_artikel }}</strong></h1>
        </div>
        <!-- <p>Sabtu, 20 Feb 2021 13:47 WIB</p>
                                                                            <p>Penulis : xyz</p> -->
        <img src="{{ asset('storage/' . $articles->foto_article) }}" class="card-img-top" alt="..." style="height: 50%; width: 50%;">
    </div>
    <hr style="height:3px; background-color: #FF4747;">
    <div class="container mt-5 mb-5 ">
        {!! $articles->isi !!}
    </div>
    <hr style="height:3px; background-color: #FF4747;">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div>
                    <h2>Lihat lainnya</h2>
                </div>
                @foreach ($rekomendasi as $data)
                    <a href="/artikel/{{ $data->slug ? $data->slug : $data->articles_id }}">
                        <div class="row mt-3 mb-5">
                            <div class="col-2">
                                <img class="border img-fluid" src="{{ asset('storage/' . $data->foto_article) }}" alt="photo">
                            </div>
                            <div class=" col-10">
                                <h4><strong>{{ $data->judul_artikel }}</strong></h4>
                            </div>
                        </div>
                    </a>
                @endforeach
                <!-- <div class="row mt-3 mb-5">                        
                                                                            <div class="col-2">
                                                                                <img class="border img-fluid" height="100" src="/assets/event/img1.jpeg" alt="photo">
                                                                            </div>
                                                                            <div class=" col-10">
                                                                                <a href="#"><h4><strong>Lorem ipsum dolor sit amet, consectetur adipiscing</strong></h4></a>
                                                                            </div>
                                                                        </div> -->
            </div>
        </div>
    </div>


    <section class="pendapat">
        <div class="container-fluid">
            <h1 class="text-center judul">Apa kata mereka tentang <span>OYI?</span></h1>
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($review as $index => $data)
                        <div <?php if ($index == 0) {
    echo 'class="carousel-item active"';
} else {
    echo 'class="carousel-item"';
} ?>>
                            <div class="row justify-content-center">
                                <div class="col-lg-3 offset-lg-1">
                                    <img class="mx-auto d-block img-thumbnail rounded-circle " src="{{ asset('storage/' . $data->foto) }}" alt="foto-1">
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="pendapat-text">
                                        <p class="text-justify">
                                            {{ strip_tags($data->kata) }}
                                        </p>
                                        <div class="name">
                                            <h4>{{ $data->detail }}</h4>
                                            <!-- <h5>Karyawan</h5> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span style="transform: scaleX(-1);" class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h1 class="contact-header">Kirim Pesan.</h1>
                </div>
                <div class="col-md">
                    <form action="Pesan" method="POST" enctype=”text/plain” name=”EmailTestForm” class="row">
                        @csrf
                        <div class="mb-4">
                            <input type="text" class="input-control" name="nama" id="name" placeholder="Nama anda" autocomplete="off" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="input-control" name="email" id="email" placeholder="Email anda" autocomplete="off" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" class="input-control" name="pesan" id="pesan" placeholder="Pesan anda" autocomplete="off" required>
                        </div>
                        <button type="submit" class="button btn">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-md-4">
                    <img class="brand-img d-block mx-auto mx-md-0 " src="{{ url('/images/homeClient/logo-panjang.svg') }}" alt="OYI Logo">
                </div>
                <div class="contact-oyi col-md-4 text-center">
                    <a href="mailto:outstanding.yi@gmail.com" target="_blank">
                        <img src="{{ url('/images/homeClient/email-logo.svg') }}" alt="email-logo">
                    </a>
                    <a href="https://www.facebook.com/outstandingyi" target="_blank">
                        <img src="{{ url('/images/homeClient/facebook-logo.svg') }}" alt="facebook-logo">
                    </a>
                    <a href="https://www.instagram.com/outstanding_yi/" target="_blank">
                        <img src="{{ url('/images/homeClient/instagram-logo.svg') }}" alt="instagram-logo">
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=6285156053449" target="_blank">
                        <img src="{{ url('/images/homeClient/whatsapp-logo.svg') }}" alt="whatsapp-logo">
                    </a>
                    <a href="https://www.linkedin.com/company/outstanding-youth-indonesia/" target="_blank">
                        <img src="{{ url('/images/homeClient/linkedin-logo.svg') }}" alt="linkedin-logo">
                    </a>
                    <a href="https://www.tiktok.com/@outstanding_yi?lang=id-ID" target="_blank">
                        <img src="{{ url('/images/homeClient/tiktok-logo.svg') }}" alt="linkedin-logo">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection
