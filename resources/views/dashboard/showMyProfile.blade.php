@extends('dashboard.partials.base')

@section('title')
    Mostrar mi perfil
@endsection

@section('content')
    <div class="mainTrayMyProf">
        <div class="sectionTitle">
            <h1 tabindex="0"> Mi perfil </h1>
        </div>
        @if (session()->has('successUpdateUser'))
            <div class="formSubmitSuccess center">
                {{ session('successUpdateUser') }}
            </div>
        @endif

            <div class="containerMyProfile">

                <div class="avatarContainer">
                    <p>
                        @if (Auth::user()->imageVol == 0 || Auth::user()->imageVol == null)
                            <img class="avatarMyProfile" src="<?php echo asset('images/dashboard/noProfileImage.jpg'); ?>" alt="{{ Auth::user()->nameVol }}">
                        @else
                            <img class="avatarMyProfile" src="data:image/jpeg;base64,{{ base64_encode(Storage::get('avatar/' . Auth::user()->imageVol)) }}"
                            alt="{{ Auth::user()->nameVol }}" id="avatarInTopBar" />
                        @endif
                    </p>
                </div>

                <div class="containerProfileData">

                    <div class="accordionPersonalData">
                        <i class="fa-solid fa-user-large" style="color: #ffffff;"></i>
                        <p> Datos personales </p>
                        <i class='bx bxs-chevron-down'></i>
                    </div>

                    <div class="accordionDocuments">
                        <i class="fa-solid fa-user-large" style="color: #ffffff;"></i>
                        <p> Documentos </p>
                        <i class='bx bxs-chevron-down'></i>
                    </div>

                </div>

            </div>                

            <div class="divButtonMyProfile">
                <form method="GET" action="{{ route('dashboard.showMyProfileForm') }}" accept-charset="UTF-8"
                    enctype="multipart/form-data">
                    <p><button type="submit" class="botonesControl" aria-label="Editar perfil">Editar</button></p>
                </form>
            </div>

    </div>
@endsection


@section('headlibraries')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/codPos.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>