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
    $newss = \App\Models\News::paginate(10);
    $slug =\App\Models\Page::where('route','news')->first();
    $home = App\Models\Page::where('route','index')->first();
    $lang = App::getLocale();
    $title = 'page_' . $lang;
@endphp

   <!--News start-->
   <div class="pages container">
    <ul class="page-pagination">
        <li class="pag-item-head">
            <a href="{{ route('index') }}">{{ $home->$title }}</a>
        </li>
        <span><img src="./img/right-arrow.svg" alt=""></span>
        <li class="pag-item">
            {{ $slug->$title }}
        </li>
    </ul>
</div>
<section id="news-page">
    <div class="container">
        <div class="row">

@foreach ($newss as $news )
    

            <div class="news-block">
                <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-4">
                    <div class="swiper mySwiper newsSlider">
                        <div class="swiper-wrapper">
                           
                            
                            @foreach ($news->images as $image)
                            <div class="swiper-slide">
                                <img src="{{ asset('uploads/news/' . $image) }}"  alt="">
                            </div>
                        @endforeach
                        
                         
                        

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-8">
                    <div class="body-text">
                        <p class="date">
                           {{$news->created_at->format('M d, Y')}}
                        </p>
                        <h3 class="news-head">
                            {!! json_decode($news['title'])->{app()->getLocale()} !!}
                        </h3>
                        <p class="news-body">
                            {!! json_decode($news['desc'])->{app()->getLocale()} !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach



{{ $newss->links('vendor.custom') }}


          
        </div>
    </div>
</section>
<!--News end-->


    
@endsection