<div class="eachDayAct">
    <p class="eachDayActTitle" id="eachDayActTitle"> {{date('d M', strtotime($query))}} </p>
    <button class="accordion">Actividades disponibles <i class='bx bxs-chevron-down'></i> </button>
        <div class="panel">
            @foreach($activities as $activity)
                <button class="accordion2">{{$activity->entityAct}} <i class='bx bxs-chevron-down' style="font-size=20px;"></i> </button>
                <div class="panel" style="display:none;">
                    <ul class="ul-accordion2">
                        <li> {{$activity->nameAct}} </li>
                        <li> {{$activity->formaAct}} </li>
                        <li id="li-accordion2"> 
                            <span class="spanTimeAct"> {{date('H:i', strtotime($activity->timeAct)) ." - ".date('H:i', strtotime($activity->endTimeAct))}} horas </span>
                            <button class="buttonSignUp">Me apunto</button> 
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
</div>