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
            <div class="titleDateActivites">
                Selecciona una semana
            </div>

            <div class="calendario" id="calendario">

            </div>

        </div>

        <div class="hiddenDaysActivities">
            <div class="titleDaysAct" id="titleDaysAct">
                Semana del X de X al X de X
            </div>
            <div class="mainHiddenDaysActivities">
                    <div class="leftColumnDaysAct">
                        <div class="searchDayActivity" id="searchDayActivity"> </div>
                        {{-- <div class="eachDayAct">
                            <p class="eachDayActTitle" id='eachDayActTitle'> carrera </p>
                            <select id="selectDayAct" name="cars" id="cars">
                                <option >Actividades disponibles</option>
                                <option >Saab</option>
                                <option >Mercedes</option>
                                <option >Audi</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="rightColumnDaysAct">
                        {{-- <div class="eachDayAct">
                            <p class="eachDayAct title">tirulo</p>
                            <button class="accordion">Actividades disponibles <i class='bx bxs-chevron-down'></i> </button>
                                <div class="panel">
                                        <button class="accordion2">Actividad 1</button>
                                        <div class="panel" style="display:none;">
                                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                                        </div>
                                </div>
                        </div>  --}}                  
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

        function ajaxCall(datos){

            return $.ajax({

                url:"searchDayActivity",
                type:"GET",
                data:{'searchDayActivity':datos},
                success:function(data){
                    $('#searchDayActivity').html(data.html);

                var acc = document.getElementsByClassName("accordion");

                for (var i = 0; i < acc.length; i++) {
                
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    });
                }
                
                var acc2 = document.getElementsByClassName("accordion2");

                for (var i = 0; i < acc2.length; i++) {
                
                    acc2[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel2 = this.nextElementSibling;
                        if (panel2.style.display === "block") {
                            panel2.style.display = "none";
                        } else {
                            panel2.style.display = "block";
                        }
                    });
                }

                }

            })

        }

        var calendar = $('#calendario').fullCalendar({
            dayNamesShort: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            monthNames: [
                'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ],
            header: {
                left: 'title',
                center: '',
                right: '',
            },
            buttonText: {
                today: 'HOY',
                day: 'DIA',
                week: 'SEMANA',
                month: 'MES'
            },
            firstDay: 1,
            editable: true,
            displayEventTime: true,
            events: SITEURL + "/fullcalender",
            displayEventTime: false,
            editable: true,
            events: [],
            editable: false,
            selectable: true,
            selectHelper: true,

            select:function(start, end, allDays){           

                var fechas = []
                var cont = 0;
                for(dt=new Date(start); dt<=new Date(end); dt.setDate(dt.getDate()+1)){
                    if(cont==7){
                        break;
                    }
                    console.log("Primer bucle " + dt)
                    fechas.push(new Date(dt));
                    cont+=1;
                }

                /* poner correctamente los meses */

                dt1 = new Date(start);
                dt2 = new Date(end);

                var mes1 = dt1.toLocaleDateString("es-Es", {month: 'long'});
                var mes2 = dt2.toLocaleDateString("es-Es", {month: 'long'});

                //finally!

                if(mes1!=mes2){
                    $('#titleDaysAct').text("Semana del "+fechas[0].getDate()+" de "+ mes1 +" al "+fechas[fechas.length-1].getDate()+" de "+mes2);
                }else{
                    $('#titleDaysAct').text("Semana del "+fechas[0].getDate()+" al "+fechas[fechas.length-1].getDate()+" de "+mes2);
                }

                $('#eachDayActTitle').text(start.format());

                ajaxCall(start.format());

            },

        });

    });

    function displayMessage(message) {
        toastr.success(message, 'Event');
    }
</script>



@endsection
