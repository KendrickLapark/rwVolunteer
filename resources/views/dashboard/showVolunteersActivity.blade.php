@extends('dashboard.partials.base')

@section('title')
    MOSTRANDO VOLUNTARIOS APUNTADOS A LA ACTIVIDAD
@endsection

@section('headlibraries')  

@endsection

@section('content')
    <div class="mainTrayVolAct">

        <div class="sectionTitle">
            <h1 tabindex="0"> MOSTRANDO VOLUNTARIOS APUNTADOS A LA ACTIVIDAD </h1>
        </div>

        <div class="mainActivityInfo">

            <div class="row">

                @if(strtotime(date('d-m-Y', strtotime($activity->dateAct)))<(strtotime(date('d-m-Y')))) 
                        <div class="divTime" style="background-color:#DDBFC8;">  
                            <div class="dateDiv"> <p> {{ date('d-m-Y', strtotime($activity->dateAct)) }} </p> </div>     
                            <div class="hourDiv"> <p> {{ date('h:i', strtotime($activity->timeAct)) }} </p> </div>   
                        </div>             
                    @elseif(!$activity->isNulledAct)
                        <div class="divTime" style="background-color: #406cbc;">
                            <div class="dateDiv"> <p> {{ date('d-m-Y', strtotime($activity->dateAct)) }} </p> </div>     
                            <div class="hourDiv"> <p> {{ date('h:i', strtotime($activity->timeAct)) }} </p> </div>   
                        </div>                               
                    @else
                        <div class="divTime" style="background-color:#8A8A8A";>
                            <div class="dateDiv"> <p> {{ date('d-m-Y', strtotime($activity->dateAct)) }} </p> </div>     
                            <div class="hourDiv"> <p> {{ date('h:i', strtotime($activity->timeAct)) }} </p> </div>   
                        </div>

                    @endif 

                <div class="divMainDesc">
                    <div class="nameDiv">
                        <p> <strong> {{ $activity->nameAct }} </strong> </p>
                    </div>
                    <div class="descDiv">
                       <p> {{$activity->descAct}} </p>
                    </div>
                    <div class="cupoDiv">
                        <p> <strong>Cupo: </strong>
                        {{ App\Http\Controllers\ActivityController::quotaCalculator($activity->quotasAct, $activity->activity_id) }}
                        /
                        {{ $activity->quotasAct }}
                        Libres </p>
                    </div>  
                </div>  
                <div class="controlButton-moreDetails">
                    <i class='bx bxs-down-arrow' role="button" aria-expanded="false"></i>
                </div>
            </div>

            <div class="hidden">
                <div class="eachRow">
                    <div tabindex="0">
                        <p> <strong>Descripcion: </strong>
                         {{ $activity->descAct }} </p>
                    </div>
                    <div tabindex="0">
                        <p> <strong>Entidad: </strong>
                        {{ $activity->entityAct }} </p>
                    </div>
                    <div tabindex="0">
                        <p> <strong>Dirección: </strong>
                        {{ $activity->direAct }} </p>
                    </div>
                    <div tabindex="0">
                        <p> <strong>Requisito Previo: </strong>
                        {{ $activity->requiPrevAct }} </p>
                    </div>
                    <div tabindex="0">
                        <p> <strong>Formacion deseada: </strong>
                        {{ $activity->formaAct }} </p>
                    </div>
                    <div tabindex="0">
                        <p> <strong>Requisitos: </strong>
                        {{ $activity->requiAct }} </p>
                    </div>
                </div>
                <div class="eachRow">
                    <div>
                        <p tabindex="0"> <strong>Tipos de Actividad: </strong> </p>
                        @foreach ($activityTypes as $activityType)
                            @foreach ($activity->typeAct as $itemActivityType)
                                @if ($activityType->typeAct_id == $itemActivityType->typeAct_id)
                                    <p tabindex="0">{{ $itemActivityType->nameTypeAct }}</p>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <div class="mainDataVolAct">

            <ol>
            @foreach($volunteers as $volunteer)

            <li>
                <div class="mainData">
                    <div class="row">
                        <div class="avatarUserRow" tabindex="0">
                            @if ($volunteer->imageVol == 0 || $volunteer == null)
                                <img src="<?php echo asset('images/dashboard/noProfileImage.jpg'); ?>" alt="No hay imagen" class="avatarInShowAllUsers">
                            @else
                                <img src="{{ asset('storage/avatar/' . $volunteer->imageVol) }}" alt="{{ $volunteer->nameVol }} avatar"
                                    class="avatarInShowAllUsers">
                            @endif
                        </div>
                        <div class="nameSurVol" tabindex="0">
                            <p> {{ $volunteer->nameVol }}         
                            {{ $volunteer->surnameVol }} 
                            {{ $volunteer->surname2Vol }} </p>                     
    
                        </div>
    
                        <div class="controlButtonMoreDetails">
                            <i class='bx bxs-down-arrow'role="button" aria-expanded="false" tabindex="0"></i>
                        </div>
                                           
                    </div>
                    <div class="hidden">
                        <div class="eachRow">
                            <div tabindex="0">
                                <p> <strong>Fecha de nacimiento: </strong>
                                {{ date('d-m-Y', strtotime($volunteer->birthDateVol)) }} </p>
                            </div>
                            <div tabindex="0">
                                <p> <strong>{{ $volunteer->typeDocVol }}: </strong>
                                {{ $volunteer->numDocVol }} </p>
                            </div>
                            <div tabindex="0">
                                <p> <strong>Sexo:</strong>
                                {{ $volunteer->sexVol }} </p>
                            </div>
                            <div tabindex="0">
                                <p> <strong>Talla de camiseta: </strong>
                                {{ $volunteer->shirtSizeVol }} </p>
                            </div>
                        </div>
                        <div class="eachRow">
                            <div tabindex="0">
                                <p> <strong>Delegaciones: </strong>
                                @if (count($volunteer->delegations) == 0)
                                    No tiene delegación </p>
                                @else
                                    @foreach ($volunteer->delegations as $delegation)
                                        {{ $delegation->nameDel }} ,
                                    @endforeach </p>
                                @endif
                            </div>
                        </div>
                        <div class="eachRow">
                            <div>                           
                                <div tabindex="0">
                                    <p> <strong>Dirección: </strong>
                                    {{ $volunteer->typeViaVol }}
                                    {{ $volunteer->direcVol }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Nº: </strong>
                                    {{ $volunteer->numVol }}
                                    {{ $volunteer->flatVol }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Código Postal: </strong>
                                    {{ $volunteer->codPosVol }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Provincia: </strong>
                                    {{ $volunteer->stateVol }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Ciudad: </strong>
                                    {{ $volunteer->townVol }} </p>
                                </div>
                                <div tabindex="0">
                                    <p> <strong>Información Adicional: </strong>
                                    {{ $volunteer->aditiInfoVol }} </p>
                                </div>
    
                            </div>
                            <div tabindex="0">
                                <p> <strong>Educación: </strong>
                                @if (count($volunteer->education) == 0)
                                     No tiene titulación registrada </p>
                                @else
                                    @foreach ($volunteer->education as $education)
                                    <button class="accordionUsers">{{ $education->titleEdu }} <i class='bx bxs-down-arrow' id='arrowDownload'></i> </button> 
                                    <div class="downloadPanel">                                   
                                        <form method="POST" action="{{ route('dashboard.downloadThatEducation') }}"
                                            accept-charset="UTF-8" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $education->education_id }}">
                                            <p><button type="submit" id="downloadEdu" class="downloadButton"><i
                                                        class='bx bx-save'></i></button></p>
                                        </form>
                                    </div>
                                    @endforeach
                                @endif
                            </div>                    
                            <div>
                                <p> <strong tabindex="0">Documentos: </strong> </p>
                                @if (count($volunteer->documents) == 0)
                                    <p> No tiene titulación registrada </p>
                                @else
                                    @foreach ($volunteer->documents as $document)
                                    <button class="accordionUsers"> <p> {{ $document->titleDoc }}  
                                        <i class='bx bxs-down-arrow' id='arrowDownload'></i> </p> </button>  
                                    <div class="downloadPanel">                                  
                                        <form method="POST" action="{{ route('dashboard.showDocument') }}">
                                            @csrf
                                            <input type="hidden" name="doc" aria-label="Descargar documento" value="{{ $document->doc_id }}">
                                            <button type="submit" {{--id="showDocDoc"--}} aria-label="descargar documento" class="downloadButton"><i
                                                    class='bx bx-save'></i></button>
                                        </form>
                                    </div>
                                    </br>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        @if (date('Y') - date('Y', strtotime($volunteer->birthDateVol)) <= 17)
                            <div class="eachRow">
                                <div>
                                    <p> <span class="redMark">ES MENOR</span> </p>
                                    <div>
                                        <p> <strong>Autorizador:</strong>
                                        {{ $volunteer->nameAuthVol }} </p>
                                    </div>
                                    <div>
                                        <p> <strong>Documento de identidad del autorizador:</strong>
                                        {{ $volunteer->numDocAuthVol }} </p>
                                    </div>
                                    <div>
                                        <p> <strong>Teléfono del autorizador:</strong>
                                        <a href="tel:+34{{ $volunteer->tlfAuthVol }}">{{ $volunteer->tlfAuthVol }}</a> </p>
                                    </div>
                                </div>
                            </div>
                        @endif
    
                        <div class="eachRow">
                            <div>
                                    <div tabindex="0"> <p> <strong>Intereses:</strong> </p> </div>
                                    @if (count(App\Http\Controllers\UsersController::showEachInterest($volunteer->activities)) == 0)
                                        <div tabindex="0"><p> Aun no tenemos suficientes datos para mostrar intereses </p> 
                                        </div>
                                    @else
                                        <div>
                                            @foreach (App\Http\Controllers\UsersController::showEachInterest($volunteer->activities) as $typeAct)
                                                <p>{{ $typeAct }}</p>
                                            @endforeach
                                        </div>
                                    @endif                           
                            </div>
                        </div>
                        <div class="eachRow">
                            <div>
                                <div class="eachRow">
                                    <div tabindex="0"> <p> <strong>Actividades a las que se ha inscrito:</strong> </p> </div>
                                </div>
                                @if (count($volunteer->inscriptions) == 0)
                                    <div class="eachRowInscription">
                                        <p> <div tabindex="0">No se ha unido a ninguna actividad aun</div> </p>
                                    </div>
                                @else
                                    @foreach ($volunteer->inscriptions as $eachInscription)
                                        <div class="eachRowInscription">
                                            <div style="width:200px;" tabindex="0">
                                                <p> <strong>{{ $eachInscription->activity->nameAct }}</strong> </p>
                                            </div>
                                            <div style="width:100px;" tabindex="0">
                                                <p> {{ $eachInscription->activity->dateAct }} </p>
                                            </div>
                                            <div tabindex="0"> <p> 
                                                @if ($eachInscription->isCompletedIns)
                                                    ACEPTADO
                                                @elseif(is_null($eachInscription->filenameIns) && is_null($eachInscription->isCompletedIns))
                                                    RECHAZADO
                                                @elseif ($eachInscription->filenameIns == null)
                                                    DEBES DE SUBIR EL DOCUMENTO FIRMADO EN LA SECCIÓN DE NOTIFICACIONES
                                                @elseif ($eachInscription->filenameIns != null)
                                                    PREINSCRIPCIÓN REALIZADA<br />
                                                    ESPERANDO VALIDACIÓN DE UN ADMINISTRADOR
                                                @endif </p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="eachRow">
                            <div class="controlButton lessDetails">
                                <i class='bx bxs-up-arrow' role="button" tabindex="0" aria-expanded="true" style="font-size:20px"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            @endforeach
            </ol>   

            <form action = "{{route('CSV.getUsersActivity', [$activity->activity_id, $activity->nameAct])}}" method="GET">
                <div id="excelDownload">
                    <button type="submit" id="excelDownload" title="Descargar lista de voluntarios apuntados a la actividad"><i class='bx bx-cloud-download'></i></button>
                </div>
            </form>

        </div>
    </div>

    <script>

        $(document).ready(function(){
    
            $('.hidden').hide();

            $(".row").on("click", function() {
                if($(this).next().is(':hidden'))
                    $(this).next().show('slow');
                else{
                    $(this).next().hide('slow');
                }
            });

            $(".lessDetails").on("click", function() {
                $(this).parent().parent().hide('slow');
            });
    

            $(".downloadPanel").hide();
            $('.accordionUsers').on("click", function(){
                if($(this).next().is(':hidden')){
                    $(this).next().show('slow');
                }    
                else{
                    $(this).next().hide('slow');
                }  
            })
        });
    
    </script>

@endsection




