@extends('client/layout')
<!-- title section -->
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
@endsection
@section('content')

        <div class="container" style="margin-top: 100px;">
            <div class="text-center">
                <h1 class="quote-blue"><strong>OYI</strong> Event</h1>
            </div>
            <div class="row mt-5 mx-auto" style="margin-bottom: 100px;">
                @foreach ($event as $data)
                <!--<div class="col-lg-4 col-md-4 col-sm-4 col-4">-->
                    <div class="card mx-auto mb-5" style="width: 18rem;">
                        <img src="{{ asset('storage/'.$data->gambar_event) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$data->judul_event}}</h5>
                            @if (!empty($data->tanggal_event))
                                <p class="event-text card-text"><span>{{$data->tanggal_event}} </span>| {{$data->waktu}} WIB</p>
                            @endif
                            <a href="detail/{{$data->slug}}" class="button btn">Yuk Gabung!!!</a>
                        </div>
                    </div>
                <!--</div>-->
                @endforeach
            </div>
        </div>


        <section class="footer fixed-bottom">
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