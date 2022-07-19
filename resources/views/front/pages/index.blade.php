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
                    <div class="container">
                        <div class="row">
                            <h1 class="slider-head" style="font-weight: {{ $slider->font_weight_1 }}; font-size: {{ $slider->font_size_1 }}px;">
                                {!! json_decode($slider['title'])->{app()->getLocale()} !!}
                            </h1>
                            <p class="slider-body" style="font-weight: {{ $slider->font_weight_2 }}; font-size: {{ $slider->font_size_1 }}px; color: {{ $slider->color }};">
                                {!! json_decode($slider['desc'])->{app()->getLocale()} !!}
                            </p>
                            {{-- <p class="slider-body" style="font-weight: 400; font-size: 35px; color: #ffffff;">
                                Rahat yaşam
                            </p> --}}
                        </div>
                    </div>
                </div> 
@endforeach
            </div>
            <div class="container">
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <hr class="mouse-hr">
        <div class="mouse_scroll">
            <a href="#!">
                <div class="mouse">
                    <div>
                        <span class="m_scroll_arrows unu"></span>
                        <span class="m_scroll_arrows doi"></span>
                        <span class="m_scroll_arrows trei"></span>
                    </div>
                </div>    
            </a>
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
                            {{   __('static.about1') }}
                        </h1>
                        <h2 class="head-text">
                            {{   __('static.about2') }}
                        </h2>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1000" class="body-text">
                        <p>
                            {{   __('static.home1') }}
                        </p>
                        <p>
                            {{   __('static.home2') }}
                        </p>
                        <p>
                            {{   __('static.home3') }}
                        </p>
                        @php
                            $slug = App\Models\Page::where('route','about_us')->first();
                        @endphp
                        <a class="detail" 
                        @if(app()->getLocale() === 'az')
                        href='/{{$slug->slug_az}}'
                        @else
                        href="/en/{{$slug->slug_en}}"
                        @endif

                        >
                            {{   __('static.more') }}
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
                        {{   __('static.products') }}
                    </h1>
                    <h2 class="head-text">
                        {{   __('static.products') }}
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
                    {{   __('static.block') }}
                </h1>
                <h2 class="head-text">
                    {{   __('static.block') }}
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
    
    @php
        $newss =  App\Models\News::orderBy('id','asc')->take(4)->get();
        $slugnews = \App\Models\Page::where('route','news')->first();
    @endphp
    <!--News Start-->
    <section id="news">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        {{   __('static.news') }}
                    </h1>
                    <h2 class="head-text">
                        {{   __('static.news') }}
                    </h2>
                </div>
                <div class="news-images">
                    @foreach ($newss as $news )
                        
                    <div class="news-img">
                        <a  @if(app()->getLocale() === 'az')
                            href="/{{ $slugnews->slug_az }}"
                            @elseif(app()->getLocale() === 'en')
                            href="/en/{{ $slugnews->slug_en }}"
                            @else
                            href="/ru/{{ $slugnews->slug_ru }}"
                            @endif>
                            <img class="card-img" src="{{  (!empty($news->thumbnail)? url('uploads/news/'.$news->thumbnail):url('uploads/news/icon-admin.png')  )}}" alt="">
                            <div class="text">
                                <p>
                                    {!! json_decode($news['title'])->{app()->getLocale()} !!}
                                    <img src="{{ asset('/front/img/Arrow 1.svg') }}" alt="">
                                </p>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
                <div class="detail-div">
                    <a class="detail"  @if(app()->getLocale() === 'az')
                        href="/{{ $slugnews->slug_az }}"
                        @elseif(app()->getLocale() === 'en')
                        href="/en/{{ $slugnews->slug_en }}"
                        @else
                        href="/ru/{{ $slugnews->slug_ru }}"
                        @endif>
                        {{   __('static.more') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--News End-->

    @php
        $projecttypes = App\Models\Projecttype::get();
        $slug = \App\Models\Page::where('route','project')->first();
        $slug2 = \App\Models\Page::where('route','projectall')->first();
    @endphp



    <!--Projects Start-->
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        {{   __('static.project') }}
                    </h1>
                    <h2 class="head-text">
                        {{   __('static.project') }}
                    </h2>
                </div>
                <div class="projects">
                    @foreach ($projecttypes as $projecttype )
                    <div @if($projecttype->id %2 === 0)  data-aos="fade-up" @else  data-aos="fade-down" @endif data-aos-duration="1000" class="project-img">
                        <a 
                       @if(app()->getLocale() === 'az')
                       href="{{ route('project',['slug' => $slug->slug_az,'project'=> $projecttype->slug_az]) }}"
                       @elseif(app()->getLocale() === 'en')
                       href="{{ route('project',['slug' => $slug->slug_en,'project'=> $projecttype->slug_en ]) }}"
                       @else
                       href="{{ route('project',['slug' => $slug->slug_ru,'project'=> $projecttype->slug_ru ]) }}"
                       @endif
                        >
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
                        <a class="detail" 
                        @if(app()->getLocale() === 'az')
                        href="/{{ $slug2->slug_az }}"
                        @elseif(app()->getLocale() === 'en')
                        href="/en/{{ $slug->slug_en }}"
                        @else
                        href="/ru/{{ $slug->slug_ru }}"
                        @endif>
                        {{   __('static.more') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Projects End-->

    @php
        $partners = \App\Models\Partner::get();
        $contactslug = \App\Models\Page::where('route','contact')->first();
    @endphp
    <!--Partners Start-->
    <section id="partners">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        {{   __('static.partner1') }}
                    </h1>
                    <h2 class="head-text">
                        {{   __('static.partner2') }}
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
                        {{   __('static.address') }}
                    </h1>
                    <h2 class="head-text">
                        {{   __('static.address') }}
                    </h2>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1519.3435931730787!2d49.8551929103577!3d40.39362507173783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6b94818acf%3A0x5318508b8a339b23!2sA%2BA%20Group%20Of%20Companies!5e0!3m2!1str!2s!4v1656929985662!5m2!1str!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <a 
                        @if(app()->getLocale() === 'az')
                        href="/{{ $contactslug->slug_az }}"
                        @elseif(app()->getLocale() === 'en')
                        href="/en/{{ $contactslug->slug_en }}"
                         
                        @else
                        href="/ru/{{ $contactslug->slug_ru }}"
                         @endif
                         >
                             <button class="map-btn">
                                {{   __('static.contact_us') }}
                             </button>
                         </a>
                </div>
            </div>
        </div>
    </section>
    <!--Address End-->
    
@endsection