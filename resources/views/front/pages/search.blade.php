@extends('front.layout.app')

@section('container')
@php
       $search_text=$_GET['search_field'];
        $product = App\Models\Product::where('name','LIKE','%'.$search_text.'%')->first();
        $product2 = App\Models\Product::where('name','LIKE','%'.$search_text.'%')->get();

    $slug = App\Models\Page::where('route','contact')->first();

@endphp





    <!--Purpose start-->
    <div class="pages container">
        <ul class="page-pagination">
          
        </ul>
    </div>
    <section id="products-page">
        <div class="container">
            <div class="row">
                <div class="head-text-div">
                    <h1 class="back-head-text">
                        {!! json_decode($product['name'])->{app()->getLocale()} !!}
                    </h1>
                    <h2 class="head-text">
                        {!! json_decode($product['name'])->{app()->getLocale()} !!}
                    </h2>
                </div>
                <div class="product-blocks">

                      
                    <div class="block" @if(app()->getLocale() === 'az') id="{{ $product->slug_az }}" @elseif(app()->getLocale() === 'en') id="{{ $product->slug_en }}" @else id="{{ $product->slug_ru }}" @endif>
                        <div class="col-lg-4">
                            <div class="slider-bg"></div>
                            <div class="swiper mySwiper productSlider">
                                <div class="swiper-wrapper">

                                    @foreach ($product2 as $p)
                                  
                                    @foreach ($p->images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('uploads/product/' . $image) }}" alt="">
                                    </div>
                                    @endforeach
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
                                    Keçid edin
                                </button>
                            </a>
                            @endif
                        </div>
                    </div>
                  


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
                                 Bizimlə Əlaqə
                             </button>
                         </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Purpose end-->






@endsection