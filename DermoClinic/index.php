<?php
session_start();
require_once 'config/db_connection.php';
require_once 'config/jwt.php';
require_once 'models/user.php';
require_once "functions/session_functions.php";
onSessionRedirect();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>DermoClinic</title>
</head>
<!--N-->

<body>
    <!--Navbar-->
    <nav class="navbar">
        <!--Logo-->
        <a class="navbar-brand" href="#">
            <img src="assets/images/Logo.svg" width="170" height="56,6" alt="">
        </a>
        <ul class="nav-links">
            <li>
                <a href="">Inicio</a>
            </li>
            <li>
                <a href="">A Clínica</a>
            </li>
            <li>
                <a href="">Diagnostico e Tratamento</a>
            </li>
            <li>
                <a href="">Marcações</a>
            </li>
            <li>
                <a href="">Contactos</a>
            </li>
            <li>
                <a href="login/login.php">Area Pessoal <i class="fa-solid fa-circle-user"></i></a>
            </li>
        </ul>
        <!--Burger 2-->
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div class="banner-image">
        <div class="banner-text">
            <h1>DermoClinic</h1>
        </div>
    </div>
    <main id="main">
        <section id="about" class="about pt-5">
            <div class="page-section">
                <div class="text-center pt-5">
                    <h2 class="section-heading text-uppercase">A Clínica</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://c.pxhere.com/photos/3b/17/waiting_room_doctor_luggage-769856.jpg!d" class="d-block w-100" srcset="https://c.pxhere.com/photos/3b/17/waiting_room_doctor_luggage-769856.jpg!d" alt="home, property, living room, room, apartment, luggage, interior design, design, waiting room, estate, doctor, condominium, real estate, Free Images In PxHere">
                    </div>
                    <div class="carousel-item">
                        <img src="https://c.pxhere.com/photos/5c/63/doctor_medical_medicine_health_stetoscope_healthcare_stethoscope_healthy-917219.jpg!d" class="d-block w-100" srcset="https://c.pxhere.com/photos/5c/63/doctor_medical_medicine_health_stetoscope_healthcare_stethoscope_healthy-917219.jpg!d" alt="pessoa, fêmea, Cuidado, profissão, remédio, saudável, saúde, dentista, dental, mascarar, óculos, hospital, clínica, enfermeira, médico, médico, médico, tratamento, paciente, cuidados de saúde, doença, diagnóstico, estetoscópio, sentido, clínico, cuidados de saúde, Médico generalista, diagnóstico, Stetoscope, Banco de imagens In PxHere">
                    </div>
                    <div class="carousel-item">
                        <img src="https://c.pxhere.com/images/89/e1/f1a5c6ac526cef8efc9c1aaed949-1446749.jpg!d" class="d-block w-100" srcset="https://c.pxhere.com/images/89/e1/f1a5c6ac526cef8efc9c1aaed949-1446749.jpg!d" alt="caucasiano, casaco, médico, Empregados, fêmea, saúde, cuidados de saúde, hispânico, hospital, Dentro de casa, Estagiário, Laboratório, olhando, masculino, homem, médico, remédio, Meados, enfermeira, practitioner, practitioners, Esfrega, serviço, especialista, funcionários, equipe, uniforme, mulher, Trabalhadores, jovem, tecnologia, Tablet digital, exibição, comunicação, conversação, cuidados de saúde, o negócio, aluna, cliente, produtos, colaboração, Banco de imagens In PxHere">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">A nossa equipa</h2>
                    <h3 class="section-subheading text-muted mb-4">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row mt-3">
                    <div class="col-xl d-flex justify-content-center mt-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle mb-2" src="assets/images/medico1.webp" alt="..." style="width: 220px; height: 220px;">
                            <h4>Dr.Botelho Pinto</h4>
                            <p class="text-muted">Dermatologista</p>
                        </div>
                    </div>
                    <div class="col-xl d-flex justify-content-center mt-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle mb-2" src="assets/images/medico2.jpg" alt="..." style="width: 220px; height: 220px;">
                            <h4>Dr.Armando Pinto</h4>
                            <p class="text-muted">Venereologia</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 mx-auto text-center">
                            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut
                                unde.</p>
                        </div>
                    </div>
                </div>
        </section>
        <section class="tratamentos">
            <div class="album py-5">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Diagnostico e Tratamento</h2>
                        <h3 class="section-subheading text-muted mb-4">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 250px; width: 100%; display: block;" src="https://c.pxhere.com/photos/6c/0f/sunburn_skin_red_flushed_dermatology_burned_skin_irritation_heat-1287389.jpg!d" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text">Dermatologia Geral</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 250px; width: 100%; display: block;" src="https://c.pxhere.com/photos/f0/af/surgery_surgeon_operation_portrait_face_head_medical_health-1080573.jpg!d" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text">Dermatoscopia Digital</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 250px; width: 100%; display: block;" src="https://c.pxhere.com/photos/a8/e6/plant_grass_blossom_summer_season_growth_ecology_botany-1077939.jpg!d" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text">Alergologia Cutanea</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="marcacao">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-3 p-4 text-white" style="background-color: teal;">
                        <h3 class="mb-4">Casos Urgentes</h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <span class="phone-number">22 834 0500</span>
                    </div>
                    <div class="col-md-3 color-2 p-4">
                        <h3 class="mb-4">Horarios</h3>
                        <p class="d-flex w-100">
                            <span>Segunda - Sexta</span>
                            <span>8:00 - 19:00</span>
                        </p>
                        <p class="d-flex w-100">
                            <span>Sabado</span>
                            <span>10:00 - 17:00</span>
                        </p>
                        <p class=" d-flex w-100">
                            <span>Domingo</span>
                            <span>10:00 - 16:00</span>
                        </p>
                    </div>
                    <div class="col-md-6 color-3 p-4">
                        <h3 class="mb-2">Visite-nos</h3>
                        <form action="#" class="appointment-form">
                            <div class="row">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar. Because there were thousands of
                                    bad Commas, wild Question Marks and devious Semikoli</p>
                                <ul class="mb-5" style="list-style:none;">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Consectetur adipisicing elit</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Adipisci repellat accusamus</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Tempore reprehenderit vitae</li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white pt-5 pb-4 ">
        <div class="container  text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto p-4">
                    <h6 class="p-4">Sobre Nos</h6>
                    <hr>
                    <p>A Clínica de Dermatologia DermoClinic dedica-se inteiramente ao diagnóstico e tratamento das
                        doenças da pele, cabelo e unhas, dispondo de um corpo clínico que trabalha e se dedica desde
                        2022</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto p-4">
                    <h6 class="p-4">Especialidades</h6>
                    <hr>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Dermatologia</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Venereologia</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-5 col-xl-3 mx-auto p-4">
                    <h6 class="p-4">Links Uteis</h6>
                    <hr>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Horarios</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Termos e Condicoes</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-5 col-xl-3 mx-auto p-4">
                    <h6 class="p-4">Contactos</h6>
                    <hr>
                    <p>
                        <i class="fas fa-home mr-3"></i> R. Dr. António Bernardino de Almeida 431, 4200-072 Porto
                    </p>
                    <p><i class="fas fa-phone mr-3"></i> 22 834 0500 +351 22 83 21 159
                    </p>
                    <p><i class="fas fa-envelope mr-3"></i> geral@dermoClinic.pt
                    </p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="footer-copyright text-md-left font-weight-light ">
                    <p>Copyright ©2022 All rights reserved by: Grupo 4 Turma B</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>