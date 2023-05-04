@extends('dashboard.partials.base')

@section('title')
    Notificiaciones
@endsection

@section('content')
    <div class="mainTrayAdminNot">
        <div class="sectionTitle" tabindex="0">
            USUARIOS SIN VALIDAR:
        </div>

        @if (session()->has('validateUser'))
            <div class="formSubmitSuccess center center">
                {{ session('validateUser') }}
            </div>
        @endif
        @if (count($isNotCompleted) == 0)
            <div class="sectionTitle" tabindex="0">
                NO hay USUARIOS SIN VALIDAR pendientes
            </div>
        @else
            <div class="mainDataAdminNot">
                @foreach ($isNotCompleted as $eachNotCompleted)
                    <div>
                        <div class="row">
                            <div>
                                @if ($eachNotCompleted->imageVol == 0 || $eachNotCompleted->imageVol == null)
                                    <img src="<?php echo asset('images/dashboard/noProfileImage.jpg'); ?>" tabindex="0" alt="No hay imagen" class="avatarInShowAllUsers">
                                @else
                                    <img src="{{ asset('storage/avatar/' . $eachNotCompleted->imageVol) }}" tabindex="0"
                                     alt="{{ $eachNotCompleted->nameVol }}" class="avatarInShowAllUsers">
                                @endif
                            </div>
                            <div>
                                <strong tabindex="0">
                                   <p> {{ $eachNotCompleted->nameVol }}
                                    {{ $eachNotCompleted->surnameVol }}
                                    {{ $eachNotCompleted->surname2Vol }} </p>
                                </strong>
                                <br />
                                @if ($eachNotCompleted->organiVol == false)
                                    <div tabindex="0"> <p> SIN Empresa Asociada </p> </div>
                                @else
                                    <div tabindex="0"> <p> {{ $eachNotCompleted->organiVol }} </p> </div>
                                @endif
                            </div>
                            <div class="mailVol">
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:{{ $eachNotCompleted->persMailVol }}"> <p> {{ $eachNotCompleted->persMailVol }} </p> </a>
                            </div>
                            <div class="tlfVol" tabindex="0" aria-label="Teléfono">
                                <i class='bx bxs-phone'></i>
                                <a href="tel:+34{{ $eachNotCompleted->telVol }}"> <p> {{ $eachNotCompleted->telVol }} </p> </a>
                            </div>
                            <div class="controlButton moreDetails">
                                <i class='bx bxs-down-arrow' id="desplegar" role="button" aria-expanded="false" tabindex="0"></i>
                            </div>
                        </div>
                        <div class="hiddenAdminNot">
                            <div class="eachRow">
                                <div>
                                    <p> <strong>Fecha de nacimiento: </strong>
                                    {{ date('d-m-Y', strtotime($eachNotCompleted->organiVol)) }} </p>
                                </div>
                                <div>
                                   <p> <strong>{{ $eachNotCompleted->typeDocVol }}: </strong> 
                                    {{ $eachNotCompleted->numDocVol }} </p>
                                </div>
                                <div>
                                    <p> <strong>Sexo:</strong>
                                    {{ $eachNotCompleted->sexVol }} </p>
                                </div>
                                <div>
                                    <p> <strong>Talla de camiseta: </strong>
                                    {{ $eachNotCompleted->shirtSizeVol }} </p>
                                </div>
                            </div>
                            <div class="eachRow">
                                <div>
                                    <p> 
                                    <strong>Delegaciones: </strong>
                                    @if (count($eachNotCompleted->delegations) == 0)
                                        No tiene delegación
                                    @else
                                        @foreach ($eachNotCompleted->delegations as $delegation)
                                            {{ $delegation->nameDel }},
                                        @endforeach
                                    @endif
                                    </p>
                                </div>
                            </div>
                            @if (date('Y') - date('Y', strtotime($eachNotCompleted->birthDateVol)) <= 17)
                                <div class="eachRow">
                                    <div>
                                        <span class="redMark">ES MENOR</span>
                                        <div>
                                            <p> <strong>Autorizador:</strong>
                                            {{ $eachNotCompleted->nameAuthVol }} </p>
                                        </div>
                                        <div>
                                            <p> <strong>Documento de identidad del autorizador:</strong>
                                            {{ $eachNotCompleted->numDocAuthVol }} </p>
                                        </div>
                                        <div>
                                            <p> <strong>Teléfono del autorizador:</strong>
                                            <a
                                                href="tel:+34{{ $eachNotCompleted->tlfAuthVol }}">{{ $eachNotCompleted->tlfAuthVol }}</a> </p>
                                        </div>
                                    </div>
                                </div>
                            @endif


                            <div class="eachRow">
                                <div>
                                    <p> <strong>Dirección: </strong> <br />
                                    <div>
                                        {{ $eachNotCompleted->typeViaVol }}
                                        {{ $eachNotCompleted->direcVol }} </p>
                                    </div>
                                    <div>
                                        <p> <strong>Nº: </strong>
                                        {{ $eachNotCompleted->numVol }}
                                        {{ $eachNotCompleted->flatVol }} </p>
                                    </div>
                                    <div>                             
                                        <p> <strong>Código Postal: </strong>
                                        {{ $eachNotCompleted->codPosVol }} </p>
                                    </div>
                                    <div>
                                        <p> <strong>Provincia: </strong>
                                        {{ $eachNotCompleted->stateVol }} </p>
                                    </div>
                                    <div>
                                        <p> <strong>Ciudad: </strong>
                                        {{ $eachNotCompleted->townVol }} </p>
                                    </div>
                                    <div>
                                        <p> <strong>Información Adicional: </strong>
                                        {{ $eachNotCompleted->aditiInfoVol }} </p>
                                    </div>
                                </div>
                                <div class="eachRow">
                                    <div>
                                        @foreach ($eachNotCompleted->documents as $eachDocument)
                                            <p> <strong>{{ $eachDocument->titleDoc }}</strong> </p> <br />
                                            <div>
                                                <form method="POST"
                                                    action="{{ route('dashboard.downloadThatDocument') }}">
                                                    @csrf
                                                    <input type="hidden" name="doc"
                                                        value="{{ $eachDocument->doc_id }}">
                                                    <button type="submit" id="submit" class="botonesControl"><i
                                                            class='bx bx-save'></i></button>
                                                </form>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="eachRow">
                                    <div>
                                        @if (count($eachNotCompleted->documents) == 0)
                                           <p> No puede validar hasta que el usuario suba los documentos </p>
                                        @else
                                            <p> <strong>Validar</strong> </p> <br />
                                            <div>
                                                <form method="POST" action="{{ route('dashboard.validateUser') }}">
                                                    @csrf
                                                    <input type="hidden" name="doc"
                                                        value="{{ $eachNotCompleted->id }}">
                                                    <button type="submit" id="submit" class="botonesControl"
                                                        onclick="return confirm('¿Estas seguro/a?')">Validar<br /><i
                                                            class='bx bx-check'></i></button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="eachRow">
                                <div class="controlButton lessDetails">
                                    <i class='bx bxs-up-arrow' role="button" aria-expanded="0" tabindex="0"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        @endif
    </div>

    <div class="mainTrayAdminNot">
        <div class="sectionTitle" tabindex="0">
           <p> Preinscripciones sin aceptar: </p>
        </div>

        @if (session()->has('validatePreinscripcion'))
            <div class="formSubmitSuccess center">
                {{ session('validatePreinscripcion') }}
            </div>
        @endif

        @if (session()->has('declinatePreinscription'))
            <div class="formSubmitSuccess center">
                {{ session('declinatePreinscription') }}
            </div>
        @endif

        @if (count($inscriptionNotValidated) == 0)
            <div class="center">
                <div class="sectionTitle" tabindex="0">
                   <p> NO hay PREINSCRIPCIONES sin aceptar </p>
                </div>
            </div>
        @else
            @foreach ($inscriptionNotValidated as $inscription)
                <div class="mainDataAdminNot">
                    <div class="row">
                        <div>
                            @if ($inscription->volunteer->imageVol == 0 || $inscription->volunteer == null)
                                <img src="<?php echo asset('images/dashboard/noProfileImage.jpg'); ?>" tabindex="0" alt="No hay imagen" class="avatarInShowAllUsers">
                            @else
                                <img src="{{ asset('storage/avatar/' . $inscription->volunteer->imageVol) }}"
                                    alt="{{ $inscription->volunteer->nameVol }}" tabindex="0" class="avatarInShowAllUsers">
                            @endif
                        </div>
                        <div tabindex="0">
                            <p> <strong>
                                {{ $inscription->volunteer->nameVol }}
                                {{ $inscription->volunteer->surnameVol }}
                                {{ $inscription->volunteer->surname2Vol }} </p>
                            </strong>
                            <br />
                            @if ($inscription->volunteer->organiVol == false)
                                <p> <div> SIN Empresa Asociada </div> </p>
                            @else
                                <p> <div> {{ $inscription->volunteer->organiVol }} </div> </p>
                            @endif
                        </div>
                        <div class="mailVol" tabindex="0"> <p>
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:{{ $inscription->volunteer->persMailVol }}" tabindex="-1">{{ $inscription->volunteer->persMailVol }}</a> </p>
                        </div>
                        <div class="tlfVol" tabindex="0" aria-label="Teléfono">
                            <p> <i class='bx bxs-phone'></i>
                            <a
                                href="tel:+34{{ $inscription->volunteer->telVol }}" tabindex="-1">{{ $inscription->volunteer->telVol }}</a> </p>
                        </div>
                        <div class="controlButton moreDetails">
                            <i class='bx bxs-down-arrow' id="desplegar" tabindex="0" role="button" aria-expanded="false"></i>
                        </div>
                    </div>
                    <div class="hiddenAdminNot">
                        <div class="eachRow">
                            <div tabindex="0">
                                <p> <strong>Fecha de nacimiento: </strong>
                                {{ date('d-m-Y', strtotime($inscription->volunteer->organiVol)) }} </p>
                            </div>
                            <div tabindex="0">
                                <p> <strong>{{ $inscription->volunteer->typeDocVol }}: </strong>
                                {{ $inscription->volunteer->numDocVol }} </p>
                            </div>
                            <div tabindex="0">
                                <p> <strong>Sexo:</strong>
                                {{ $inscription->volunteer->sexVol }} </p>
                            </div>
                            <div tabindex="0">
                                <p> <strong>Talla de camiseta: </strong>
                                {{ $inscription->volunteer->shirtSizeVol }} </p>
                            </div>
                        </div>
                        <div class="eachRow">
                            <div tabindex="0">
                                <p> <strong>Delegaciones: </strong> 
                                @if (count($inscription->volunteer->delegations) == 0)
                                    No tiene delegaciones
                                @else
                                    @foreach ($inscription->volunteer->delegations as $delegation)
                                        {{ $delegation->nameDel }} </p>,
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        @if (date('Y') - date('Y', strtotime($inscription->volunteer->birthDateVol)) <= 17)
                            <div class="eachRow">
                                <div>
                                    <p> <span class="redMark" tabindex="0">ES MENOR</span> </p>
                                    <div tabindex="0">
                                        <p> <strong>Autorizador:</strong>
                                        {{ $inscription->volunteer->nameAuthVol }} </p>
                                    </div>
                                    <div tabindex="0">
                                        <p> <strong>Documento de identidad del autorizador:</strong>
                                        {{ $inscription->volunteer->numDocAuthVol }} </p>
                                    </div>
                                    <div tabindex="0">
                                        <p> <strong>Teléfono del autorizador:</strong>
                                        {{ $inscription->volunteer->tlfAuthVol }} </p>
                                    </div>
                                </div>
                            </div>
                        @endif



                        <div class="eachRow">
                            <div>
                                <div tabindex="0">
                                <p> <strong>Dirección: </strong>                               
                                    {{ $inscription->volunteer->typeViaVol }}
                                    {{ $inscription->volunteer->direcVol }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Nº: </strong>
                                    {{ $inscription->volunteer->numVol }}
                                    {{ $inscription->volunteer->flatVol }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Código Postal: </strong>
                                    {{ $inscription->volunteer->codPosVol }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Provincia: </strong>
                                    {{ $inscription->volunteer->stateVol }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Ciudad: </strong>
                                    {{ $inscription->volunteer->townVol }} </p>
                                </div>
                                <div tabindex="0"s>
                                    <p> <strong>Información Adicional: </strong>
                                    {{ $inscription->volunteer->aditiInfoVol }} </p>
                                </div>

                            </div>
                            <div tabindex="0">                               
                                <p> <strong> Educación: </strong><br />
                                @if (count($inscription->volunteer->education) == 0)
                                    No tiene titulación registrada<p>
                                @else
                                    @foreach ($inscription->volunteer->education as $education)
                                        {{ $education->titleEdu }} </p>
                                        <form method="POST" action="{{ route('dashboard.downloadThatEducation') }}"
                                            accept-charset="UTF-8" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $education->education_id }}">
                                            <p><button type="submit" id="downloadEdu" class="botonesControl"><i
                                                        class='bx bx-save'></i></button></p>
                                        </form>
                                    @endforeach
                                @endif
                            </div>
                            <div>
                                <div tabindex="0">
                                    <p> <strong>Nombre: </strong>{{ $inscription->activity->nameAct }} </p>
                                </div>
                                <div tabindex="0"> 
                                    <p> <strong>Cupo: </strong>
                                    {{ App\Http\Controllers\ActivityController::quotaCalculator(
                                        $inscription->activity->quotasAct,
                                        $inscription->activity->activity_id,
                                    ) }}
                                    /
                                    {{ $inscription->activity->quotasAct }}
                                    Libres </p>
                                </div>
                                <div tabindex="0"> <p> <strong>Hora de inicio: </strong>{{ $inscription->activity->timeAct }} </p> </div>
                                <div tabindex="0"> <p> <strong>Hora Fin: </strong>{{ $inscription->activity->endTimeAct }} </p> </div>

                                <div tabindex="0"> <p> <strong>Fecha:
                                    </strong>{{ date('d-m-Y', strtotime($inscription->activity->dateAct)) }} </p> </div>
                                <div tabindex="0">
                                    <p> <strong>Descripcion: </strong>
                                    {{ $inscription->activity->descAct }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Entidad: </strong>
                                    {{ $inscription->activity->entityAct }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Dirección: </strong>
                                    {{ $inscription->activity->direAct }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Requisito Previo: </strong>
                                    {{ $inscription->activity->requiPrevAct }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Formacion deseada: </strong>
                                    {{ $inscription->activity->formaAct }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Requisitos: </strong>
                                    {{ $inscription->activity->requiAct }} </p>
                                </div>
                            </div>
                            <div>
                                <p> <strong tabindex="0">Tipos de Actividad: </strong> </p>
                                @foreach ($inscription->activity->typeAct as $typeAct)
                                    <p tabindex="0">{{ $typeAct->nameTypeAct }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="eachRow">
                            <div>
                                <p> <strong tabindex="0">Documentación</strong> </p>
                                <form method="POST" action="{{ route('dashboard.downloadPreinscription') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                                    <button type="submit" class="botonesControl" aria-label="descargar documento"><i
                                            class='bx bx-save'></i></button>
                                </form>
                            </div>
                            <div>
                                <form method="POST" action="{{ route('dashboard.validatePreinscription') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                                    <button type="submit" class="botonesControl"
                                        onclick="return confirm('¿Estas seguro/a?')">ACEPTAR</button>
                                </form>
                            </div>
                            <div>
                                <form method="POST" action="{{ route('dashboard.declinatePreinscription') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                                    <button type="submit" class="botonesControl"
                                        onclick="return confirm('¿Estas seguro/a?')">RECHAZAR</button>
                                </form>
                            </div>
                        </div>
                        <div class="eachRow">
                            <div class="controlButton lessDetails">
                                <i class='bx bxs-up-arrow' role="button" tabindex="0" aria-expanded="false"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection


@section('headlibraries')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        $(() => {
            $(".hidden").hide();
            $(".row").on("click", function() {
                
                if ($(this).siblings().is(':visible')) {
                    $(this).siblings().hide('slow');
                }else{
                    $(this).siblings().show('slow');
                }
            });

            $(".lessDetails").on("click", function() {
                $(this).parent().parent().hide('slow');
            })
        });

        $('#desplegar').click(function(){

            var x = this.getAttribute('aria-expanded');

            alert(x)

                if(x == "true"){
                    x = "false";
                }else{
                    x = "true";
                }

            this.setAttribute('aria-expanded', x);

        });

        $('.bx.bxs-up-arrow').click(function(){

            var x = this.getAttribute('aria-expanded');

                if(x == "true"){
                    x = "false";
                }else{
                    x = "true";
                }

            this.setAttribute('aria-expanded', x);

        });

    </script>
@endsection
