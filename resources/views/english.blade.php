@extends('templates.home')

@section('title', 'Franco Rossi')

@section('content')

    {{------------------ NavBar ------------------}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
            <a class="navbar-brand text-primary" href="#">Franco Rossi</a>
        
            <div class="ml-5 language-container">
                <a href="/"><img src="{{asset(url('img/esp.png'))}}" alt="Español" class="language rounded-circle shadow-sm"></a>
                <a href="/en"><img src="{{asset(url('img/eng.png'))}}" alt="English" class="language ml-2 rounded-circle shadow-sm"></a>
            </div>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#abilities">Abilities</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill border" id="contactBtn" href="#contact">Contact me</a>
                    </li>
                </ul>
            </div>
        </nav>



    <div class="container rounded mb-5 text-center" id="personal">
        <span class="position-absolute navTrigger"><!-- hidden trigger to apply 'stuck' styles --></span>
        <i class="fas fa-code display-4 font-weight-bold text-primary"></i>
        <h1 class="display-4 text-dark mt-2 font-weight-bold">Full-Stack Web Developer</h1><br>
        <p class="lead text-dark">With much desire to write code.</p>
        <br>
        <a href="{{asset(url('resumeen.pdf'))}}" class="rounded shadow-sm" id="resume" target="_BLANK">Download Resume</a>
        <br>
        <img src="{{asset(url('img/pic.png'))}}" alt="" class="mainPhoto rounded-circle shadow-lg my-4">
        <hr class="mt-5 text-dark">
        <p class="text-dark">Developing for the modern web.</p>
        <div class="social">
            <a href="https://www.linkedin.com/in/franco-rossi-7bbb56162/" class="fab fa-linkedin-in shadow-sm mx-3" target="_BLANK"></a>
            <a href="https://github.com/Franco-Rossi" class="fab fa-github shadow-sm mx-3" target="_BLANK"></a>
        </div>
    </div>

    </div>



    <div class="hero container">
        <img src="{{asset(url('img/hero.png'))}}" class="img-fluid" alt="">
    </div>


    <div class="container-fluid text-center bg-primary text-white d-flex" id="about" style="align-items: center; ">
        <div class="mt-3">
            <h1 class="pt-5 font-weight-bold mb-5">Hi! I'm Franco.</h1>
            <p class="col-sm-12 col-xl-8 subtitle mx-auto mt-5 mb-5">Since I was a kid I liked logic and computers, which started me in the world of programming. I consider myself a self-taught, sociable and responsible person, with a proactive profile. I'm comfident, naturally curious, and I'm constantly working to improve my mistakes one by one.</p>
            <img src="{{asset(url('img/vect1.svg'))}}" class="img-fluid mt-5" alt="" data-aos="zoom-in" style="max-height: 400px; margin-bottom: 8rem;">
        </div>
    </div>

    <span class="mt-3" id="abilities"></span>
    <div class="container text-center" id="" style="margin-top: -6rem;">
        <div class="card-group shadow-lg">
            <div class="card">
                <div class="card-body p-5">
                    <i class="fas fa-laptop-code display-4 font-weight-bold text-primary mt-5"></i>
                    <h3 class="card-title font-weight-bold mt-5">Development</h3>
                    <p class="card-subtitle mt-5">I like to program things from scratch, and I enjoy giving life to ideas in the browser.</p>
                    <h5 class="card-text mt-5 text-primary font-weight-bold">Languages I use:</h5>
                    <p class="card-text mt-3">HTML, CSS, JavaScript, PHP</p>
                    <h5 class="card-text mt-5 text-primary font-weight-bold">Tools:</h5>
                    <ul class="list-unstyled">
                        <li>Laravel</li>
                        <li>Bootstrap</li>
                        <li>Bulma</li>
                        <li>MySql</li>
                        <li>Git</li>
                        <li>Terminal</li>
                        <li>PhpStorm</li>
                        <li>Sublime Text</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-5">
                    <i class="fas fa-university display-4 font-weight-bold text-primary mt-5"></i>
                    <h3 class="card-title font-weight-bold mt-5">Knowledge</h3>
                    <p class="card-subtitle mt-5">Passionate about learning, my main objective is to acquire new knowledge.</p>
                    <h5 class="card-text mt-5 text-primary font-weight-bold mb-0">Spanish</h5>
                    <p class="subText">Native</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">English</h5>
                    <p class="card-text subText">Advanced</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Laravel 5.7</h5>
                    <p class="card-text subText">Laracast.com</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Laravel 5</h5>
                    <p class="card-text subText">Antonio Javier Gallego Sánchez - Computer Science Engineer</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">HTML, CSS, JavaScript & PHP</h5>
                    <p class="card-text subText">Juan Pablo de la Torre - Freelance Web Developer</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Web Developer</h5>
                    <p class="card-text subText">Universidad Tecnologica Nacional (UTN) - Buenos Aires</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Basics of Programming</h5>
                    <p class="card-text subText">Universidad Tecnologica Nacional (UTN) - Buenos Aires</p>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <hr class="mb-3 text-dark mt-5" >
    <div class="container text-center mb-5 pt-4" id="projects">
        <span class="position-absolute projectsTrigger"><!-- hidden trigger to apply 'stuck' styles --></span>
        <h1 class="pt-5 font-weight-bold text-dark mb-5">My latest projects</h1>
        <p class="col-sm-12 col-xl-8 subtitle mx-auto mt-5 mb-5">Here are some of my most recent works.</p>

        <div class="row justify-content-around">
            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img" src="{{asset(url('img/projects/organizapp.png'))}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div class="project-info">
                            <h5 class="card-title">OrganizApp</h5>
                            <p class="card-text text-muted">Work in progress</p>
                            <p class="">Personal organizer with groups, live chat and file transfer.</p>
                            <a href="https://github.com/Franco-Rossi/taskapp" class="fab fa-github shadow-sm mx-3" target="_BLANK"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img" src="{{asset(url('img/projects/photofolio.png'))}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div class="project-info">
                            <h5 class="card-title">PhotoFolio</h5>
                            <p class="card-text text-muted">Work in progress</p>
                            <p class="">Employment-oriented social network for photographers and designers.</p>
                            <a href="https://github.com/Franco-Rossi/photofolio" class="fab fa-github shadow-sm mx-3" target="_BLANK"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img" src="{{asset(url('img/projects/comidasaludable.png'))}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div class="project-info">
                            <h5 class="card-title">Casa de Comida Saludable</h5>
                            <p class="">Website for restaurant and warehouse. Contact form. Administration panel with database control.</p>
                            <a href="https://github.com/Franco-Rossi/comidasaludable" class="fab fa-github shadow-sm mx-3" target="_BLANK"></a>
                            <a href="#" class="fas fa-link shadow-sm mx-3" target="_BLANK"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 my-3">
                    <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                        <img class="card-img" src="{{asset(url('img/projects/hormiganegra.png'))}}" alt="Card image">
                        <div class="card-img-overlay">
                            <div class="project-info">
                                <h5 class="card-title">Cerveceria Hormiga Negra</h5>
                                <p class="">Prototype of website for brewery. Contact form. Administration panel with database control.</p>
                                <a href="https://github.com/Franco-Rossi/hormiganegra" class="fab fa-github shadow-sm mx-3" target="_BLANK"></a>
                                <a href="https://rossifrancotest.000webhostapp.com/" class="fas fa-link shadow-sm mx-3" target="_BLANK"></a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>

    <div class="container-fluid text-center bg-primary text-white pt-3" id="contact" style="align-items: center; ">
        <div>
            <h1 class="pt-5 font-weight-bold mb-5">Contact me</h1>
            <p class="col-sm-12 col-xl-8 subtitle mx-auto mt-5 mb-5">Do you want me to be part of your project?<br>Do you have an idea and want to make it happen?<br>Do not hesitate to contact me!</p>
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div>
            <form class="col-sm-12 col-xl-8 mx-auto" method="POST" action="/contact-us">
                {{  csrf_field() }}
                <div class="form-group" data-aos="fade-left" data-aos-duration="1000">
                    <input type="text" class="form-control shadow-lg" name="name" placeholder="Name" required>
                </div>
                <div class="form-group" data-aos="fade-left" data-aos-duration="1000">
                    <input type="email" class="form-control shadow-lg" name="email" placeholder="Email" required>
                </div>
                <div class="form-group" data-aos="fade-left" data-aos-duration="1000">
                    <textarea class="form-control shadow-lg" name="message" rows="7" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-lg border rounded-pill shadow-lg font-weight-bold" id="submit">Send</button>
            </form>
            <img src="{{asset(url('img/vect2.svg'))}}" class="img-fluid mt-5" alt="" style="max-height: 400px; margin-bottom: 8rem;">
        </div>
    </div>

@endsection