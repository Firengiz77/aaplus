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
    $contact = App\Models\Contact::first();
    $home = App\Models\Page::where('route','index')->first();
    $slug = App\Models\Page::where('route','about_us')->first();
    $lang = App::getLocale();
    $title = 'page_' . $lang;

@endphp

    <!--Contact start-->
    <div class="pages container">
        <ul class="page-pagination">
            <li class="pag-item-head">
                <a href="{{ route('index') }}">{{ $home->$title }}</a>
            </li>
            <span><img src="{{ asset('/front/img/right-arrow.svg') }}" alt=""></span>
            <li class="pag-item">
                {{ $home->$title }}
            </li>
        </ul>
    </div>
    <section id="contact-page">
        <div class="container">
            <div class="row">
                <div class="contact-main">
                    <div class="col-lg-6-pr">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.6796427528393!2d49.854521956458875!3d40.393792237934385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6b94818acf%3A0x5318508b8a339b23!2sA%2BA%20Group%20Of%20Companies!5e0!3m2!1str!2s!4v1657274736772!5m2!1str!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-6-pr">
                        <div class="head-text-div">
                            <h1 class="back-head-text">
                                Əlaqə
                            </h1>
                            <h2 class="head-text">
                                Əlaqə
                            </h2>
                        </div>
                        <div class="form-group">
                            <form action="{{ route('sendmail2') }}" method="post">
                                @csrf
                            <div class="head-inputs">
                                <input class="contact-input" type="text" name="name" placeholder="Ad">
                                <input class="contact-input" type="text" name="surname" placeholder="Soyad">
                            </div>
                            <select class="number-select" name="prefix">
                                <option value="050" >050</option>
                                <option value="051">051</option>
                                <option value="055">055</option>
                                <option value="099">099</option>
                                <option value="070">070</option>
                                <option value="077">077</option>
                            </select>  
                            <input class="contact-input" name="phone" type="tel" placeholder="XXX – XX – XX" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}">           
                            <input class="contact-input" name="email" type="email" placeholder="E-Poçt">   
                            <textarea class="contact-input" name="msj" name="" id="" cols="30" rows="10" placeholder="Müraciətinizi daxil edin"></textarea>                    
                        </div>
                      
                            <button class="send-btn">
                                Göndər
                            </button>
                        </form>
                    </div>
                </div>
                <ul class="contact-foot">
                    <li>
                        {{ $contact->address }}
                    </li>
                    <span>
                        /
                    </span>
                    <li>
                        <a href="mailTo:{{ $contact->address }}">
                            {{ $contact->email }}
                        </a>
                    </li>
                    <span>
                        /
                    </span>
                    <li>
                        <a href="tel:{{  str_replace(' ','',$contact->phone1) }}">
                            {{ $contact->phone1 }}
                        </a>
                    </li>
                    <span>
                        /
                    </span>
                    <li>
                        <a href="tel:{{  str_replace(' ','',$contact->phone2) }}">
                            {{ $contact->phone2 }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Contact end-->





@endsection