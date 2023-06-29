$(() => { 

    var mainTray_bc = getComputedStyle(document.querySelector('.mainTray')).backgroundColor;
    var spaceTopMenu_bc = getComputedStyle(document.querySelector('#spaceTopMenu')).backgroundColor;
    var h1_c = getComputedStyle(document.querySelector('h1')).color;
    var adminMenu_bc = getComputedStyle(document.querySelector('.adminMenu')).backgroundColor;
    var i_c = getComputedStyle(document.querySelector('i')).color;
    var span_color = getComputedStyle(document.querySelector('span')).color;
    var toolbar_text_color = getComputedStyle(document.querySelector('.toolbar-text')).color;
    var toolbar_inner_color = getComputedStyle(document.querySelector('.toolbar-inner')).color;
    var sidebar_bc = getComputedStyle(document.querySelector('.sidebar')).backgroundColor;
    var home_content_bc = getComputedStyle(document.querySelector('.home-content')).backgroundColor;
    var profile_details_bc = getComputedStyle(document.querySelector('.profile-details')).backgroundColor; 
    var logo_details_bc = getComputedStyle(document.querySelector('.logo-details')).backgroundColor; 
    var home_section_bc = getComputedStyle(document.querySelector('.home-section')).backgroundColor;
    var sidebar_button_bc = getComputedStyle(document.querySelector('.sidebar-button')).backgroundColor;
    var dashboard_c = getComputedStyle(document.querySelector('.dashboard')).color;
    var nav_bc = getComputedStyle(document.querySelector('nav')).backgroundColor;
    var sidebar_c = getComputedStyle(document.querySelector('.sidebar .nav-links .adminMenu .links_name')).color;
    var toolbar_inner_bc = getComputedStyle(document.querySelector('.toolbar-inner')).backgroundColor;
    var toolbar_item_bc = getComputedStyle(document.querySelector('.toolbar-item')).backgroundColor;
    var a_c = getComputedStyle(document.querySelector('a')).color;
    var li_bc = getComputedStyle(document.querySelector('li')).backgroundColor;
    var button_bc = getComputedStyle(document.querySelector('button')).backgroundColor;
    var button_c = getComputedStyle(document.querySelector('button')).color;

    var toggle_act_button_bc = getComputedStyle(document.querySelector('.toggle-act-button')).backgroundColor;
    var toggle_act_button_c = getComputedStyle(document.querySelector('.toggle-act-button')).color;
    var eachColor_A_c = getComputedStyle(document.querySelector('#eachColor_A')).backgroundColor;
    var eachColor_B_c = getComputedStyle(document.querySelector('#eachColor_B')).backgroundColor;
    var eachColor_C_c = getComputedStyle(document.querySelector('#eachColor_C')).backgroundColor;
    var icon_overlay_bc = getComputedStyle(document.querySelector('.icon-overlay')).backgroundColor;
    var icon_toolbar_c = getComputedStyle(document.querySelector('#icon-toolbar')).color;

    var coloresFondo = [];
    var coloresLetra = [];
    var coloresDateAccordion_bc = [];
    var coloresDateAccordion_c = [];
    
        $(document).ajaxSuccess(function(){
            var padreLista = $('#search_listAct');

            padreLista.find('.divTime').each(function() {
                var div = $(this);

                coloresFondo.push(div.css('background-color'));
                coloresLetra.push(div.css('color'));
            }) 

            padreLista.find('.dateAccordion').each(function(){
                var div = $(this);

                coloresDateAccordion_bc.push(div.css('background-color'));
                coloresDateAccordion_c.push(div.css('color'));
            })

        });

    function defaultColors(){

        $('.mainTray').css('background', mainTray_bc);

        $('.mainTray').find('div').each(function(){
            $(this).css('background', mainTray_bc);
            $(this).css('color', 'black');
        })
        
        $('#spaceTopMenu').css('background', spaceTopMenu_bc);

        if($('.dateAccordion')[0]){
            $('.dateAccordion').each(function(index){
                var dateAccordion_bc = coloresDateAccordion_bc[index % coloresDateAccordion_bc.length];
                var dateAccordion_c = coloresDateAccordion_c[index % coloresDateAccordion_c.length];
        
                $(this).css('background-color', dateAccordion_bc);
                $(this).css('color', dateAccordion_c);
            })
        }

        

        $('form').css('background', mainTray_bc);
        $('button').css('background', button_bc);
        $('button').css('color', button_c);

        $('.toggle-act-button').css('background', toggle_act_button_bc);
        $('.toggle-act-button').css('color', toggle_act_button_c);
        $('#eachColor_A').css('background', eachColor_A_c);
        $('#eachColor_B').css('background', eachColor_B_c);
        $('#eachColor_C').css('background', eachColor_C_c);      

        $('h1').css('color', h1_c);

        $('span').css('color', span_color);
        $('.toolbar-inner').css('color', toolbar_inner_color);
        $('.toolbar-text').css('color', toolbar_text_color);  
        
        $('i').css('color', i_c);
        $('button i').css('color', button_c);
        $('.sidebar').css('background', sidebar_bc);
        $('.home-content').css('background', home_content_bc);
        $('.profile-details').css('background', profile_details_bc);
    
        $('.logo-details').css('background', logo_details_bc);
        $('.home-section').css('background', home_section_bc);
        $('.sidebar-button').css('background', sidebar_button_bc);
        $('.dashboard').css('color', dashboard_c);
        $('nav').css('background', nav_bc);
        $('nav .sidebar-button i').css('color', sidebar_c);
        $('.sidebar').css('background', sidebar_bc);
        $('.sidebar li').css('background', sidebar_bc);
        $('.toolbar-inner').css('background', toolbar_inner_bc);      
        $('a').css('color', a_c);

        $('p').css('color', 'black');
        $('.toolbar-item svg').css('color', toolbar_text_color); 
        $('.toolbar-title').css('color', 'black');
        $('.toolbar-item').css('background', toolbar_item_bc);
        $('.adminMenu').css('background', adminMenu_bc);
        $('.adminMenu span, .adminMenu i').css('color', 'white')
        $('li:not(.adminMenu)').css('background', li_bc);
        $('.icon-overlay').css('background', icon_overlay_bc);
        $('#icon-toolbar').css('color', icon_toolbar_c);

        if($('.divTime')[0]){
            $('.divTime').each(function(index){
                var colorFondo = coloresFondo[index % coloresFondo.length]; 
                var colorLetra = coloresLetra[index % coloresLetra.length];

                $(this).css('background-color', colorFondo);
                $(this).find('p').css('color', colorLetra);

            })

            $('.divTime').css('color', 'white');

            $('.divTime').find('div').each(function(){
                $(this).css('color', 'white');
            })

            $('.divTime').find('p').each(function(){
                $(this).css('color', 'white');
            })
        }

        if($('.hidden')[0]){
            $('.hidden').css('background', '#004998');
            $('.hidden').find('div p').each(function(){
                $(this).css('color', 'white');
            })
            $('.hidden').find('i').each(function(){
                $(this).css('color', 'white');
            })

            $('.hidden').find('button').each(function(){
                $(this).css('background', 'grey');
            })
        }
        
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

        $('#ti1').click(function(){

            tamaño = parseInt($('#ti1').css('font-size'));

            curSize = parseInt($('#ti1').css('font-size')) + 10;

		    if (curSize <= 48){
                $('p:not(.toolbar-title)').css('font-size', curSize);
                $('h1').css('font-size', curSize);
                $('span:not(.icon-overlay)').css('font-size', curSize);
                $('button').css('font-size', curSize);
                $('label:not(#overlay1)').css('font-size', curSize);
                $('.toolbar-item').css('font-size', curSize);
            }		

        });

        $('#ti2').click(function(){

            tamaño = parseInt($('#ti1').css('font-size'));

            curSize = parseInt($('#ti1').css('font-size')) - 10;
            
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
                $('.links_name').css('font-size', sidebar_size);

                $('.calendario').find('span').each(function(){
                    $(this).css('font-size', sidebar_size);
                });

            }
			    
        });

        var htmlElement = document.querySelector("html");           

        $('#ti3').click(function(){

            if(!grayscale){
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
            
        });          

        $('#ti4').click(function(){

            if(high_contrast){
                disable_greyScale();
                negative_contrast = false;
                white_background = false; 
                high_contrast = false;
                defaultColors();
            }else{
                disable_greyScale();
                negative_contrast = false;
                white_background = false; 
                high_contrast = true;           
                defaultColors();
                $('div:not(.slide, .slider, .slides, #main, .navigation-auto').css('background', 'black');
                $('.notifyTrayIns, .sectionIncomplete, .sidebar, .sidebar li, li, .home-section, .icon-overlay, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'black');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, .icon-overlay svg, span, button, h1, i, .toolbar-item svg, a').css('color', '#00FFFF');
                
              }

        });

        $('#ti5').click(function(){

            if(negative_contrast){
                negative_contrast = false;
                disable_greyScale();
                high_contrast = false;
                white_background = false; 
                defaultColors();
            }else{
                disable_greyScale();
                high_contrast = false;
                white_background = false; 
                negative_contrast = true; 
                defaultColors();
                $('div:not(.slide, .slider, .slides, #main, .navigation-auto').css('background', 'black');
                $('.notifyTrayIns, .sectionIncomplete, .sidebar, .sidebar li, li, .home-section, .icon-overlay, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'black');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, .icon-overlay svg, span, button, h1, i, .toolbar-item svg, a').css('color', 'yellow');
             }

        });

        $('#ti6').click(function(){

            if(white_background){
                disable_greyScale();
                negative_contrast = false;
                high_contrast = false; 
                white_background = false;
                defaultColors();
            }else{
                disable_greyScale();
                high_contrast = false;
                negative_contrast = false;
                white_background = true; 
                defaultColors();
                $('div:not(.slide, .slider, .slides, #main, .navigation-auto').css('background', 'white');
                $('.notifyTrayIns, .sectionIncomplete, .sidebar, .sidebar li, li, .home-section, .icon-overlay, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'white');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, .icon-overlay svg, span, button, h1, i, .toolbar-item svg, a, .boton-delete-user i').css('color', 'black');                
             }

        });

        $('#ti7').click(function(){
            disable_greyScale();
            defaultColors();
            restoreFontSize();

        });

})