@foreach ($volunteers as $volunteer)
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
                        {{ $volunteer->nameVol }}         
                        {{ $volunteer->surnameVol }} 
                        {{ $volunteer->surname2Vol }} 
                        <br />

                    </div>

                    <div class="controlButtonMoreDetails" tabindex="0">
                        <i class='bx bxs-down-arrow'></i>
                    </div>
                                       
                </div>
                <div class="hidden">
                    <div class="eachRow">
                        <div tabindex="0">
                            <strong>Fecha de nacimiento: </strong>
                            {{ date('d-m-Y', strtotime($volunteer->birthDateVol)) }}
                        </div>
                        <div tabindex="0">
                            <strong>{{ $volunteer->typeDocVol }}: </strong>
                            {{ $volunteer->numDocVol }}
                        </div>
                        <div tabindex="0">
                            <strong>Sexo:</strong>
                            {{ $volunteer->sexVol }}
                        </div>
                        <div tabindex="0">
                            <strong>Talla de camiseta: </strong>
                            {{ $volunteer->shirtSizeVol }}
                        </div>
                    </div>
                    <div class="eachRow">
                        <div tabindex="0">
                            <strong>Delegaciones: </strong>
                            @if (count($volunteer->delegations) == 0)
                                No tiene delegación
                            @else
                                @foreach ($volunteer->delegations as $delegation)
                                    {{ $delegation->nameDel }},
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="eachRow">
                        <div>                           
                            <div tabindex="0">
                                <strong>Dirección: </strong> <br />
                                {{ $volunteer->typeViaVol }}
                                {{ $volunteer->direcVol }}
                            </div>
                            <div tabindex="0">
                                <strong>Nº: </strong>
                                {{ $volunteer->numVol }}
                                {{ $volunteer->flatVol }}
                            </div>
                            <div tabindex="0">
                                <strong>Código Postal: </strong>
                                {{ $volunteer->codPosVol }}
                            </div>
                            <div tabindex="0">
                                <strong>Provincia: </strong>
                                {{ $volunteer->stateVol }}
                            </div>
                            <div tabindex="0">
                                <strong>Ciudad: </strong>
                                {{ $volunteer->townVol }}
                            </div>
                            <div tabindex="0">
                                <strong>Información Adicional: </strong>
                                {{ $volunteer->aditiInfoVol }}
                            </div>

                        </div>
                        <div tabindex="0">
                            <strong>Educación: </strong><br />
                            @if (count($volunteer->education) == 0)
                                No tiene titulación registrada
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
                            <strong tabindex="0">Documentos: </strong> <br />
                            @if (count($volunteer->documents) == 0)
                                No tiene titulación registrada
                            @else
                                @foreach ($volunteer->documents as $document)
                                <button class="accordionUsers">{{ $document->titleDoc }} <i class='bx bxs-down-arrow' id='arrowDownload'></i> </button>  
                                <div class="downloadPanel">                                  
                                    <form method="POST" action="{{ route('dashboard.showDocument') }}">
                                        @csrf
                                        <input type="hidden" name="doc" value="{{ $document->doc_id }}">
                                        <button type="submit" {{--id="showDocDoc"--}} class="downloadButton"><i
                                                class='bx bx-save'></i></button>
                                    </form>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @if (date('Y') - date('Y', strtotime($volunteer->birthDateVol)) <= 17)
                        <div class="eachRow">
                            <div>
                                <span class="redMark">ES MENOR</span>
                                <div>
                                    <strong>Autorizador:</strong>
                                    {{ $volunteer->nameAuthVol }}
                                </div>
                                <div>
                                    <strong>Documento de identidad del autorizador:</strong>
                                    {{ $volunteer->numDocAuthVol }}
                                </div>
                                <div>
                                    <strong>Teléfono del autorizador:</strong>
                                    <a href="tel:+34{{ $volunteer->tlfAuthVol }}">{{ $volunteer->tlfAuthVol }}</a>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="eachRow">
                        <div>
                                <div tabindex="0"><strong>Intereses:</strong></div>
                                @if (count(App\Http\Controllers\UsersController::showEachInterest($volunteer->activities)) == 0)
                                    <div tabindex="0">Aun no tenemos suficientes datos para mostrar intereses 
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
                                <div tabindex="0"><strong>Actividades a las que se ha inscrito:</strong></div>
                            </div>
                            @if (count($volunteer->inscriptions) == 0)
                                <div class="eachRowInscription">
                                    <div tabindex="0">No se ha unido a ninguna actividad aun</div>
                                </div>
                            @else
                                @foreach ($volunteer->inscriptions as $eachInscription)
                                    <div class="eachRowInscription">
                                        <div style="width:200px;" tabindex="0">
                                            <strong>{{ $eachInscription->activity->nameAct }}</strong>
                                        </div>
                                        <div style="width:100px;" tabindex="0">
                                            {{ $eachInscription->activity->dateAct }}
                                        </div>
                                        <div tabindex="0">
                                            @if ($eachInscription->isCompletedIns)
                                                ACEPTADO
                                            @elseif(is_null($eachInscription->filenameIns) && is_null($eachInscription->isCompletedIns))
                                                RECHAZADO
                                            @elseif ($eachInscription->filenameIns == null)
                                                DEBES DE SUBIR EL DOCUMENTO FIRMADO EN LA SECCIÓN DE NOTIFICACIONES
                                            @elseif ($eachInscription->filenameIns != null)
                                                PREINSCRIPCIÓN REALIZADA<br />
                                                ESPERANDO VALIDACIÓN DE UN ADMINISTRADOR
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="eachRow">
                        <div class="controlButton lessDetails" tabindex="0">
                            <i class='bx bxs-up-arrow' style="font-size:20px"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach