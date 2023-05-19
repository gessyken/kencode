@extends('layouts.app')

@section('title', ' | Cours')

@section('content')
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/school.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Nos Cours</h1>
									<h2>Bienvenue sur le page des differents cours proposes sur {{ config('app.name') }} </h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Les cours</h2>
					<p>Savourez avec appetit ces differents cours qui ont ete prepare pour vous avec amour et passion.</p>
				</div>
			</div>

			<div class="row">
				@foreach($courses as $course)
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(images/project-1.jpg);">
                            </a>
                            <div class="desc">
                                <h3><a href="#"> {{ $course->title }} </a></h3>
                                <p>{{ $course->description }}.</p>
                                <p>de type {{ $course->type }}.</p>
                                <p>Proposee par {{ $course->author }}.</p>
                                <span><a href="#" class="btn btn-primary btn-sm btn-course">Suivre le cours</a></span>
                            </div>
                        </div>
                    </div>
                @endforeach

			</div>
		</div>
	</div>

	<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
        <div class="overlay"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 animate-box">
                <div class="date-counter text-center">
                    <h2>Vous avez 400 jours gratuit sur {{ config('app.name') }}</h2>
                    <h3></h3>
                    <div class="simply-countdown simply-countdown-one"></div>
                    <p><strong>Attention le temps s'ecoule !!</strong></p>
                    <p><a href="#" class="btn btn-primary btn-lg btn-reg">Choisir un abonnement</a></p>
                </div>
            </div>
        </div>
    </div>


@endsection