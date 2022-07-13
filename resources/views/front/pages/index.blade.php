@extends('front.layout.app')

@section('container')

@php
    $sliders =  App\Models\Slider::get();
@endphp

    <!--Home Start-->
    <div class="animate-div-left"></div>
    <div class="animate-div-right"></div>
    <section id="home">
        <div class="swiper mySwiper homeSlider">
            <div class="swiper-wrapper">

@foreach ($sliders as $slider )
                <div class="swiper-slide">
                    <img src="{{  (!empty($slider->image)? url('uploads/slider/'.$slider->image):url('uploads/slider/icon-admin.png')  )}}" alt="">
                </div> 
@endforeach
            </div>
            <div class="container">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!--Home End-->


    <!--About Start-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-7">
                    <img src="{{ asset('/front/img/about-1.png') }}" alt="">
                    <img src="{{ asset('/front/img/about-2.png') }}" alt="">
                </div>
                <div class="col-lg-5">
                    <div data-aos="fade-left" data-aos-duration="1000" class="head-text-div">
                        <h1 class="back-head-text">
                            Haqqında məlumat
                        </h1>
                        <h2 class="head-text">
                            Şirkət haqqında məlumat
                        </h2>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1000" class="body-text">
                        <p>
                            Elektron Təhlükəsizlik, Kilidləmə, GPS Monitoring, Naqilsiz Telemetriya və Elektron İdarə
                            Etmə Sistemləri sahəsində böyük təcrübəyə malik olan distribyutor və inteqratordur.
                        </p>
                        <p>
                            Biz, fiziki şəxslərdən və kiçik müəssisələrdən tutmuş dövlət idarələri və iri
                            korporasiyalara qədər, geniş müştəri dairəsi ilə əməkdaşlıq edirik.
                        </p>
                        <p>
                            Missiyamız müştərilərimizə ən keyfiyyətli və sərfəli xidmət göstərməkdən ibarətdir.
                        </p>
                        <a class="detail" href="#">
                            Ətraflı
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About End-->

    @php
        $categories = \App\Models\Category::where('category_id',0)->get();
    @endphp


    <!--Products Start-->
    <section id="products">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        Məhsullar və həllər
                    </h1>
                    <h2 class="head-text">
                        Məhsullar və həllər
                    </h2>
                </div>

                @foreach ($categories as $category)
                @php
                    $category2 = \App\Models\Category::where('category_id',$category->id)->get();
                @endphp
                   
                <div  @if($category->id %2 === 0) data-aos="fade-right" @else data-aos="fade-left" @endif data-aos-duration="1000" class="col-lg-5">
                    <img src="{{  (!empty($category->icon)? url('uploads/category/'.$category->icon):url('uploads/category/icon-admin.png')  )}}" alt="">
                    <div class="card-body">
                        <h3 class="body-head">
                         {!! json_decode($category->name)->{app()->getLocale()} !!}
                            <div class="things">
                                <div class="arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                            </div>
                        </h3>
                        <ul>
                        @foreach ($category2 as $cat2 )
    
                            <li>
                                {!! json_decode($cat2['name'])->{app()->getLocale()} !!}
                            </li>
                            @endforeach
               
                        </ul>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--Products End-->

    @php
        $counters = App\Models\Counter::get();
    @endphp

    <!--Infographic Start-->
    <div class="infographic container">
        <div class="row">
            <div class="head-text-div">
                <h1 class="back-head-text">
                    İnfoqrafiq blok
                </h1>
                <h2 class="head-text">
                    İnfoqrafiq blok
                </h2>
            </div>
        </div>
    </div>
    <section id="infographic">
        <div class="container">
            <div class="row">
                <div class="infographic">
                    <div class="container">
                        <div class="row" id="counter-container">
                            @foreach ($counters as $counter )
                                
                            <div>
                                <span class="count">{{ $counter->number }}</span>
                                {!! json_decode($counter['title'])->{app()->getLocale()} !!}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Infographic End-->
    
    <!--News Start-->
    <section id="news">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        Yeni Xəbərlər
                    </h1>
                    <h2 class="head-text">
                        Yeni Xəbərlər
                    </h2>
                </div>
                <div class="news-images">
                    <div class="news-img">
                        <a href="#">
                            <img class="card-img" src="{{ asset('/front/img/news-1.png') }}" alt="">
                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate amet, et
                                    nibh lorem eget dignissim. Scelerisque mauris egestas est....
                                    <img src="{{ asset('/front/img/Arrow 1.svg') }}" alt="">
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="news-img">
                        <a href="#">
                            <img class="card-img" src="{{ asset('/front/img/news-2.png') }}" alt="">
                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate amet, et
                                    nibh lorem eget dignissim. Scelerisque mauris egestas est....
                                    <img src="{{ asset('/front/img/Arrow 1.svg') }}" alt="">
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="news-img">
                        <a href="#">
                            <img class="card-img" src="{{ asset('/front/img/news-3.png') }}" alt="">
                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate amet, et
                                    nibh lorem eget dignissim. Scelerisque mauris egestas est....
                                    <img src="{{ asset('/front/img/Arrow 1.svg') }}" alt="">
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="news-img">
                        <a href="#">
                            <img class="card-img" src="{{ asset('/front/img/news-4.png') }}" alt="">
                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate amet, et
                                    nibh lorem eget dignissim. Scelerisque mauris egestas est....
                                    <img src="{{ asset('/front/img/Arrow 1.svg') }}" alt="">
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="detail-div">
                    <a class="detail" href="#">
                        Ətraflı
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--News End-->

    @php
        $projecttypes = App\Models\Projecttype::get();
    @endphp



    <!--Projects Start-->
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        Layihələr
                    </h1>
                    <h2 class="head-text">
                        Layihələr
                    </h2>
                </div>
                <div class="projects">
                    @foreach ($projecttypes as $projecttype )
                        
                    <div @if($projecttype->id %2 === 0)  data-aos="fade-up" @else  data-aos="fade-down" @endif data-aos-duration="1000" class="project-img">
                        <a href="">
                            <img src="{{  (!empty($projecttype->image)? url('uploads/projecttype/'.$projecttype->image):url('uploads/projecttype/icon-admin.png')  )}}" alt="">
                            <div class="project-text">
                                <p>
                                    {!! json_decode($projecttype['name'])->{app()->getLocale()} !!}
                                </p>
                            </div>
                        </a>
                    </div>
                    @endforeach

                    <div class="detail-div">
                        <a class="detail" href="#">
                            Ətraflı
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Projects End-->

    @php
        $partners = \App\Models\Partner::get();
    @endphp
    <!--Partners Start-->
    <section id="partners">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        Partnyor Şirkətlər
                    </h1>
                    <h2 class="head-text">
                        Partnyor Şirkətlər qrupu
                    </h2>
                </div>
                <div class="swiper swiper-container mySwiper partners">
                    <div class="swiper-wrapper partners-group">
                        @foreach ($partners as $partner )
                            
                       
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="{{  (!empty($partner->image)? url('uploads/partner/'.$partner->image):url('uploads/partner/icon-admin.png')  )}}" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Partners End-->
    <!--Address Start-->
    <section id="address">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        Ünvan
                    </h1>
                    <h2 class="head-text">
                        Ünvan
                    </h2>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1519.3435931730787!2d49.8551929103577!3d40.39362507173783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6b94818acf%3A0x5318508b8a339b23!2sA%2BA%20Group%20Of%20Companies!5e0!3m2!1str!2s!4v1656929985662!5m2!1str!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <button class="map-btn">
                        Bizimlə Əlaqə
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--Address End-->
    
@endsection