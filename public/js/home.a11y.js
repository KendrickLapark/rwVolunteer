$(() => { 

    var span_color = getComputedStyle(document.querySelector('span')).color;
    var toolbar_text_color = getComputedStyle(document.querySelector('.toolbar-text')).color;
    var toolbar_inner_color = getComputedStyle(document.querySelector('.toolbar-inner')).color;
    var toolbar_inner_bc = getComputedStyle(document.querySelector('.toolbar-inner')).backgroundColor;
    var toolbar_item_bc = getComputedStyle(document.querySelector('.toolbar-item')).backgroundColor;
    var a_c = getComputedStyle(document.querySelector('a')).color;
    var li_bc = getComputedStyle(document.querySelector('li')).backgroundColor; 
    var header_bc = getComputedStyle(document.querySelector('header')).backgroundColor;
    var main_bc = getComputedStyle(document.querySelector('#main')).backgroundColor;
    var footer_bc = getComputedStyle(document.querySelector('#divFooter')).backgroundColor;
    var footer_c = getComputedStyle(document.querySelector('.titleFoot')).color;
    var botonesAB_bc = getComputedStyle(document.querySelector('.botones.botonesAB')).backgroundColor;   
    var li_bc = getComputedStyle(document.querySelector('li')).backgroundColor;
    var icon_overlay_bc = getComputedStyle(document.querySelector('.icon-overlay')).backgroundColor;
    var icon_toolbar_c = getComputedStyle(document.querySelector('#icon-toolbar')).color;

    function defaultColors(){

        $('header').css('background', header_bc);

        $('header').find('div').each(function(){
            $(this).css('background', header_bc);
        })

        $('#main').css('background', main_bc);

        $('#main').find('div').each(function(){
            $(this).css('background', main_bc);
        })
      
        $('span').css('color', span_color);
        $('.toolbar-inner').css('color', toolbar_inner_color);
        $('.toolbar-text').css('color', toolbar_text_color);         
        $('.toolbar-inner').css('background', toolbar_inner_bc);      
        $('a').css('color', a_c);
        $('p').css('color', 'black');
        $('.toolbar-item svg').css('color', toolbar_text_color); 
        $('.toolbar-title').css('color', 'black');
        $('.toolbar-item').css('background', toolbar_item_bc);
        $('li:not(.adminMenu)').css('background', li_bc);
        $('p').css('color', 'black');

        $('.botones.botonesAB').css('background', botonesAB_bc);
        $('li').css('background', li_bc);

        $('#divFooter').css('background', footer_bc);
        $('#divFooter').css('color', footer_c);

        $('#divFooter').find('div').each(function(){
            $(this).css('background', footer_bc);
            $(this).css('color', footer_c);
        })

        $('#divFooter').find('p').each(function(){
            $(this).css('color', footer_c);
        })

        $('#divFooter').find('a').each(function(){
            $(this).css('color', footer_c);
        })

        $('.icon-overlay').css('background', icon_overlay_bc);
        $('#icon-toolbar').css('color', icon_toolbar_c);

    }

    var grayscale = false;
    var high_contrast = false;
    var negative_contrast = false;
    var white_background = false;

    function disable_greyScale(){
        $(htmlElement).css('-moz-filter', 'grayscale(0%)');
        $(htmlElement).css('-webkit-filter', 'grayscale(0%)');
        $(htmlElement).css('filter', 'grayscale(0%)');          
            grayscale = false;

    }

    var tamañoLetra = localStorage.getItem('tamaño-fuente');

    function ajustaFuente(fontSize){

        var format_fontSize = parseInt(fontSize);

        $('p:not(.toolbar-title)').css('font-size', format_fontSize);
        $('h1').css('font-size', format_fontSize);
        $('span:not(.icon-overlay)').css('font-size', format_fontSize);
        $('button').css('font-size', format_fontSize);
        $('label:not(#overlay1)').css('font-size', format_fontSize);
        $('.toolbar-item').css('font-size', format_fontSize);
    }

    function aumentarTamaño(tamañoLetra){

        if(tamañoLetra != null){
            tamaño = tamañoLetra;
        }else{
            tamaño = parseInt($('#ti1').css('font-size'));
        }

        curSize = tamaño + 10;

        localStorage.setItem('tamaño-fuente', curSize);

        if (curSize <= 48){
            $('p:not(.toolbar-title)').css('font-size', curSize);
            $('h1').css('font-size', curSize);
            $('span:not(.icon-overlay)').css('font-size', curSize);
            $('button').css('font-size', curSize);
            $('label:not(#overlay1)').css('font-size', curSize);
            $('.toolbar-item').css('font-size', curSize);
        }

    }

    function disminuirTamaño(tamañoLetra){

        if(tamañoLetra != null){
            tamaño = tamañoLetra;
        }else{
            tamaño = parseInt($('#ti1').css('font-size'));
        }

        curSize = tamaño - 10;

        localStorage.setItem('tamaño-fuente', curSize);
        
        if (curSize > 18){
            $('p:not(.toolbar-title)').css('font-size', curSize);
            $('h1').css('font-size', curSize);
            $('span:not(.icon-overlay)').css('font-size', curSize);
            $('button').css('font-size', curSize);
            $('label:not(#overlay1)').css('font-size', curSize);
            $('.toolbar-item').css('font-size', curSize); 
        }else if(curSize == 18){
            $('p:not(.toolbar-title)').css('font-size', curSize);
            $('h1').css('font-size', curSize);
            $('span:not(.icon-overlay)').css('font-size', curSize);
            $('button').css('font-size', curSize);
            $('label:not(#overlay1)').css('font-size', curSize);
            $('.toolbar-item').css('font-size', curSize);        
            $('.links_name').css('font-size', curSize);

        }

    }

    function modoGris(){
        if(!grayscale){
            localStorage.setItem('modo-a11y', 'modo-gris');
            $(htmlElement).css('-moz-filter', 'grayscale(100%)');
            $(htmlElement).css('-webkit-filter', 'grayscale(100%)');
            $(htmlElement).css('filter', 'grayscale(100%)');              
            $(htmlElement).css('filter', 'gray');
                defaultColors();
                grayscale = true;
                high_contrast = false;
                negative_contrast = false;
                white_background = false; 
        }else{
            disable_greyScale();
        }
    }

    function contrasteAlto(){

        if(high_contrast){
            localStorage.removeItem('modo-a11y');
            disable_greyScale();
            negative_contrast = false;
            white_background = false; 
            high_contrast = false;
            defaultColors();
        }else{
            localStorage.setItem('modo-a11y', 'contraste-alto');
            disable_greyScale();
            negative_contrast = false;
            white_background = false; 
            high_contrast = true;           
            defaultColors();
            $('div:not(.slide, .slider, .slides, #main, .navigation-auto').css('background', 'black');
            $('.notifyTrayIns, .sectionIncomplete, .sidebar, .sidebar li, li, .home-section, .mainData, .icon-overlay, .divTime, .botones.botonesAB, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'black');
            $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .icon-overlay svg, .toolbar-item svg, a').css('color', '#00FFFF');
        }

    }

    function contrasteNegativo(){

        if(negative_contrast){
            localStorage.removeItem('modo-a11y');
            negative_contrast = false;
            disable_greyScale();
            high_contrast = false;
            white_background = false; 
            defaultColors();
        }else{
            localStorage.setItem('modo-a11y', 'contraste-negativo');
            disable_greyScale();
            high_contrast = false;
            white_background = false; 
            negative_contrast = true; 
            defaultColors();
            $('div:not(.slide, .slider, .slides, #main, .navigation-auto').css('background', 'black');
            $('.notifyTrayIns, .sectionIncomplete, .sidebar, .sidebar li, li, .home-section, .icon-overlay, .mainData, .divTime, .botones.botonesAB, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'black');
            $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .icon-overlay svg, .toolbar-item svg, a').css('color', 'yellow');
        }

    }

    function modoClaro(){
        if(white_background){
            localStorage.removeItem('modo-a11y')
            disable_greyScale();
            negative_contrast = false;
            high_contrast = false; 
            white_background = false;
            defaultColors();
        }else{
            localStorage.setItem('modo-a11y', 'modo-claro');;
            disable_greyScale();
            high_contrast = false;
            negative_contrast = false;
            white_background = true; 
            defaultColors();
            $('div:not(.slide, .slider, .slides, #main, .navigation-auto').css('background', 'white');
            $('.notifyTrayIns, .sectionIncomplete, .sidebar, .sidebar li, li, .home-section, .icon-overlay, .mainData, .divTime, nav, .botones.botonesAB, .toolbar-inner, form, button, .profile-details, .row').css('background', 'white');
            $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .toolbar-item svg, .icon-overlay svg, a, .boton-delete-user i').css('color', 'black');                
        }
    }

    function restoreFontSize(){
        $('p:not(.toolbar-title)').css('font-size', 18);
        $('h1').css('font-size', 18);
        $('button').css('font-size', 18);
        $('label:not(#overlay1)').css('font-size', 18);
        $('.toolbar-item').css('font-size', 18);
        $('.dashboard').css('font-size', 24);
        $('.links_name, .admin_name').css('font-size', 18);
        $('.toolbar-text').css('font-size', 18);

    }

    function ajustesPorDefecto(){
        localStorage.removeItem('modo-a11y');
        localStorage.removeItem('tamaño-fuente');
        negative_contrast = false;
        high_contrast = false; 
        white_background = false;
        disable_greyScale();
        defaultColors();
        restoreFontSize();
    }

    $('#ti1').click(function(){
        aumentarTamaño(tamañoLetra);
    });

    $('#ti2').click(function(){
        disminuirTamaño(tamañoLetra);  
    });

    var htmlElement = document.querySelector("html");           

    $('#ti3').click(function(){
        modoGris();
    });          

    $('#ti4').click(function(){
        contrasteAlto();
    });

    $('#ti5').click(function(){
        contrasteNegativo();
    });

    $('#ti6').click(function(){
        modoClaro();
    });

    $('#ti7').click(function(){
        ajustesPorDefecto();
    });

    if(localStorage.getItem('modo-a11y') === 'modo-gris'){
        modoGris();
    }

    if(localStorage.getItem('modo-a11y') === 'contraste-alto'){
        contrasteAlto();
    }

    if(localStorage.getItem('modo-a11y') === 'contraste-negativo'){
        contrasteNegativo();
    }

    if(localStorage.getItem('modo-a11y') === 'modo-claro'){
        modoClaro();
    }

    if(localStorage.getItem('tamaño-fuente') != null){
        ajustaFuente(tamañoLetra);
    } 

})