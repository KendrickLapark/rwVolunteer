$(()=>{

    //devuelve los días de una determinada semana

    function dates(current) {
        var week= new Array(); 
        // Starting Monday not Sunday

        current.setDate((current.getDate() - current.getDay() +1));

        //devuelve el primer día de una semana determinada en current

        console.log("primer dia de la semana "+current);

        
        for (var i = 0; i < 7; i++) {
            week.push(
                new Date(current)
            ); 
            current.setDate(current.getDate() +1);
        }

        current.setDate(current.getDate()-1);

        //devuelve el último día de la semana

        console.log("último dia de la semana "+current);

        return week; 
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

    function lastDayOfWeek(current){

        current.setDate((current.getDate() - current.getDay() +1));

        for (var i = 0; i < 6; i++) {           
            current.setDate(current.getDate() +1);
        }

        var dia = current.getDate();

        var mes = current.toLocaleDateString("es-Es", {month: 'long'});

        var fecha = dia + " " + mes;

        return fecha;

    }

    function lastDayOfWeekDate(current){
        current.setDate((current.getDate() - current.getDay() +1));

        for (var i = 0; i < 6; i++) {           
            current.setDate(current.getDate() +1);
        }

        return current;
    }

    function startEndWeek(current){

        var inicio = firstDayOfWeek(current);

        var fin = lastDayOfWeek(current);

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

    function avanzaMes(current){

        var ultimoDiaSemanal = lastDayOfWeekDate(current);

        for (var i = 0; i < 5; i++) {           
            ultimoDiaSemanal.setDate(ultimoDiaSemanal.getDate()+1);
            console.log(startEndWeek(fecha));
        }

    }

    $('#geniallyButton1').on("click", () => {

        //hay que poner un mes menos, si aumento los días de 6 en 6 puedo iterar entre semanas
        //console.log(dates(new Date(new Date().getFullYear(), 1, 1)));


        //prueba de métodos correcta
        /*console.log(firstDayOfWeek(new Date(new Date().getFullYear(), 1, 1)));
        console.log(lastDayOfWeek(new Date(new Date().getFullYear(), 1, 1))); */

        console.log(startEndWeek(new Date(new Date().getFullYear(), 1, 1)));

        console.log(lastDayOfWeekDate(new Date(new Date().getFullYear(), 1, 1)));

    });

})