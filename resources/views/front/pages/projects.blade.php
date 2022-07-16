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

if(app()->getLocale() === 'az'){
    $variable = request()->segment(2);
    $variable2 = request()->segment(3);
    $type = App\Models\Projecttype::where('slug_az',$variable)->orWhere('slug_en',$variable)->orWhere('slug_ru',$variable)->first();

    $projects = App\Models\Project::where('project_type_id',$type->id)->get();
    $projects2 = App\Models\Project::where('project_type_id','!=',$type->id)->get();
    $projectsfirst = App\Models\Project::where('project_type_id',$type->id)->first();
    $projects2first = App\Models\Project::where('project_type_id','!=',$type->id)->first();
  
}
else if(app()->getLocale() === 'en' || app()->getLocale() === 'ru'){
    $variable =  request()->segment(3);
    $variable2 = request()->segment(2);
    $type = App\Models\Projecttype::where('slug_az',$variable)->orWhere('slug_en',$variable)->orWhere('slug_ru',$variable)->first();


    $projects = App\Models\Project::where('project_type_id',$type->id)->get();
    $projects2 = App\Models\Project::where('project_type_id','!=',$type->id)->get();
    $projectsfirst = App\Models\Project::where('project_type_id',$type->id)->first();
    $projects2first = App\Models\Project::where('project_type_id','!=',$type->id)->first();
}
else{
     $variable =  request()->segment(4);
     $variable2 = request()->segment(3);
     $projects = App\Models\Project::where('project_type_id',4)->get();
     $projects2 = App\Models\Project::where('project_type_id',5)->get();

}
$slug = App\Models\Page::where('route','contact')->first();
$slug2 = App\Models\Page::where('route','projects')->first();

     $home = App\Models\Page::where('route','index')->first();
     $lang = App::getLocale();
     $title = 'page_' . $lang;


@endphp

    <!--Projects start-->
    <div class="pages container">
        <ul class="page-pagination">
            <li class="pag-item-head">
                <a href="{{ route('index') }}">{{ $home->$title }}</a>
            </li>
            <span><img src="{{ asset('/front/img/right-arrow.svg') }}" alt=""></span>
            <li class="pag-item">
                {{ $slug2->$title }}
            </li>
        </ul>
    </div>
    <section id="projects-page">
        <div class="container">
            <div class="row">



                <div class="current">
                    <div class="head-text-div">
                        <h1 class="back-head-text">
                            {!! json_decode($projectsfirst['type']['name'])->{app()->getLocale()} !!}
                        </h1>
                        <h2 class="head-text">
                            {!! json_decode($projectsfirst['type']['name'])->{app()->getLocale()} !!}
                        </h2>
                    </div>
                    <div class="current-projects">
                        @foreach ($projects as $project )
                            
                  
                        <div class="col-lg-4">
                            <div class="project-card">
                                <div class="project-card-img">
                                    <img src="{{  (!empty($project->image)? url('uploads/project/'.$project->image):url('uploads/project/icon-admin.png')  )}}" alt="">
                                </div>
                                <div class="project-card-text">
                                    <p class="type-text">
                                        {{ __('static.video')}}
                                    </p>
                                    <h2 class="project-head-text">
                                        {!! json_decode($project['title'])->{app()->getLocale()} !!}
                                    </h2>
                                    <p class="project-body-text">
                                        {!! json_decode($project['desc'])->{app()->getLocale()} !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach


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
                                {{ __('static.contact_us')}}
                            </button>
                        </a>
                    </div>
                </div>
                <div class="finished">
                    <div class="container">
                        <div class="row">
                            <div class="head-text-div">
                                <h1 class="back-head-text">
                                    {!! json_decode($projects2first['type']['name'])->{app()->getLocale()} !!}
                                </h1>
                                <h2 class="head-text">
                                    {!! json_decode($projects2first['type']['name'])->{app()->getLocale()} !!}
                                </h2>
                            </div>
                            <div class="finished-projects">
                                @foreach ($projects2 as $project2 )
                                    
                                <div class="col-lg-6-pr">
                                    <div class="project-card">
                                        <div class="project-card-img">
                                            <img src="{{  (!empty($project2->image)? url('uploads/project/'.$project2->image):url('uploads/project/icon-admin.png')  )}}" alt="">
                                        </div>
                                        <div class="project-card-text">
                                            <p class="type-text">
                                                {{ __('static.video')}}
                                            </p>
                                            <h2 class="project-head-text">
                                                {!! json_decode($project2['title'])->{app()->getLocale()} !!}
                                            </h2>
                                            <p class="project-body-text">
                                                {!! json_decode($project2['desc'])->{app()->getLocale()} !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            
                                @endforeach



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
                                        {{ __('static.contact_us')}}
                                     </button>
                                 </a>
                                 
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!--Projects end-->




@endsection