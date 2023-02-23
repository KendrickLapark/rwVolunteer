@foreach($activities as $activity)
<div class="eachDayAct">
    <p class="eachDayAct title"> {{$activity->descAct}} </p>
    <select id="selectDayAct" name="cars" id="cars">
        <option >Actividades disponibles</option>
        <option >Saab</option>
        <option >Mercedes</option>
        <option >Audi</option>
    </select>
</div>
@endforeach