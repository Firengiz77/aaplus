@extends('front.layout.app')
@php
     $lang = App::getLocale();
    $title2 = 'title_' . $lang;
@endphp
@section('title')

<title>{{ $page->$title2 }}</title>

@endsection

@section('container')
@php
    $home = App\Models\Page::where('route','index')->first();
    $slug = App\Models\Page::where('route','about_us')->first();
    $lang = App::getLocale();
    $title = 'page_' . $lang;

@endphp







 <!--About start-->
 <div class="pages container">
    <ul class="page-pagination">
        <li class="pag-item-head">
            <a href="{{ route('index') }}">{{ $home->$title }}</a>
        </li>
        <span><img src="{{ asset('/front/img/right-arrow.svg') }}" alt=""></span>
        <li class="pag-item">
            {{ $slug->$title }}
        </li>
    </ul>
</div>
<section id="about-page">
    <div class="head-text-div">
        <h1 class="back-head-text">
            {{ __('static.about1')}}
        </h1>
        <h2 class="head-text">
            {{ __('static.about2')}}
        </h2>
    </div>
    <div class="video wrapper">
        <video class="video">
            <source src="" type="video/mp4" />
        </video>
        <div class="playpause"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="about-block">
                <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-6">
                    <p class="about-text">
                       {!! __('static.about3')  !!}
                    </p>
                    <br>
                    <p class="about-text">
                        {!! __('static.about4')  !!}
                    </p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" class="col-lg-6">
                    <div class="img">
                        <div class="img-bg"></div>
                        <img src="{{ asset('/front/img/about-img-1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="about-block">
                <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-6">
                    <div class="img">
                        <div class="img-bg"></div>
                        <img src="{{ asset('/front/img/about-img-2.png') }}" alt="">
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" class="col-lg-6">
                    <p class="about-text">
                        {!! __('static.about5')  !!}
                    </p>
                    <br>
                    <p class="about-text">
                        {!! __('static.about6')  !!}
                    </p>
                    <br>
                    <p class="about-text">
                        {!! __('static.about7')  !!}
                    </p>
                    <br>
                    <p class="about-text">
                        {!! __('static.about8')  !!}
                    </p>
                </div>
            </div>
            <div class="head-text-div certificate">
                <h1 class="back-head-text">
                    {!! __('static.sertificat')  !!}
                </h1>
                <h2 class="head-text">
                    {!! __('static.sertificat')  !!}
                </h2>
            </div>
            <div class="owl-carousel owl-theme certificate-slider">
                @php
                    $certificates = App\Models\Certificate::get();
                @endphp
                @foreach ($certificates as $certificate)
                <div class="item">
                    <img src="{{  (!empty($certificate->image)? url('uploads/certificate/'.$certificate->image):url('uploads/certificate/icon-admin.png')  )}}" alt="">
                </div>
         @endforeach


            </div>
            <div class="head-text-div ">
                <h1 class="back-head-text">
                    {!! __('static.logo')  !!}
                </h1>
                <h2 class="head-text">
                    {!! __('static.logo')  !!}
                </h2>
            </div>
            <div class="logo-rules">
                <p class="rules-head">
                    {!! __('static.logo1')  !!}
                </p>
                <ul class="rules-list">
                    <li>
                        {!! __('static.logo2')  !!}
                    </li>
                    <li>
                        {!! __('static.logo3')  !!}
                    </li>
                    <li>
                        {!! __('static.logo4')  !!}
                    </li>
                    <li>
                        {!! __('static.logo5')  !!}
                    </li>
                    <li>
                        {!! __('static.logo6')  !!}
                    </li>
                    <li>
                        {!! __('static.logo7')  !!}
                    </li>
                </ul>
            </div>
            <div class="logos">
                <div class="img">
                    <img src="{{ asset('/front/img/logo-1.png') }}" alt="">
                </div>
                <div class="img">
                    <img src="{{ asset('/front/img/logo-2.png') }}" alt="">
                </div>
                <div class="img">
                    <img src="{{ asset('/front/img/logo-3.png') }}" alt="">
                </div>
                <div class="img">
                    <img src="{{ asset('/front/img/logo-4.png') }}" alt="">
                </div>
                <div class="img">
                    <img src="{{ asset('/front/img/logo-5.png') }}" alt="">
                </div>
                <div class="img">
                    <img src="{{ asset('/front/img/logo-6.png') }}" alt="">
                </div>

            </div>
            <div class="head-text-div">
                <h1 class="back-head-text">
                    {!! __('static.partner1')  !!}
                </h1>
                <h2 class="head-text">
                    {!! __('static.partner2')  !!}
                </h2>
            </div>
        </div>
    </div>
    <div class="partners-slider-div">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme partners-slider">

                    @php
                    $partners = \App\Models\Partner::get();
                @endphp

            @foreach ($partners as $partner )
                            
                               
                    <div class="item">
                        <a href="#">
                            <img src="{{  (!empty($partner->image)? url('uploads/partner/'.$partner->image):url('uploads/partner/icon-admin.png')  )}}" alt="">
                        </a>
                    </div>
                   
                        @endforeach
                
         

                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--About end-->


@endsection