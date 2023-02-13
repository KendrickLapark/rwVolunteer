@extends('dashboard.partials.base')

@section('title')
    Mostrar todos los usuarios
@endsection

@section('content')
    <div class="mainTray">
        
        <div class="sectionTitleSearch">
            MUESTRA TODOS LOS USUARIOS
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="search" id="search" placeholder="Buscar contactos..." class="form-control" onfocus="this.value=''">
                    </div>
                    <div id="search_list">

                        {{-- @include('dashboard.partials.itemList') --}}

                    </div>
                </div>
                    <div class="col-lg-3"></div>
            </div>
        </div>
    </div>

    <div id="excelDownload">
        <a href="{{ route('CSV.getUsers') }}"><i class='bx bx-cloud-download'></i></a>
    </div>
@endsection

@section('headlibraries')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    {{-- <script>
        $(document).ready(function(){

            function ajaxCall(datos){

                return $.ajax({
                    url:"search",
                    type:"GET",
                    data:{'search':datos},
                    success:function(data){
                        $('#search_list').html(data);

                        $(".hidden").hide();
                            $(".row").on("click", function() {
                                if($(this).next().is(':hidden'))
                                    $(this).next().show('slow');
                                else{
                                    $(this).next().hide('slow');
                            }
                            });

                            $(".lessDetails").on("click", function() {
                                $(this).parent().parent().hide('slow');
                            });
                    }
                })

            }
                
            ajaxCall('');
            
        $('#search').on('keyup',function(){
            var query= $(this).val();
            ajaxCall(query);    
        //end of ajax call
        });

        });

    </script> --}}

    {{-- simplificado--}}

    <script>

        $(document).ready(function(){

            function ajaxCall(datos){

                return $.ajax({

                    url:"obtenUsuario",
                    type:"GET",
                    data:{'obtenUsuario':datos},
                    success:function(data){
                        $('#search_list').html(data.html);

                        $(".hidden").hide();
                            $(".row").on("click", function() {
                                if($(this).next().is(':hidden'))
                                    $(this).next().show('slow');
                                else{
                                    $(this).next().hide('slow');
                            }
                            });

                            $(".lessDetails").on("click", function() {
                                $(this).parent().parent().hide('slow');
                            });

                    }

                })

            }

                ajaxCall('');
            
            $('#search').on('keyup', function(){
                var query = $(this).val();

                ajaxCall(query);

            });
            
        });

    </script>

    {{-- funciona --}}

    {{-- <script>

        $(document).ready(function(){
            
            $('#search').on('keyup', function(){
                var query = $(this).val();

                $.ajax({

                    url:"obtenUsuario",
                    type:"GET",
                    data:{'obtenUsuario':query},
                    success:function(data){
                        $('#search_list').html(data.html);

                    }

                });

            });
            
        });

    </script> --}}

@endsection
