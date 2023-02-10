@extends('dashboard.partials.base')

@section('title')
    Mostrar mi perfil
@endsection

@section('content')
    <div class="mainTray">
        <div class="sectionTitle">
            Mi perfil
        </div>
        @if (session()->has('successUpdateUser'))
            <div class="formSubmitSuccess center">
                {{ session('successUpdateUser') }}
            </div>
        @endif

        <form method="POST" action="{{ route('dashboard.updateProfile') }}" id="editMyProfile">
            @csrf
            <div class="container">
                <div class="mainDataCenterRow">
                    <div class="leftCol">

                        <div class="eachCreateInfoExtraElement">
                        <p>
                            <label id="labeltitleCol" class="formSections">
                                <strong>Contacto</strong>
                            </label>
                            <br>
                        </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelShirtSizeVol" class="formSections form-label" for="shirtSizeVol"><strong>Talla de
                                        camiseta:
                                    </strong></label>
                                <br />
                                <div id="shirtSizeVol" name="shirtSizeVol" class="small for-select">
                                    
                                    <div value="XS" {{ $volunteer->shirtSizeVol == 'XS' ? 'selected' : '' }}>XS
                                    </div>
                                    
                                </div>
                            </p>
                        </div>
                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelOrganiVol" class="formSections" for="organiVol"><strong>Organización:
                                    </strong></label>
                                <br />
                                    <div value="SIN Empresa Asociada"
                                        {{ $volunteer->organiVol == 'SIN Empresa Asociada' ? 'selected' : '' }}>SIN Empresa
                                        Asociada
                                </div>
                                    
                                    
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelTelVol" class="formSections" for="telVol"><strong>Teléfono:
                                    </strong></label>
                                <br />
                                <div class="telefono"  id="telVol" name="telVol" >
                                    {{ $volunteer->telVol }}
                                </div>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            
                                <label id="labelPersMailVol" class="formSections" ><strong>Correo
                                        Electrónico
                                        Personal: </strong></label>
                                <br />
                                <div class="email" id="corpMailVol" name="persMailVol"> {{ $volunteer->persMailVol }} </div>
                            
                        </div>

                        <div class="eachCreateInfoExtraElement">
                                    
                            <label id="labelPersMailVol" class="formSections" ><strong>Correo
                                    Electrónico
                                    Corporativo: </strong></label>
                            <br />
                            @if($volunteer->corpMailVol)
                                <div class="email" id="corpMailVol" name="persMailVol"> {{ $volunteer->corpMailVol }} </div>
                            @else
                                <div class="email" id="corpMailVol" name="persMailVol"> No dispone de correo electrónico corporativo. </div>
                            @endif
                        
                        </div>

                    </div>

                    <div class="contenedorImagen">
                        <p>
                            @if (Auth::user()->imageVol == 0 || Auth::user()->imageVol == null)
                                <img class="imgP" src="<?php echo asset('images/dashboard/noProfileImage.jpg'); ?>" alt="{{ Auth::user()->nameVol }}">
                            @else
                                <img class="imgP" src="data:image/jpeg;base64,{{ base64_encode(Storage::get('avatar/' . Auth::user()->imageVol)) }}"
                                alt="{{ Auth::user()->nameVol }}" id="avatarInTopBar" />
                            @endif
                        </p>
                    </div>

                    <div class="rightCol">

                            <p>
                                <label id="labeltitleCol" class="formSections">
                                    <strong>Datos personales</strong>
                                </label>
                                <br>
                            </p>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelnameVol" class="formSections">
                                    <strong>Nombre: </strong>
                                </label>
                                
                                    <div value="nombre">
                                        {{ $volunteer->nameVol }}
                                    </div>
                                    
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelsurnameVol" class="formSections">
                                    <strong>Apellidos:</strong>
                                </label>                              
                                    <div value="apellidos">
                                        {{ $volunteer->surnameVol .' '. $volunteer->surname2Vol}} 
                                    </div>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelnumDocVol" class="formSections" >
                                    <strong> {{ $volunteer->typeDocVol }}</strong>                               
                                </label>
                                <div class="numDocVol" id="numDocVol"> {{ $volunteer->numDocVol }} </div>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelbirthdateVol" class="formSections" >
                                    <strong>Fecha de nacimiento:</strong>
                                </label>
                                
                                    <div value="birthdateVol">
                                        {{ $volunteer->birthDateVol }}
                                    </div>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labeldireccionVol" class="formSections" >
                                    <strong> Dirección: </strong>                               
                                </label>
                                
                                    <div value="Autopista">
                                        {{ $volunteer->typeViaVol . ' ' . $volunteer->direcVol . ' ' . $volunteer->numVol . ' ' . $volunteer->flatVol}}
                                    </div>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelStateVol" class="formSections" for="stateVol">
                                    <strong>Provincia:</strong>
                                </label>
                                <div class="stateVol" id="stateVol" name="stateVol">{{ $volunteer->stateVol }} </div>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelTownVol" class="formSections" for="townVol">
                                    <strong>Localidad:</strong>
                                </label>
                                <div class="townVol" id="townVol" name="townVol"> {{ $volunteer->townVol }} </div>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelCodPosVol" class="formSections" for="codPosVol">
                                    <strong>Código Postal: </strong>
                                </label>
                                <div class="codPosVol" id="codPosVol" name="codPosVol"> {{ $volunteer->codPosVol }} </div>
                            </p>
                        </div>
              
                    </div>
                    
                </div>
            </div>

            <div class="divButtonMyProfileForm">
                <button type="submit" id="updateMyProfile" class="botonesControl">Actualizar</button>
            </div>

        </form>
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