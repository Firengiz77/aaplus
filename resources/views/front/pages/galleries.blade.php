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
    $galleries = \App\Models\Gallery::where('gallery_id', 0)->orderBy('id','asc')->get();
    $slug = App\Models\Page::where('route','gallery')->first();
    $home = App\Models\Page::where('route','index')->first();
    $lang = App::getLocale();
    $title = 'page_' . $lang;

@endphp


  <!--Gallery start-->
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
<section id="gallery-page">
    <div class="container">
        <div class="row">
            <div class="head-text-div">
                <h1 class="back-head-text">
                    Qalereya
                </h1>
                <h2 class="head-text">
                    Qalereya
                </h2>
            </div>
            <div class="gallery">
                @foreach ($galleries as $gallery )
                @php
                    $gal =  \App\Models\Gallery::where('gallery_id',$gallery->id)->get()->count();
                @endphp
    
                <div class="col-lg-3">
                    <div class="gallery-card">
                        <a 
                        @if(app()->getLocale() === 'az')
                        href="{{ route('project',['slug'=> $slug->slug_az,'project' =>$gallery->slug_az]) }}"
                        @elseif(app()->getLocale() === 'en')
                        href="{{ route('project',['slug'=> $slug->slug_en,'project' =>$gallery->slug_en]) }}"
                        @else
                        href="{{ route('project',['slug'=> $slug->slug_ru,'project' =>$gallery->slug_ru]) }}"
                        @endif
                        
                        >
                            <div class="gallery-img">
                                <img src="{{  (!empty($gallery->image)? url('uploads/gallery/'.$gallery->image):url('uploads/gallery/icon-admin.png')  )}}" alt="">
                            </div>
                            <div class="gallery-text">
                                <p class="gallery-card-text">
                                    {!! json_decode($gallery['title'])->{app()->getLocale()} !!}
                                </p>
                                <span>
                                    {{ $gal }}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
<!--Gallery end-->



    
@endsection