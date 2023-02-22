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
            <div class="titleDaysAct">
                Semana del X de X al X de X
            </div>

            <div class="columnDaysAct">
                <div class="leftColumnDaysAct">
                    <div class="eachDayAct">
                        <p class="eachDayAct title"> Día 1 </p>
                        <select id="selectDayAct" name="cars" id="cars">
                            <option >Actividades disponibles</option>
                            <option >Saab</option>
                            <option >Mercedes</option>
                            <option >Audi</option>
                        </select>
                    </div>
                </div>
                <div class="rightColumnDaysAct">
                    <div class="eachDayAct">
                        <p class="eachDayAct title"> Día 2 </p>
                        <select id="selectDayAct" name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                          </select>
                    </div>
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
                console.log(start.format())
                console.log(end.format())

            },

            /* dayClick: function(date, jsEvent, view) {

                alert('Clicked on: ' + date.format());

                alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

                alert('Current view: ' + view.name);

                // change the day's background color just for fun
                $(this).css('background-color', 'red');

            } */

        });

    });

    function displayMessage(message) {
        toastr.success(message, 'Event');
    }
</script>



@endsection
