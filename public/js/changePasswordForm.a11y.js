$(() => { 

    var mainTray_bc = getComputedStyle(document.querySelector('.mainTray')).backgroundColor;
    var sectionTitle_c = getComputedStyle(document.querySelector('.sectionTitle')).color;
    var spaceTopMenu_bc = getComputedStyle(document.querySelector('#spaceTopMenu')).backgroundColor;

    if($('.adminMenu')[0]){
        var adminMenu_bc = getComputedStyle(document.querySelector('.adminMenu')).backgroundColor;
        var sidebar_c = getComputedStyle(document.querySelector('.sidebar .nav-links .adminMenu .links_name')).color;
    }

    var i_c = getComputedStyle(document.querySelector('i')).color;
    var span_color = getComputedStyle(document.querySelector('span')).color;
    var toolbar_text_color = getComputedStyle(document.querySelector('.toolbar-text')).color;
    var toolbar_inner_color = getComputedStyle(document.querySelector('.toolbar-inner')).color;
    var sidebar_bc = getComputedStyle(document.querySelector('.sidebar')).backgroundColor;
    var home_content_bc = getComputedStyle(document.querySelector('.home-content')).backgroundColor;
    var profile_details_bc = getComputedStyle(document.querySelector('.profile-details')).backgroundColor; 
    var logo_details_bc = getComputedStyle(document.querySelector('.logo-details')).backgroundColor; 
    var home_section_bc = getComputedStyle(document.querySelector('.home-section')).backgroundColor;
    var sectionTitle_bc = getComputedStyle(document.querySelector('.sectionTitle')).backgroundColor; 
    var sidebar_button_bc = getComputedStyle(document.querySelector('.sidebar-button')).backgroundColor;
    var dashboard_c = getComputedStyle(document.querySelector('.dashboard')).color;
    var nav_bc = getComputedStyle(document.querySelector('nav')).backgroundColor;
    var toolbar_inner_bc = getComputedStyle(document.querySelector('.toolbar-inner')).backgroundColor;
    var form_bc = getComputedStyle(document.querySelector('form')).backgroundColor;
    var toolbar_item_bc = getComputedStyle(document.querySelector('.toolbar-item')).backgroundColor;
    var a_c = getComputedStyle(document.querySelector('a')).color;
    var li_bc = getComputedStyle(document.querySelector('li')).backgroundColor;
    var button_bc = getComputedStyle(document.querySelector('button')).backgroundColor;  
    var button_c = getComputedStyle(document.querySelector('button')).color; 
    var icon_overlay_bc = getComputedStyle(document.querySelector('.icon-overlay')).backgroundColor;
    var icon_toolbar_c = getComputedStyle(document.querySelector('#icon-toolbar')).color;    
    var label_c = getComputedStyle(document.querySelector('label')).color;    
    var section_field_c = getComputedStyle(document.querySelector('.section_field')).color;
    var input_bc = getComputedStyle(document.querySelector('input')).backgroundColor;
    var input_c = getComputedStyle(document.querySelector('input')).color;

    function defaultColors(){

        $('.mainTray').css('background', mainTray_bc);

        $('.mainTray').find('div').each(function(){
            $(this).css('background', mainTray_bc);
        })

        $('.sectionTitle').css('color', sectionTitle_c);

        $('#spaceTopMenu').css('background', spaceTopMenu_bc);

        $('span').css('color', span_color);
        $('.toolbar-inner').css('color', toolbar_inner_color);
        $('.toolbar-text').css('color', toolbar_text_color);  
        
        $('i').css('color', i_c);
        $('.sidebar').css('background', sidebar_bc);
        $('.home-content').css('background', home_content_bc);
        $('.profile-details').css('background', profile_details_bc);
    
        $('.logo-details').css('background', logo_details_bc);
        $('.home-section').css('background', home_section_bc);
        $('.sectionTitle').css('background', sectionTitle_bc);
        $('.sidebar-button').css('background', sidebar_button_bc);
        $('.dashboard').css('color', dashboard_c);
        $('nav').css('background', nav_bc);
        $('nav .sidebar-button i').css('color', sidebar_c);
        $('.sidebar').css('background', sidebar_bc);
        $('.sidebar li').css('background', sidebar_bc);
        $('.toolbar-inner').css('background', toolbar_inner_bc);      
        $('a').css('color', a_c);

        $('form').css('background', form_bc);

        $('p').css('color', 'black');
        $('.toolbar-item svg').css('color', toolbar_text_color); 
        $('.toolbar-title').css('color', 'black');
        $('.toolbar-item').css('background', toolbar_item_bc);

        if($('.adminMenu')[0]){
            $('.adminMenu').css('background', adminMenu_bc);
            $('.adminMenu span, .adminMenu i').css('color', 'white');
            $('nav .sidebar-button i').css('color', sidebar_c);
        }
        
        $('.icon-overlay').css('background', icon_overlay_bc);
        $('#icon-toolbar').css('color', icon_toolbar_c);

        $('li:not(.adminMenu)').css('background', li_bc);

        $('p').css('color', 'black');
        $('button').css('background', button_bc);
        $('button').css('color', button_c);
        $('.section_field').css('color', section_field_c);
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
            $('.notifyTrayIns, .sectionIncomplete, input, .sidebar, .sidebar li, li, .icon-overlay, .home-section, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'black');
            $('.sidebar span, .toolbar-inner, .toolbar-text, input, label, p, div, span, button, h1, .icon-overlay svg, i, .toolbar-item svg, a').css('color', '#00FFFF');
            
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
            $('.notifyTrayIns, .sectionIncomplete, .sidebar, input, .sidebar li, li, .icon-overlay, .home-section, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'black');
            $('.sidebar span, .toolbar-inner, .toolbar-text, p, input, label, div, span, button, h1, .icon-overlay svg, i, .toolbar-item svg, a').css('color', 'yellow');
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
            $('.notifyTrayIns, .sectionIncomplete, .sidebar, input, .sidebar li, li, .icon-overlay, .home-section, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'white');
            $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, input, label, span, button, h1, .icon-overlay svg, i, .toolbar-item svg, a, .boton-delete-user i').css('color', 'black');                
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