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
            <a class="navbar-brand" href="#top">
              <img src="./assets/img/icons/consulti_logoColored.svg" height="50" style="position: absolute; opacity: 0;" id="logoCor"/>
              <img src="./assets/img/icons/consulti_logoWhite.svg" height="50"/>
            </a>
            <ul class="navbar-nav">
              <!-- <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                  <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="../index.html">Dashboard</a><a class="dropdown-item" href="../home/dashboard-alt.html">Dashboard alt</a><a class="dropdown-item" href="../home/feed.html">Feed</a><a class="dropdown-item" href="../home/landing.html">Landing</a></div>
                </div>
              </li> -->              
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#services" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-fancyscroll="data-fancyscroll">Serviços</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownPages">
                  <div class="card navbar-card-pages shadow-none">
                    <div class="card-body scrollbar perfect-scrollbar max-h-dropdown">
                      <div class="row">
                        <div class="col-6 col-md-auto">
                          <div class="nav flex-column">
                            <a class="nav-link py-1 text-700 font-weight-medium" href="#admserver" data-fancyscroll="data-fancyscroll">Administração de Servidores</a>
                            <a class="nav-link py-1 text-700 font-weight-medium" href="#admnet" data-fancyscroll="data-fancyscroll">Administração de Redes</a>
                            <a class="nav-link py-1 text-700 font-weight-medium" href="#seginfo" data-fancyscroll="data-fancyscroll">Segurança da Informação</a>
                            <a class="nav-link py-1 text-700 font-weight-medium" href="#cldbckp" data-fancyscroll="data-fancyscroll">Backups em Nuvem</a>
                            <a class="nav-link py-1 text-700 font-weight-medium" href="#corpwifi" data-fancyscroll="data-fancyscroll">WiFi Corporativo e Eventos</a>
                            <a class="nav-link py-1 text-700 font-weight-medium" href="#cntrlwebnav" data-fancyscroll="data-fancyscroll">Controle de Navegação da Internet</a>
                            <a class="nav-link py-1 text-700 font-weight-medium" href="#optdgt" data-fancyscroll="data-fancyscroll">Fibra Ótica e Rádio Digital</a>
                            <a class="nav-link py-1 text-700 font-weight-medium" href="#telconsul" data-fancyscroll="data-fancyscroll">Consultoria em Telefonia Fixa e Móvel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link" id="navbarDropdownDocumentation" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sobre</a>
              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link" id="navbarDropdownComponents" href="#news" role="button" data-fancyscroll="data-fancyscroll">News</a></li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link" id="navbarDropdownComponents" href="#!" data-toggle="modal" data-target="#exampleModal">Contato</a></li>
              <!-- <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownAuthentication" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Authentication</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownAuthentication">
                  <div class="card shadow-none navbar-card-auth">
                    <div class="card-body scrollbar perfect-scrollbar max-h-dropdown"><img class="position-absolute b-0 r-0" src="./assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav-link py-1 text-900 font-weight-bold">Basic</div>
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <div class="nav-link py-1 text-900 font-weight-bold">Split</div><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Card</div><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Special</div><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/wizard.html">Wizard</a><a class="nav-link py-1" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a>
                          </div>
                        </div>
                      </div>
                    </div>
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
      <section class="py-0 overflow-hidden" id="banner">

        <div class="bg-holder overlay" style="background-image:url(./assets/img/generic/5.jpg);background-position: center bottom;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row justify-content-center align-items-center pt-8 pt-lg-10 pb-lg-9 pb-xl-0">
            <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-left">
              <a class="btn btn-outline-info mb-4 fs--1 border-2x rounded-pill" href="#!" data-toggle="modal" data-target="#exampleModal"><span class="mr-2" role="img" aria-label="Hands">🤝</span>Seja um cliente</a>
              <h1 class="text-white font-weight-light"></h1>
              <p class="lead text-white opacity-75">Entre em contato conosco e seja mais um cliente parceiro</p>
            </div>                                  
            <div class="col-xl-7 offset-xl-1 align-self-end"><a class="img-landing-banner" href="index.html"><img class="img-fluid" src="./assets/img/generic/baner.png" alt="" /></a></div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-1 bg-light shadow-sm">

        <div class="container logo-carousel-container">
          <div class="row justify-content-center align-items-center logo-carousel">
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/6.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/11.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/2.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/4.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/1.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/10.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/12.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/3.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/5.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/7.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/8.png" alt="" /></div>
            <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="./assets/img/logos/b&amp;w/9.png" alt="" /></div>
          </div>
        </div>


      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="services">

        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
              <h1 class="fs-2 fs-sm-4 fs-md-5">Nossos Serviços</h1>
              <p class="lead">Descubra como a ConsulTI pode transformar sua infraestrutura de TI com soluções inovadoras e personalizadas.</p>
            </div>
          </div>

          <!-- Administração de Servidores -->
          <div class="row align-items-center justify-content-center mt-8" id="admserver">
            <div class="col-md col-lg-5 col-xl-4 pl-lg-6">
              <img class="img-fluid px-6 px-md-0" src="./assets/img/illustrations/serverimg.svg" style="width: 20rem;" alt="Adminsitração de Servidores" />
            </div>
            <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
              <h5 class="text-danger"><span class="fa-solid fa-server mr-2"></span>ADMINISTRAÇÃO DE SERVIDORES</h5>
              <h3>Gerenciamento completo de servidores</h3>
              <p>Garantimos desempenho, segurança e disponibilidade para sua infraestrutura de servidores.</p>
              <!-- <a 
                class="btn btn-outline-danger border-2x rounded-pill btn-lg fs-0 py-2" 
                href="https://suporte.consulti.net.br/" 
                target="_blank"
              >Acessar o portal<span class="fas fa-play" data-fa-transform="shrink-6 down-1 right-5"></span></a> -->
            </div>
          </div>
          <!-- ==== -->

          <!-- Administração de Redes -->
          <div class="row align-items-center justify-content-center mt-7" id="admnet">
            <div class="col-md col-lg-5 col-xl-4 pr-lg-6 order-md-2">
              <img class="img-fluid px-6 px-md-0" src="./assets/img/illustrations/networkimg.svg" style="width: 20rem;" alt="Administração de Redes" />
            </div>
            <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
              <h5 class="text-info"> <span class="fa-solid fa-sitemap mr-2"></span>ADMINISTRAÇÃO DE REDES</h5>
              <h3>Implementação e mauntenção de redes</h3>
              <p>Oferecemos redes eficientes e seguras para empresas de todos os tamanhos.</p>
              <!-- <a 
                class="btn btn-outline-info border-2x rounded-pill btn-lg fs-0 py-2" 
                href="https://suporte.consulti.net.br/" 
                target="_blank"
              >Acessar o portal<span class="fas fa-play" data-fa-transform="shrink-6 down-1 right-5"></span></a> -->
            </div>
          </div>
          <!-- ====== -->

          <!-- Segurança da Informação -->
          <div class="row align-items-center justify-content-center mt-7" id="seginfo">
            <div class="col-md col-lg-5 col-xl-4 pl-lg-6">
              <img class="img-fluid px-6 px-md-0" src="./assets/img/illustrations/infosecimg.svg" style="width: 20rem;" alt="Segurança da Informação" />
            </div>
            <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
              <h5 class="text-success"><span class="fa-solid fa-shield-alt mr-2"></span>SEGURANÇA DA INFORMAÇÃO</h5>
              <h3>Proteção contra ameaças cibernéticas</h3>
              <p>Soluções de segurança robustas, incluindo Pentest e BlueTeam, para proteger seus dados.</p>
              <!-- <button class="btn btn-outline-warning border-2x rounded-pill btn-lg fs-0 py-2" type="button" data-toggle="modal" data-target="#exampleModal">Não encontrei a aplicação<span class="fas fa-play" data-fa-transform="shrink-6 down-1 right-5"></span></button> -->
            </div>
          </div>
          <!-- ===== -->

          <!-- Backup nas Nuvens -->
          <div class="row align-items-center justify-content-center mt-7" id="cldbckp">
            <div class="col-md col-lg-5 col-xl-4 pr-lg-6 order-md-2">
              <img class="img-fluid px-6 px-md-0" src="./assets/img/illustrations/cloudbckpimg.svg" style="width: 20rem;" alt="Backup nas nuvens" />
            </div>
            <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
              <h5 class="text-primary"> <span class="fa fa-cloud mr-2"></span>BACKUP NAS NUVENS</h5>
              <h3>Soluções de backup em nuvem</h3>
              <p>Garantimos a segurança e disponibilidade dos seus dados com backup em nuvem.</p>
              <!-- <a class="btn btn-outline-success border-2x rounded-pill btn-lg fs-0 py-2" href="mailto:chamados@consulti.net.br">Enviar um email<span class="fas fa-play" data-fa-transform="shrink-6 down-1 right-5"></span></a> -->
            </div>
          </div>
          <!-- ===== -->

          <!-- WiFi Corporativo e para Eventos -->
          <div class="row align-items-center justify-content-center mt-7" id="corpwifi">
            <div class="col-md col-lg-5 col-xl-4 pl-lg-6">
              <img class="img-fluid px-6 px-md-0" src="./assets/img/illustrations/wifiimg.svg" style="height: 17rem;" alt="WiFi Corporativo e para Eventos" />
            </div>
            <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
              <h5 class="text-warning"><span class="fas fa-wifi mr-2"></span>WIFI CORPORATIVO E PARA EVENTOS</h5>
              <h3>Conectividade sem fio de alta performance</h3>
              <p>Soluções de WiFi para empresas e eventos, garantindo alta performance e segurança.</p>
            </div>
          </div>
          <!-- ===== -->

          <!-- Controle de Navegação na Internet -->
          <div class="row align-items-center justify-content-center mt-7" id="cntrlwebnav">
            <div class="col-md col-lg-5 col-xl-4 pr-lg-6 order-md-2">
              <img class="img-fluid px-6 px-md-0" src="./assets/img/illustrations/webcontrolimg.svg" style="width: 20rem;" alt="Controle de Navegação na Internet" />
            </div>
            <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
              <h5 class="text-dark"><span class="fas fa-globe mr-2"></span>CONTROLE DE NAVEGAÇÃO NA INTERNET</h5>
              <h3>Monitoramento e controle de acesso</h3>
              <p>Ferramentas para aumentar a produtividade e segurança através do controle de navegação.</p>
            </div>
          </div>
          <!-- ===== -->

          <!-- Fibra Ótica e Rádio Digital -->
          <div class="row align-items-center justify-content-center mt-7" id="optdgt">
            <div class="col-md col-lg-5 col-xl-4 pl-lg-6">
              <img class="img-fluid px-6 px-md-0" src="./assets/img/illustrations/optdgt.svg" style="width: 20rem;" alt="Fibra Ótica e Rádio Digital" />
            </div>
            <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
              <h5 class="text-secondary"><span class="fas fa-signal mr-2"></span>FIBRA ÓTICA E RÁDIO DIGITAL</h5>
              <h3>Comunicação avançada de alta velocidade</h3>
              <p>Infraestrutura de comunicação com fibra ótica e rádio digital para conectividade rápida.</p>
            </div>
          </div>
          <!-- ===== -->

          <!-- Consultoria em Telefonia Fixa e Móvel -->
          <div class="row align-items-center justify-content-center mt-7" id="telconsul">
            <div class="col-md col-lg-5 col-xl-4 pr-lg-6 order-md-2">
              <img class="img-fluid px-6 px-md-0" src="./assets/img/illustrations/telconsult.svg" style="width: 20rem;" alt="Consultoria em Telefonia Fixa e Móvel" />
            </div>
            <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
              <h5 class="text-success"><span class="fas fa-phone mr-2"></span>CONSULTORIA EM TELEFONIA FIXA E MÓVEL</h5>
              <h3>Otimização de custos e eficiência</h3>
              <p>Assessoria especializada para otimizar os custos e a eficiência das comunicações fixas e móveis.</p>
            </div>
          </div>
          <!-- ===== -->

          <!-- Modal -->
          <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-3" id="exampleModalLabel">O que fazer?</h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body align-items-center justify-content-center">
                  <strong>1° Passo</strong>
                  <br>
                  Procurar pelo atalho na sua área de trabalho: 'Suporte ConsulTI' <br>
                  <img src="./assets/img/generic/appdesktop.png" alt="Area de Trabalho" width="750" style="border-radius: 0.25rem;">
                  <br>
                  <p></p>
                  <strong>2° Passo</strong>
                  <br>
                  Procurar na barra de tarefas <br>
                  <img src="./assets/img/generic/apptaskbar.png" alt="Barra de Tarefas" width="750" style="border-radius: 0.25rem;">
                  <br>
                  <p></p>
                  <strong>3° Passo</strong>
                  <br>
                  Pesquisar na barra de pesquisa: 'Suporte ConsulTI'
                  <img src="./assets/img/generic/appstartmenu.png" alt="Menu Iniciar" width="750" style="border-radius: 0.25rem;">
                  <br>
                  <p></p>
                  Caso tenha seguido todos os passos e não encontrou a aplicação, entre em contato com a <a href="https://wa.me/551831990747" target="_blank" rel="noopener noreferrer"><strong>Central de Atendimento | (18) 3199-0747</strong></a>, ou procure outras formas de abertura de chamado nesse portal.
                </div>
                <div class="modal-footer align-items-center justify-content-center">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-light text-center">

        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="fs-2 fs-sm-4 fs-md-5">Conheça nossos diferenciais</h1>
              <p class="lead">Recursos que você terá imediatamente com ConsulTI.</p>
            </div>
          </div>
          <div class="row mt-6">
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
            </div>
            <!-- <div class="col-lg-4 mt-6 mt-lg-0">
              <div class="card card-span h-100">
                <div class="card-span-img"><span class="fab fa-gulp fs-6 text-danger"></span></div>
                <div class="card-body pt-6 pb-4">
                  <h5 class="mb-2">Gulp based workflow</h5>
                  <p>All the painful or time-consuming tasks in your development workflow such as compiling the SCSS or transpiring the JS are automated.</p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-200 text-center">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">
              <div class="owl-carousel owl-theme owl-theme-dark" data-options='{"margin":30,"nav":true,"autoplay":true,"autoplayHoverPause":true,"loop":true,"dots":false,"items":1}'>
                <div class="px-5 px-sm-6">
                  <p class="fs-sm-1 fs-md-2 font-italic text-dark">Um time dedicado e unido que mostra em cada projeto o que realmente deve ser feito para que o objetivo do cliente seja atingido. Impressionando com a qualidade e determinação na execução das demandas solicitadas.</p>
                  <p class="fs-0 text-600">- Rannye Rodrigues, CEO of SysDevv</p>
                  <!-- <img class="w-auto mx-auto" src="./assets/img/logos/google.png" alt="" height="45" /> -->
                </div>
                <div class="px-5 px-sm-6">
                  <p class="fs-sm-1 fs-md-2 font-italic text-dark">A ConsulTI é um time coeso e comprometido, que demonstra em cada projeto um claro entendimento do que é necessário para alcançar os objetivos dos clientes. Eles impressionam pela qualidade excepcional e pela determinação incansável na execução das demandas solicitadas, garantindo resultados que superam as expectativas.</p>
                  <p class="fs-0 text-600">- Jhonatan Calleri, Developer</p>
                  <!-- <img class="w-auto mx-auto" src="./assets/img/logos/netflix.png" alt="" height="30" /> -->
                </div>
                <!-- <div class="px-5 px-sm-6">
                  <p class="fs-sm-1 fs-md-2 font-italic text-dark">When I first saw Falcon, I was totally blown away by the care taken in the interface. It felt like something that I'd really want to use and something I could see being a true modern replacement to the current class of Bootstrap themes.</p>
                  <p class="fs-0 text-600">- Liam Martens, Designer</p><img class="w-auto mx-auto" src="./assets/img/logos/paypal.png" alt="" height="45" />
                </div> -->
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-light text-center py-6">

        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="fs-2 fs-sm-4 fs-md-5" id="news">ConsulTI News</h1>
              <!-- <p class="lead">Recursos que você terá imediatamente com ConsulTI.</p> -->
            </div>
          </div>
          <div class="row justify-content-center mt-4">
            <div class="owl-carousel owl-theme owl-theme-dark" data-options='{"nav":true,"autoplay":true,"autoplayHoverPause":true,"loop":true,"dots":false,"items":1, "center":true}'>
                <div class="row justify-content-center align-items-center">
                  <div class="col-4"><img class="img-fluid img-thumbnail" src="./assets/img/generic/1.jpg" alt=""></img></div>
                  <div class="col-3">
                    <h5 class="fs-sm-1 fs-md-2 mb-0 text-left"><a class="text-dark" href="#!" data-toggle="modal" data-target="#noticias">Inteligência Artificial será essencial para garantir a segurança da informação</a></h5>
                    <p class="fs-0 text-600 text-left">Outubro, 13 | 4min</p>
                  </div>
                </div>
                <div class="row justify-content-center align-items-center">
                  <div class="col-4"><img class="img-fluid img-thumbnail"src="./assets/img/generic/2.jpg" alt=""></img></div>
                  <div class="col-3">
                    <h5 class="fs-sm-1 fs-md-2 mb-0 text-left"><a class="text-dark" href="#!">Inteligência Artificial será essencial para garantir a segurança da informação</a></h5>
                    <p class="fs-0 text-600 text-left">Outubro, 13 | 4min</p>
                  </div>
                </div>
                <!-- <img class="w-auto mx-auto" src="./assets/img/logos/google.png" alt="" height="45" /> -->  
            </div>
          </div>
          <div class="row mt-6">
            <!-- <div class="col-lg-4 mt-6 mt-lg-0">
              <div class="card card-span h-100">
                <div class="card-span-img"><span class="fab fa-gulp fs-6 text-danger"></span></div>
                <div class="card-body pt-6 pb-4">
                  <h5 class="mb-2">Gulp based workflow</h5>
                  <p>All the painful or time-consuming tasks in your development workflow such as compiling the SCSS or transpiring the JS are automated.</p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="bg-holder overlay" style="background-image:url(./assets/img/generic/4.jpg);background-position: center top;">
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
        </div>


      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-dark pt-8 pb-4">

        <div class="container">
          
          <div class="row justify-content-between footer-content">
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
            <div class="col pl-lg-6 pl-xl-8">
              <div class="row mt-5 mt-lg-0">
                <div class="col-6 col-md-3">
                  <h5 class="text-uppercase text-white opacity-85 mb-3">Empresa</h5>
                  <ul class="list-unstyled">
                    <li class="mb-1"><a class="text-600" href="sobre.php">Sobre</a></li>
                    <li class="mb-1"><a class="text-600" href="#!" data-toggle="modal" data-target="#exampleModal">Contato</a></li>
                    <li class="mb-1"><a class="text-600" href="https://br.linkedin.com/company/souconsulti" target="_blank">Trabalhe Conosco</a></li>
                    <li class="mb-1"><a class="text-600" href="#!">Termos</a></li>
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
                <div class="col-6 col-md3">
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
                </div>
              </div>
            </div>
          </div>
        </div>
        

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-dark-2">

        <div>
          <hr class="my-0 border-600 opacity-25" />
          <div class="container py-3">
            <div class="row align-items-end justify-content-end fs--1">
              <div class="position-absolute btn-back-to-top bg-dark-2"><a class="text-600" href="#top" data-fancyscroll="data-fancyscroll"><span class="fas fa-chevron-up" data-fa-transform="rotate-45"></span></a></div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600 opacity-85"></span><br class="d-sm-none" /> 2014 - <a id="dataAno"></a>  &copy; <a class="text-white opacity-85" href="https://themewagon.com">ConsulTi</a></p>
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

      <!-- ============================================-->
       <!-- Modal Noticias -->
      <div class="modal fade" id="noticias" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row text-center justify-content-center align-items-center mb-2">
                <div class="col-auto">
                  <img class="img-fluid img-thumbnail" src="./assets/img/generic/1.jpg" alt=""></img>
                </div>
                <!-- <div class="col-auto">
                  <p class="fs--1 text-600 mb-0">Have an account? <a href="../authentication/basic/login.html">Login</a></p>
                </div> -->
              </div>
              <div class="row text-justify">
                <div class="col-auto">
                  <h2>Inteligência Artificial será essencial para garantir a segurança da informação</h2>
                  <p>O uso da Inteligência Artificial será onipresente quando a questão envolver  segurança da informação. Essa é a opinião do indiano  Rajesh Ganesan, presidente da ManageEngine, que esteve no Brasil pela primeira vez para participar o evento UserConf Brasil, que serviu também para comemorar 20 anos de fundação da empresa de  gerenciamento de TI, que faz parte do grupo Zoho Corporation, com mais de 280 mil clientes ao redor do mundo e que faz parte da lista da Fortune 100.</p>
                  <p>A ManageEngine cresceu de maneira significativa na América Latina, especialmente no Brasil, onde atende mais de mil clientes. Depois de registrar um aumento de receitas de 43% em 2021, o crescimento da companhia superou 60% no primeiro semestre de 2022, em comparação com o mesmo período do ano anterior.</p>
                  <p>Ele confirmou a abertura de uma filial da ManageEngine em São Paulo, que junto com as unidades da Colômbia e México reforça o investimento da empresa indiana no mercado latino-americano e acelerar funções técnicas e a área de marketing para apoiar os planos de expansão da companhia.</p>
                  <p>Ganesan ressaltou que IA "atingiremos um nível de gerenciamento de ponta a ponta alavancado com chatbots alimentados por IA, com entendimento de linguagem natural (NLU) e que podem resolver problemas, desde algo simples como uma senha redefinida até o fornecimento de acesso a uma aplicação em nuvem".</p>
                  <p>"IA servirá inclusive pare a empresa provisionar o data center que irá usar, os ferramentais de monitoramento,  a gestão de identidade, a nuvem. Enfim tudo que envolver a segurança de informação", ressalta.</p>
                  <p><strong>Trabalho híbrido</strong></p>
                  <p>Na UserConf Brasil o executivo também apresentou a Pesquisa de Prontidão Digital da ManageEngine, que mostra que 91% das organizações acreditam que seus líderes de TI serão os responsáveis por conduzir a empresa para o futuro.</p>
                  <p>"As circunstâncias dos últimos dois anos levaram a duas tendências significativas: empresas têm optado pela digitalização em primeiro lugar para todas as necessidades e os funcionários priorizam o trabalho remoto sempre que possível. As empresas que entendem esses movimentos e implementam tecnologias para se alinharem a eles têm prosperado. Na ManageEngine, nos esforçamos continuamente para ajudar os clientes em suas jornadas, por meio de uma plataforma que garante que eles obtenham o melhor retorno de seus investimentos em TI", ressalta Ganesan.</p>
                </div>
              </div>
              <div class="w-100 position-relative mt-4">
                <hr class="text-300" />
                <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">ConsulTI | NEWS</div>
              </div>
              <div class="form-group mb-0">
                <div class="row no-gutters">
                  <!-- <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-success btn-sm btn-block mt-2" href="https://wa.me/551831990747" target="_blank"><span class="fab fa-whatsapp mr-2" data-fa-transform="grow-8"></span> Whatsapp</a></div>
                  <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="https://www.facebook.com/souconsulti/" target="_blank"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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