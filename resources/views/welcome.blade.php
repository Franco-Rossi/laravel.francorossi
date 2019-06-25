@extends('templates.home')

@section('title', 'Franco Rossi')

@section('content')


    <div class="container rounded p-5 text-center" id="personal">
        <span class="position-absolute navTrigger"><!-- hidden trigger to apply 'stuck' styles --></span>
        <i class="fas fa-code display-4 font-weight-bold mt-5 text-primary"></i>
        <h1 class="display-4 text-dark mt-2 font-weight-bold">Full-Stack Web Developer</h1><br>
        <p class="lead text-dark">Programador Web Full-Stack, con muchas ganas de escribir codigo.</p>
        <img src="{{asset(url('img/pic.png'))}}" alt="" class="mainPhoto rounded-circle shadow-lg m-5">
        <hr class="my-4 text-dark">
        <p class="text-dark">Desarrollando para la web moderna.</p>
        <div class="social">
            <a href="#" class="fab fa-linkedin-in shadow-sm mx-3"></a>
            <a href="#" class="fab fa-twitter shadow-sm mx-3"></a>
            <a href="#" class="fab fa-github shadow-sm mx-3"></a>
        </div>
    </div>

    </div>



    <div class="hero">
        <img src="{{asset(url('img/hero.png'))}}" class="img-fluid" alt="">
    </div>


    <div class="container-fluid text-center bg-primary text-white d-flex" id="about" style="align-items: center; ">
        <div>
            <h1 class="pt-5 font-weight-bold mb-5">Hola! Soy Franco.</h1>
            <p class="col-sm-12 col-xl-8 subtitle mx-auto mt-5 mb-5">Desde chico me gustó la logica y las computadoras, eso me inicio en el mundo de la programación. Me considero una persona autodidacta, sociable y responsable, con un perfil proactivo. Soy confidente, naturalmente curioso, y trabajo constantemente para mejorar mis fallas de uno en uno.</p>
            <img src="{{asset(url('img/vect1.svg'))}}" class="img-fluid mt-5" alt="" data-aos="zoom-in" style="max-height: 400px; margin-bottom: 8rem;">
        </div>
    </div>

    <div class="container text-center" id="abilities" style="margin-top: -6rem;">
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
                    <p class="card-text subText">Universidad Tecnolofica Nacional (UTN) - Buenos Aires</p>
                    <h5 class="card-text mt-4 text-primary font-weight-bold mb-0">Fundamentos de la Programacion</h5>
                    <p class="card-text subText">Universidad Tecnolofica Nacional (UTN) - Buenos Aires</p>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <hr class="my-4 text-dark mt-5">
    <div class="container text-center mb-5">
        <span class="position-absolute projectsTrigger"><!-- hidden trigger to apply 'stuck' styles --></span>
        <h1 class="pt-5 font-weight-bold text-dark mb-5">Mis ultimos projectos</h1>
        <p class="col-sm-12 col-xl-8 subtitle mx-auto mt-5 mb-5">Aqui estan algunos de mis trabajos mas recientes.</p>

        <div class="row">
            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img " src="https://www.elintransigente.com/u/fotografias/fotosnoticias/2018/9/6/473469.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title d-none">Card title</h5>
                        <p class="card-text d-none">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img" src="https://www.elintransigente.com/u/fotografias/fotosnoticias/2018/9/6/473469.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title d-none">Card title</h5>
                        <p class="card-text d-none">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img" src="https://www.elintransigente.com/u/fotografias/fotosnoticias/2018/9/6/473469.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title d-none">Card title</h5>
                        <p class="card-text d-none">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img" src="https://www.elintransigente.com/u/fotografias/fotosnoticias/2018/9/6/473469.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title d-none">Card title</h5>
                        <p class="card-text d-none">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img" src="https://www.elintransigente.com/u/fotografias/fotosnoticias/2018/9/6/473469.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title d-none">Card title</h5>
                        <p class="card-text d-none">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 my-3">
                <div class="card bg-dark text-white shadow-lg" data-aos="zoom-in-up">
                    <img class="card-img" src="https://www.elintransigente.com/u/fotografias/fotosnoticias/2018/9/6/473469.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title d-none">Card title</h5>
                        <p class="card-text d-none">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center bg-primary text-white" id="contact" style="align-items: center; ">
        <div>
            <h1 class="pt-5 font-weight-bold mb-5">Contactame</h1>
            <p class="col-sm-12 col-xl-8 subtitle mx-auto mt-5 mb-5">¿Queres que forme parte de tu projecto?<br>¿Tenes una idea y queres hacerla realidad?<br>No dudes en contactarme!</p>
        </div>
        <div>
            <form class="col-sm-12 col-xl-8 mx-auto">
                <div class="form-group" data-aos="fade-left" data-aos-duration="1000">
                    <input type="text" class="form-control shadow-lg" id="formGroupExampleInput" placeholder="Nombre">
                </div>
                <div class="form-group" data-aos="fade-left" data-aos-duration="1000">
                    <input type="email" class="form-control shadow-lg" id="formGroupExampleInput2" placeholder="Email">
                </div>
                <div class="form-group" data-aos="fade-left" data-aos-duration="1000">
                    <textarea class="form-control shadow-lg" id="exampleFormControlTextarea1" rows="7" placeholder="Ingrese su mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-lg border rounded-pill shadow-lg font-weight-bold" id="submit">Enviar</button>
            </form>
            <img src="{{asset(url('img/vect2.svg'))}}" class="img-fluid mt-5" alt="" style="max-height: 400px; margin-bottom: 8rem;">
        </div>
    </div>

@endsection