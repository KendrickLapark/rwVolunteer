$(()=>{

    var fecha = new Date (new Date().getFullYear(), 0, 31);

    const fecha2 = fecha;

    console.log(" la fecha de seguridad es "+ fecha2)

    var semanas = new Array(5)

    seteaSemanas(fecha);

    console.log(" Date ")

    var fechaIntervalo = dates(fecha);

    console.log(" Fin date ")

    var fechaActual = new Date();

    $("#tituloGenially").text(getMesActual(fechaActual) + " " + getAñoActual(fechaActual))

    seteaFecha(fechaIntervalo); 

    function seteaFecha(fecha){

        var intervalos = weekIntervalText(fecha);

        for (var i = 0; i < intervalos.length; i++) {
            $('.fechaGenially').eq(i).text(intervalos[i])
        }

    }

    function seteaSemanas(fecha){

        var cadenaSemanas = "(" + numeroSemanaFecha(fecha) + "-" + (numeroSemanaFecha(fecha) + 4 + ")")

        $('#weeksGenially').text("Semanas "+ cadenaSemanas);

    }

    //devuelve el mes actual en formato texto y con la primera letra en mayúscula

    function getMesActual(fecha){

        var mesActualText = fechaActual.toLocaleDateString("es-Es", {month: 'long'});

        var mesActualDef = mesActualText.charAt(0).toUpperCase() + mesActualText.slice(1); 

        return mesActualDef;

    }

    //devuelve el año actual

    function getAñoActual(fecha){

        return fecha.getFullYear();

    }

    function getNumeroSemanaDelMes(){

        var d = new Date();
        var date = d.getDate();
        var day = d.getDay();

        var weekOfMonth = Math.ceil((date + 6 - day)/7);

        console.log(" semana del mes " + weekOfMonth)

    }

    function numeroSemanaFecha(fecha){
        
        //currentDate = new Date();
        startDate = new Date(fecha.getFullYear(), 0, 1);
        var days = Math.floor((fecha - startDate) /
        (24 * 60 * 60 * 1000));
         
        var weekNumber = Math.ceil(days / 7);
     
        // Display the calculated result      
        console.log("Week number of " + fecha +
            " is :   " + weekNumber);

        return weekNumber    
    }

    //devuelve los días de una determinada semana

    function dates(current) {
         
        // Starting Monday not Sunday

        var week= new Array();

        //Iteramos 5 veces para avanzar 5 semanas desde la semana introducida
        for(var j = 0; j < 5; j++){
            
            current.setDate((current.getDate() - current.getDay() +1));

            //devuelve el primer día de una semana determinada en current

            //console.log("primer dia de la semana "+current);
        
            for (var i = 0; i < 7; i++) {
                week.push(
                    new Date(current)
                ); 

                current.setDate(current.getDate() +1);

                console.log("dia actual "+current)

            }

            //Esto para imprimir el último día de la semana

            /* current.setDate(current.getDate()-1); 

            console.log("último dia de la semana "+current);

            current.setDate(current.getDate()+1); */      

        }

        return week;
    }

    function getWeeks(current) {   
        
        var semanas = new Array(5)

        for(var j = 0; j < 5; j++){
            
            current.setDate((current.getDate() - current.getDay() +1));

            var semana = new Array(6)
      
            for (var i = 0; i < 7; i++) {
                semana.push(
                    new Date(current)
                ); 

                current.setDate(current.getDate() +1);

            }   

            semanas[j] = semana;

        }

        return semanas;
    }

    //devuelve el primer día de la semana, formateado para que lo devuelva en forma de cadena de texto 

    function firstDayOfWeek(current){

        current.setDate((current.getDate() - current.getDay() +1));

        var dia = current.getDate();

        var mes = current.toLocaleDateString("es-Es", {month: 'long'});

        var fecha = dia + " " + mes;

        return fecha;

    }

    //devuelve el último día de la semana, formateado para que lo devuelva en forma de cadena de texto

    function lastDayOfWeekText(current){    

        var dia = current.getDate();

        var mes = current.toLocaleDateString("es-Es", {month: 'long'});

        var fecha = dia + " " + mes;

        return fecha;

    }

    function startEndWeek(current){

        var inicio = firstDayOfWeek(current);

        var fin = lastDayOfWeekText(current);

        var lapso = inicio + " - " + fin;

        return lapso;

    }

    //devuelve el día de la semana en formato texto
    
    function getDayName(dateStr, locale)
    {
        var date = new Date(dateStr);
        return date.toLocaleDateString(locale, { weekday: 'long' }); 
        
        //ej output : console.log(getDayName(firstDay, "es-Es")); devuelve el día de la semana en español
    }

    //método para comparar a que día cae el primer día del mes, para saber si la semana esta empezada o acaba de empezar

    function checkFirstDayOfMonth(){

        var firstDay = new Date(new Date().getFullYear(), new Date().getMonth(), 1);

        if(getDayName(firstDay, "es-Es") == "miércoles"){
            console.log("los dias coinciden")
            return 
        }else{
            console.log("no coincide");
        }

    }

    function checkLastDayOfMonth(){

        var firstDay = new Date(new Date().getFullYear(), new Date().getMonth(), 1);

        if(getDayName(firstDay, "es-Es") == "miércoles"){
            console.log("los dias coinciden")
            return 
        }else{
            console.log("no coincide");
        }

    }

    //obtiene los primeros días de las 5 semanas de la fecha indicada en formato fecha


    function firstDaysOfWeek(dias){       

        var primerosDias = new Array();

        for(var i = 0; i < dias.length; i+=7){

            primerosDias.push(dias[i]);

        }

        return primerosDias;

    }

    //devuelve en formato texto el primer día de la semana de las 5 semanas según la fecha indicada

    function firstDaysOfWeekText(dias){

        var primerosDias = firstDaysOfWeek(dias);

        var primerosDiasTexto = new Array();

        for(var i = 0; i < primerosDias.length; i++){

            primerosDiasTexto.push( firstDayOfWeek(primerosDias[i]));
            
        }

        return primerosDiasTexto;

    }

    //devuelve en formato texto el último día de la semana de las 5 semanas según la fecha indicada

    function lastDaysOfWeekText(dias){

        var ultimosDias = lastDaysOfWeek(dias);

        var ultimosDiasTexto = new Array();

        for(var i = 0; i < ultimosDias.length; i++){
            ultimosDiasTexto.push(lastDayOfWeekText(ultimosDias[i]));
        }

        return ultimosDiasTexto;

    }

    function weekIntervalText(dias){

        var primeros = firstDaysOfWeekText(dias);
        var ultimos = lastDaysOfWeekText(dias);

        var intervalos = new Array();

        for(var i = 0; i < (primeros.length * 2); i++){

            var intervalo = primeros[i] + ' - ' + ultimos[i]

            intervalos.push(intervalo)

        }

        for (var i = 0; i < intervalos.length; i++){
            console.log(intervalos[i])
        }

        return intervalos;

    }

    //obtiene los últimos días de las 5 semanas de la fecha indicada en formato fecha

    function lastDaysOfWeek(dias){

        var ultimosDias = new Array();

        for(var i = 6; i < dias.length; i+=7){

            ultimosDias.push(dias[i]);

        }

        return ultimosDias;

    }

    //segmentar los dias por semanas

    function guardaSemanas(intervaloSemanas){

        var fechasSemanas = new Array(5)
        var semana = new Array(6)   

        for(var i = 0; fechasSemanas.length; i++){

            for(var j = 0; semana.length; j++){
                for(var k = 0; intervalosSemanas.length; k++){
                    semana[j].push(intervalosSemanas[k])
                }
            }

        }

    }

    $('#geniallyButton1').on("click", () => {

       /*  console.log("La fecha2 es "+fecha2)

        var semanasGuardadas = getWeeks( fecha2 )

        for(var i = 0; i < semanasGuardadas.length; i++){
            for(var j = 0; j < semanasGuardadas[i].length; j++){
                console.log(semanasGuardadas[i][j]) 
            }
        }

        console.log("El número de la semana de la fecha actual es "+numeroSemanaFecha(fecha)) */

    });

})