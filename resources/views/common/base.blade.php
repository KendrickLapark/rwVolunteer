<!DOCTYPE html>
<html lang="es">

<head>
    <title>Voluntariado Magtel - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></script>
    <link rel="stylesheet" href="<?php echo asset('css/reset.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/base.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/home.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/toolbar.toggle.css'); ?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" 
    integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script type="text/javascript" src="{{ URL::asset('js/a11y.js') }}"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="<?php echo asset('images/favicon.png'); ?>" />

    @yield('library')
</head>

<body>
    <header>
        @include('common.header')
    </header>
    <div id="main">
        @yield('content')
    </div>
        @include('dashboard.partials.toolbar_toggle')
    <footer>
        @include('common.footer')
    </footer>
</body>

</html>
