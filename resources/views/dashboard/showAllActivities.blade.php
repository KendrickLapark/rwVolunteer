@extends('dashboard.partials.base')

@section('title')
    Mostrar todas las actividades
@endsection

@section('content')
    <div class="mainTray">
        <div class="sectionTitleSearch">
            <h1 tabindex="0"> MUESTRA TODAS LAS ACTIVIDADES </h1>
        </div>

        @if (session()->has('sucessActivityCreated'))
            <div class="formSubmitSuccess center">
                {{ session('sucessActivityCreated') }}
            </div>
        @endif

        @if (session()->has('sucessActivityUpdated'))
            <div class="formSubmitSuccess center">
                {{ session('sucessActivityUpdated') }}
            </div>
        @endif


        @if (session()->has('sucessActivityDeleted'))
            <div class="formSubmitSuccess center">
                {{ session('sucessActivityDeleted') }}
            </div>
        @endif

        @if (session()->has('sucessVisibleActivity'))
            <div class="formSubmitSuccess center">
                {{ session('sucessVisibleActivity') }}
            </div>
        @endif

        @if (session()->has('successUpload'))
            <div class="formSubmitSuccess center">
                {{ session('successUpload') }}
            </div>
        @endif

        @if (session()->has('nullActivity'))
            <div class="formSubmitSuccess center">
                {{ session('nullActivity') }}
            </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="search" title="Escriba el nombre de la actividad que desea buscar"
                         name="searchActivity" id="searchActivity" placeholder="Buscar actividades..." class="form-search" onfocus="this.value=''">
                    </div>
                    
                </div>
                    <div class="col-lg-3"></div>
            </div>
        </div>
        

        <div class="addNew">
            <form method="get" action="{{ route('dashboard.formCreateActivity') }}" accept-charset="UTF-8"
                enctype="multipart/form-data">
                @csrf
                <p><button type="submit" id="banUser" class="botonesControl">Crear Actividad</button></p>
            </form>
        </div>

        <div id="calendarCaption">
            <div class="eachCalendarCaption">
                <button class="toggle-act-button" id="button-past-act">
                    <div class="eachColor" id="eachColor_A" style="background-color:#DDBFC8;">
                        &nbsp;
                    </div>
                    Pasada
                </button>
            </div>
            <div class="eachCalendarCaption">
                <button class="toggle-act-button" id="button-nulled-act">
                    <div class="eachColor" id="eachColor_B" style="background-color:#8A8A8A;">
                        &nbsp;
                    </div>
                    Anulada
                </button>
            </div>

            <div class="eachCalendarCaption">
                <button class="toggle-act-button" id="button-avaliable-act">
                    <div class="eachColor" id="eachColor_C" style="background-color:#406cbc;">
                        &nbsp;
                    </div>
                    Cita Normal
                </button>
            </div>
        </div>
       
        <div class='mainActivityAct'>
            <div id="search_listAct"></div>
 
        </div>

    </div>
@endsection


@section('headlibraries')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<script>

    $(document).ready(function(){

        function ajaxCall(datos){

            return $.ajax({

                url:"searchActivity",
                type:"GET",
                data:{'searchActivity':datos},
                success:function(data){
                    $('#search_listAct').html(data.html);

                    $(".hidden").hide();
                        $(".row").on("click", function() {
                            if($(this).next().is(':hidden'))
                                $(this).next().show('slow');
                            else{
                                $(this).next().hide('slow');
                            }
                        });

                        $(".bx.bxs-up-arrow").on("click", function() {
                            $(this).parent().parent().hide('slow');
                        });

                }

            })

        }

        function ajaxSearch(datos){

            return $.ajax({

                url:"searchActByDate",
                type:"GET",
                data:{'searchActByDate':datos},
                success:function(data){
                    $('#search_listAct').html(data.html);

                    $(".hidden").hide();
                        $(".row").on("click", function() {
                            if($(this).next().is(':hidden'))
                                $(this).next().show('slow');
                            else{
                                $(this).next().hide('slow');
                            }
                        });

                        $(".bx.bxs-up-arrow").on("click", function() {
                            $(this).parent().parent().hide('slow');
                        });

                }

            })

        }

            $('#button-past-act').on('click', function(){
               ajaxCall(''); 

            })

            ajaxCall('');

            $('#searchActivity').on('keyup', function(){

            var query = $(this).val();

            ajaxCall(query);

            });

            $(".mainActivity.row").on("keypress", function(e) {

                var key = e.which;

                if(key == 13){

                    var icono = document.querySelector(".mainData .row");
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

    /* $(document).ajaxSuccess(function(){
        // Obtener el elemento padre que contiene la lista ordenada
        var padreLista = $('#search_listAct');

        // Array para almacenar los colores de fondo
        var coloresFondo = [];

        // Iterar sobre los divs recién agregados
        padreLista.find('.divTime').each(function() {
            var div = $(this);

            // Guardar el color de fondo en el array
            coloresFondo.push(div.css('background-color'));

            // Cambiar el color de fondo

        })


    }); */

    </script>

@endsection
