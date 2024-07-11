<!DOCTYPE html>
<html lang="pt-BR">

<?php require('assets/includes/header.php')?>

  <body id="body">
    
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main scrollbar perfect-scrollbar" id="top">
      <nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-light navbar-theme">
        <div class="container justify-content-center">
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarStandard">
            <a class="navbar-brand" href="index.php">
              <img src="assets/img/icons/consulti_logoColored.svg" height="50" style="position: absolute; opacity: 0;" id="logoCor"/>
              <img src="assets/img/icons/consulti_logoWhite.svg" height="50"/>
            </a>
            <ul class="navbar-nav">
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link" id="navbarDropdownHome" href="index.php">Home</a>
                <!-- <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                  <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="../index.html">Dashboard</a><a class="dropdown-item" href="../home/dashboard-alt.html">Dashboard alt</a><a class="dropdown-item" href="../home/feed.html">Feed</a><a class="dropdown-item" href="../home/landing.html">Landing</a></div>
                </div> -->
              </li>
              <!-- <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownDocumentation" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownDocumentation">
                  <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item" href="../documentation/file-structure.html">File structure</a><a class="dropdown-item" href="../documentation/customization.html">Customization</a><a class="dropdown-item" href="../documentation/dark-mode.html">Dark mode</a><a class="dropdown-item" href="../documentation/fluid-layout.html">Fluid layout</a><a class="dropdown-item" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item" href="../documentation/RTL.html">RTL</a><a class="dropdown-item" href="../documentation/plugins.html">Plugins</a>
                  </div>
                </div>
              </li> -->
            </ul>
            
            <!-- <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="../index.html"><span class="fas fa-chart-pie d-none d-lg-inline-block" data-toggle="tooltip" data-placement="bottom" title="Dashboard"></span><span class="d-lg-none">Dashboard</span></a></li>
              <li class="nav-item"><a class="nav-link" href="../home/feed.html"><span class="fas fa-list-alt d-none d-lg-inline-block" data-toggle="tooltip" data-placement="bottom" title="Feed"></span><span class="d-lg-none">Feed</span></a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownLogin" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownLogin">
                  <div class="card shadow-none navbar-card-login">
                    <div class="card-body fs--1 p-4 font-weight-normal">
                      <div class="row text-left justify-content-between align-items-center mb-2">
                        <div class="col-auto">
                          <h5 class="mb-0">Log in</h5>
                        </div>
                        <div class="col-auto">
                          <p class="fs--1 text-600 mb-0">or <a href="../authentication/basic/register.html">Create an account</a></p>
                        </div>
                      </div>
                      <form>
                        <div class="form-group">
                          <input class="form-control" type="email" placeholder="Email address" />
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="password" placeholder="Password" />
                        </div>
                        <div class="row justify-content-between align-items-center">
                          <div class="col-auto">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="modal-checkbox" />
                              <label class="custom-control-label" for="modal-checkbox">Remember me</label>
                            </div>
                          </div>
                          <div class="col-auto"><a class="fs--1" href="../authentication/basic/forgot-password.html">Forgot Password?</a></div>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Log in</button>
                        </div>
                      </form>
                      <div class="w-100 position-relative mt-4">
                        <hr class="text-300" />
                        <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or log in with</div>
                      </div>
                      <div class="form-group mb-0">
                        <div class="row no-gutters">
                          <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
                          <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item"><a class="nav-link" href="#!" data-toggle="modal" data-target="#exampleModal">Register</a></li>
            </ul> -->
          </div>
        </div>
      </nav>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 overflow-hidden shadow-sm" id="banner">

        <div class="bg-holder overlay" style="background-image:url(./assets/img/generic/aboutus.jpg);background-position: center bottom;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row justify-content-center align-items-center pt-8 pt-lg-10 pb-lg-9 pb-xl-0">
            <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-center">
              <!-- <a class="btn btn-outline-info mb-4 fs--1 border-2x rounded-pill" href="#!"><span class="mr-2" role="img" aria-label="Hands">🤝</span>Seja um cliente</a> -->
              <h1 class="text-white font-weight-bold">Sobre Nós</h1>
              <!-- <p class="lead text-white opacity-75">Entre em contato conosco e seja mais um cliente parceiro</p> -->
            </div>                                  
            <!-- <div class="col-xl-7 offset-xl-1 align-self-end"><a class="img-landing-banner" href="index.html"><img class="img-fluid" src="assets/img/generic/baner.png" alt="" /></a></div> -->
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!-- <section class="py-3 bg-light shadow-sm">

        <div class="container logo-carousel-container">
          <div class="row justify-content-center align-items-center logo-carousel">
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="40" src="assets/img/logos/b&amp;w/6.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="45" src="assets/img/logos/b&amp;w/11.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="assets/img/logos/b&amp;w/2.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="assets/img/logos/b&amp;w/4.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="35" src="assets/img/logos/b&amp;w/1.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="40" src="assets/img/logos/b&amp;w/10.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="40" src="assets/img/logos/b&amp;w/12.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="assets/img/logos/b&amp;w/3.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="40" src="assets/img/logos/b&amp;w/5.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="assets/img/logos/b&amp;w/7.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="assets/img/logos/b&amp;w/8.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="35" src="assets/img/logos/b&amp;w/9.png" alt="" /></div>
          </div>
        </div>


      </section> -->
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="services">

        <div class="container">
          <div class="row justify-content-center align-items-center text-justify">
              <img class="img-fluid" id="logoConsulti" src="assets/img/generic/IconeConsultiColored.png" alt="" style="width: 17rem;">
            <div class="col-lg-7 ml-lg-5 mt-sm-3">
              <p class="lead">Fundada em 2011, atualmente com sede em Presidente Prudente/SP, seus profissionais possuem experiência há mais de 14 anos com gestão de TI. Experiência em gestão de Data Center de provedores de internet. Diversos casos de sucesso na gestão de segurança das informações, reestruturações com sucesso de Data Centers, redes e servidores. </p>
              <p class="lead">Oferecemos também soluções de SOFTWARES, customizados e desenvolvidos para o negócio de nossos clientes. Entre nossas soluções estão: BCBI (Software Inteligente para Indicadores da Empresa), BCSPOT (HotSpot para WIFI públicos, com autenticação via FACEBOOK dos usuários e PAINEL DE ADMINISTRAÇÃO das informações), BCFARM (Gestão Inteligente do seu Agronegócio), entre outras soluções customizadas. </p>
            </div>
          </div>

        </div>
        
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-4">
              <div class="row text-left justify-content-between align-items-center mb-2">
                <div class="col-auto">
                  <h5 id="modalLabel">Fale Conosco</h5>
                </div>
                <!-- <div class="col-auto">
                  <p class="fs--1 text-600 mb-0">Have an account? <a href="../authentication/basic/login.html">Login</a></p>
                </div> -->
              </div>
              <form>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Nome" />
                </div>
                <div class="form-group">
                  <input class="form-control" type="email" placeholder="Email" />
                </div>
                <div class="form-group">
                  <input class="form-control" type="tel" placeholder="Contato" />
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="5" placeholder="Mensagem"></textarea>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="modal-register-checkbox" />
                  <label class="custom-control-label" for="modal-register-checkbox">Aceito os <a href="#!">Termos </a>e <a href="politica_privacidade.html">Política de Privacidade</a></label>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Enviar</button>
                </div>
              </form>
              <div class="w-100 position-relative mt-4">
                <hr class="text-300" />
                <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">ou entre em contato por</div>
              </div>
              <div class="form-group mb-0">
                <div class="row no-gutters">
                  <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-success btn-sm btn-block mt-2" href="https://wa.me/551831990747" target="_blank"><span class="fab fa-whatsapp mr-2" data-fa-transform="grow-8"></span> Whatsapp</a></div>
                  <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="https://www.facebook.com/souconsulti/" target="_blank"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-light text-center pt-2 pt-lg-4 pb-2 pb-lg-4">
          
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="fs-2 fs-sm-4 fs-md-5">Nossa História</h1>
              <p class="lead">Veja um pouco da nossa caminhada até aqui.</p>
              <iframe class="video-sobre img-thumbnail"
              src="https://www.youtube.com/embed/DohyeSmTUt8?controls=0&modestbranding=1&rel=0&showinfo=0">
              </iframe> 
            </div>
          </div>
          <!-- <div class="row mt-6">
            <div class="col-lg-4">
              <div class="card card-span h-100">
                <div class="card-span-img"><span class="fa fa-leaf fs-4 text-info"></span></div>
                <div class="card-body pt-6 pb-4">
                  <h5 class="mb-2">Planejamento Ecológico</h5>
                  <p>Nossa abordagem sustentável visa minimizar o impacto ambiental através de práticas tecnológicas responsáveis, promovendo a eficiência energética e o uso consciente de recursos.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-6 mt-lg-0">
              <div class="card card-span h-100">
                <div class="card-span-img"><span class="fa fa-tools fs-5 text-success"></span></div>
                <div class="card-body pt-6 pb-4">
                  <h5 class="mb-2">Soluções Personalizadas</h5>
                  <p>Entendemos as necessidades únicas de cada cliente e oferecemos soluções sob medida que se alinham perfeitamente aos objetivos e desafios específicos do seu negócio.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-6 mt-lg-0">
              <div class="card card-span h-100">
                <div class="card-span-img"><span class="fa fa-users fs-6 text-primary"></span></div>
                <div class="card-body pt-6 pb-4">
                  <h5 class="mb-2">Integração da Equipe</h5>
                  <p>Fomentamos a colaboração entre nossos especialistas e sua equipe, garantindo que todas as soluções sejam implementadas de forma harmoniosa e eficaz.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-6">
            <div class="col-lg-4">
              <div class="card card-span h-100">
                <div class="card-span-img"><span class="fa fa-chart-line fs-4 text-warning"></span></div>
                <div class="card-body pt-6 pb-4">
                  <h5 class="mb-2">Inteligência de Negócios</h5>
                  <p>Utilizamos avançadas ferramentas de análise de dados para fornecer insights valiosos, ajudando sua empresa a tomar decisões informadas e estratégicas.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-6 mt-lg-0">
              <div class="card card-span h-100">
                <div class="card-span-img"><span class="fa fa-headset fs-5 text-danger"></span></div>
                <div class="card-body pt-6 pb-4">
                  <h5 class="mb-2">Atendimento Remoto</h5>
                  <p>Oferecemos suporte remoto de alta qualidade, garantindo que você tenha acesso a assistência técnica rápida e eficiente, independentemente de onde estiver.</p>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-4 mt-6 mt-lg-0">
              <div class="card card-span h-100">
                <div class="card-span-img"><span class="fab fa-gulp fs-6 text-danger"></span></div>
                <div class="card-body pt-6 pb-4">
                  <h5 class="mb-2">Gulp based workflow</h5>
                  <p>All the painful or time-consuming tasks in your development workflow such as compiling the SCSS or transpiring the JS are automated.</p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
              <div class="row justify-content-start text-justify flex-column">
                <h1 class="fs-2 fs-sm-4 fs-md-5 align-self-center">Onde estamos</h1>
                <br>
                <p class='lead'>Localizada na cidade de Presidente Prudente/SP, a ConsulTI atende a toda região. Nosso foco é o atendimento a empresas de pequeno, médio e grande porte oferecendo serviços que vão desde a gestão do parque tecnológico (redes, servidores, computadores, roteadores), até a gestão de sistemas ERP, contribuindo para o desenvolvimento da organização. Temos como meta a administração e otimização dos recursos tecnológicos da empresa com foco na redução de custos. </p>
                <p class='lead'>A ConsulTI nasceu com o objetivo de atender a demanda de uma gestão eficaz e segura dos ativos tecnológicos das empresas, oferecendo eficiência, qualidade e custo. Em tempos difíceis da economia, as empresas se veem cada vez mais preocupadas com seus custos, mas necessitam manter um alto nível de qualidade em seus serviços e produtos. Pensando nisso, nossa proposta é fornecer uma gestão eficaz e totalmente acessível para as empresas. Promovendo e contruibuindo para o desenvolvimento dos negócios.</p>
                <br>
                <div id="mapas" class="align-self-center">
                  
                </div>
              </div>
              <!-- <div class="owl-carousel owl-theme owl-theme-dark" data-options='{"margin":30,"nav":true,"autoplay":true,"autoplayHoverPause":true,"loop":true,"dots":false,"items":1}'>
                <div class="px-5 px-sm-6">
                  <p class="fs-sm-1 fs-md-2 font-italic text-dark">Um time dedicado e unido que mostra em cada projeto o que realmente deve ser feito para que o objetivo do cliente seja atingido. Impressionando com a qualidade e determinação na execução das demandas solicitadas.</p>
                  <p class="fs-0 text-600">- Rannye Rodrigues, CEO of SysDevv</p>
                  <img class="w-auto mx-auto" src="assets/img/logos/google.png" alt="" height="45" />
                </div>
                <div class="px-5 px-sm-6">
                  <p class="fs-sm-1 fs-md-2 font-italic text-dark">A ConsulTI é um time coeso e comprometido, que demonstra em cada projeto um claro entendimento do que é necessário para alcançar os objetivos dos clientes. Eles impressionam pela qualidade excepcional e pela determinação incansável na execução das demandas solicitadas, garantindo resultados que superam as expectativas.</p>
                  <p class="fs-0 text-600">- Jhonatan Calleri, Developer</p>
                  <img class="w-auto mx-auto" src="assets/img/logos/netflix.png" alt="" height="30" />
                </div>
                <div class="px-5 px-sm-6">
                  <p class="fs-sm-1 fs-md-2 font-italic text-dark">When I first saw Falcon, I was totally blown away by the care taken in the interface. It felt like something that I'd really want to use and something I could see being a true modern replacement to the current class of Bootstrap themes.</p>
                  <p class="fs-0 text-600">- Liam Martens, Designer</p><img class="w-auto mx-auto" src="assets/img/logos/paypal.png" alt="" height="45" />
                </div>
              </div> -->
        </div>

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-dark pt-8 pb-4">

        <div class="container">
          
          <div class="row justify-content-start footer-content">
            <div class="col-lg-4">
              <h5 class="text-uppercase text-white opacity-85 mb-3">Nosso Propósito</h5>
              <p class="text-600 text-justify">A ConsulTI é uma empresa que nasceu para suprir as demandas das organizações na gestão eficiente do parque tecnológico por profissionais de qualidade e com um custo acessível. Com um corpo técnico altamente capacitado e com mais de 12 anos de experiência na gestão de tecnologia e vivência em TI em diversas empresas de pequeno, médio e grande porte do Brasil, nos mais diversos seguimentos.</p>
              <div class="icon-group mt-4">
                <a class="icon-item text-secondary" href="https://www.facebook.com/souconsulti/" target="_blank"><span class="fab fa-facebook-f"></span></a>
                <a class="icon-item text-secondary" href="https://www.instagram.com/souconsulti/" target="_blank"><span class="fab fa-instagram"></span></a>
                <a class="icon-item text-secondary" href="https://br.linkedin.com/company/souconsulti" target="_blank"><span class="fab fa-linkedin-in"></span></a>
                <a class="icon-item text-secondary" href="https://wa.me/551831990747" target="_blank"><span class="fab fa-whatsapp"></span></a>
                <!-- <a class="icon-item" href="#!"><span class="fab fa-medium-m"></span></a> -->
              </div>
            </div>
            <div class="col-5 pl-lg-6 pl-xl-8">
              <div class="mt-5 mt-lg-0">
                <h5 class="text-uppercase text-white opacity-85 mb-3">Empresa</h5>
                <ul class="list-unstyled">
                  <!-- <li class="mb-1"><a class="text-600" href="#!">Sobre</a></li> -->
                  <li class="mb-1"><a class="text-600" href="#!" data-toggle="modal" data-target="#exampleModal">Contato</a></li>
                  <li class="mb-1"><a class="text-600" href="https://br.linkedin.com/company/souconsulti" target="_blank">Trabalhe Conosco</a></li>
                  <!-- <li class="mb-1"><a class="text-600" href="#!">Termos</a></li> -->
                  <li class="mb-1"><a class="text-600" href="politica_privacidade.php" target="_blank">Política de Privacidade</a></li>
                </ul>
              </div>
                <!-- <div class="col-6 col-md-3">
                  <h5 class="text-uppercase text-white opacity-85 mb-3">Product</h5>
                  <ul class="list-unstyled">
                    <li class="mb-1"><a class="text-600" href="#!">Features</a></li>
                    <li class="mb-1"><a class="text-600" href="#!">Roadmap</a></li>
                    <li class="mb-1"><a class="text-600" href="#!">Changelog</a></li>
                    <li class="mb-1"><a class="text-600" href="#!">Pricing</a></li>
                    <li class="mb-1"><a class="text-600" href="#!">Docs</a></li>
                    <li class="mb-1"><a class="text-600" href="#!">System Status</a></li>
                    <li class="mb-1"><a class="text-600" href="#!">Agencies</a></li>
                    <li class="mb-1"><a class="text-600" href="#!">Enterprise</a></li>
                  </ul>
                </div> -->
                <!-- <div class="col-6 col-md3">
                  <h5 class="text-uppercase text-white opacity-85 mb-3">ConsulTI News</h5>
                  <ul class="list-unstyled">
                    <li>
                      <h5 class="fs-0 mb-0"><a class="text-600" href="#!" data-toggle="modal" data-target="#noticias">Inteligência Artificial será essencial para garantir a segurança da informação</a></h5>
                      <p class="text-600 opacity-50">Out 13 &bull; 4min leitura </p>
                    </li>
                    <li>
                      <h5 class="fs-0 mb-0"><a class="text-600" href="#!">January '19 New Features Newsletter</a></h5>
                      <p class="text-600 opacity-50">Jan 5 &bull; 3min read &starf;</p>
                    </li>
                    <li>
                      <h5 class="fs-0 mb-0"><a class="text-600" href="#!">Merry Christmas From the Falcon Team.</a></h5>
                      <p class="text-600 opacity-50">Dec 25 &bull; 2min read</p>
                    </li>
                    <li>
                      <h5 class="fs-0 mb-0"><a class="text-600" href="#!">The New Falcon Theme</a></h5>
                      <p class="text-600 opacity-50">Dec 23 &bull; 10min read </p>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

        <!-- <div class="bg-holder overlay" style="background-image:url(./assets/img/generic/4.jpg);background-position: center top;">
        </div>


        <div class="container">
          <div class="row justify-content-center text-center" id="counterS">

            <div class="col-lg-3">
              <p data-counter="122" class="fs-3 fs-sm-6 mb-0 text-white"><span>122</span></p>
              <p class="fs-1 fs-sm-1 text-white">Clientes ativos</p>
            </div>

            <div class="col-lg-3">
              <p data-counter="80" class="fs-3 fs-sm-6 mb-0 text-white"><span>80</span></p>
              <p class="fs-1 fs-sm-1 text-white">Backup em Nuvem (TB)</p>
            </div>

            <div class="col-lg-3">
              <p data-counter="32" class="fs-3 fs-sm-6 mb-0 text-white"><span>32</span></p>
              <p class="fs-1 fs-sm-1 text-white">Cidades de atuação</p>
            </div>

            <div class="col-lg-3">
              <p data-counter="89500" class="fs-3 fs-sm-6 mb-0 text-white"><span>89500</span></p>
              <p class="fs-1 fs-sm-1 text-white">Chamados Atendidos</p>
            </div>

          </div>
        </div> -->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-dark-2">

        <div>
          <hr class="my-0 border-600 opacity-25" />
          <div class="container py-3">
            <div class="row align-items-end justify-content-end fs--1">
              <div class="position-absolute btn-back-to-top bg-dark-2"><a class="text-600" href="#top" data-fancyscroll="data-fancyscroll"><span class="fas fa-chevron-up" data-fa-transform="rotate-45"></span></a></div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600 opacity-85"></span><br class="d-sm-none" /> 2014 - <a id="dataAno"></a>  &copy; <a class="text-white opacity-85" href="index.html">ConsulTi</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <!-- <p class="mb-0 text-600 opacity-85">v2.6.0</p> -->
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <?php require('assets/includes/footer.php')?>
    <script>
      n = new Date();
      y = n.getFullYear();

      document.getElementById("dataAno").innerHTML = y;
    </script>

  </body>

</html>