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

    <!-- Estilos Adicionais -->
    <link href="{{ asset('assets/css/estilos-adicionais-secundario.css') }}" rel="stylesheet" type="text/css" />

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

    <x-navbar-secundario></x-navbar-secundario>
    
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

    <script src="{{ asset('assets/js/jquery.mask.js') }}"></script>
    <script src="{{ asset('assets/js/mask.js') }}"></script>

</body>

</html>