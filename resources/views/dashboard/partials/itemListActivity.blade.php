<ol>
@foreach ($activities as $activity)
        <li>
            <div class="mainActivity">
                <div class="row">
                    <p>
                    @if(strtotime(date('d-m-Y', strtotime($activity->dateAct)))<(strtotime(date('d-m-Y')))) 
                        <div class="divTime" id="#divTime" tabindex="0" style="background-color:#DDBFC8;">               
                    @elseif(!$activity->isNulledAct)
                        <div class="divTime" id="#divTime" tabindex="0" style="background-color: #406cbc;">                               
                    @else
                        <div class="divTime" id="#divTime" tabindex="0" style="background-color:#8A8A8A";>
                    @endif </p>                               
                            <div class="dateDiv"> <p> {{ date('d-m-Y', strtotime($activity->dateAct)) }} </p> </div>     
                            <div class="hourDiv"> <p> {{ date('h:i', strtotime($activity->timeAct)) }} </p> </div>   
                        </div>
                        
                        <div class="divMainDesc" tabindex="0">
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
                        
                        <div class="visDate">
                            @if ($activity->isVisible == 0)
                                <form method="POST" action="{{ route('dashboard.visibleActivity') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                    <button type="submit" class="botonVis"
                                        onclick="return confirm('¿Estas seguro/a?')">
                                        PUBLICAR
                                        <br />
                                        <i class='bx bx-show'></i>
                                    </button>
                                </form>
                            @else
                                <form method="POST" action="{{ route('dashboard.invisibleActivity') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                    <button type="submit" class="botonVis"
                                        onclick="return confirm('¿Estas seguro/a?')">
                                        DESPUBLICAR
                                        <br />
                                        <i class='bx bxs-low-vision'></i>
                                    </button>
                                </form>
                            @endif
                            
                            <div class="controlButton-moreDetails">
                                <i class='bx bxs-down-arrow' role="button" aria-expanded="false" tabindex="0"></i>
                            </div>
                            
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
                    
                    <div class="buttonsBar">

                        <div class="leftCol-buttonsBar">

                            <p> <strong>Información Extra: </strong> </p>
                            <form method="POST" action="{{ route('dashboard.showAllExtraActivity') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                <button type="submit" class="botonesControl" aria-label="Información extra">
                                    
                                    <i class='bx bx-folder-plus' style="font-size:25px"></i>
                                </button>
                            </form>
                            <p> <strong>Editar: </strong> </p>

                            <form method="POST" action="{{ route('dashboard.getActivityUpdateData') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                <button type="submit" class="botonesControl" aria-label="Editar">
                                    <i class='bx bxs-edit' style="font-size:25px"></i>
                                </button>
                            </form>

                        </div>

                        <div class="rightCol-buttonsBar">

                                @if (!$activity->isNulledAct)
                                    <p> <strong>ANULAR: </strong> </p>

                                    <form method="POST" action="{{ route('dashboard.nullActivity') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                        <button type="submit" class="botonesControl" aria-label="Anular"
                                            onclick="return confirm('¿Estas seguro/a?')">
                                            <i class='bx bxs-edit' style="font-size:25px"></i>
                                        </button>
                                    </form>
                                @else
                                    <p tabindex="0"> <strong>Esta actividad se ha anulado</strong> </p>
                                @endif

                                <p> <strong>Eliminar: </strong> </p>
                                <form method="POST" action="{{ route('dashboard.deleteActivity') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                    <button type="submit" class="botonesControl" aria-label="Eliminar"
                                        onclick="return confirm('¿Estas seguro/a?')"><i class='bx bx-trash'
                                            style="font-size:25px;"></i></button>
                                </form>

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

</script>