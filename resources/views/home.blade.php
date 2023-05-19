@extends('layouts.app')

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
                                <h1>Les racines de l'éducation sont amères, mais les fruits en sont doux.</h1>
                                    <h2>By GESSY - KEN</h2>
                                    <p><a class="btn btn-primary btn-lg" href="#">Cliquer ici pour commencer</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/school.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>Le grand objectif de l'éducation n'est pas la connaissance, mais l'action</h1>
                                    <h2>By GESSY - KEN</h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Cliquer ici pour commencer</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/school.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>Apprendre est le seul sport qui n'est pas fatiguant <span>&#x1F60A;</span></h1>
                                    <h2>By GESSY - KEN</h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Cliquer ici pour commencer</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>           
            </ul>
        </div>
    </aside>

    <div id="fh5co-course-categories">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-3 text-center fh5co-heading">
                    <h2>categories de cours dispenses sur {{ config('app.name') }}</h2>
                    <p>Voici un bref appercu du contenu que vous retrouverez sur {{ config('app.name') }}.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-link"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Les bases de l'informatique</a></h3>
                            <p>Dans cette formation, on vous initie à l'informatique, en abordant les ...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-star3"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Initiation a l'algorithmique</a></h3>
                            <p>Dans cette formation, on vous initie à l'algorithmique, car c'est l'une des  ... </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-flash"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">La programmation en C</a></h3>
                            <p>Dans cette formation, on vous initie à la programmation procedurale, par le biais du langage C..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-lab2"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">La POO en C++</a></h3>
                            <p>Dans cette formation, on vous initie à la programmation orientee-objet, par le biais du langage C++...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-world"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">La programmation web</a></h3>
                            <p>Dans cette formation, on vous initie à la programmation web, par le biais des langages telques HTML,CSS,JavaScript...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-home-outline"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">#...#</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-bubble3"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">#...#</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-world"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">#...#</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/school.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-world"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="797" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Nombre de visiteurs sur {{ config('app.name') }}</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-study"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="370" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Nombre d'etudiants enregistres</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-bulb"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="301" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Nombre de formations terminees</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-head"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="108" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Nombre d'enseignants certifies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-course">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Nos cours</h2>
                    <p>Voici des cours que vous retrouverez sur {{ config('app.name') }}.</p>
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

    <div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2><span>Quelques enseignants</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <div class="user" style="background-image: url(images/KEN.JPG);"></div>
                                    <span>GESSY AUREL KENNE<br><small>Etudiant en genie logiciel</small></span>
                                    <blockquote>
                                        <p>&ldquo; Ayant la passion d'apprendre et de faire apprendre, j'ai concu cette plateforme qui a pour objectif de vous faire aimer la prorammation autant que moi donc je peux vous assurer que mes differents cours seront le fruit de beaucoup d'amour et de passion .&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <div class="user h1" style="background-image: url(images/person2.jpg);">
                                        <i class="icon-user"></i>
                                    </div>
                                    <span>JOSUE-FERRY NDE<br><small>Etudiant en systemes reseaux informatiques</small></span>
                                    <blockquote>
                                        <p>&ldquo;Ayant la passion d'apprendre et de faire apprendre, j'ai concu cette plateforme qui a pour objectif de vous faire aimer la prorammation autant que moi donc je peux vous assurer que mes differents cours seront le fruit de beaucoup d'amour et de passion.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <div class="user" style="background-image: url(images/person3.jpg);"></div>
                                    <span>SERGIO JUNIOR CHEBEU<br><small>Etudiant en genie logiciel</small></span>
                                    <blockquote>
                                        <p>&ldquo;Ayant la passion d'apprendre et de faire apprendre, j'ai concu cette plateforme qui a pour objectif de vous faire aimer la prorammation autant que moi donc je peux vous assurer que mes differents cours seront le fruit de beaucoup d'amour et de passion.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Blog &amp; Events</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row row-padded-mb">
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span>15<br>Mar.</span></div>
                        <h3><a href="#">USA, International Triathlon Event</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span>15<br>Mar.</span></div>
                        <h3><a href="#">USA, International Triathlon Event</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span>15<br>Mar.</span></div>
                        <h3><a href="#">New Device Develope by Microsoft</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-img-holder" style="background-image: url(images/project-1.jpg);"></a>
                        <div class="blog-text">
                            <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                            <span class="posted_on">March. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-img-holder" style="background-image: url(images/project-2.jpg);"></a>
                        <div class="blog-text">
                            <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                            <span class="posted_on">March. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-img-holder" style="background-image: url(images/project-3.jpg);"></a>
                        <div class="blog-text">
                            <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                            <span class="posted_on">March. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="fh5co-pricing" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Grille des prix</h2>
                    <p>Voici les differents abonnements que vous avez sur {{ config('app.name') }} merci de faire votre choix.</p>
                </div>
            </div>
            <div class="row">
                <div class="pricing pricing--rabten">
                    <div class="col-md-4 animate-box">
                        <div class="pricing__item">
                            <div class="wrap-price">
                                 <!-- <div class="icon icon-user2"></div> -->
                         <h3 class="pricing__title">Trial</h3>
                         <!-- <p class="pricing__sentence">Single user license</p> -->
                            </div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
                                <span class="pricing__currency">XAF</span>0
                        </span>
                        <span class="pricing__anim pricing__anim--2">
                                <span class="pricing__period">par an</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                        <ul class="pricing__feature-list">
                            <li class="pricing__feature">One Day Trial</li>
                            <li class="pricing__feature">Nombre de cours limite</li>
                            <li class="pricing__feature">5 cours gratuits</li>
                            <li class="pricing__feature">Pas d'aide</li>
                            <li class="pricing__feature">Pas de mentor</li>
                            <li class="pricing__feature">Pas de Ebook</li>
                             <li class="pricing__feature">Limited Registered User</li>
                         </ul>
                         <button class="pricing__action">Choisir</button>
                     </div>
                  </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="pricing__item">
                            <div class="wrap-price">
                                <!-- <div class="icon icon-store"></div> -->
                         <h3 class="pricing__title">Silver</h3>
                         <!-- <p class="pricing__sentence">Up to 5 users</p> -->
                            </div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
                                <span class="pricing__currency">XAF</span>5000
                        </span>
                        <span class="pricing__anim pricing__anim--2">
                                <span class="pricing__period">par an</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                        <ul class="pricing__feature-list">
                            <li class="pricing__feature">One Year Standard Access</li>
                            <li class="pricing__feature">Limited Courses</li>
                            <li class="pricing__feature">300+ Lessons</li>
                            <li class="pricing__feature">Random Supporter</li>
                            <li class="pricing__feature">View Only Ebook</li>
                            <li class="pricing__feature">Standard Tutorials</li>
                             <li class="pricing__feature">Unlimited Registered User</li>
                         </ul>
                         <button class="pricing__action">Choisir</button>
                     </div>
                 </div>
                    </div>
                    <div class="col-md-4 animate-box">
                  <div class="pricing__item">
                    <div class="wrap-price">
                        <!-- <div class="icon icon-home2"></div> -->
                         <h3 class="pricing__title">Gold</h3>
                         <!-- <p class="pricing__sentence">Unlimited users</p> -->
                            </div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
                                <span class="pricing__currency">XAF</span>10.0000
                        </span>
                        <span class="pricing__anim pricing__anim--2">
                                <span class="pricing__period">par an</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                        <ul class="pricing__feature-list">
                            <li class="pricing__feature">Life Time Access</li>
                            <li class="pricing__feature">Unlimited All Courses</li>
                            <li class="pricing__feature">7000+ Lessons &amp; Growing</li>
                            <li class="pricing__feature">Free Supporter</li>
                            <li class="pricing__feature">Free Ebook Downloads</li>
                            <li class="pricing__feature">Premium Tutorials</li>
                             <li class="pricing__feature">Unlimited Registered User</li>
                         </ul>
                         <button class="pricing__action">choisir</button>
                     </div>
                  </div>
               </div>
            </div>
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

    {{-- <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Instagram Gallery</span></h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(images/project-5.jpg);"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(images/project-2.jpg);"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(images/project-3.jpg);"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(images/project-4.jpg);"></a>
            </div>
        </div>
    </div> --}}
@endsection