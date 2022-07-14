@extends('front.layout.app')


@section('container')

@php

if(app()->getLocale() === 'az'){
    $variable = request()->segment(3);
    $variable2 = request()->segment(2);
    $projects = App\Models\Project::where('project_type_id',$variable)->get();
    $projects2 = App\Models\Project::where('project_type_id','!=',$variable)->get();
    $projectsfirst = App\Models\Project::where('project_type_id',$variable)->first();
    $projects2first = App\Models\Project::where('project_type_id','!=',$variable)->first();
  
}
else if(app()->getLocale() === 'en' || app()->getLocale() === 'ru'){
    $variable =  request()->segment(4);
    $variable2 = request()->segment(3);
    $projects = App\Models\Project::where('project_type_id',$variable)->get();
    $projects2 = App\Models\Project::where('project_type_id','!=',$variable)->get();
}
else{
     $variable =  request()->segment(4);
     $variable2 = request()->segment(3);
     $projects = App\Models\Project::where('project_type_id',4)->get();
     $projects2 = App\Models\Project::where('project_type_id',5)->get();

}
$slug = App\Models\Page::where('route','contact')->first();


@endphp

    <!--Projects start-->
    <div class="pages container">
        <ul class="page-pagination">
            <li class="pag-item-head">
                <a href="{{ route('index') }}">Ana səhifə</a>
            </li>
            <span><img src="{{ asset('/front/img/right-arrow.svg') }}" alt=""></span>
            <li class="pag-item">
                Layihələr
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
                                        Videomüşahidə
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
                                Bizimlə Əlaqə
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
                                                Videomüşahidə
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
                                         Bizimlə Əlaqə
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