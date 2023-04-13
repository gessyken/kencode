@extends('layouts.app_cover')

@section('content')
    <main class="px-3">
        <h1>BIENVENUE SUR {{ config('app.name') }}.</h1>
        <p class="lead">{{ config('app.name') }} est une plateforme web dédié aux developpeurs... <br> Ici, vous pouvez apprendre à coder (si vous êtes débutant), ou enseigner la programmation (Si vous êtes sénior)</p>
        <p class="lead">
          <a href={{ route('login') }} class="btn btn-lg btn-light fw-bold border-white bg-white">Continuer</a>
        </p>
    </main>
@endsection