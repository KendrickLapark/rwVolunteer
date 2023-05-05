@extends('dashboard.partials.base')

@section('title')
    Mostrar todas las actividades
@endsection

@section('content')
    <div class="mainTray ">
        <div class="sectionTitle">
            <h1 tabindex="0"> MUESTRA TODA LA INFORMACIÓN EXTRA </h1>
        </div>
        <div class="mainDataExtAct">
            <div class="rowExtAct">
                <div tabindex="0">
                    <p> <strong>Nombre: </strong>{{ $activity->nameAct }} </p>
                </div>
                <div tabindex="0">
                    <p> <strong>Cupo: </strong>
                    {{ App\Http\Controllers\ActivityController::quotaCalculator($activity->quotasAct, $activity->activity_id) }}
                    /
                    {{ $activity->quotasAct }}
                    Libres </p>
                </div>
                <div tabindex="0"> <p> <strong>Hora de inicio: </strong>{{ $activity->timeAct }} </p> </div>
                <div tabindex="0"> <p> <strong>Hora Fin: </strong>{{ $activity->endTimeAct }} </p> </div>

                <div tabindex="0"> <p> <strong>Fecha: </strong>{{ date('d-m-Y', strtotime($activity->dateAct)) }} </p> </div>
            </div>
            <div class="hiddenExtAct">
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
                        <p>  <strong>Requisitos: </strong>
                        {{ $activity->requiAct }} </p>
                    </div>
                </div>
                <div class="eachRow">
                    <div>
                        <p tabindex="0"> <strong>Tipos de Actividad: </strong> <p> 
                        @foreach ($activity->typeAct as $itemActivityType)
                            <p tabindex="0">{{ $itemActivityType->nameTypeAct }}</p>
                        @endforeach
                    </div>
                    <div class="visDate" tabindex="0">
                        <p> <strong>Visibilidad:</strong> </p>
                        @if ($activity->isVisible == 0)
                            <i class='bx bxs-low-vision' style="font-size:25px;"></i>
                            <p> Actualmente Invisible / No publicado </p>
                        @else
                            <i class='bx bx-show' style="font-size:25px;"></i>
                            <p> Actualmente Visible / Publicado </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="secondaryTray center ">
            <form method="POST" action="{{ route('dashboard.formCreateInfoExtra') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                <button type="submit" id="submit" class="botonesControl" aria-label="Crear información extra" >
                    CREAR INFORMACIÓN EXTRA
                    <br />
                    <i class='bx bx-folder-plus'></i>
                </button>
            </form>
            @if (count($activity->infoExtra) == 0)
                <div class="center" tabindex="0">
                    <p> Esta actividad no tiene Información Extra </p>
                </div>
            @else
                @foreach ($activity->infoExtra as $infoExtra)
                    <div class="mainData">
                        <div class="row">
                            <div class="extraName" tabindex="0">
                                <p> <strong>Nombre: </strong>{{ $infoExtra->titleInfoExtra }} </p>
                            </div>
                            <div class="extraName">
                                <form method="POST" action="{{ route('dashboard.showInfoExtra') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $infoExtra->extraAct_id }}">
                                    <button type="submit" id="downloadDoc" class="botonesControl"><i
                                            class='bx bx-save'></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
