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

    <title>A+A</title>
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
                           <a
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
                <div class="lang-src">
                    <a href="#">
                        İng
                    </a>
                    <span>\</span>
                    <a href="#">
                        Rus
                    </a>
                    <button class="open-src">
                        <img src="{{ asset('/front/img/search.svg') }}" alt="">
                    </button>
                </div>
                <div class="search-input">
                    <input class="search" placeholder="Məhsulları axtarış edə bilərsiniz" type="text">
                    <button class="close-src">
                        <img src="{{ asset('/front/img/close.svg') }}" alt="">
                    </button>
                </div>
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
                        $category1 = App\Models\Category::where('category_id',$category->id)->get();
                      @endphp
                        <ul class=" @if($category->id === 1) nav-ser @elseif($category->id === 2) nav-wire @elseif($category->id === 3) nav-purpose @else nav-program @endif ">
                            @foreach ($category1 as $c1 )
                            <li class="nav-item">
                                <a href="#">
                                    {!! json_decode($c1['name'])->{app()->getLocale()} !!}
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