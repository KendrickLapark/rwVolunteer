@extends('dashboard.partials.base')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="mainTrayDashboard">

        <div class="notifyTrayIns">
            <div class="sectionTitle">
                <i class='bx bx-envelope'></i>
                    <p id="title-desc"> Tienes notificaciones </p>
                <i class='bx bx-caret-right' id="desplegar" tabindex="0" aria-expanded="false" style="font-size: 20px" role="button" aria-describedby="title-desc"></i>            
            </div>
        </div>

        @if (count($inscriptions) == 0)         
            <div class="sectionTitleNoInscriptions">
                <p tabindex="0"> No tienes inscripciones hechas en ninguna actividad. </p>
            </div>                          
        @else     
            <div class="listTrayDashboard" id="#listTrayDashboard">    
                <ol> 
                    <div class="listTrayContainer">  

                        @if(count($inscriptionsComp)==0)

                            <div class="sectionIncomplete"> 
                                <p id="title-section"> Inscripciones por completar </p> 
                                <i class='bx bx-caret-down' id="downArrow" role="button" aria-expanded="false" aria-describedby="title-section" tabindex="0"></i>
                            </div> 

                            @foreach ($inscriptions as $inscription)
                                
                                    @if($inscription->filenameIns==null)

                                        <li>                    
                                            <div class="mainActivityDashboard">
                                                @include('dashboard.partials.itemListInscription')            
                                            </div>  
                                        </li> 

                                    @endif

                            @endforeach

                        @else

                        <div class="sectionIncomplete"> 
                            <p tabindex="0"> No tienes inscripciones por completar </p>
                        </div>            
                        
                        @endif

                    </div>

                    <div class="listTrayContainer">

                        @if(count($inscriptionsInc)==0)

                            <div class="sectionIncomplete"> 
                                <p id="title-section"> Inscripciones completadas </p>
                                <i class='bx bx-caret-down' id="downArrow" role="button" aria-expanded="false" aria-describedby="title-section" tabindex="0"></i>
                            </div>

                                @foreach ($inscriptions as $inscription)

                                    @if($inscription->filenameIns!=null)

                                        <li>                    
                                            <div class="mainActivityDashboard">
                                                @include('dashboard.partials.itemListInscription')            
                                            </div>  
                                        </li> 

                                    @endif 

                                @endforeach
                        
                        @else

                            <div class="sectionIncomplete"> 
                                <p tabindex="0"> No tienes inscripciones completas </p> 
                            </div>   

                        @endif
                        
                    </div>
                </ol>
            </div>
        @endif
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

            $(".sectionIncomplete").siblings().hide();

            $(".row_act_dashboard").on("click", function() {
                var icono = document.querySelector(".row_act_dashboard > #bx.bx-caret-down");
                var x = icono.getAttribute('aria-expanded');
                if ($(this).siblings().is(':visible')) {
                    $(this).siblings().hide();
                    x = false;
                    icono.style.transform = ''
                } else {
                    $(this).siblings().show();
                    x = true;
                    icono.style.transform = 'rotate(180deg)'
                }
            });

            $('.bx.bx-caret-right').on("click", function(){
 
                var listaInscripciones = document.querySelector(".listTrayDashboard");
                var icono = document.querySelector(".bx.bx-caret-right");
                var x = icono.getAttribute('aria-expanded');

                if(listaInscripciones.style.visibility == 'visible'){
                    listaInscripciones.style.visibility = 'hidden';
                    x = 'false';
                    icono.style.transform = '';
                }else{
                    listaInscripciones.style.visibility = 'visible';
                    x = 'true';
                    icono.style.transform = 'rotate(180deg)';
                }                   

            });

            $('.bx.bx-caret-right').on("keypress", function(e){

                var key = e.which;

                if(key == 13){
                    var listaInscripciones = document.querySelector(".listTrayDashboard");
                    var icono = document.querySelector(".bx.bx-caret-right");

                    var x = icono.getAttribute('aria-expanded');

                    if(listaInscripciones.style.visibility == 'visible'){
                        listaInscripciones.style.visibility = 'hidden';
                        x = 'false';
                        icono.style.transform = ''
                    }else{
                        listaInscripciones.style.visibility = 'visible'
                        x = 'true';
                        icono.style.transform = 'rotate(180deg)'
                    }    
                }

            });

            $(".msg_Inscription, .sectionIncomplete").on("click", function() {
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

            $(".sectionIncomplete").on("click", function() {
                if ($(this).siblings().is(':visible')) {
                    $(this).siblings().hide();
                    $(this).siblings().setAttribute('aria-hidden', 'false');
                } else {
                    $(this).siblings().show();
                    $(this).siblings().setAttribute('aria-hidden', 'true');
                }
            });

            $(".msg_Inscription, .sectionIncomplete").on("keypress", function(e) {

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

            $(".sectionIncomplete").on("keypress", function(e) {

                var key = e.which;

                if(key == 13){

                    if ($(this).siblings().is(':visible')) {
                        $(this).siblings().hide();
                    } else {
                        $(this).siblings().show();
                    }

                }

            });

        });
    </script>
@endsection


