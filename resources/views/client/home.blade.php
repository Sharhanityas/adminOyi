@extends('client/layout')
<!-- title section -->
    @section('css')
        <link rel="stylesheet" type="text/css" href="{{url('/css/home.css') }}" />
    @endsection
    @section('content')
    <section class="title">
        <div class="container-fluid">
            <div class="row">
                <div class="title-quotes-container col-lg-6">
                    <div class="quotes ">
                        <h1 data-aos="fade-down" data-aos-duration="2000" class="quote-blue">Bersama <span class="bold">OYI</span>,</h1>
                        <h1 data-aos="fade-down" data-aos-duration="2000" class="quote-blue">Kamu Jadi Pemuda </h1>
                        <h1 data-aos="fade-down" data-aos-duration="2000">LUAR BIASA</h1>
                        <a href="" data-aos="fade-left" data-aos-duration="2000" class="button btn">YUK GABUNG!!!</a>
                    </div>
                </div>
                <div class="col-lg logo-icon-container">
                    <div class="logo-container">
                        <img class="logo-icon" src="{{ url('/images/homeClient/illus-oyi.svg') }}" alt="logo-icon">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-oyi" id="about">
        <div class="container">
            <div class="about-quotes" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="mb-5 judul">Apa itu <span>OYI?</span></h1>
                <p>
                    OYI <strong>(Outstanding Youth Indonesia)</strong> merupakan Start-up Indonesia yang percaya bahwa 
                    Pemuda Indonesia adalah <strong> Pemuda berpotensi Luar Biasa.</strong> Namun, potensi saja tentu tidak cukup. 
                    OYI akan senantiasa berjalan bergandengan tangan beriringan terus bersama <strong> Pemuda Indonesia 
                    tuk jadi Luar Biasa dan melampauinya. </strong> Indonesia sedang mengalami era bonus demografi yang 
                    ditandai dengan jumlah pemuda yang membludak. Oleh karena itu, OYI menghadirkan program-program 
                    Outstanding untuk menjawab tantangan tersebut, yaitu <strong> sharing & learning, information & mentoring, 
                    scholarship & donation, dan Outstanding young events.</strong> Bagi kami, OYI bukan hanya suatu Start-up belaka, 
                    kami akan senantiasa hidup menghidupi OYI dan seluruh <strong> Pemuda Luar Biasa Indonesia!</strong>                </p>
            </div>
            <hr>
            <div class="about-quotes">
                <h1 data-aos="fade-up" data-aos-duration="2000" class="mb-5 judul">Yang kamu dapatkan bersama <span>OYI?</span></h1>
                <div class="row">
                    <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-3 col-sm-6">
                        <img class="about-icon " src="{{ url('/images/homeClient/beasiswa.svg') }}" alt="beasiswa-icon">                        
                        <h3>Beasiswa</h3>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-3 col-sm-6">
                        <img class="about-icon " src="{{ url('/images/homeClient/lomba.svg') }}" alt="lomba-icon">                        
                        <h3>Mentoring Lomba</h3>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-3 col-sm-6">
                        <img class="about-icon " src="{{ url('/images/homeClient/kerja.svg') }}" alt="kerja-icon">                        
                        <h3>Dunia Kerja</h3>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-3 col-sm-6">
                        <img class="about-icon " src="{{ url('/images/homeClient/kuliah.svg') }}" alt="kuliah icon">                        
                        <h3>Dunia Kuliah</h3>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="event" class="event">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="event-quote">
                        <h2>Yuk mengenal lebih dekat dengan event - event luar biasa dari <strong>OYI!!</strong></h2>
                        <h1>event.</h1>
                    </div>
                </div>
                <div class="col-lg">
                    <div id="event-courosel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    @foreach ($event as $data)
                                    <div class="col-5">
                                        <div class="card">
                                            <img src="{{ asset('storage/'.$data->gambar_event) }}" class="card-img-top h-100" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$data->judul_event}}</h5>
                                                @if (!empty($data->tanggal_event))
                                                <p class="event-text card-text"><span>{{date_format(new DateTime($data->tanggal_event),"d M Y")}} </span>| {{date_format(new DateTime($data->waktu),"H.i")}} WIB</p>
                                                @endif
                                                <a href="detail/{{$data->slug}}" class="button btn">Yuk Gabung!!!</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#event-courosel" role="button" data-bs-slide="prev">
                            <span style="transform: scaleX(-1);" class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#event-courosel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <a class="float-end lihat-semua" href="EventList">Lihat Semua ⇨</a>
        </div>
    </section>

    <h1 class="tagline text-center">#DareToBeOutstanding</h1>

    <section class="artikel">
        <div class="container-fluid">
            <div class="row">
                @foreach ($articles as $data)
                <div class="col-lg-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="2000">
                        <img src="{{ asset('storage/'.$data->foto_article) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$data->judul_artikel}}</h5>
                            <a href="artikel/{{$data->id}}" class="button btn">Baca Artikel</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="pendapat">
        <div class="container-fluid">
            <h1 class="text-center judul">Apa kata mereka tentang <span>OYI?</span></h1>
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($review as $index => $data)
                    <div <?php if ($index==0) {echo 'class="carousel-item active"';} else {echo 'class="carousel-item"';}?> >
                        <div class="row justify-content-center">
                            <div class="col-lg-3 offset-lg-1">
                                <img class="mx-auto d-block img-thumbnail rounded-circle " src="{{ asset('storage/'.$data->foto) }}" alt="foto-1">
                            </div>
                            <div class="col-lg-6 ">
                                <div class="pendapat-text">
                                    <p class="text-justify">
                                        {{strip_tags($data->kata)}}
                                    </p>
                                    <div class="name">
                                        <h4>{{$data->detail}}</h4>
                                        <!-- <h5>Karyawan</h5> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="transform: scaleX(-1);"></span>
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
