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
                        @if (Auth::user()->imageVol == 0 || Auth::user()->imageVol == null)
                            <img class="avatarMyProfile" src="<?php echo asset('images/dashboard/noProfileImage.jpg'); ?>" tabindex="0" alt="imagen de perfil de {{ Auth::user()->nameVol }}">
                        @else
                            <img class="avatarMyProfile" src="data:image/jpeg;base64,{{ base64_encode(Storage::get('avatar/' . Auth::user()->imageVol)) }}" 
                            tabindex="0" alt="imagen de perfil de {{ Auth::user()->nameVol }}" id="avatarInTopBar" />
                        @endif
                </div>

                <div class="containerProfileData">

                    <button type="button" aria-expanded="false" class="accordion-trigger" id="accordion-trigger-1" aria-controls="accordion-panel-1">
                        <i class="fa-solid fa-user-large"></i>
                        <span> Datos personales </span>
                        <i class='bx bxs-chevron-down'></i>
                    </button>

                    <div class="accordion-panel" id="accordion-panel-1" role="region" aria-labelledby="accordion-trigger-1" tabindex="0">
                        <div class="personalDataLeftCol">
                            <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                 Nombre: {{Auth::user()->nameVol}} </span>
                            <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                 Apellidos: {{Auth::user()->surnameVol}}  {{Auth::user()->surname2Vol}} </span>
                            <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                 {{Auth::user()->typeDocVol}}: &nbsp; {{Auth::user()->numDocVol}}  </span>
                            <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                 Fecha de nacimiento: {{Auth::user()->birthDateVol}} </span>
                            <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                 Dirección: {{Auth::user()->typeViaVol}} &nbsp; {{Auth::user()->direcVol}} &nbsp; {{Auth::user()->numVol}} </span>
                            <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                 Localidad: {{Auth::user()->townVol}} </span>
                            <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                 Provincia: {{Auth::user()->stateVol}} </span>
                            <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                 Código Postal: {{Auth::user()->codPosVol}} </span>
                        </div>

                            <div class="personalDataRightCol">
                                <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                    Otros datos de interés </span>
                                <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                    Talla de camiseta: {{Auth::user()->shirtSizeVol}} </span>
                                <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                    Organización: {{Auth::user()->organiVol}} </span>
                                <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                    Teléfono: {{Auth::user()->telVol}} </span>
                                <span> <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
                                    E-mail: {{Auth::user()->persMailVol}} </span>

                                <div class="divButtonMyProfile">
                                    <form method="GET" action="{{ route('dashboard.showMyProfileForm') }}" accept-charset="UTF-8"
                                        enctype="multipart/form-data">
                                        <p><button type="submit" class="botonesControl" aria-label="Editar perfil">
                                            <i class="fa-solid fa-angle-right" style="color: #ffffff;"></i>Actualizar datos</button></p>
                                    </form>
                                </div>

                            </div>
                    </div>

                    <button type="button" aria-expanded="false" class="accordion-trigger" id="accordion-trigger-2" aria-controls="accordion-panel-2">
                        <i class="fa-solid fa-user-large"></i>
                        <span> Documentos </span>
                        <i class='bx bxs-chevron-down'></i>
                    </button>

                    <div class="accordion-panel" id="accordion-panel-2" role="region" aria-labelledby="accordion-trigger-2" tabindex="0">
                        <ul>
                        @foreach($documents as $document)
                            <li>
                                <div class="rowTitleMyDocs" tabindex="0">
                                    <i class="fa-solid fa-caret-right"></i>
                                    {{ $document->titleDoc }}
                                </div>
                                <div class="buttonsMyDocs">
                                        @if (!$document->isContactModelVol && !$document->isInscripModelVol)
                                            <form method="POST" action="{{ route('dashboard.deleteDocument') }}">
                                                @csrf
                                                <input type="hidden" name="doc" value="{{ $document->doc_id }}">
                                                <button type="submit" id="downloadDoc" class="botonesControl"><i
                                                        class='bx bx-trash'></i></button>
                                            </form>
                                        @endif
                                            <form method="POST" action="{{ route('dashboard.downloadDocument') }}">
                                                @csrf
                                                <input type="hidden" tabindex="0" name="doc" value="{{ $document->doc_id }}">
                                                <button type="submit" id="downloadDoc" class="botonesControl" aria-label="Descargar documento"><i
                                                        class='bx bx-save'></i> Descargar documento</button>
                                            </form>
                                        
                                </div>
                            </li>
                        @endforeach
                        </ul>

                    </div>

                </div>

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
    <script type="text/javascript" src="{{ URL::asset('js/showMyProfile.a11y.js') }}"></script>

    <script>

        $(()=>{

           $('.accordion-panel').hide();

            $('.accordion-trigger').on('click', function(){

                var expanded = $(this).attr("aria-expanded") === "true" || false;
                $(this).attr("aria-expanded", !expanded);

                $(this).next('.accordion-panel').slideToggle('slow');

            });     

        })

    </script>