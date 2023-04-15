@extends('layouts.app')

@section('title', ' | Teachers')

@section('content')

	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Nos enseignants</h1>
									<h2></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
	<div id="fh5co-staff">
		<div class="container">
			<div class="row">
				@foreach($teachers as $teacher)
				<div class="col-md-3 text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/staff-1.jpg);">
							<ul class="fh5co-social">
								<li><a href={{ $teacher->facebook }}><i class="icon-facebook2"></i></a></li>
								<li><a href={{ $teacher->twitter }}><i class="icon-twitter2"></i></a></li>
								<li><a href={{ $teacher->whatsapp }}><i class="icon-whatsapp"></i></a></li>
								<li><a href={{ $teacher->github }}><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>{{ $teacher->speciality }}</span>
						<h3><a href="#">{{ $teacher->name }}</a></h3>
						<p>{{ $teacher->description }}.</p>
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