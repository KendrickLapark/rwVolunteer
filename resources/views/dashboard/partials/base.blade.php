<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Voluntariado Magtel - @yield('title')</title>
    <link rel="stylesheet" href="<?php echo asset('css/reset.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/baseDashboard.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/toolbar.toggle.css'); ?>" type="text/css">
    <link rel="icon" type="image/png" href="<?php echo asset('images/newFavicon2.png'); ?>" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>{{-- 
    <script type="text/javascript" src="{{ URL::asset('js/a11y.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ URL::asset('js/a11yv2.js') }}"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" 
    integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('headlibraries')
</head>

<body>
    @include('dashboard.partials.leftBar')

    <section class="home-section">
        <nav>
            @include('dashboard.partials.header')
        </nav>

        <div class="home-content">
            @yield('content')
        </div>

            @include('dashboard.partials.toolbar_toggle')
        
    </section>

    <script type="text/javascript">

    const elementos = document.querySelectorAll('.nav-links a');

    function seleccionarElemento(elemento) {

        elementos.forEach((el) => {
            el.classList.remove('activo');
            el.removeAttribute('aria-current');
        });

        elemento.classList.add('activo');
        elemento.setAttribute('aria-current', 'page');

        localStorage.setItem('elementoSeleccionado', elemento.textContent);

        }

        elementos.forEach((elemento) => {
            elemento.addEventListener('click', () => {
                seleccionarElemento(elemento);
            });

            elemento.addEventListener('keyup', (event) => {
                if (event.key === 'Enter') {
                seleccionarElemento(elemento);
                }
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const elementoSeleccionado = localStorage.getItem('elementoSeleccionado');
            if (elementoSeleccionado) {
                const elemento = [...elementos].find(el => el.textContent === elementoSeleccionado);
                if (elemento) {
                seleccionarElemento(elemento);
                }
            }
        });

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        let img = document.getElementById("logoImg");

        $('.icon-overlay').on('keypress', function (event) {
        
            if (event.which === 13) {
                $('#check').prop('checked', !$('#check').prop('checked'));
            }
        });

        $('.toolbar-item').on('keypress', function (event) {

            if(event.which === 13) {
                $(this).find('a:first').trigger('click');
            }

        });

        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                img.src = <?php echo json_encode(asset('images/logo1.png')); ?>;
                img.style.marginLeft='-23px';
                <?php session()->put('status', '1'); ?>
            } else {
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                img.src = <?php echo json_encode(asset('images/logo-fundacion2.png')); ?>;
                <?php session()->forget('status'); ?>
            }
        }

    </script>

</body>

</html>
