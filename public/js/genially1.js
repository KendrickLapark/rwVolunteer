$(()=>{

    var fecha = new Date (new Date().getFullYear(), 0, 31);

    //devuelve un array con los 7 días del intervalo de 5 semanas a partir de la fecha introducida    

     function dates(current) {   
        
        var semanas = new Array(5)

        var semana

        for(var j = 0; j < 5; j++){
            
            current.setDate((current.getDate() - current.getDay() +1));

            semana = new Array()
      
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

    function extraeDias(semanas){

        var diasInicioFin = [];

        var parejaDias

        for(var i = 0; i < semanas.length; i++){
            //console.log("Semana "+(i + 1))

            parejaDias = new Array()

            for(var j = 0; j <semanas[i].length; j++){

                if(j == 0){
                    //console.log("Inicio "+semanas[i][0])

                    parejaDias.push ( semanas[i][j])

                }else if (j == semanas[i].length - 1){
                   // console.log("Fin "+semanas[i][semanas[i].length - 1])

                    parejaDias.push ( semanas[i][j])


                }

                diasInicioFin[i] = parejaDias;

            }
        }

        return diasInicioFin;

    }

    function fechasBlade(diasInicioFin){


        for(var i = 0 ; i < diasInicioFin; i++){

  

        }

    }

    $('#geniallyButton1').on("click", () => {

        //console.log(fecha.setDate((fecha.getDate() - fecha.getDay() +1)))

        console.log("Fechas : ")

        var semanasGuardadas = dates( fecha )

        for(var i = 0; i < semanasGuardadas.length; i++){
            console.log("Semana "+(i + 1))
            for(var j = 0; j <semanasGuardadas[i].length; j++){
                console.log(semanasGuardadas[i][j])
            }
        }

        console.log("Pruebas : ")

        var diasIF = extraeDias(semanasGuardadas)

       for (var i = 0; i < diasIF.length; i++){

            console.log("Pareja número "+i)

            for (var j = 0; j < diasIF[i].length; j++){

                console.log(diasIF[i][j])

            }

       }


        //fechasBlade(diasIF)

    });

})