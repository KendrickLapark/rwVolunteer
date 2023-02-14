@extends('dashboard.partials.base')

@section('title')
    Dashboard
@endsection

@section('content')
    @if (App\Http\Controllers\NotifyController::notifyLoggedTrigger())
        


            <div class="titleGenially">
                <div class="leftColumn"> Voluntariado corporativo </div>
                  <div class="centerColumn">  <p> Fundación Magtel </p> </div>
                <div class="rightColumn"> Semanas (5-9) </div>
            </div>
        
    @endif
    <div class="mainTray">
        <div class="sectionTitleGenially">
            <p> FEBRERO 2023 </p>
        </div>        
    </div>


    <div class="secondTrayGenially">
        <div class="sectionGenially ">
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyButton"/>              
            </div> 
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/chicaGenially.png'); ?>" class="geniallyItem"/>
            </div> 
        </div>
        <div class="sectionGenially">
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyButton"/>              
            </div> 
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/chicaGenially.png'); ?>" class="geniallyItem"/>
            </div> 
        </div>
        <div class="sectionGenially">            
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyButton"/>              
            </div> 
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/chicaGenially.png'); ?>" class="geniallyItem"/>
            </div> 
        </div>
        <div class="sectionGenially">
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyButton"/>              
            </div> 
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/chicaGenially.png'); ?>" class="geniallyItem"/>
            </div> 
        </div>    
        <div class="sectionGenially">
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/botonGenially.png'); ?>" class="geniallyButton"/>              
            </div> 
            <div class="subsectionGenially">
                <img src="<?php echo asset('images/genially/chicaGenially.png'); ?>" class="geniallyItem"/>
            </div> 
        </div>       
    </div>          

@endsection

@section('headlibraries')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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
