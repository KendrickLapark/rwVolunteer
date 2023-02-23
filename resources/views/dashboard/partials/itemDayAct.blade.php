<div class="eachDayAct">
    <p class="eachDayAct title">tirulo</p>
    <button class="accordion">Actividades disponibles</button>
        <div class="panel">
            @foreach($activities as $activity)
                <button class="accordion2">{{$activity->entityAct}}</button>
                <div class="panel" style="display:none;">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                </div>
            @endforeach
        </div>
</div>