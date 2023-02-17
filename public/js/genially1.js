$(()=>{

    var fecha = new Date (new Date().getFullYear(), 0, 31);

    

    function dates(current) {   
        
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

            semanas.push ( semana )

        }

        return semanas;
    }

    $('#geniallyButton1').on("click", () => {

        //console.log(fecha.setDate((fecha.getDate() - fecha.getDay() +1)))

        var semanasGuardadas = dates( fecha )

        for(var i = 0; i < semanasGuardadas.length; i++){
            for(var j = 0; j < semanasGuardadas[i].length; j++)
           console.log(semanasGuardadas[i][j]) 
        }

        fecha.setDate((fecha.getDate() - fecha.getDay() +1));

        console.log(fecha) 

    });

})