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
                        <i class="fa-solid fa-user-large"></i>
                        <p> Datos personales </p>
                        <i class='bx bxs-chevron-down'></i>
                    </div>

                    <div class="personalDataPanel">
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

                    <div class="accordionDocuments">
                        <i class="fa-solid fa-user-large"></i>
                        <p> Documentos </p>
                        <i class='bx bxs-chevron-down'></i>
                    </div>

                    <div class="documentsPanel">
                        @foreach($documents as $document)
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
                        @endforeach

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

    <script>

        $(()=>{

            $('.personalDataPanel').hide();
            $('.documentsPanel').hide();

            $('.accordionPersonalData').on('click', function(){

                if($('.personalDataPanel').is(':visible')){
                    $('.personalDataPanel').hide('slow');
                }else{
                    $('.personalDataPanel').show('slow');
                }

            })

            $('.accordionDocuments').on('click', function(){

                if($('.documentsPanel').is(':visible')){
                    $('.documentsPanel').hide('slow');
                }else{
                    $('.documentsPanel').show('slow');
                }

            })

        })

    </script>