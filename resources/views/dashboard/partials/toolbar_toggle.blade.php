<div class="toolbar" aria-hidden="false">
    <input type="checkbox" name="" id="check">
        <div class="toggle-overlay">
            
            <label for="check" id="overlay1">
                <span id="toggle-icon-overlay" class=icon-overlay  tabindex="0" title="Herramientas de accessibilidad navegación"> <i class="fa-solid fa-wheelchair" id="icon-toolbar"></i> </span>
            </label>
        </div>

    <div class="toolbar-overlay">

        <div class="toolbar-inner">

            <p class="toolbar-title"> Herramientas de accesibilidad </p>

                <ul class="toolbar-items" id="ul-toolbar-items">

                    <li class="toolbar-item" id="ti1" tabindex="0"> 
                        <a href="#/" style="text-decoration: none" tabindex="-1">
                            <i class="fa-solid fa-magnifying-glass-plus" color="black"></i> <span class="toolbar-text"> Aumentar texto </span>              
                        </a>
                    </li>
                    <li class="toolbar-item" id="ti2" tabindex="0"> 
                        <a href="#/" style="text-decoration: none" tabindex="-1">
                            <i class="fa-solid fa-magnifying-glass-minus"></i> <span class="toolbar-text">  Disminuir texto </span>
                        </a>
                    </li>
                    <li class="toolbar-item" id="ti3" tabindex="0">
                        <a href="#/" style="text-decoration: none" tabindex="-1">
                            <i class="fa-solid fa-barcode"></i><span class="toolbar-text" > Escala de grises </span>
                        </a>
                    </li>
                    <li class="toolbar-item" id="ti4" tabindex="0">
                        <a href="#/" style="text-decoration: none" tabindex="-1">
                            <i class="fa-solid fa-circle-half-stroke"></i> <span class="toolbar-text">  Alto contraste </span>
                        </a>
                    </li>
                    <li class="toolbar-item" id="ti5" tabindex="0" >
                        <a href="#/" style="text-decoration: none" tabindex="-1">
                            <i class="fa-solid fa-eye"></i> <span class="toolbar-text">  Contraste negativo </span>
                        </a>
                    </li>
                    <li class="toolbar-item" id="ti6" tabindex="0">
                        <a href="#/" style="text-decoration: none" tabindex="-1">
                            <i class="fa-regular fa-lightbulb"></i> <span class="toolbar-text">  Fondo claro </span>
                        </a>
                    </li>
                    <li class="toolbar-item" id="ti7" tabindex="0">
                        <a href="#/" style="text-decoration: none" tabindex="-1">
                            <i class="fa-solid fa-arrow-rotate-right"></i> <span class="toolbar-text"> Restablecer </span>
                        </a>
                    </li>      
                </ul>

        </div>

    </div>
</div>

<script type="text/javascript">

    /* const lista = document.getElementById('#ul-toolbar-items');
    const activador = document.getElementById('#toggle-icon-overlay');

    activador.addEventListener('click', function() {
    const elementos = lista.getElementsByTagName('li');
    
        for (let i = 0; i < elementos.length; i++) {
            if (elementos[i].tabIndex !== -1) {
            elementos[i].tabIndex = -1; // Deshabilitar elemento
            } else {
            elementos[i].tabIndex = i + 1; // Habilitar elemento
            }
        }
    });

    activador.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            // Obtener el elemento activo
            const elementoActivo = document.activeElement;
            
            // Verificar si el elemento activo está en la lista
            if (elementoActivo.tagName === 'LI' && lista.contains(elementoActivo)) {
            const elementos = lista.getElementsByTagName('li');
            
            for (let i = 0; i < elementos.length; i++) {
                elementos[i].tabIndex = -1; // Deshabilitar todos los elementos de la lista
            }
            
            elementoActivo.tabIndex = 1; // Habilitar solo el elemento activo
            }
        }
    }); */

</script>
