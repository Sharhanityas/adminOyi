@extends('client/layout')
<!-- title section -->
    @section('css')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
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

    <section class="about-oyi">
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
                                    <div class="col-5">
                                        <div class="card">
                                            <img src="{{ url('/images/homeClient/rect2254.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Semangat Mengabdi di Era Pandemi</h5>
                                                <p class="event-text card-text"><span>7 Maret 2021 </span>| 10.00 WIB</p>
                                                <a href="http://bit.ly/pemudamengabdiOYI" class="button btn">Yuk Gabung!!!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-5">
                                        <div class="card">
                                            <img src="./images/logo.svg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="event-text card-text"><span>7 Maret 2021 </span>| 10.00 WIB</p>
                                                <a href="#" class="button btn">Yuk Gabung!!!</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-5">
                                        <div class="card">
                                            <img src="./images/logo.svg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="event-text card-text"><span>7 Maret 2021 </span>| 10.00 WIB</p>
                                                <a href="#" class="button btn">Yuk Gabung!!!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="card">
                                            <img src="./images/logo.svg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="event-text card-text"><span>7 Maret 2021 </span>| 10.00 WIB</p>
                                                <a href="#" class="button btn">Yuk Gabung!!!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-5">
                                        <div class="card">
                                            <img src="./images/logo.svg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="event-text card-text"><span>7 Maret 2021 </span>| 10.00 WIB</p>
                                                <a href="#" class="button btn">Yuk Gabung!!!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="card">
                                            <img src="./images/logo.svg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="event-text card-text"><span>7 Maret 2021 </span>| 10.00 WIB</p>
                                                <a href="#" class="button btn">Yuk Gabung!!!</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#event-courosel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#event-courosel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <a class="float-end lihat-semua" href="./event.html">Lihat Semua ⇨</a>
        </div>
    </section>

    <h1 class="tagline text-center">#DareToBeOutstanding</h1>
<!-- 
    <section class="artikel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="2000">
                        <img src="images/logo-panjang.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="button btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="2000">
                        <img src="images/logo-panjang.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="button btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="2000">
                        <img src="images/logo-panjang.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="button btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="pendapat">
        <div class="container-fluid">
            <h1 class="text-center judul">Apa kata mereka tentang <span>OYI?</span></h1>
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 offset-lg-1">
                                <img class="mx-auto d-block img-thumbnail rounded-circle " src="images/bigram.jpg" alt="foto-1">
                            </div>
                            <div class="col-lg-6 ">
                                <div class="pendapat-text">
                                    <p class="text-justify">
                                        "Menurut saya OYI layak untuk dikenal, mereka selektif dalam memilih pembicara. 
                                        Mereka tau bagaimana kualitas pembicara yang inspiratif, suportif, sehingga 
                                        saya rasa di OYI ini saya mendapatkan ilmu berbayar rasa restoran, harga kaki 
                                        lima kualitas bintang lima. tidak akan ada event luar biasa tanpa org yang luar 
                                        biasa didalamnya. Good job oyi you did your best"
                                    </p>
                                    <div class="name">
                                        <h4>Bigram Refsilangi</h4>
                                        <h5>Karyawan</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 offset-lg-1">
                                <img class="mx-auto d-block img-thumbnail rounded-circle " src="images/wayan.jpg" alt="foto-1">
                            </div>
                            <div class="pendapat-quote col-lg-6 ">
                                <div class="pendapat-text">
                                    <p class="text-justify">
                                        "Outstanding Youth Indonesia telah membantu 
                                        banyak pemuda Indonesia untuk terus berprestasi 
                                        dan berkarya, Terima kasih telah mewadahi tim 
                                        kami mendapatkan Special award Kiwie."
                                    </p>
                                    <div class="name">
                                        <h4>I Wayan Wirayudha</h4>
                                        <h5>Mahasiswa</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
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
                    <form action="mailto:kritiksaran@oyi.or.id?subject=pesan" method=”POST” enctype=”text/plain” name=”EmailTestForm” class="row">
                        <div class="mb-4">
                            <input type="text" class="input-control" name="name" id="name" placeholder="Nama anda" autocomplete="off">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="input-control" name="email" id="email" placeholder="Email anda" autocomplete="off">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="input-control" name="pesan" id="pesan" placeholder="Pesan anda" autocomplete="off">
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
