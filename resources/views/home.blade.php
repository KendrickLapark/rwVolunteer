@extends('common.base')

@section('title')
    Home
@endsection

@section('content')

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="images/sliderhome/1.png" alt="">
            </div>
            <div class="slide">
                <img src="images/sliderhome/2.png" alt="">
            </div>
            <div class="slide">
                <img src="images/sliderhome/3.png" alt="">
            </div>
            <div class="slide">
                <img src="images/sliderhome/4.png" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>              

        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
        
    </div>
    
    <div id="contentDiv">
        <div class="rowDiv">           
            <div class="eachCell">
                <img src="<?php echo asset('images/imgHome/volunteering.png'); ?>" alt="Acción Social" class="eachHomeBoxImage" />
            </div>
            <div class="eachCell withText">
                <span class="header">Acción Social</span>
                <p>Fomentamos la construcción de una sociedad igualitaria y comprometida a través de la promoción de actividades 
                    solidarias y de interés social</p>
            </div>
        </div>
        <div class="rowDiv">          
            <div class="eachCell">
                <img src="<?php echo asset('images/imgHome/rocket.png'); ?>" alt="Empleabilidad" class="eachHomeBoxImage" />
            </div>
            <div class="eachCell withText">
                <span class="header">Empleabilidad</span>
                <p>Trabajamos de forma conjunta con la División de I+D+i de Magtel para aplicar su conocimiento y experiencia
                     a favorecer la calidad de vida de personas con discapacidad y en situación de dependencia</p>
            </div>
        </div>
        <div class="rowDiv">
            <div class="eachCell">
                <img src="<?php echo asset('images/imgHome/employment.png'); ?>" alt="Innovación Social" class="eachHomeBoxImage" />
            </div>
            <div class="eachCell withText">
                <span class="header">Innovación Social</span>
                <p>Contribuimos a la generación de oportunidades laborales entre colectivos vulnerables o en riesgo de exclusión 
                    social a través de programas formativos y de prácticas</p>
            </div>
        </div>       
        <div class="rowDiv">
            <div class="eachCell">
                <img src="<?php echo asset('images/imgHome/earth.png'); ?>" alt="Cooperación Internacional" class="eachHomeBoxImage" />
            </div>
            <div class="eachCell withText">
                <span class="header">Cooperación Internacional</span>
                <p>Contribuimos a la generación de oportunidades laborales entre colectivos vulnerables o en riesgo de exclusión social 
                    a través de programas formativos y de prácticas</p>
            </div>
            
        </div>
    </div>
@endsection

@section('library')

<script type="text/javascript" src="{{ URL::asset('js/home.a11y.js') }}"></script>

    <script type="text/javascript">

        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 5000);

    </script>

@endsection
