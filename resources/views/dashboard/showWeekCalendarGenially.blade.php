@extends('dashboard.partials.base')

@section('title')
    Dashboard
@endsection

@section('content')

<div class = "mainContent">

    <div class = "mainTrayweekGenially">

        <div class= "geniallyButtonContainer">

            <div class = "geniallyWeekBackButton">
                <a href="{{ route('dashboard.showActivitiesGenially')}}" id="backGeniallyButton"> Volver </a>
            </div>

        </div>

        <div class = "mainContainer">

            <div class = "rowUp">
            
                <div class = "cellItem" id = "cellHeader">
                    <div class = "cellSectionBody">
                        <p class="titleCellItem"> Calendario Semanal </p>
                        <p class="daysWeekInterval"> 30 enero - 5 febrero </p>
                        <p class="weekNumber"> ( Semana 5 ) </p>
                    </div>
                    <div class = "cellSectionFooter">
                        
                    </div>
                </div>

                <div class = "cellItem">
                    <div class = "cellSectionBody">
                        <p class="titleCellItem"> Dia 1 </p>
                        <img src="<?php echo asset('images/genially/imgGenially1.jpeg'); ?>" class="geniallyImg"/>
                    </div>
                    <div class = "cellSectionFooter">
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton1"/>   
                        </a>
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton2"/>   
                        </a>  
                    </div>
                </div>

                <div class = "cellItem">
                    <div class = "cellSectionBody">
                        <p class="titleCellItem"> Dia 2 </p>
                        <img src="<?php echo asset('images/genially/imgGenially2.jpeg'); ?>" class="geniallyImg"/>
                    </div>
                    <div class = "cellSectionFooter">
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton1"/>   
                        </a> 
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton2"/>   
                        </a> 
                    </div>
                </div>

                <div class = "cellItem">
                    <div class = "cellSectionBody">
                        <p class="titleCellItem"> Dia 3 </p>
                        <img src="<?php echo asset('images/genially/imgGenially3.jpeg'); ?>" class="geniallyImg"/>
                    </div>
                    <div class = "cellSectionFooter">
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton1"/>   
                        </a> 
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton2"/>   
                        </a> 
                    </div>
                </div>

            </div>

            <div class = "rowDown">

                <div class = "cellItem">
                    <div class = "cellSectionBody">
                        <p class="titleCellItem"> Dia 4 </p>
                        <img src="<?php echo asset('images/genially/imgGenially4.jpeg'); ?>" class="geniallyImg"/>
                    </div>
                    <div class = "cellSectionFooter">
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton1"/>   
                        </a>
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton2"/>   
                        </a>  
                    </div>
                </div>

                <div class = "cellItem">
                    <div class = "cellSectionBody">
                        <p class="titleCellItem"> Dia 5 </p>
                        <img src="<?php echo asset('images/genially/imgGenially5.jpeg'); ?>" class="geniallyImg"/>
                    </div>
                    <div class = "cellSectionFooter">
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton1"/>   
                        </a>
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton2"/>   
                        </a>  
                    </div>
                </div>

                <div class = "cellItem">
                    <div class = "cellSectionBody">
                        <p class="titleCellItem"> Dia 6 </p>
                        <img src="<?php echo asset('images/genially/imgGenially2.jpeg'); ?>" class="geniallyImg"/>
                    </div>
                    <div class = "cellSectionFooter">
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton1"/>   
                        </a>
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton2"/>   
                        </a>  
                    </div>
                </div>

                <div class = "cellItem">
                    <div class = "cellSectionBody">
                        <p class="titleCellItem"> Dia 7 </p>
                        <img src="<?php echo asset('images/genially/imgGenially3.jpeg'); ?>" class="geniallyImg"/>
                    </div>
                    <div class = "cellSectionFooter">
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton1"/>   
                        </a>
                        <a href="{{ route('dashboard.showWeekCalendarGenially')}}">
                            <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyDayButton" id="geniallyDayButton2"/>   
                        </a>
                    </div>  
                </div>

            </div>

        </div>

    </div>   

</div>

@endsection

@section('headlibraries')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/weekGenially.js') }}"></script>

    <script>
        $(() => {
            $(".card").on("click", function() {
                if ($(this).siblings().is(':visible')) {
                    $(this).css("border-radius", "10px");
                    $(this).siblings().hide();
                }
                else {
                    $(this).css("border-radius", "10px 10px 0px 0px");
                    $(this).siblings().show();
                }
            });

        });
    </script>
@endsection