@extends('common.base')

@section('title')
    Home
@endsection

@section('content')
    <img src="<?php echo asset('images/mainSlider.jpg'); ?>" alt="slider" id="sliderHome" />
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
