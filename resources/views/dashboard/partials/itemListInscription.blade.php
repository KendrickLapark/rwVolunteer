
<li>
    @if($inscription->filenameIns==null)
        <div class="msg_Inscription" id="accordion-inscription">
            <p id="title-inscription"> Inscripcion incompleta para actividad : {{$inscription->activity->nameAct}} </p>
            <i class='bx bx-caret-down' id="downArrow" role="button" aria-expanded="false" aria-describedby="title-inscription" 
                aria-controls="inscription-panel" tabindex="0"></i>
        </div> 
    @elseif($inscription->filenameIns!=null)
        <div class="msg_Inscription" id="accordion-inscription">
            <p id="title-inscription"> Inscripcion realizada para actividad : {{$inscription->activity->nameAct}} </p>
            <i class='bx bx-caret-down' id="downArrow" role="button" aria-expanded="false" aria-describedby="title-inscription" 
                aria-controls="inscription-panel" tabindex="0"></i>
        </div> 
    @endif
        <div class="hidden_msg_Inscription" id="inscription-panel" aria-labelledby="accordion-inscription" role="region">
        <div class="inner_hidden_msg_Inscription" tabindex="0">
                <div class="row_act_desc"> <strong> Descripción: </strong>{{ $inscription->activity->nameAct }}</div>
                <div class="row_act_title"> <strong> Requisito previo: </strong> {{ $inscription->activity->requiPrevAct }}</div>
                <div class="row_type_act"> <strong> Tipo de actividad: </strong> {{-- {{$inscription->activity->typeAct[0]->nameTypeAct}} --}} </div>
                <div class="row_act_timeAct"> <strong> Formación deseada: </strong> {{ $inscription->activity->formaAct }} </div>
                <div class="row_act_dateAct"> <strong> Fecha de la actividad: </strong>{{ date('d-m-Y', strtotime($inscription->activity->dateAct))}}</div>
                <div class="row_act_status"> 
                    <strong> Estado de la inscripción: </strong>
                    @if ($inscription->isDoneIns)
                        HAS PARTICIPADO EN ESTA ACTIVIDAD
                    @elseif($inscription->activity->isNulledAct)
                        ACTIVIDAD ANULADA
                    @elseif($inscription->isCompletedIns)
                        ACEPTADO
                    @elseif(is_null($inscription->filenameIns) && is_null($inscription->isCompletedIns))
                        RECHAZADO
                    @elseif ($inscription->filenameIns == null)
                        DEBES DE SUBIR EL DOCUMENTO FIRMADO
                    @elseif ($inscription->filenameIns != null)
                        PREINSCRIPCIÓN REALIZADA <br/>
                        ESPERANDO VALIDACIÓN DE UN ADMINISTRADOR
                    @endif
                </div>
                <form method="POST" action="{{ route('PDF.generatepreinscription') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                    <button type="submit" class="button_dashboard"><i
                            class='bx bx-caret-down'></i> Descargar documento</button>
                </form>
        
                    <form method="POST" action="{{ route('dashboard.uploadPreinscription') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                        <p><input type="file" role="button" aria-label="Seleccione un archivo para la inscripción en la actividad" 
                                name="file" accept="application/pdf" required></p>
                        <p><button type="submit" class="button_dashboard" id="dash_but1">SUBIR PDF FIRMADO</button></p>
                    </form>
                    <form method="POST" action="{{ route('dashboard.unDoInscription') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                        <button type="submit" class="button_dashboard" id="dash_but2">
                            <i class='bx bx-x-circle'></i>Cancelar preinscripción</button>
                    </form>
        </div>
    </div>
</li>