<ol>
@foreach ($volunteers as $volunteer)
        <li>
            <div class="mainData">
                <div class="row">
                    <div class="avatarUserRow" tabindex="0">
                        @if ($volunteer->imageVol == 0 || $volunteer == null)
                            <img src="<?php echo asset('images/dashboard/noProfileImage.jpg'); ?>" alt="No hay imagen" class="avatarInShowAllUsers">
                        @else
                            <img src="data:image/jpeg;base64,{{ base64_encode(Storage::get('avatar/' . $volunteer->imageVol)) }}"
                                alt="{{ Auth::user()->nameVol }}" class="avatarInShowAllUsers" />
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
                                {{ $volunteer->flatVol }}
                                {{ $volunteer->floorVol}} </p>
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

                    <div class="row_buttons_user">

                        @if(Auth::user()->id != $volunteer->id)

                            @if($volunteer->isLoggeable == 0)
                                <div class="card_btn_user">
                                    <p> <strong>Desbloquear usuario: </strong> </p>
                                    <form method="POST" action="{{ route('dashboard.unbanUser') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $volunteer->id }}">
                                        <button type="submit" class="btn_user"  aria-label="Desbanear usuario"
                                            onclick="return confirm('¿Estas seguro/a?')"><i class='bx bx-lock-open-alt'
                                                style="font-size:25px;"></i></button>
                                    </form>
                                
                                </div>
                            @else

                                <div class="card_btn_user">
                                    <p> <strong>Bloquear usuario:</strong> </p>
                                    <form method="POST" action="{{ route('dashboard.banUser') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $volunteer->id  }}">
                                        
                                        <button type="submit" class="btn_user"  aria-label="Banear usuario"
                                            onclick="return confirm('¿Estas seguro/a?')"><i class='bx bx-lock-alt'
                                                style="font-size:25px;"></i></button>
                                    </form>
                                </div>

                            @endif

                        @endif

                        @if(Auth::user()->id != $volunteer->id)

                            <div class="card_btn_user">
                                <p> <strong>Eliminar usuario:</strong> </p>
                                <form method="POST" action="{{ route('dashboard.deleteUser') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $volunteer->id  }}">
                                    <button type="submit" class="btn_user" aria-label="Eliminar usuario"
                                        onclick="return confirm('¿Estas seguro/a de que quieres eliminar al usuario {{$volunteer->nameVol}} {{$volunteer->surnameVol}} {{$volunteer->surname2Vol}}')"><i class='bx bx-trash'
                                            style="font-size:25px;"></i></button>
                                </form>
                            </div>
                        @endif

                        @if(Auth::user()->isSuperAdminVol)

                            @if($volunteer->isAdminVol)
                                @if(Auth::user()->id != $volunteer->id)
                                    <div class="card_btn_user">
                                        <p> <strong>Quitar administrador:</strong> </p>
                                        <form method="POST" action="{{ route('dashboard.removeAdmin') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $volunteer->id  }}">
                                            <button type="submit" class="btn_user" aria-label="Quitar rol de administrador/a"
                                                onclick="return confirm('¿Estas seguro/a de que quieres quitar la condición de administrador/a a {{$volunteer->nameVol}} {{$volunteer->surnameVol}} {{$volunteer->surname2Vol}}')"><i class='bx bx-trash'
                                                    style="font-size:25px;"></i></button>
                                        </form>
                                    </div>
                                @endif
                            @else
                                <div class="card_btn_user">
                                    <p> <strong>Dar administrador:</strong> </p>
                                    <form method="POST" action="{{ route('dashboard.giveAdmin') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $volunteer->id  }}">
                                        <button type="submit" class="btn_user" aria-label="Dar condición de administrador/a"
                                            onclick="return confirm('¿Estas seguro/a de que quieres dar el rol de administrador/a al usuario {{$volunteer->nameVol}} {{$volunteer->surnameVol}} {{$volunteer->surname2Vol}}')"><i class='bx bxs-user-plus'
                                                style="font-size:25px;"></i></button>
                                    </form>
                                </div>
                            @endif

                        @endif

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

        <script type="text/javascript">

            $('.bx.bxs-down-arrow').click(function(){
        
                var x = this.getAttribute('aria-expanded');
    
                console.log('detected')
        
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

            $(".row").on("keypress", function(e) {

                var key = e.which;

                    if(key == 13){

                        var icono = document.querySelector(".bx.bxs-up-arrow");
                        if ($(this).siblings().is(':visible')) {
                            $(this).siblings().hide('slow');
                            icono.style.transform = ''
                        } else {
                            $(this).siblings().show('slow');
                            icono.style.transform = 'rotate(180deg)'
                        }

                    }

            });

            $(".hidden").on("keypress", function(e) {

            var key = e.which;

                if(key == 13){

                    var icono = document.querySelector(".bx.bxs-up-arrow");
                    if ($(this).is(':visible')) {
                        $(this).hide('slow');
                        icono.style.transform = ''
                    } else {
                        $(this).show('slow');
                        icono.style.transform = 'rotate(180deg)'
                    }

                }

            });

        
        var storedProperty = localStorage.getItem('modo-a11y');    
        var mainData = document.getElementsByClassName('mainData');
        var hidden = document.getElementsByClassName('hidden');
        var accordionUsers = document.getElementsByClassName('accordionUsers');
        var download_buttons = document.getElementsByClassName('downloadButton');
        var row_text = document.getElementsByClassName('row');

        switch (storedProperty){
            case 'contraste-alto':

                for (var i = 0; i < mainData.length; i++){
                    mainData[i].style.backgroundColor = 'black';
                    mainData[i].style.color = '#00FFFF';
                    hidden[i].style.backgroundColor = 'black';
                    hidden[i].style.color = '#00FFFF';
                    accordionUsers[i].style.backgroundColor = 'black';
                    accordionUsers[i].style.color = '#00FFFF';
                    row_text[i].style.color = '#00FFFF';
                }

                for (var j = 0; j < accordionUsers.length; j++){
                    accordionUsers[j].style.backgroundColor = 'black';
                    accordionUsers[j].style.color = '#00FFFF';
                    download_buttons[j].style.backgroundColor = 'black';
                    download_buttons[j].style.color = '#00FFFF';
                }

            break;
            case 'contraste-negativo': 

                for (var i = 0; i < mainData.length; i++){
                    mainData[i].style.backgroundColor = 'black';
                    mainData[i].style.color = 'yellow';
                    hidden[i].style.backgroundColor = 'black';
                    hidden[i].style.color = 'yellow';
                    accordionUsers[i].style.backgroundColor = 'black';
                    accordionUsers[i].style.color = 'yellow';
                    row_text[i].style.color = 'yellow';
                }

                for (var i = 0; i < accordionUsers.length; i++){
                    accordionUsers[i].style.backgroundColor = 'black';
                    accordionUsers[i].style.color = 'yellow';
                }

            break;
            case 'modo-claro':

                for (var i = 0; i < mainData.length; i++){
                    mainData[i].style.backgroundColor = 'white';
                    mainData[i].style.color = 'black';
                    hidden[i].style.backgroundColor = 'white';
                    hidden[i].style.color = 'black';
                    row_text[i].style.color = 'black';
                }

                for (var i = 0; i < accordionUsers.length; i++){
                    accordionUsers[i].style.backgroundColor = 'white';
                    accordionUsers[i].style.color = 'black';
                }

            break;
        }
        
        </script>