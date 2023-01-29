@extends('dashboard.partials.base')

@section('title')
    Mostrar todas las actividades
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" 
    crossorigin="anonymous"></script>

@endsection

@section('content')
    <div class="mainTray">
        <div class="mainData center">
            <div class="sectionTitle">
                MUESTRA TODAS LAS ACTIVIDADES
            </div>

            <div id="calendarCaption">
                <div class="eachCalendarCaption">
                    <div class="eachColor" style="background-color:#FFA500;">
                        &nbsp;
                    </div>
                    Preinscrito
                </div>
                <div class="eachCalendarCaption">
                    <div class="eachColor" style="background-color:#8f1d21;">
                        &nbsp;
                    </div>
                    Aceptado
                </div>
                <div class="eachCalendarCaption">
                    <div class="eachColor" style="background-color:#000000;">
                        &nbsp;
                    </div>
                    Rechazado
                </div>
                <div class="eachCalendarCaption">
                    <div class="eachColor" style="background-color:#8A8A8A;">
                        &nbsp;
                    </div>
                    Anulado
                </div>
                <div class="eachCalendarCaption">
                    <div class="eachColor" style="background-color:#00A300;">
                        &nbsp;
                    </div>
                    Realizado
                </div>
            </div>

            <div class="calendarContainer center">
                <div id='calendar'></div>
                  
                 <!-- Modal created para mostrar las actividades programadas en un día cuando clickamos en el calendar by pepe -->
                 <div class="modal fade" id="fullcalendarModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>

                          <!-- boton a desarrollar para cerrar el modal by pepe--> 
                          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                        </div>
                        <div class="modal-body">
                             @foreach ($activities as $activity) 

                             
                             {{-- <div class="modal-activity-title">
                              Fecha señalada  {{date('d-m-Y')}}
                            </div>

                            <div class="modal-activity-title">
                                Fecha señalada  {{date('d-m-Y')}} 
                              </div> --}}

                           {{--  <div class="modal-activity-title">
                               Fecha actividad {{date('d-m-Y', strtotime($activity->dateAct))}}
                            </div> --}}                        

                             @if(strtotime(date('d-m-Y', strtotime($activity->dateAct))) == strtotime(date('d-m-Y')))
                             
                          <div class="modal-activity">
                                    <div class="modal-activity-title">
                                        {{-- <li>{{$activity->nameAct}}</li> --}}
                                        <li>Titulo actividad </li>
                                    </div>
                                    <div class="modal-activity-description">
                                        Descripcion actividad
{{--                                         <li>{{$activity->descAct}}</li>
 --}}                               </div>
                                    <div class="modal-activity-horary">
                                        Hora actividad
{{--                                         <li>{{$activity->timeAct}}</li>
 --}}                               </div>                       
                                </div>
                                    <br>

                            @endif
                             @endforeach 
 
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                <!--genially add pepe-->
                <!--<div class="container-wrapper-genially" style="position: relative; min-height: 400px; max-width: 100%;"><video class="loader-genially" autoplay="autoplay" loop="loop" playsinline="playsInline" muted="muted" style="position: absolute;top: 45%;left: 50%;transform: translate(-50%, -50%);width: 80px;height: 80px;margin-bottom: 10%"><source src="https://static.genial.ly/resources/loader-default.mp4" type="video/mp4" />Your browser does not support the video tag.</video><div id="63a40fe6936a640013b9b793" class="genially-embed" style="margin: 0px auto; position: relative; height: auto; width: 100%;"></div></div><script>(function (d) { var js, id = "genially-embed-js", ref = d.getElementsByTagName("script")[0]; if (d.getElementById(id)) { return; } js = d.createElement("script"); js.id = id; js.async = true; js.src = "https://view.genial.ly/static/embed/embed.js"; ref.parentNode.insertBefore(js, ref); }(document));</script>
                -->
            </div>

        </div>
    </div>

    <div class="secondaryTray center ">
        <div class="mainData center">
            <div class="sectionTitle">
                ¿BUSCAS DE UN TIPO CONCRETO?
            </div>
            <div class="allActivities center">
                @foreach ($activityTypes as $type)
                    <div class="eachActivityType">
                        <a
                            href="{{ route('dashboard.showFilterByTypeAct', ['id' => $type->typeAct_id]) }}">{{ $type->nameTypeAct }}</a>
                    </div>
                @endforeach
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

            

            var calendar = $('#calendar').fullCalendar({
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                ],
                header: {
                    left: 'prev',
                    center: 'title,today',
                    right: 'next'
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

                //evento de fullcalendar cuando se hace click en una celda *pepe 26-01-23

                dayClick: function( date, jsEvent, view){               

                    console.log(moment(date).format('YYYY-MM-DD'));

                    date = moment(date).format('YYYY-MM-DD');

                    location.href = 'dashboard-showAllActivitiesLogged/' + date;

                   /*  $('#fullcalendarModal').modal('show');

                    date=moment(date).format("dddd DD [de] MMMM");
              
                    $('#fullcalendarModal .modal-title').text(date);

                    @foreach($activities as $activity){
                        
                        
                       // console.log(strtotime(date('d-m-Y', strtotime({{$activity->dateAct}}))));

                        //@if(strtotime(date('d-m-Y', strtotime($activity->dateAct))) == strtotime(date('d-m-Y')))

                            $('#fullcalendarModal .modal-activity-title').text('{{$activity->nameAct}}');
                            $('#fullcalendarModal .modal-activity-description').text('{{$activity->descAct}}');
                           $('#fullcalendarModal .modal-activity-horary').text('{{$activity->timeAct}}');
                        //@endif
                       
                    }
                    @endforeach */

                                        
                },

                eventClick: function(event) {
                    location.href = 'showThatActivity/' + event.id;
                }

            });

        });

        function displayMessage(message) {
            toastr.success(message, 'Event');
        }
    </script>
@endsection
