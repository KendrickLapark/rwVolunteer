<div id="divHeader">
    <div id="logo">
        <a href="{{ route('home') }}">
            <img width="300" height="102" src="<?php echo asset('images/logo-fundacion2.png'); ?>" alt="header-logo" />
        </a>
    </div>
    <div id="mainMenu">
        <ul>
            <li><a href="{{ route('vol.login') }}" class="botones botonesAB">Accede</a></li>
            <li><a href="{{ route('vol.create') }}" class="botones botonesAB">Hazte voluntario</a></li>
        </ul>
    </div>
</div>
