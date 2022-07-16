@extends('front.layout.app')



@section('container')
@php
    if(app()->getLocale() === 'az'){
        $variable = request()->segment(2);
    }else{
        $variable = request()->segment(3);
    }
    $category =  App\Models\Category::where('slug_az',$variable)->orWhere('slug_en',$variable)->orWhere('slug_ru',$variable)->first();
    $products = App\Models\Product::where('category_id',$category->id)->get();
    $product2 = App\Models\Product::where('category_id',$category->id)->first();
    $slug = App\Models\Page::where('route','mehsullarveheller')->first();
    $home = App\Models\Page::where('route','index')->first();
    $lang = App::getLocale();
    $title = 'page_' . $lang;
@endphp

@section('title')
<title>{!! json_decode($product2['name'])->{app()->getLocale()} !!}</title>
    
@endsection



    <!--Purpose start-->
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
    <section id="products-page">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        {!! json_decode($category['name'])->{app()->getLocale()} !!}
                    </h1>
                    <h2 class="head-text">
                        {!! json_decode($category['name'])->{app()->getLocale()} !!}
                    </h2>
                </div>
                <div class="product-blocks">

                    @foreach ($products as $product )
                        
                    <div class="block" @if(app()->getLocale() === 'az') id="{{ $product->slug_az }}" @elseif(app()->getLocale() === 'en') id="{{ $product->slug_en }}" @else id="{{ $product->slug_ru }}" @endif>
                        <div class="col-lg-4">
                            <div class="slider-bg"></div>
                            <div class="swiper mySwiper productSlider">
                                <div class="swiper-wrapper">

                                    @foreach ($product->images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('uploads/product/' . $image) }}" alt="">
                                    </div>
                                @endforeach


                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <h2 class="card-head-1">
                                {!! json_decode($product['name'])->{app()->getLocale()} !!}
                            </h2>
                            <h3 class="card-head-2">
                                {!! json_decode($product['title'])->{app()->getLocale()} !!}
                            </h3>
                            <p class="card-body">
                                {!! json_decode($product['desc'])->{app()->getLocale()} !!}
                            </p>

                            @if($product->link !== null)
                            <a href="{{ $product->link }}">
                                <button class="card-btn">
                                    {{   __('static.kecid') }}
                                </button>
                            </a>
                            @endif
                        </div>
                    </div>
                    @endforeach


                    <div class="product-button">
                        <a 
                        @if(app()->getLocale() === 'az')
                        href="/{{ $slug->slug_az }}"
                        @elseif(app()->getLocale() === 'en')
                        href="/en/{{ $slug->slug_en }}"
                         
                        @else
                        href="/ru/{{ $slug->slug_ru }}"
                         @endif
                         >
                             <button class="contact-btn">
                                {{   __('static.contact_us') }}
                             </button>
                         </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Purpose end-->






@endsection