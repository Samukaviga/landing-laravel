<!DOCTYPE html>
<html lang="pt-BR">
<?php
error_reporting(0);
ini_set("display_errors", 0);

?>

<head>
    <meta charset="utf-8" />
    <title>Liceu Brasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="O Liceu da Beleza é uma escola profissionalizante da área da beleza. Só aqui é possível se tornar um profissional da beleza de forma 100% gratuita, aprendendo as técnicas mais modernas e avançadas com os melhores professores da região.">
    <meta name="keywords"
        content="Liceu Brasil, cílios, maquiagem, massoterapia, manicure, pedicure, curso, itaquaquecetuba, liceu itaqua, cursos grátis, liceu suzano, cursos gratis em itaqua, cursos gratis em suzano, cursos gratis em mogi, liceu, Beleza, Empreendedorismo">
    <meta name="facebook-domain-verification" content="sc0ydmf8yhe4hjsvidf9zc3vmxpgv8" />
    <meta content="Liceu Brasil" name="Liceu Brasil" />

    <!-- Preconnect para otimizar carregamento de fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Link da fonte Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link href="{{ asset('assets/images/favicon-azul.jpeg')}}" rel="shortcut icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTK..." crossorigin="anonymous">

    <link rel="preload" href="{{ asset('assets/landing/assets/css/helpers.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/landing/assets/css/helpers.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/landing/assets/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/landing/assets/css/style.css') }}">
    </noscript>


    <link href="{{ asset('assets/css/pe-icon-7.css') }}" rel="stylesheet" type="text/css" />

    <!-- Swiper-slider Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- CUSTOM CSS -->
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="assets/css/materialdesignicons.min.css"> -->

    <link rel="preload" href="{{ asset('assets/css/materialdesignicons.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}">
    </noscript>


</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="60">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- END PRELOADER -->


    <!-- STRAT NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
        <a class="navbar-brand" href="./" style="padding: 0 50px">
            <img src="assets/images/logo-dark.png" alt="logo" height="50" class="logo-light" />
            <img src="assets/images/logo-dark.png" alt="logo" height="40" class="logo-dark" />
        </a>
        <div class="container">
            <!--  ## Botao barra nav ##
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="padding: 0 50px">
            <span class="mdi mdi-menu" style="color: #FFFFFF !important"></span>
        </button> -->
            <!--end button-->

            <!--end collapse-->
        </div>
        <!--end container-->
    </nav>
    <!-- END NAVBAR -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script>
        jQuery(function($) {
            $("#nascimento").mask('99/99/9999', {
                placeholder: "___ / ___ / ____"
            });
            $("#nascimento").blur(function(event) {
                if ($(this).val().length == 15) {
                    $('#nascimento').mask('99/99/9999', {
                        placeholder: "___ / ___ / ____"
                    });
                } else {
                    $('#nascimento').mask('99/99/9999', {
                        placeholder: "___ / ___ / ____"
                    });
                }
            });
        });
    </script>

    {{ $slot }}


    <!-- START FOOTER -->
    <section class="footer-landing mt-4" id="contato">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12">

                    <div class="col-lg-8  col-12"><img src="https://www.liceubrasil.com.br/sites/liceu/images/logo-dark.png" alt="" class="img-fluid" style="margin-bottom: 50px"></div>

                    <h5 style="margin-bottom: -5px;">Fale conosco</h5>
                    <a href="https://api.whatsapp.com/send?phone=5511953255890" target="_blank" class="btn btn-primary btn-lg " style="padding: 5px 10px; font-size: 18px; border-radius: 30px; background-color: #ffffff; margin: 20px 0; color: #002bbb; font-weight: bold"><i class="mdi mdi-whatsapp"></i> MANDE UMA MENSAGEM</a>

                    <ul class="list-unstyled company-sub-menu">
                        <li class="mb-3"><a class="link-footer-landing" href="#"><i class="mdi mdi-phone-in-talk icone-footer-landing"></i> +11 4642-0648</a></li>
                        <li class="mb-3"><a class="link-footer-landing" href="https://api.whatsapp.com/send?phone=5511953255890"><i class="mdi mdi-whatsapp icone-footer-landing"></i> (11) 95325-5890</a></li>
                        <li class="mb-3"><a class="link-footer-landing" href="#"><i class="mdi mdi-email icone-footer-landing"></i> contato@liceubrasil.com.br</a></li>
                    </ul>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-12" style="margin-bottom: 30px">
                    <h4 class="mb-3">Faça uma visita</h4>

                    <h6 style="margin-top: 40px"><b>Itaquaquecetuba</b></h6>
                    <div class="col-lg-12" style="margin-top: 10px">
                        <div class="row">
                            <div class="col-lg-1 col-1" style="font-size: 36px; padding: 0"><i class="mdi mdi-map-marker"></i></div>
                            <a href="https://www.google.com/maps/place/Liceu+Brasil/@-23.4740826,-46.3502862,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce7cbbcc4c02fb:0x2a88b11fbbccfaa7!8m2!3d-23.4740826!4d-46.3502862!16s%2Fg%2F11bvt5hclc?entry=ttu&g_ep=EgoyMDI1MDYyNi4wIKXMDSoASAFQAw%3D%3D">
                                <div class="col-lg-11 col-11">R. da Liberdade, 45 <br> Centro, Itaquaquecetuba - SP</div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12" style="margin-top: 10px">
                        <div class="row">
                            <div class="col-lg-1 col-1" style="font-size: 36px; padding: 0"><i class="mdi mdi-map-marker"></i></div>
                            <a href="https://www.google.com/maps/place/Liceu+da+Beleza/data=!4m2!3m1!1s0x0:0x4a51ec0bee9603ab?sa=X&ved=1t:2428&ictx=111">
                                <div class="col-lg-11 col-11">R. da Liberdade, 104 <br> Centro, Itaquaquecetuba - SP</div>
                            </a>
                        </div>
                    </div>

                    <h6 style="margin-top: 10px"><b>Suzano</b></h6>
                    <div class="col-lg-12" style="margin-top: 10px">
                        <div class="row">
                            <div class="col-lg-1 col-1" style="font-size: 36px; padding: 0"><i class="mdi mdi-map-marker"></i></div>
                            <a href="https://www.google.com/maps/place/Liceu+da+Beleza+Suzano/@-23.5360242,-46.310855,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce7bceaf7cd2dd:0xd637afa5a9f3f566!8m2!3d-23.5360242!4d-46.310855!16s%2Fg%2F11vt06wwv8?entry=ttu&g_ep=EgoyMDI1MDYyNi4wIKXMDSoASAFQAw%3D%3D">
                                <div class="col-lg-11 col-11">R. Felício de Camargo, 216 <br> Centro, Suzano - SP</div>
                            </a>
                        </div>
                    </div>

                    <h6 style="margin-top: 10px"><b>Aruja</b></h6>
                    <div class="col-lg-12" style="margin-top: 10px">
                        <div class="row">
                            <div class="col-lg-1 col-1" style="font-size: 36px; padding: 0"><i class="mdi mdi-map-marker"></i></div>
                            <a href="https://www.google.com/maps/place/Liceu+da+Beleza+Aruja/@-23.3956001,-46.3199515,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce87cbd16de797:0x72576b69590226a1!8m2!3d-23.3956001!4d-46.3199515!16s%2Fg%2F11y74zcl83?entry=ttu&g_ep=EgoyMDI1MDYyNi4wIKXMDSoASAFQAw%3D%3D">
                                <div class="col-lg-11 col-11">R. Raposo Taváres, 176<br> Jardim Renata, Arujá - SP</div>
                            </a>
                        </div>
                    </div>

                </div>
                <!--end col-->
                <div class="col-lg-4  col-12">
                    <h4 class="mb-3">Acompanhe as novidades</h4>

                    <div class="col-lg-12" style="margin-top: 40px">
                        <div class="row">
                            <div class="col-lg-1 col-1" style="font-size: 21px; padding: 0"><i class="mdi mdi-instagram"></i></div>
                            <div class="col-lg-11 col-11" style="font-size: 18px; padding: 0 0 0 5px;"><a class="link-footer-landing" href="https://www.instagram.com/liceubrasil/" target="_blank">@liceubrasil</a></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-1" style="font-size: 21px; padding: 0"><i class="mdi mdi-instagram"></i></div>
                            <div class="col-lg-11 col-11" style="font-size: 18px; padding: 0 0 0 5px;"><a class="link-footer-landing" href="https://www.instagram.com/liceudabeleza?igsh=MXV4bTVmZWwzYTNiMQ==" target="_blank">@belezaitaqua</a></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-1" style="font-size: 21px; padding: 0"><i class="mdi mdi-instagram"></i></div>
                            <div class="col-lg-11 col-11" style="font-size: 18px; padding: 0 0 0 5px;"><a class="link-footer-landing" href="https://www.instagram.com/liceudabelezasuzano?igsh=dGd6MXNmYm45b3ky" target="_blank">@belezasuzano</a></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-1" style="font-size: 21px; padding: 0"><i class="mdi mdi-instagram"></i></div>
                            <div class="col-lg-11 col-11" style="font-size: 18px; padding: 0 0 0 5px;"><a class="link-footer-landing" href="https://www.instagram.com/liceudabeleza.aruja?igsh=cm9uNjN2bHVsOGVw" target="_blank">@belezaaruja</a></div>
                        </div>
                    </div>

                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!--end footer-alt-->
    <!-- END FOOTER -->


    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up-bold"></i>
    </button>
    <!--end back-to-top-->

    <!-- javascript -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Swiper slider -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- Contact Js -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>

    <!-- Main Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script src="{{ asset('js/jquery.mask.js') }}"></script>
    <script src="{{ asset('js/mask.js') }}"></script>

</body>

</html>