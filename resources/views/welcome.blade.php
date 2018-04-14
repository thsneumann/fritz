@extends('layouts.master', ['body_class' => 'welcome-page'])

@section('nav')
@endsection

@section('content')

<div class="container-fluid d-flex flex-column">
    <div class="row mb-3">
        <div class="col-lg-6 col-xl-5">
            <p class="text-size-3 text-uppercase font-weight-bold">Herzlich Willkommen!</p>

            <h1 class="text-size-3 text-uppercase font-weight-bold mb-4">Fritz-Fahrkarten-Tool</h1>
            <div class="text-size-1 font-weight-bold">
                <p>Die Historische Fahrkartensammlung<br>
                des Deutschen Technikmuseums<br>
                … gesammelt von Opernsänger Fritz Hellmuth,<br>
                … abgeschrieben von der Crowd!<br>
                </p>
                <p>
                Bergen Sie mit uns den Schatz von 120.000 internationalen Tickets aus der Zeit der Entstehung des Personenverkehrs Mitte des 19. Jahrhunderts bis 1925.
                </p>
            </div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-xl-4 offset-xl-3">
            @include('partials/image-grid')
        </div>
    </div>

    <div class="row align-items-end mt-auto">
        <div class="col-sm-8">
            <img src="img/raute_technikmuseum.png" alt="Logo Stiftung Deutsches Technikmuseum" class="mb-2">
            <a href="{{ route('intro') }}" class="arrow-link mb-2 mb-sm-0">
                Los geht&apos;s!
                <img src="img/pfeil_rechts.png" alt="Pfeil nach rechts.">
            </a>
        </div>
        <div class="col-sm-4">
            <a href="#intro-video" class="video-preview" data-fancybox data-small-btn="true">
                <figure class="mb-0">
                    <img src="img/video-vorschau.jpg" alt="Vorschaubild Erklärvideo.">
                    <figcaption class="caption text-size-1 text-uppercase">
                        <img src="img/pfeil_rechts.png" alt="Pfeil nach rechts." class="mr-2">
                        Erklärvideo
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>

<video id="intro-video" controls style="display: none">
    <source src="{{ asset('video/intro.mp4') }}" type="video/mp4">
    Ihr Browser unterstützt keine HTML5-Videos.
</video>

</div>

@endsection