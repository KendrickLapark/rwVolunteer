@extends('dashboard.partials.base')

@section('title')
    Selecciona fecha para buscar las actividades de voluntariado
@endsection

@section('headlibraries')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>

@endsection

@section('content')

<div class="mainContainerDateActivities">
    <div class="mainTrayDateActivities">
        <div class="columnDateActivities">
            <div class="titleDateActivities">
                <h1 tabindex="0"> Selecciona una fecha </h1>
            </div>

            <div class="calendario" id="calendario">

            </div>

            <div class="calendar-footer"> Selecciona entre 1 y 7 días</div>

        </div>

        <div class="hiddenDaysActivities">
            <div class="titleDaysAct" id="titleDaysAct">
            </div>
            <div class="mainHiddenDaysActivities">
                    <div class="leftColumnDaysAct">
                        <div class="searchDayActivity" id="searchDayActivity"> </div>
                        <div class="searchDayActivity" id="searchDayActivity"> </div>
                        <div class="searchDayActivity" id="searchDayActivity"> </div>
                    </div>
                    <div class="rightColumnDaysAct">
                        <div class="searchDayActivity" id="searchDayActivity"> </div>
                        <div class="searchDayActivity" id="searchDayActivity"> </div>
                        <div class="searchDayActivity" id="searchDayActivity"> </div>
                        <div class="searchDayActivity" id="searchDayActivity"> </div>                
                    </div> 
                
            </div>   
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {

        var SITEURL = "{{ url('/') }}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function ajaxCall(datos, pos, longitud){

            return $.ajax({

                url:"searchDayActivity",
                type:"GET",
                data:{'searchDayActivity':datos},
                success:function(data){

                    $( ".searchDayActivity" ).each(function( i ) {
                        if(i>=longitud){
                            $( ".searchDayActivity").eq(i).html("");
                                                       
                        }
                    
                    });

                    $('.searchDayActivity').eq(pos).html(data.html);                  

                    $aux = $('.accordion').eq(pos).prev().text(); //texto del dayActTitle
                    $aux2 = $('#dayActTitle').eq(pos);
                       
                    $(".accordion").eq(pos).append($aux); 
                    
                    $('.panel').eq(pos).hide();
                    $('.accordion').eq(pos).on("click", function(){
                        if($(this).next().is(':hidden'))
                            $(this).next().show('slow');
                        else{
                            $(this).next().hide('slow');
                            }                        
                    });

                    $('.panel2').eq(pos).hide();
                    $('.accordion2').eq(pos).on("click", function(){
                        if($(this).next().is(':hidden'))
                            $(this).next().show('slow');
                        else{
                            $(this).next().hide('slow');
                            }                        
                    });

                }

            })

        }

        var calendar = $('#calendario').fullCalendar({
            dayNamesShort: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            monthNames: [
                'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ],
            customButtons:{
                anterior:{
                    text: "Anterior",
                    click: function () { $('#calendario').fullCalendar('prev');}
                },
                siguiente:{
                    text: "Siguiente",
                    click: function () { $('#calendario').fullCalendar('next');}
                }
            },
            header: {
                left: 'anterior',
                center: 'title, today',
                right: 'siguiente'
            },
            buttonText: {
                today: 'HOY',
                day: 'DIA',
                week: 'SEMANA',
                month: 'MES'
            },
            firstDay: 1,
            default: true,
            editable: true,
            displayEventTime: true,
            events: SITEURL + "/fullcalender",
            displayEventTime: false,
            editable: true,
            events: [
                @foreach ($activities as $activity)
                {
                    color: '#064b98',
                    id: '{{ $activity->activity_id }}',
                    title: '{{ $activity->nameAct }}',
                    start: '{{ $activity->dateAct }}T{{ $activity->timeAct }}',
                    @if ($activity->isNulledAct)
                        color: '#8A8A8A',
                    @else
                        @if(count($activity->inscriptions)>0)
                            @foreach ($activity->inscriptions as $eachInscription)
                                @if ($eachInscription->volunteer_id==Auth::user()->id)
                                    @if ($eachInscription->isDoneIns == 1)
                                        color: '#00A300',
                                    @elseif ($eachInscription->isCompletedIns == 1) 
                                        color: '#8f1d21',
                                    @elseif (is_null($eachInscription->filenameIns) && is_null($eachInscription->isCompletedIns))
                                        color: '#000000', 
                                    @elseif ($eachInscription->filenameIns && $eachInscription->isCompletedIns == 0)
                                        color: '#ffa500',
                                    @endif    
                                @endif
                            @endforeach
                        @endif
                    @endif
                },
            @endforeach
            ],
            editable: false,
            selectable: true,
            selectHelper: true,

            select:function(start, end, allDays){  
            
                var fechas = []
                var cont = 0;

                for(dt=new Date(start); dt<new Date(end); dt.setDate(dt.getDate()+1)){
                    if(cont==7){
                        break;
                    }
                    fechas.push(new Date(dt));
                    cont+=1;
                }

                dt1 = new Date(start);
                dt2 = new Date(end);

                var mes1 = dt1.toLocaleDateString("es-Es", {month: 'long'});
                var mes2 = dt2.toLocaleDateString("es-Es", {month: 'long'});

                if(mes1!=mes2){
                    $('#titleDaysAct').text("Semana del "+fechas[0].getDate()+" de "+ mes1 +" al "+fechas[fechas.length-1].getDate()+" de "+mes2);
                }else{
                    $('#titleDaysAct').text("Semana del "+fechas[0].getDate()+" al "+fechas[fechas.length-1].getDate()+" de "+mes2);
                }

                for (var i = 0; i < fechas.length; i++){
                    ajaxCall(formateaFecha(fechas[i]), i, fechas.length);

                }

            },

        });
        
    });

    $(function() {

        function ajaxCall(datos, pos, longitud){

            return $.ajax({

                url:"searchDayActivity",
                type:"GET",
                data:{'searchDayActivity':datos},
                    success:function(data){

                        $( ".searchDayActivity" ).each(function( i ) {
                            if(i>=longitud){
                                $( ".searchDayActivity").eq(i).html("");
                                                        
                            }
                        
                        });

                        $('.searchDayActivity').eq(pos).html(data.html);                  

                        $aux = $('.accordion').eq(pos).prev().text(); //texto del dayActTitle
                        $aux2 = $('#dayActTitle').eq(pos);
                        
                        $(".accordion").eq(pos).append($aux); 
                        
                        $('.panel').eq(pos).hide();
                        $('.accordion').eq(pos).on("click", function(){
                            if($(this).next().is(':hidden'))
                                $(this).next().show('slow');
                            else{
                                $(this).next().hide('slow');
                                }                        
                        });

                        $('.panel2').eq(pos).hide();
                        $('.accordion2').eq(pos).on("click", function(){
                            if($(this).next().is(':hidden'))
                                $(this).next().show('slow');
                            else{
                                $(this).next().hide('slow');
                                }                        
                        });

                    }

                })

            }

        var diaInicio, diaFinal;

        var tabindex = 0;

        /* permite tabular entre días en el fullcalendar, y settea la fecha del día en cuestión como atributo aria-label para cada celda del fullcalendar
           permitiendo al screen reader guiar al usuario según el día por el que va tabulando */

        const calendario = document.querySelector('.calendario');
            calendario.setAttribute('aria-label', 'Calendario');
            calendario.setAttribute('tabindex', '0');

        const botonAnterior = document.querySelector('.fc-anterior-button');
            botonAnterior.setAttribute('aria-label', 'Mes anterior');

        const botonSiguiente = document.querySelector('.fc-siguiente-button');
            botonSiguiente.setAttribute('aria-label', 'Siguiente mes');

        const botonDiaActual = document.querySelector('.fc-today-button');
            botonDiaActual.setAttribute('aria-label', 'Volver al día actual');

        const mesActual = document.querySelector('.fc-center h2');
            mesActual.setAttribute('tabindex', '0');

        $('.fc-content').each(function(){
            var input = $(this);
            var inputText = $(this).find('span').text();
            input.attr('tabindex', '0');
            input.attr('aria-label', inputText);

        });

        $('.fc-day').each(function() {
            var $input = $(this);
            $input.attr("tabindex", tabindex); 

            var atribute = $(this).attr('data-date');

            var setAttr = $(this).attr('aria-label', atribute);

        });

        var seleccion = 0;
        var dia1, dia2, dias;

        /* permite seleccionar días mediante teclado, con un primer enter seleccionas el primer día y con el segundo seleccionas el segundo día
           mostrando el intervalo de esos días como itemDayAct */

        $('td.fc-day').on("keypress", function(e){

            if(e.keyCode === 13){

                if(seleccion === 0){
                    seleccion += 1;
                    dia1 = $(this).attr('data-date');
                    dia2 = $(this).attr('data-date');

                }else if(seleccion === 1){
                    
                    dia2 = $(this).attr('data-date');
                    
                    var d1 = new Date(dia1);
                    var d2 = new Date(dia2);
                    var aux, aux2;

                    var dif = d2.getTime() - d1.getTime();

                    if(dif<0){
                        aux = d1;
                        d1 = d2;
                        d2 = aux;

                        aux2 = dia1;
                        dia1 = dia2;
                        dia2 = aux;
                    }

                    var dif = d2.getTime() - d1.getTime();

                    dias =dif/(1000 * 60 * 60 * 24);          

                    seleccion = 0;

                }

                var fechas2 = []
                var cont2 = 0;                   

                for( dt = new Date(dia1); dt <= new Date(dia2); dt.setDate(dt.getDate()+1) ){
                    if(cont2==7){
                        break;
                    }
                    fechas2.push(new Date(dt));
                    cont2+=1;
                }

                for (var i = 0; i < fechas2.length; i++){
                ajaxCall(formateaFecha(fechas2[i]), i, fechas2.length); 

                }
                
            }

        });

    });

    //formatea la fecha dada para adaptarla a un formato que se ajuste al de bd

    function formateaFecha(fecha){
        var year = fecha.toLocaleString("default", { year: "numeric" });
        var month = fecha.toLocaleString("default", { month: "2-digit" });
        var day = fecha.toLocaleString("default", { day: "2-digit" });

        var formattedDate = year + "-" + month + "-" + day;

        return formattedDate;

    }

    function displayMessage(message) {
        toastr.success(message, 'Event');
    } 
    
</script>

@endsection
