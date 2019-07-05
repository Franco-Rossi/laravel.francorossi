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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#about">Sobre mi</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#abilities">Habilidades</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#projects">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill border" id="contactBtn" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>


    <div class="container rounded mb-5 text-center" id="personal">
        <span class="position-absolute navTrigger"><!-- hidden trigger to apply 'stuck' styles --></span>
        <i class="fas fa-code display-4 font-weight-bold text-primary"></i>
        <h1 class="display-4 text-dark mt-2 font-weight-bold">Full-Stack Web Developer</h1><br>
        <p class="lead text-dark">Con muchas ganas de escribir codigo.</p>
        <br>
        <a href="{{asset(url('resumesp.pdf'))}}" class="rounded shadow-sm" id="resume" target="_BLANK">Descargar Curriculum</a>
        <br>
        <img src="{{asset(url('img/pic.png'))}}" alt="" class="mainPhoto rounded-circle shadow-lg my-4">
        <hr class="mt-5 text-dark">
        <p class="text-dark">Desarrollando para la web moderna.</p>
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
            <h1 class="pt-5 font-weight-bold mb-5">Hola! Soy Franco.</h1>
            <p class="col-sm-12 col-xl-8 subtitle mx-auto mt-5 mb-5">Desde chico me gustó la logica y las computadoras, eso me inicio en el mundo de la programación. Me considero una persona autodidacta, sociable y responsable, con un perfil proactivo. Soy confidente, naturalmente curioso, y trabajo constantemente para mejorar mis fallas de uno en uno.</p>
            <img src="{{asset(url('img/vect1.svg'))}}" class="img-fluid mt-5" alt="" data-aos="zoom-in" style="max-height: 400px; margin-bottom: 8rem;">
        </div>
    </div>

    <span class="mt-3" id="abilities"></span>
    <div class="container text-center" id="" style="margin-top: -6rem;">
        <div class="card-group shadow-lg">
            <div class="card">
                <div class="card-body p-5">
                    <i class="fas fa-laptop-code display-4 font-weight-bold text-primary mt-5"></i>
                    <h3 class="card-title font-weight-bold mt-5">Desarrollo</h3>
                    <p class="card-subtitle mt-5">Me gusta programar las cosas desde cero, y disfruto de darle vida a las ideas en el navegador.</p>
                    <h5 class="card-text mt-5 text-primary font-weight-bold">Lenguajes que manejo:</h5>
                    <p class="card-text mt-3">HTML, CSS, JavaScript, PHP</p>
                    <h5 class="card-text mt-5 text-primary font-weight-bold">Herramientas:</h5>
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
                    <h3 class="card-title font-weight-bold mt-5">Conocimiento</h3>
                    <p class="card-subtitle mt-5">Apasionado por aprender, mi principal objetivo es adquirir conocimientos nuevos.</p>
                    <h5 class="card-text mt-5 text-primary font-weight-bold mb-0">Español</h5>
                    <p class="subText">Nativo</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Ingles</h5>
                    <p class="card-text subText">Avanzado</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Laravel 5.7</h5>
                    <p class="card-text subText">Laracast.com</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Laravel 5</h5>
                    <p class="card-text subText">Antonio Javier Gallego Sánchez - Computer Science Engineer</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">HTML, CSS, JavaScript & PHP</h5>
                    <p class="card-text subText">Juan Pablo de la Torre - Freelance Web Developer</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Programador Web Inicial</h5>
                    <p class="card-text subText">Universidad Tecnologica Nacional (UTN) - Buenos Aires</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Fundamentos de la Programacion</h5>
                    <p class="card-text subText">Universidad Tecnologica Nacional (UTN) - Buenos Aires</p>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <hr class="mb-3 text-dark mt-5" >
    <div class="container text-center mb-5 pt-4" id="projects">
        <span class="position-absolute projectsTrigger"><!-- hidden trigger to apply 'stuck' styles --></span>
        <h1 class="pt-5 font-weight-bold text-dark mb-5">Mis ultimos proyectos</h1>
        <p class="col-sm-12 col-xl-8 subtitle mx-auto mt-5 mb-5">Aqui estan algunos de mis trabajos mas recientes.</p>

        <div class="row justify-content-around">
            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img" src="{{asset(url('img/projects/organizapp.png'))}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div class="project-info">
                            <h5 class="card-title">OrganizApp</h5>
                            <p class="card-text text-muted">Trabajo en progreso</p>
                            <p class="">Organizador personal con grupos, mensajeria instantanea y tranferencia de archivos.</p>
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
                            <p class="card-text text-muted">Trabajo en progreso</p>
                            <p class="">Red social orientada al trabajo para diseñadores y fotografos.</p>
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
                            <p class="">Pagina web para restaurante y almacén. Formulario de contacto. Panel de administración con ingreso a base de datos.</p>
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
                                <p class="">Prototipo de pagina web para cerveceria. Contacto con envio de mail. Panel de administración con ingreso a base de datos.</p>
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
            <h1 class="pt-5 font-weight-bold mb-5">Contactame</h1>
            <p class="col-sm-12 col-xl-8 subtitle mx-auto mt-5 mb-5">¿Queres que forme parte de tu projecto?<br>¿Tenes una idea y queres hacerla realidad?<br>No dudes en contactarme!</p>
        </div>
        <div>
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