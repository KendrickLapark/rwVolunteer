$(() => { 

    var sectionTitle_c = getComputedStyle(document.querySelector('.sectionTitle')).color;

    var i_c = getComputedStyle(document.querySelector('i')).color;
    var span_color = getComputedStyle(document.querySelector('span')).color;
    var sectionTitle_bc = getComputedStyle(document.querySelector('.sectionTitle')).backgroundColor; 
    var form_bc = getComputedStyle(document.querySelector('form')).backgroundColor;
    var li_bc = getComputedStyle(document.querySelector('li')).backgroundColor;
    var a_bc = getComputedStyle(document.querySelector('a')).backgroundColor;
    var a_c = getComputedStyle(document.querySelector('a')).color;
    var header_bc = getComputedStyle(document.querySelector('#divHeader')).backgroundColor;
    var button_bc = getComputedStyle(document.querySelector('button')).backgroundColor;  
    var button_c = getComputedStyle(document.querySelector('button')).color; 
    var icon_overlay_bc = getComputedStyle(document.querySelector('.icon-overlay')).backgroundColor;
    var icon_toolbar_c = getComputedStyle(document.querySelector('#icon-toolbar')).color;    
    var toolbar_inner_bc = getComputedStyle(document.querySelector('.toolbar-inner')).backgroundColor;
    var icon_overlay_bc = getComputedStyle(document.querySelector('.icon-overlay')).backgroundColor;
    var icon_toolbar_c = getComputedStyle(document.querySelector('#icon-toolbar')).color; 
    var toolbar_text_color = getComputedStyle(document.querySelector('.toolbar-text')).color;
    var toolbar_inner_color = getComputedStyle(document.querySelector('.toolbar-inner')).color;
    var toolbar_item_bc = getComputedStyle(document.querySelector('.toolbar-item')).backgroundColor;
    var main_bc = getComputedStyle(document.querySelector('#main')).backgroundColor;
    var footer_bc = getComputedStyle(document.querySelector('#divFooter')).backgroundColor;
    var label_c = getComputedStyle(document.querySelector('label')).color;
    var input_bc = getComputedStyle(document.querySelector('input')).backgroundColor;
    var input_c = getComputedStyle(document.querySelector('input')).color;
    var titleFoot_c = getComputedStyle(document.querySelector('.titleFoot')).color;

    function defaultColors(){

        $('.sectionTitle').css('color', sectionTitle_c);
        $('span').css('color', span_color)
        $('#divHeader').css('background', header_bc);
        $('#divHeader').find('div').each(function(){
            $(this).css('background', header_bc);
        });
        $('#main').css('background', main_bc);
        $('#main').find('div').each(function(){
            $(this).css('background', main_bc);
        });
        $('li').css('background', li_bc);
        $('i').css('color', i_c);
        $('.sectionTitle').css('background', sectionTitle_bc);      
        $('a').css('background', a_bc); 
        $('a').css('color', a_c);
        $('form').css('background', form_bc);
        $('p').css('color', 'black');    
        $('.icon-overlay').css('background', icon_overlay_bc);
        $('#icon-toolbar').css('color', icon_toolbar_c);
        $('p').css('color', 'black');
        $('button').css('background', button_bc);
        $('button').css('color', button_c);
        $('.toolbar-item svg').css('color', toolbar_text_color); 
        $('.toolbar-title').css('color', 'black');
        $('.toolbar-item').css('background', toolbar_item_bc);
        $('.toolbar-inner').css('color', toolbar_inner_color);
        $('.toolbar-text').css('color', toolbar_text_color);  
        $('.toolbar-inner').css('background', toolbar_inner_bc); 
        $('#divFooter').css('background', footer_bc);
        $('#divFooter').find('div').each(function(){
            $(this).css('background', footer_bc);
        })
        $('.titleFoot').css('color', titleFoot_c);
        $('label').css('color', label_c);
        $('input').css('background', input_bc);
        $('input').css('color', input_c);

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
            $('.sectionIncomplete, li, input, a, .icon-overlay, .mainData, .divTime, .toolbar-inner, form, button').css('background', 'black');
            $('.toolbar-inner, input, a, .toolbar-text, p, div, span, button, h1, .icon-overlay svg, i, .toolbar-item svg, a').css('color', '#00FFFF');
            
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
            $('.sectionIncomplete, li, input, a, .icon-overlay, .home-section, .mainData, .toolbar-inner, form, button').css('background', 'black');
            $('.toolbar-inner, .toolbar-text, input, a, p, div, span, button, h1, .icon-overlay svg, i, .toolbar-item svg, a').css('color', 'yellow');
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
            $('.sectionIncomplete, li, input, a, .icon-overlay, .home-section, .mainData, #divFooter, #contentFooter, .eachCoolFoot .toolbar-inner, form, button').css('background', 'white');
            $('.sidebar span, .toolbar-inner, .toolbar-text, input, a, p, div, span, button, h1, .icon-overlay svg, i, .toolbar-item svg, a, .boton-delete-user i').css('color', 'black');                
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
            aumentarTamaño();	
        });

        $('#ti2').click(function(){
            disminuirTamaño();	    
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