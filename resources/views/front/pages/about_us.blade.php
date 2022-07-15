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
            Haqqında məlumat
        </h1>
        <h2 class="head-text">
            Şirkət haqqında məlumat
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
                        "A + A Security" MMC şirkəti tikinti və xidmətlər bazarında əhəmiyyətli mövqe tutan
                        şaxələndirilmiş A + A Şirkətlər Qrupunun törəmə müəssisəsidir. Şirkət 2001-ci ildə
                        fəaliyyətə başlayıb və bu gün elektron təhlükəsizlik kilidi, GPS monitorinqi, simsiz
                        telemetriya və elektron təhlükəsizlik sistemləri kimi sahələrdə böyük təcrübəyə malikdir.
                        A+A Security LLc həmçinin otellər və biznes mərkəzləri üçün otel kilidləri, minibarlar və
                        seyf qutularının təchizatçısıdır.
                    </p>
                    <br>
                    <p class="about-text">
                        Təklif olunan GPS monitorinq xidmətləri şirkəti İsrailin Pointer Telocation şirkəti
                        tərəfindən real vaxt rejimində işləyən radionaviqasiya avadanlığından istifadə edir. Biz
                        banklar, tikinti şirkətləri, yerli və beynəlxalq yükdaşımaları ilə məşğul olan şirkətlər,
                        ictimai nəqliyyatla əlaqəli şirkətlər, paylayıcı şirkətlər, lizinq şirkətləri və ölkə
                        iqtisadiyyatında mühüm rol oynayan şirkətlərlə əməkdaşlıq edirik.
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
                        Müasir dövrdə elektron təhlükəsizlik sistemləri mühüm tələbdir. A+A Security MMC-nin
                        fəaliyyət spektrinə həmçinin Avropa və Cənubi Koreyada istehsal olunan perimetr
                        mühafizəsi və müşahidə sistemi avadanlıqları daxildir. A + A Security MMC Almaniyanın
                        yüksək ayırdetməli IP kameralar istehsalçısı Mobotix şirkətinin Azərbaycandakı
                        nümayəndəsidir.
                    </p>
                    <br>
                    <p class="about-text">
                        Şirkətimiz Norveçin VingCard şirkətinin ölkədə mehmanxana elektron qıfıllarının,
                        qənaətcil enerjiyə qənaət sistemlərinin, həmçinin seyflərin və minibarların təchizatı
                        ilə məşğul olan rəsmi nümayəndəsidir.
                    </p>
                    <br>
                    <p class="about-text">
                        Biz müxtəlif müştərilərlə əməkdaşlıq edirik: fiziki şəxslərdən və kiçik bizneslərdən
                        tutmuş dövlət qurumlarına və böyük korporasiyalara qədər. Missiyamız müştərilərimizə
                        keyfiyyətli və səmərəli xidmətlər təqdim etməkdir.
                    </p>
                    <br>
                    <p class="about-text">
                        Ən böyük sərvətimiz - işçilərimiz, öz işini sevən peşəkarlardan ibarət komandamız.
                        Uğurumuzu müştərilərimizin məmnuniyyəti ilə ölçürük.
                    </p>
                </div>
            </div>
            <div class="head-text-div certificate">
                <h1 class="back-head-text">
                    Sertifikatlar
                </h1>
                <h2 class="head-text">
                    Sertifikatlar
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
                    Logonun istifadə qaydaları
                </h1>
                <h2 class="head-text">
                    Logonun istifadə qaydaları
                </h2>
            </div>
            <div class="logo-rules">
                <p class="rules-head">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat aliquam viverra viverra lacus,
                    nec aliquam in tincidunt ut. Ac mi at ridiculus posuere. Eros, nunc, arcu accumsan, non, amet at
                </p>
                <ul class="rules-list">
                    <li>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </li>
                    <li>
                        Tortor fringilla venenatis vitae placerat mattis sit arcu molestie.
                    </li>
                    <li>
                        Egestas nunc sed aenean egestas elementum, eu, donec.
                    </li>
                    <li>
                        Commodo sit leo et aliquet porta eget volutpat dis tellus.
                    </li>
                    <li>
                        Porta nibh a, risus etiam non, pretium amet, quis.
                    </li>
                    <li>
                        In sapien, ut dolor, eu suspendisse est, massa lectus in.
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
                    Partnyor Şirkətlər
                </h1>
                <h2 class="head-text">
                    Partnyor Şirkətlər qrupu
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