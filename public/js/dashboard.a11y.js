$(() => { 

    var button_i_c = getComputedStyle(document.querySelector('button i')).color;
    var spaceTopMenu_bc = getComputedStyle(document.querySelector('#spaceTopMenu')).backgroundColor;
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
    var sectionTitle_bc = getComputedStyle(document.querySelector('.sectionTitle')).backgroundColor; 
    var sidebar_button_bc = getComputedStyle(document.querySelector('.sidebar-button')).backgroundColor;
    var dashboard_c = getComputedStyle(document.querySelector('.dashboard')).color;
    var nav_bc = getComputedStyle(document.querySelector('nav')).backgroundColor;
    var sidebar_c = getComputedStyle(document.querySelector('.sidebar .nav-links .adminMenu .links_name')).color;
    var toolbar_inner_bc = getComputedStyle(document.querySelector('.toolbar-inner')).backgroundColor;
    var form_bc = getComputedStyle(document.querySelector('form')).backgroundColor;
    var toolbar_item_bc = getComputedStyle(document.querySelector('.toolbar-item')).backgroundColor;
    var a_c = getComputedStyle(document.querySelector('a')).color;
    var li_bc = getComputedStyle(document.querySelector('li')).backgroundColor;
    var mainTrayDashboard_bc = getComputedStyle(document.querySelector('.mainTrayDashboard')).backgroundColor;
    var notifyTrayIns_bc = getComputedStyle(document.querySelector('.notifyTrayIns')).backgroundColor;
    var sectionIncomplete_bc = getComputedStyle(document.querySelector('.sectionIncomplete')).backgroundColor;
    var sectionIncomplete_c = getComputedStyle(document.querySelector('.sectionIncomplete')).color;
    var msg_Inscription_bc = getComputedStyle(document.querySelector('.msg_Inscription')).backgroundColor;
    var hidden_msg_Inscription_bc = getComputedStyle(document.querySelector('.hidden_msg_Inscription')).backgroundColor;
    var inner_hidden_msg_Inscription_bc = getComputedStyle(document.querySelector('.inner_hidden_msg_Inscription')).backgroundColor;
    var button_bc = getComputedStyle(document.querySelector('button')).backgroundColor;
    var button_c = getComputedStyle(document.querySelector('button')).color;
    var listTrayDashboard_bc = getComputedStyle(document.querySelector('.listTrayDashboard')).backgroundColor;
    var mainActivityDashboard_bc = getComputedStyle(document.querySelector('.mainActivityDashboard')).backgroundColor;    

    function defaultColors(){
        $('span').css('color', span_color);
        $('.toolbar-inner').css('color', toolbar_inner_color);
        $('.toolbar-text').css('color', toolbar_text_color);  

        $('#spaceTopMenu').css('background', spaceTopMenu_bc);
        
        $('.notifyTrayIns').css('background', notifyTrayIns_bc);
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

        $('button i').css('color', button_i_c); 
        $('form').css('background', form_bc);

        $('p').css('color', 'black');
        $('.toolbar-item svg').css('color', toolbar_text_color); 
        $('.toolbar-title').css('color', 'black');
        $('.toolbar-item').css('background', toolbar_item_bc);
        $('.adminMenu').css('background', adminMenu_bc);
        $('.adminMenu span, .adminMenu i').css('color', 'white')
        $('li:not(.adminMenu)').css('background', li_bc);

        $('.mainTrayDashboard').css('background', mainTrayDashboard_bc);

        $('.mainTrayDashboard').find('div').each(function(){
            $(this).css('color', 'black');
        })

        $('.mainActivityDashboard').css('background', mainActivityDashboard_bc);

        $('.sectionIncomplete').css('background', sectionIncomplete_bc);
        $('.listTrayContainer').css('background', 'white');

        $('.listTrayDashboard').css('background', listTrayDashboard_bc);

        $('.hidden_msg_Inscription').css('background', hidden_msg_Inscription_bc);

        $('.msg_Inscription').css('background', msg_Inscription_bc);
        $('.msg_Inscription').parent().css('background', 'white');
        $('.msg_Inscription').parent().css('color', '#004a98');

        $('.inner_hidden_msg_Inscription').css('background', inner_hidden_msg_Inscription_bc);
        $('.inner_hidden_msg_Inscription').children().css('background', inner_hidden_msg_Inscription_bc);
        $('p').css('color', 'black');
        $('button').css('background', button_bc);
        $('button').css('color', 'black');
        
        $('.sectionIncomplete, .sectionIncomplete p, .sectionIncomplete i').css('color', 'white');

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
                $('.notifyTrayIns, .sectionIncomplete, .sidebar, .sidebar li, li, .home-section, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'black');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .toolbar-item svg, a').css('color', '#00FFFF');
                
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
                $('.notifyTrayIns, .sectionIncomplete, .sidebar, .sidebar li, li, .home-section, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'black');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .toolbar-item svg, a').css('color', 'yellow');
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
                $('.notifyTrayIns, .sectionIncomplete, .sidebar, .sidebar li, li, .home-section, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row').css('background', 'white');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .toolbar-item svg, a, .boton-delete-user i').css('color', 'black');                
             }

        });

        $('#ti7').click(function(){
            disable_greyScale();
            defaultColors();
            restoreFontSize();

        });

})