@extends('dashboard.partials.base')

@section('title')
    Selecciona actividades de voluntariado
@endsection

@section('headlibraries')
    <script type="text/javascript" src="{{ URL::asset('js/showActivitiesOptions.a11y.js') }}"></script>
@endsection

@section('content')

    <div class="mainContainerActivitiesOptions">
        <div class="mainTrayActivitiesOptions">

            <div class="titleActivitiesOptions">
               <h1 tabindex="0"> Selecciona tus actividades de voluntariado </h1>
            </div>

            <div class="mainData center">
    
                <div class="columnRight">
                    <a href="{{ route('dashboard.showActivitiesByDate')}}">
                    <img src="images/imgDashboard/frame2.png" alt="Actividades según la fecha" title="Actividades según la fecha">
                    </a>

                </div>

                <div class="columnLeft">
                    <a href="{{ route('dashboard.showActivitiesByCategory')}}">
                    <img src="images/imgDashboard/frame1.png" alt="Actividades según el tipo de actividad" title="Actividades según el tipo de actividad">
                    </a>

                </div>

            </div>

        </div>
    </div>

@endsection
