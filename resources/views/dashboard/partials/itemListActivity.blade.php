<ol>

@php
$fechas = [];
@endphp

@foreach ($activities as $actividad)
    @php
        $fecha = date('Y-m', strtotime($actividad->dateAct));
    @endphp

    @if (!in_array($fecha, $fechas))
        @php
            $fechas[] = $fecha;
        @endphp
    @endif

@endforeach

@foreach($fechas as $fecha)
    <div class="dateAccordion">
        {{$fecha}}
        <i class='bx bx-caret-down' id="downArrow" role="button" aria-expanded="false" aria-describedby="title-inscription" tabindex="0"></i>
    </div>

@foreach ($activities as $activity)

    @if(date('Y-m', strtotime($activity->dateAct)) === $fecha)

        <li>
            <div class="mainActivity">
                <div class="row" tabindex="0">
                    <p>
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

                    @endif </p>                                                          
                        
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
                                <i class='bx bxs-down-arrow' role="button" aria-expanded="false"></i>
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
                        <p tabindex="0"> <strong>Tipos de Actividad: </strong> 
                        @foreach ($activityTypes as $activityType)
                            @foreach ($activity->typeAct as $itemActivityType)
                                @if ($activityType->typeAct_id == $itemActivityType->typeAct_id)
                                {{ preg_replace('/[\d\.]+/', '', $itemActivityType->nameTypeAct) }}
                                @endif
                            @endforeach
                        @endforeach </p>
                    </div>
                </div>
                    
                    <div class="buttonsBar">

                        <div class="col-buttonsBar">

                            <div class="buttonAct">
                                <p> <strong>Información: </strong> </p>
                                <form method="GET" action="{{ route('dashboard.showVolunteersActivity' , [$activity->activity_id])}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                    <button type="submit" class="botonesControl" aria-label="Información extra">
                                        
                                        <i class='bx bx-folder-plus' style="font-size:25px"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="buttonAct">
                                <p> <strong>Información Extra: </strong> </p>
                                <form method="POST" action="{{ route('dashboard.showAllExtraActivity') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                    <button type="submit" class="botonesControl" aria-label="Información extra">
                                        
                                        <i class='bx bx-folder-plus' style="font-size:25px"></i>
                                    </button>
                                </form>
                            </div>

                        </div>

                        <div class="col-buttonsBar">

                            <div class="buttonAct">
                                <p> <strong>Editar: </strong> </p>
                                <form method="POST" action="{{ route('dashboard.getActivityUpdateData')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                    <button type="submit" class="botonesControl" aria-label="Editar">
                                        <i class='bx bxs-edit' style="font-size:25px"></i>
                                    </button>
                                </form>
                            </div>                  

                            <div class="buttonAct">
                                @if (!$activity->isNulledAct)
                                    <p> <strong>Anular: </strong> </p>

                                    <form method="POST" action="{{ route('dashboard.nullActivity') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                        <button type="submit" class="botonesControl" aria-label="Anular"
                                            onclick="return confirm('¿Estas seguro/a?')">
                                            <i class='bx bxs-edit' style="font-size:25px"></i>
                                        </button>
                                    </form>
                                @else
                                    <p tabindex="0"> <strong>Deshacer nulidad:</strong> </p>
                                    <form method="POST" action="{{ route('dashboard.nullActivity') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $activity->activity_id }}">
                                        <button type="submit" class="botonesControl" aria-label="Deshacer nulidad"
                                            onclick="return confirm('¿Estas seguro/a?')">
                                            <i class='bx bxs-edit' style="font-size:25px"></i>
                                        </button>
                                    </form>
                                @endif
                            </div>

                        </div>

                        <div class="col-buttonsBar">

                            <div class="buttonAct">
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

                <div class="controlButton moreDetails">
                    <i class='bx bxs-up-arrow' style="padding-top: 10px"></i>
                </div>

            </div>
    </div>

    </li>

    @endif
    
@endforeach

@endforeach

</ol>

<script type="text/javascript">

        var currentDate = new Date();

        var currentYear = currentDate.getFullYear();
        var currentMonth = currentDate.getMonth() + 1;

        var currentYM = currentYear + '-' + (currentMonth < 10 ? '0' + currentMonth : currentMonth);

        var accordionDivs = document.querySelectorAll(".dateAccordion");

        accordionDivs.forEach(function(div) {
            var fechaDiv = div.textContent.trim();

            if (fechaDiv < currentYM) {
                div.style.backgroundColor = "#DDBFC8"; 
            } else {
                div.style.backgroundColor = "#3F6BBF"; 
            }

        });

        $(document).ready(function(){
            $('.nameDiv').attr('aria-label', 'Nombre de la actividad');

        });

        $('.mainActivityAct li').hide();
        $('.hidden').hide();

        $('.dateAccordion').click(function(){

            $(this).nextUntil('.dateAccordion', 'li').toggle('slow');

        });

        $('.dateAccordion').on("keypress", function(e){

            var key = e.which;

            if(key == 13){    
                $(this).nextUntil('.dateAccordion', 'li').toggle('slow');
            }

        });

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

        $(".row").on("keypress", function(e) {

        var key = e.which;

            if(key == 13){

                var icono = document.querySelector(".mainData .row");
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

                var icono = document.querySelector(".mainData .row");
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
        var dateAccordion = document.getElementsByClassName('dateAccordion');
        var rows = document.getElementsByClassName('row');
        var hiddens = document.getElementsByClassName('hidden');
        var buttonsBars = document.getElementsByClassName('buttonsBar');
        var downArrows = document.getElementsByClassName('bx-caret-down');
        var buttons = document.getElementsByClassName('botonVis');
        var botonesControl = document.getElementsByClassName('botonesControl');
        var divTime = document.getElementsByClassName('divTime');

        switch (storedProperty){
            case 'contraste-alto':

                for (var i = 0; i < dateAccordion.length; i++) {
                    dateAccordion[i].style.backgroundColor = 'black';
                    dateAccordion[i].style.color = '#00FFFF'; 
                    downArrows[i].style.color = '#00FFFF'; 
                }

                for (var i = 0; i < rows.length; i++) {
                    rows[i].style.backgroundColor = 'black';
                    rows[i].style.color = '#00FFFF';
                    hiddens[i].style.backgroundColor = 'black';
                    hiddens[i].style.color = '#00FFFF';
                    buttonsBars[i].style.backgroundColor = 'black';
                    buttonsBars[i].style.color = '#00FFFF';
                    buttons[i].style.backgroundColor = 'black'; 
                    buttons[i].style.color = '#00FFFF';
                    divTime[i].style.backgroundColor = 'black';
                    divTime[i].style.color = '#00FFFF';

                }

                for (var j = 0; j < botonesControl.length; j++){
                    botonesControl[j].style.backgroundColor = 'black'; 
                    botonesControl[j].style.color = '#00FFFF';  
                }

            break;
            case 'contraste-negativo':

                for (var i = 0; i < dateAccordion.length; i++) {
                    dateAccordion[i].style.backgroundColor = 'black';
                    dateAccordion[i].style.color = 'yellow'; 
                    downArrows[i].style.color = 'yellow';
                }

                for (var i = 0; i < rows.length; i++) {
                    rows[i].style.backgroundColor = 'black';
                    rows[i].style.color = 'yellow'; 
                    hiddens[i].style.backgroundColor = 'black';
                    hiddens[i].style.color = 'yellow';
                    buttonsBars[i].style.backgroundColor = 'black';
                    buttonsBars[i].style.color = 'yellow';
                    buttons[i].style.backgroundColor = 'black'; 
                    buttons[i].style.color = 'yellow';  
                    divTime[i].style.backgroundColor = 'black';
                    divTime[i].style.color = 'yellow';
                }

                for(var i = 0; i < botonesControl.length; i++){
                    botonesControl[i].style.backgroundColor = 'black'; 
                    botonesControl[i].style.color = 'yellow';  
                }

            break;
            case 'modo-claro':

                for (var i = 0; i < dateAccordion.length; i++) {
                    dateAccordion[i].style.backgroundColor = 'white';
                    dateAccordion[i].style.color = 'black'; 
                    downArrows[i].style.color = 'black'; 
                }

                for (var i = 0; i < rows.length; i++) {
                    rows[i].style.backgroundColor = 'white';
                    rows[i].style.color = 'black'; 
                    hiddens[i].style.backgroundColor = 'white';
                    hiddens[i].style.color = 'black';
                    buttonsBars[i].style.backgroundColor = 'white';
                    buttonsBars[i].style.color = 'black';
                    buttons[i].style.backgroundColor = 'black'; 
                    buttons[i].style.color = 'white';   
                    divTime[i].style.backgroundColor = 'white';
                    divTime[i].style.color = 'black';
                }

                for(var i = 0; i < botonesControl.length; i++){
                    botonesControl[i].style.backgroundColor = 'white'; 
                    botonesControl[i].style.color = 'black';  
                }

            break;
        }

</script>