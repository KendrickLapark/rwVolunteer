@extends('dashboard.partials.base')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="mainTrayDashboard">
    @if (App\Http\Controllers\NotifyController::notifyLoggedTrigger())
        <div class="notifyTrayIns">
            <div class="sectionTitle">
                    <i class='bx bx-envelope'></i>
                    {{-- <span class="badge"> </span> --}}
                        <p id="title-desc"> Tienes notificaciones </p>
                    <i class='bx bx-caret-right' id="desplegar" tabindex="0" aria-expanded="false" style="font-size: 20px" role="button" aria-describedby="title-desc"></i>                
            </div>
        </div>
    @else
        <div class="notifyTrayIns">
            <div class="sectionTitle">
                    <i class='bx bx-envelope'></i>
                    {{-- <span class="badge"> </span> --}}
                      <p class="title-desc"> No tienes notificaciones </p>
                    <i class='bx bx-caret-right' id="desplegar" tabindex="0" aria-expanded="false" role="button" aria-describedby="title-desc"></i>                   
            </div>
        </div>
    @endif 
        @if (count($inscriptions) == 0)         
            <div class="sectionTitleNoInscriptions">
               <p> No tienes inscripciones hechas en ninguna actividad. </p>
            </div>                          
        @else     
        <div class="listTrayDashboard" id="#listTrayDashboard">         
            @foreach ($inscriptions as $inscription)                      
                <div class="mainActivityDashboard">
                    @if($inscription->filenameIns == null)
                        {{-- @include('dashboard.partials.itemListInscription') --}}
                    @elseif($inscription->filenameIns != null)
                        <div class="msg_Inscription">
                           <p id="title-inscription"> Inscripcion realizada para actividad : {{$inscription->activity->nameAct}} </p>
                            <i class='bx bx-caret-down' id="downArrow" role="button" aria-expanded="false" aria-describedby="title-inscription" tabindex="0"></i>
                        </div> 
                        <div class="hidden_msg_Inscription" aria-hidden="false">
                            <div class="inner_hidden_msg_Inscription">
                                <div class="descIns" tabindex="0">
                                  <p> <strong> Descripción: </strong> 
                                    {{$inscription->activity->descAct}} 
                                </div>
                                <div class="entityIns" tabindex="0">
                                  <p> <strong> Entidad: </strong> 
                                    {{$inscription->activity->entityAct}} </p>
                                </div>
                                <div class="direIns" tabindex="0">
                                  <p> <strong> Dirección: </strong> 
                                    {{$inscription->activity->direAct}} </p>
                                </div>
                                <div class="dateIns"  tabindex="0">
                                  <p>  <strong> Fecha: </strong> 
                                    {{$inscription->activity->dateAct}} </p>
                                </div>
                                <div class="timeIns"  tabindex="0">
                                   <p> <strong> Hora: </strong> 
                                    {{$inscription->activity->timeAct}} </p>
                                </div>
                                <div class="isCompletedIns">
                                    @if($inscription->isCompletedIns)
                                      <p tabindex="0">  <strong> Inscripción completada </strong> </p>
                                    @else
                                      <p tabindex="0">  <strong> Inscripción incompleta, esperando aceptación administradora </strong> </p>
                                    @endif
                                </div>
                                <form method="POST" action="{{ route('PDF.generatepreinscription') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                                    <button type="submit" class="button_dashboard">
                                    <i class='bx bx-caret-down'></i> Descargar documento</button>
                                </form>
                                <form method="POST" action="{{ route('dashboard.unDoInscription') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $inscription->inscription_id }}">
                                    <button type="submit" class="button_dashboard" id="dash_but2">
                                        <i class='bx bx-x-circle'></i>Cancelar preinscripción</button>
                                </form>
                            </div>
                        </div>                                                                            
                    @endif
                </div>                               
            @endforeach
        @endif
    </div>
</div>

<script type="text/javascript">

    $('#desplegar').click(function(){

        var x = this.getAttribute('aria-expanded');

            if(x == "true"){
                x = "false";
            }else{
                x = "true";
            }

        this.setAttribute('aria-expanded', x);

    });

    $('.bx.bx-caret-down').click(function(){

        var x = this.getAttribute('aria-expanded');

            if(x == "true"){
                x = "false";
            }else{
                x = "true";
            }

        this.setAttribute('aria-expanded', x);

    });

</script>

@endsection

@section('headlibraries')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        $(() => {

            $(".row_act_dashboard").on("click", function() {
                var icono = document.querySelector(".row_act_dashboard > #bx.bx-caret-down");
                if ($(this).siblings().is(':visible')) {
                    $(this).siblings().hide();
                    icono.style.transform = ''
                } else {
                    $(this).siblings().show();
                    icono.style.transform = 'rotate(180deg)'
                }
            });

            $('.bx.bx-caret-right').on("click", function(){
 
                var listaInscripciones = document.querySelector(".listTrayDashboard");
                var icono = document.querySelector(".bx.bx-caret-right");

                if(listaInscripciones.style.visibility == 'visible'){
                    listaInscripciones.style.visibility = 'hidden';
                    icono.style.transform = ''
                }else{
                    listaInscripciones.style.visibility = 'visible'
                    icono.style.transform = 'rotate(180deg)'
                }                   

            });

            $('.bx.bx-caret-right').on("keypress", function(e){

                var key = e.which;

                if(key == 13){
                    var listaInscripciones = document.querySelector(".listTrayDashboard");
                    var icono = document.querySelector(".bx.bx-caret-right");

                    if(listaInscripciones.style.visibility == 'visible'){
                        listaInscripciones.style.visibility = 'hidden';
                        icono.style.transform = ''
                    }else{
                        listaInscripciones.style.visibility = 'visible'
                        icono.style.transform = 'rotate(180deg)'
                    }    
                }

            });

            

            $(".msg_Inscription").on("click", function() {
                var icono = document.querySelector(".row_act_dashboard > #bx.bx-caret-down");
                if ($(this).siblings().is(':visible')) {
                    $(this).siblings().hide();
                    $(this).siblings().setAttribute('aria-hidden', 'false');
                    icono.style.transform = ''
                } else {
                    $(this).siblings().show();
                    $(this).siblings().setAttribute('aria-hidden', 'true');
                    icono.style.transform = 'rotate(180deg)'
                }
            });

            $(".msg_Inscription").on("keypress", function(e) {

                var key = e.which;

                if(key == 13){

                    var icono = document.querySelector(".row_act_dashboard > #bx.bx-caret-down");
                    if ($(this).siblings().is(':visible')) {
                        $(this).siblings().hide();
                        icono.style.transform = ''
                    } else {
                        $(this).siblings().show();
                        icono.style.transform = 'rotate(180deg)'
                    }

                }

            });

        });
    </script>
@endsection


