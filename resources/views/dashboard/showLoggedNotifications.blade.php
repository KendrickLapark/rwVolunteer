@extends('dashboard.partials.base')

@section('title')
    Notificiaciones
@endsection

@section('content')
    <div class="mainTrayLogNot">

        <div class="sectionTitle">
            <h1 tabindex="0"> PROCESOS QUE COMPLETAR </h1>
        </div>
        @if (session()->has('uploadPreinscription'))
            <div class="formSubmitSuccess center">
                {{ session('uploadPreinscription') }}
            </div>
        @endif

        @foreach ($inscription as $inscription)
            @if ($inscription->filenameIns == null)
                <div class="mainDataLogNot">
                    <div class="rowLogNot" tabindex="0">
                        <div> <strong>Nombre: </strong>{{ $inscription->activity->nameAct }} </div>
                        <div> <strong>Cupo: </strong>
                            {{ App\Http\Controllers\ActivityController::quotaCalculator(
                                $inscription->activity->quotasAct,
                                $inscription->activity->activity_id,
                            ) }} / {{ $inscription->activity->quotasAct }}
                            Libres
                        </div>
                        <div> <strong>Hora de inicio: </strong>{{ $inscription->activity->timeAct }} </div>
                        <div> <strong>Hora Fin: </strong>{{ $inscription->activity->endTimeAct }} </div>                        
                        <div> <strong>Fecha: </strong>{{ date('d-m-Y', strtotime($inscription->activity->dateAct)) }} </div>                        
                        <div class="controlButton moreDetails" tabindex="0" aria-label="pulsar para desplegar detalles de la actividad">
                            <i class='bx bxs-down-arrow' id="displayTriggerIcon"></i>
                        </div>
                    </div>
                    <div class="hiddenLogNot" tabindex="0">
                        <div class="eachRow">
                            <div> <strong>Descripcion: </strong>
                                {{ $inscription->activity->descAct }} </div>
                            <div> <strong>Entidad: </strong>
                                {{ $inscription->activity->entityAct }} </div>
                            <div> <strong>Dirección: </strong>
                                {{ $inscription->activity->direAct }} </div>
                            <div> <strong>Requisito Previo: </strong>
                                {{ $inscription->activity->requiPrevAct }} </div>
                            <div> <strong>Formacion deseada: </strong>
                                {{ $inscription->activity->formaAct }} </div>
                            <div> <strong>Requisitos: </strong>
                                {{ $inscription->activity->requiAct }}  </div>                               
                        </div>
                        <div class="eachRow">
                            <div>
                                <strong>Tipos de Actividad: </strong>
                                @foreach ($activityTypes as $activityType)
                                    @foreach ($inscription->activity->typeAct as $itemActivityType)
                                        @if ($activityType->typeAct_id == $itemActivityType->typeAct_id)
                                            <p>{{ $itemActivityType->nameTypeAct }}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <div>
                                <p tabindex="0">Descargar documento</p>
                                <form method="POST" action="{{ route('PDF.generatepreinscription') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                                    <button type="submit" id="downloadPDF" class="botonesControl" aria-label="descargar documento"><i
                                            class='bx bx-save'></i></button>
                                </form>
                                <hr />
                                <form method="POST" action="{{ route('dashboard.uploadPreinscription') }}"
                                    accept-charset="UTF-8" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                                    <p><input type="file" name="file" accept="application/pdf" aria-label="subir documento en formato pdf" required></p>
                                    <p><button type="submit" id="registerSubmitButton" class="botonesControl" aria-label="subir pdf firmado">SUBIR PDF
                                            FIRMADO</button></p>
                                </form>
                            </div>
                        </div>
                        <div class="eachRow">
                            <div class="controlButton lessDetails" tabindex="0">
                                <i class='bx bxs-up-arrow'></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection


@section('headlibraries')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        $(() => {
            $(".hiddenLogNot").hide();
            $(".rowLogNot").on("click", function() {
                $(this).siblings().show('slow');
            });

            $(".lessDetails").on("click", function() {
                $(this).parent().parent().hide('slow');
            })

            $(".rowLogNot").on("keypress", function(e) {

                var key = e.which;

                    if(key == 13){

                        var icono = document.querySelector(".rowLogNot > #displayTriggerIcon");
                        if ($(this).siblings().is(':visible')) {
                            $(this).siblings().hide();
                            icono.style.transform = ''
                        } else {
                            $(this).siblings().show();
                            icono.style.transform = 'rotate(180deg)'
                        }

                    }

            });

            $(".hiddenLogNot").on("keypress", function(e) {

                var key = e.which;

                    if(key == 13){

                        var icono = document.querySelector(".bx.bxs-up-arrow");
                        if ($(this).is(':visible')) {
                            $(this).hide();
                            icono.style.transform = ''
                        } else {
                            $(this).show();
                            icono.style.transform = 'rotate(180deg)'
                        }

                    }

            });

        });
    </script>
@endsection
