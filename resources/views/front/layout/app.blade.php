<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('/front/css/config.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/owl.carousel.min.css') }}">

    @yield('title')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


     
</head>

<body>
    <!--Header start-->
    <header>
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img class="logo-1" src="{{ asset('/front/img/logo.svg') }}" alt="">
                        <img class="logo-2" src="{{ asset('/front/img/logo2.svg') }}" alt="">
                    </a>
                </div>
                <ul class="nav">
                    @foreach ($pagess as $pages)
                    @if($pages['parent_id']==0)
                       <li class="nav-item">
                           <a @if($pages['route']=='mehsullarveheller') onclick="return:false;" @endif
                           @if(app()->getLocale() === 'az')
                           href="@if($pages['page_id']==1){{ "/".$pages['slug']}}@else{{ "/".$pages['slug'] }}@endif"
                           @else
                           href="@if($pages['page_id']==1){{ "/".App::getLocale()."/".$pages['slug']}}@else{{ "/".App::getLocale()."/".$pages['slug'] }}@endif"
                           @endif
                           
                           class="@if($pages['route']==$current_route || $pages['page_id']==$page_id) active @else  @endif"
                           >
                             {{ $pages['page'] }}  @if( $pages['route'] == "about" || $pages['route'] == "mehsullarveheller") <img src="{{ asset('/front/img/nav.svg') }}" alt="">  @endif  </a>
                          
                       </li>
                   @endif
                   @endforeach

                </ul>
            
                @if($page->route !=='search')
                <div class="lang-src">

                    @if(Route::is('index'))
                    @if(app()->getLocale() === 'az')
                    <a href="/en">İng</a>
                    <span>\</span>
                    <a href="/ru">Rus</a>
                    @elseif(app()->getLocale() === 'en')
                    <a href="/">Aze</a>
                    <span>\</span>
                    <a href="/ru">Rus</a>
                    @else
                    <a href="/en">İng</a>
                    <span>\</span>
                    <a href="/">Aze</a>
                    @endif

                    @else
                    @php
                    if(app()->getLocale() === 'az'){
                      $gallvariable =  request()->segment(2);
                      $provariable = request()->segment(3);
                     }
                     else {
                     $gallvariable =  request()->segment(3);
                     $provariable = request()->segment(4);
                   }
                     $gallery = App\Models\Gallery::where('slug_az',$gallvariable)->orWhere('slug_en',$gallvariable)->orWhere('slug_ru',$gallvariable)->get();
                     $types = App\Models\Projecttype::where('slug_az',$gallvariable)->orWhere('slug_en',$gallvariable)->orWhere('slug_ru',$gallvariable)->get();
                     $categories =  App\Models\Category::where('slug_az',$gallvariable)->orWhere('slug_en',$gallvariable)->orWhere('slug_ru',$gallvariable)->get();
                     $products = App\Models\Product::where('slug_az',$provariable)->orWhere('slug_en',$provariable)->orWhere('slug_ru',$provariable)->get();
                  @endphp

                    @if(app()->getLocale() === 'az')
                    <a href="/en/{{$page->slug_en}}@if($page->route=='gallery')@foreach($gallery as $gal)@if($gal->slug_en){{'/'.$gal->slug_en}}@endif @endforeach @elseif($page->route=='project')@foreach($types as $type)@if($type->slug_en){{'/'.$type->slug_en}}@endif @endforeach @elseif($page->route=='mehsullarveheller')@foreach($categories as $category)@foreach($products as $product)@if($category->slug_en){{'/'.$category->slug_en}}@if($product->slug_en){{'/'.$product->slug_en}}@endif @endif @endforeach @endforeach @endif">Ing</a>
                    <span>\</span>
                    <a href="/ru/{{$page->slug_ru}}@if($page->route=='gallery')@foreach($gallery as $gal)@if($gal->slug_ru){{'/'.$gal->slug_ru}}@endif @endforeach @elseif($page->route=='project')@foreach($types as $type)@if($type->slug_ru){{'/'.$type->slug_ru}}@endif @endforeach @elseif($page->route=='mehsullarveheller')@foreach($categories as $category)@foreach($products as $product)@if($category->slug_ru){{'/'.$category->slug_ru}}@if($product->slug_ru){{'/'.$product->slug_ru}}@endif @endif @endforeach @endforeach @endif">Rus</a>
                    @elseif(app()->getLocale() === 'en')
                    <a href="/{{$page->slug_az}}@if($page->route=='gallery')@foreach($gallery as $gal)@if($gal->slug_az){{'/'.$gal->slug_az}}@endif @endforeach @elseif($page->route=='project')@foreach($types as $type)@if($type->slug_az){{'/'.$type->slug_az}}@endif @endforeach @elseif($page->route=='mehsullarveheller')@foreach($categories as $category)@foreach($products as $product)@if($category->slug_az){{'/'.$category->slug_az}}@if($product->slug_az){{'/'.$product->slug_az}}@endif @endif @endforeach @endforeach @endif">Aze</a>
                    <span>\</span>
                    <a href="/ru/{{$page->slug_ru}}@if($page->route=='gallery')@foreach($gallery as $gal)@if($gal->slug_ru){{'/'.$gal->slug_ru}}@endif @endforeach @elseif($page->route=='project')@foreach($types as $type)@if($type->slug_ru){{'/'.$type->slug_ru}}@endif @endforeach @elseif($page->route=='mehsullarveheller')@foreach($categories as $category)@foreach($products as $product)@if($category->slug_ru){{'/'.$category->slug_ru}}@if($product->slug_ru){{'/'.$product->slug_ru}}@endif @endif @endforeach @endforeach @endif">Rus</a>
                    @else
                    <a href="/en/{{$page->slug_en}}@if($page->route=='gallery')@foreach($gallery as $gal)@if($gal->slug_en){{'/'.$gal->slug_en}}@endif @endforeach @elseif($page->route=='project')@foreach($types as $type)@if($type->slug_en){{'/'.$type->slug_en}}@endif @endforeach @elseif($page->route=='mehsullarveheller')@foreach($categories as $category)@foreach($products as $product)@if($category->slug_en){{'/'.$category->slug_en}}@if($product->slug_en){{'/'.$product->slug_en}}@endif @endif @endforeach @endforeach @endif">Ing</a>
                    <span>\</span>
                    <a href="/{{$page->slug_az}}@if($page->route=='gallery')@foreach($gallery as $gal)@if($gal->slug_az){{'/'.$gal->slug_az}}@endif @endforeach @elseif($page->route=='project')@foreach($types as $type)@if($type->slug_az){{'/'.$type->slug_az}}@endif @endforeach @elseif($page->route=='mehsullarveheller')@foreach($categories as $category)@foreach($products as $product)@if($category->slug_az){{'/'.$category->slug_az}}@if($product->slug_az){{'/'.$product->slug_az}}@endif @endif @endforeach @endforeach @endif">Aze</a>
                    @endif

                    @endif

                    <button class="open-src">
                        <img src="{{ asset('/front/img/search.svg') }}" alt="">
                    </button>
                </div>
             @endif
             
                  
                <form method="get" type="get" action="{{url('/search')}}"  class="search-input">
                  @csrf
                    <input class="search" name="search_field" placeholder="Məhsulları axtarış edə bilərsiniz" type="text">
                    <button type="submit" class="close-src">
                        <img src="{{ asset('/front/img/close.svg') }}" alt="">
                    </button>
                </form>
           
                <div class="about">
                    <div class="col-lg-5">
                      
                        <ul class="nav-2">

                            @foreach ($pagess as $pages)
                            @if($pages['parent_id']== 10)
                               <li class="nav-item">
                                   <a
                                   @if(app()->getLocale() === 'az')
                                   href="@if($pages['page_id']==1){{ "/".$pages['slug']}}@else{{ "/".$pages['slug'] }}@endif"
                                   @else
                                   href="@if($pages['page_id']==1){{ "/".App::getLocale()."/".$pages['slug']}}@else{{ "/".App::getLocale()."/".$pages['slug'] }}@endif"
                                   @endif
                                   
                                   class="@if($pages['route']==$current_route || $pages['page_id']==$page_id) active @else  @endif"
                                   >
                                     {{ $pages['page'] }} </a>
                                  
                               </li>
                           @endif
                       @endforeach
                        </ul>

                    </div>
                    <div class="col-lg-7">
                        <img src="{{ asset('/front/img/stars.png') }}" alt="">
                    </div>
                </div>
                <div class="products">
                    <div class="col-lg-5">
                        <ul class="nav-2">
                            @php
                                $categories = App\Models\Category::where('category_id',0)->get();
                              
                            @endphp

                            @foreach ($categories as $category)
                        


                            <li class="nav-item  @if($category->id === 1) services @elseif($category->id === 2) wireless @elseif($category->id === 3) purpose @else program @endif  ">
                                <a href="#">
                                    {!! json_decode($category['name'])->{app()->getLocale()} !!}
                                </a>
                            </li>


                            @endforeach

                          

                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <img src="{{ asset('/front/img/stars.png') }}" alt="">
                        @foreach ($categories as $category)
                        @php
                        $products = App\Models\Product::where('category_id',$category->id)->get();
                        $slug2= App\Models\Page::where('route','mehsullarveheller')->first();
                      
                      @endphp
                        <ul class=" @if($category->id === 1) nav-ser @elseif($category->id === 2) nav-wire @elseif($category->id === 3) nav-purpose @else nav-program @endif ">
                            @foreach ($products as $product )
                            <li class="nav-item">
                                <a
                                @if(app()->getLocale() === 'az')
                                href="{{ route('project2',['slug2' => $slug2->slug_az,'project2'=> $category->slug_az,'project3' => $product->slug_az ]).'#'.$product->slug_az }}"
                                @elseif(app()->getLocale() === 'en')
                                href="{{ route('project2',['slug2' => $slug2->slug_en,'project2'=> $category->slug_en,'project3' => $product->slug_en ]).'#'.$product->slug_en }}"
                                @else
                                href="{{ route('project2',['slug2' => $slug2->slug_ru,'project2'=> $category->slug_ru,'project3' => $product->slug_ru ]).'#'.$product->slug_ru }}"
                                @endif
                                >
                                    {!! json_decode($product['name'])->{app()->getLocale()} !!}
                                </a> 
                            </li>
                        @endforeach
                   
                       

                            
                        </ul>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!--Header End-->


    @yield('container')



       <!--Footer Start-->
       <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('/front/img/foot-logo.svg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3">
                    <h2 class="foot-head">
                        A+A security
                    </h2>
                    <ul class="site-map">
                        @foreach ($pagess as $pages)
                        @if($pages['parent_id']==0)
                           <li >
                               <a
                               @if(app()->getLocale() === 'az')
                               href="@if($pages['page_id']==1){{ "/".$pages['slug']}}@else{{ "/".$pages['slug'] }}@endif"
                               @else
                               href="@if($pages['page_id']==1){{ "/".App::getLocale()."/".$pages['slug']}}@else{{ "/".App::getLocale()."/".$pages['slug'] }}@endif"
                               @endif
                               
                               class="@if($pages['route']==$current_route || $pages['page_id']==$page_id) active @else  @endif"
                               >
                                 {{ $pages['page'] }}    </a>
                              
                           </li>
                       @endif
                   @endforeach

                    
                    </ul>
                </div>
                @php
                    $contact = App\Models\Contact::first();
                @endphp
                <div class="col-lg-3">
                    <h2 class="foot-head">
                        Əlaqə
                    </h2>
                    <ul class="contact">
                        <li>
                            <a href="tel:{{ str_replace(' ','',$contact->phone1) }}">
                                {{ $contact->phone1 }}
                            </a>
                        </li>
                        <li>
                            <a href="tel:{{ str_replace(' ','',$contact->phone2) }}">
                                {{ $contact->phone2 }}
                            </a>
                        </li>
                        <li>
                            <a href="mailTo:{{ $contact->phone2 }}">
                                {{ $contact->email }}
                            </a>
                        </li>
                        <li>
                            {{ $contact->address }}
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h2 class="foot-head">
                        Abunəlik
                    </h2>
                    <ul class="social-icons">
                        <li>
                            <a href=" {{ $contact->fb }}">
                                <img src="{{ asset('/front/img/facebook.svg') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href=" {{ $contact->insta }}">
                                <img src="{{ asset('/front/img/instagram.svg') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ $contact->linkedin }}">
                                <img src="{{ asset('/front/img/linkedin.svg') }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="foot-end">
            <div class="container">
                <div class="row">
                    <p>
                        (c) 2022 A+A Security, Bütün Hüquqlar Qorunur
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('/front/js/swiper.min.js') }}"></script>
    <script src="{{ asset('/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/front/js/slider.js') }}"></script>
    <script src="{{ asset('/front/js/main.js') }}"></script>
</body>

</html>