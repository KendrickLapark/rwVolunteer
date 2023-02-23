{{-- @foreach($activities as $activity)
<div class="eachDayAct">
    <p class="eachDayAct title"> {{$activity->entityAct}} </p>
    <select id="selectDayAct" name="cars" id="cars">
        <option >Actividades disponibles</option>
        <option >Saab</option>
        <option >Mercedes</option>
        <option >Audi</option>
    </select>
</div>
@endforeach --}}

<div class="eachDayAct">
    <p class="eachDayAct title">tirulo</p>
    <button class="accordion">Actividades disponibles</button>
        <div class="panel">
            @foreach($activities as $activity)
                <button class="accordion2">{{$activity->entityAct}}</button>
                <div class="panel">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                </div>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
            @endforeach
        </div>
</div>