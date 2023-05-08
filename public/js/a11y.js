$(() => { 

    var p_color = getComputedStyle(document.querySelector('p')).color;
    var span_color = getComputedStyle(document.querySelector('span')).color;
    var div_color = getComputedStyle(document.querySelector('div')).color;
    var span_color = getComputedStyle(document.querySelector('span')).color;
    var toolbar_text_color = getComputedStyle(document.querySelector('.toolbar-text')).color;
    var toolbar_inner_color = getComputedStyle(document.querySelector('.toolbar-inner')).color;

    if($('.toolbar-item svg')[0]){
        var toolbar_item_bc = getComputedStyle(document.querySelector('.toolbar-item svg')).backgroundColor;
    } 

    if($('.sidebar-button')[0]){
        var sidebar_button_bc = getComputedStyle(document.querySelector('.sidebar-button')).backgroundColor;
    }

    /* if($('.sidebar span')[0]){
        var sidebar_span_c = getComputedStyle(document.querySelector('.sidebar span')).color;
    } */

    if($('.dashboard')[0]){
        var dashboard_c = getComputedStyle(document.querySelector('.dashboard')).color;
    }

    if($('.bx bx-menu sidebarBtn')[0]){
        var sidebarBtn_c = getComputedStyle(document.querySelector('.bx bx-menu sidebarBtn'));
    }

    if($('i')[0]){
        var i_c = getComputedStyle(document.querySelector('i')).color;
    } 

    if($('#spaceTopMenu')[0]){
        var spaceTopMenu_bc = getComputedStyle(document.querySelector('#spaceTopMenu')).backgroundColor;
    }

    if($('header')[0]){
        var header_bc = getComputedStyle(document.querySelector('header')).backgroundColor;
    }

    if($('nav')[0]){
        var nav_bc = getComputedStyle(document.querySelector('nav')).backgroundColor;
    }

    if($('.home-content')[0]){
        var home_content_bc = getComputedStyle(document.querySelector('.home-content')).backgroundColor;
    }

    if($('.sidebar')[0]){
        var sidebar_bc = getComputedStyle(document.querySelector('.sidebar')).backgroundColor;
    }

    if($('.sidebar li')[0]){
        var sidebar_li_bc = getComputedStyle(document.querySelector('.sidebar li')).backgroundColor; 
    }

    if($('.sectionTitle')[0]){
        var sectionTitle_bc = getComputedStyle(document.querySelector('.sectionTitle')).backgroundColor; 
    }

    if($('.home-section')[0]){
        var home_section_bc = getComputedStyle(document.querySelector('.home-section')).backgroundColor;
    }

    if($('.mainTrayDashboard')[0]){
        var mainTrayDashboard_bc = getComputedStyle(document.querySelector('.mainTrayDashboard')).backgroundColor;
    }

    if($('.notifyTray')[0]){
        var notifyTray_bc = getComputedStyle(document.querySelector('.notifyTray')).backgroundColor;
    }

    if($('.adminMenu')[0]){
        var adminMenu_bc = getComputedStyle(document.querySelector('.adminMenu')).backgroundColor;
    }

    if($('main')[0]){
        var main_bc = getComputedStyle(document.querySelector('main')).backgroundColor;
    }

    if($('.mainData')[0]){
        var mainData_bc = getComputedStyle(document.querySelector('.mainData')).backgroundColor;
    }

    if($('.profile-details')[0]){
        var profile_details_bc = getComputedStyle(document.querySelector('.profile-details')).backgroundColor; 
    }

    if($('.logo-details')[0]){
        var logo_details_bc = getComputedStyle(document.querySelector('.logo-details')).backgroundColor; 
    }

    if($('.mainActivityDashboard')[0]){
        var mainActivityDashboard_bc = getComputedStyle(document.querySelector('.mainActivityDashboard')).backgroundColor;      
    }

    if($('.listTrayDashboard')[0]){
        var listTrayDashboard_bc = getComputedStyle(document.querySelector('.listTrayDashboard')).backgroundColor;
    }

    if($('.msg_Inscription')[0]){
        var msg_Inscription_bc = getComputedStyle(document.querySelector('.msg_Inscription')).backgroundColor;
    }

    if($('.hidden_msg_Inscription')[0]){
        var hidden_msg_Inscription_bc = getComputedStyle(document.querySelector('.hidden_msg_Inscription')).backgroundColor;
    }

    if($('.inner_hidden_msg_Inscription')[0]){
        var inner_hidden_msg_Inscription_bc = getComputedStyle(document.querySelector('.inner_hidden_msg_Inscription')).backgroundColor;
    }

    if($('.sidebar .nav-links .adminMenu .links_name')[0]){
        var sidebar_c = getComputedStyle(document.querySelector('.sidebar .nav-links .adminMenu .links_name')).color;
    }

    if($('.toolbar-item svg')[0]){
        var toolbar_icons_c = getComputedStyle(document.querySelector('.toolbar-item svg')).color;
    }

    if($('button')[0]){
        var button_bc = getComputedStyle(document.querySelector('button')).backgroundColor;
        var button_c = getComputedStyle(document.querySelector('button')).color;
    }

    if($('.row')[0]){
        var row_bc = getComputedStyle(document.querySelector('.row')).backgroundColor;
    }

    if($('a')[0]){
        var a_c = getComputedStyle(document.querySelector('a')).color;
    }

    if($('h1')[0]){
        var h1_c = getComputedStyle(document.querySelector('h1')).color;
    }

    var toolbar_inner_bc = getComputedStyle(document.querySelector('.toolbar-inner')).backgroundColor;
    var div_bc = getComputedStyle(document.querySelector('div')).backgroundColor;

    function defaultColors(){

        $('span').css('color', span_color);
        $('.toolbar-inner').css('color', toolbar_inner_color);
        $('.toolbar-text').css('color', toolbar_text_color);
        $('p').css('color', p_color);
        

        if($('.toolbar-item svg')[0]){
            $('.toolbar-item svg').css('color', toolbar_icons_c);
        }

        if($('i')[0]){
            $('i').css('color', i_c);
        } 

        if($('button')[0]){
            $('button').css('background', button_bc);
            $('button').css('color', button_c);
        }

        if($('div')[0]){
            $('div').css('color', div_color);
            $('div').css('background', div_bc);
        }

        if($('.sidebar')[0]){
            $('.sidebar').css('background', sidebar_bc);
        }

        if($('#spaceTopMenu')[0]){
            $('#spaceTopMenu').css('background', spaceTopMenu_bc);
        }

        if($('.mainTrayDashboard')[0]){
            $('.mainTrayDashboard').css('background', mainTrayDashboard_bc);
        }

        if($('.notifyTray')[0]){
            $('.notifyTray').css('background', notifyTray_bc);
        }

        if($('main')[0]){
            $('main').css('background', main_bc);
        }

        if($('.mainData')[0]){
            $('.mainData').css('background', mainData_bc);
        }

        if($('.home-content')[0]){
            $('.home-content').css('background', home_content_bc);
        }

        if($('.profile-details')[0]){
            $('.profile-details').css('background', profile_details_bc);
        }

        if($('.logo-details')[0]){
            $('.logo-details').css('background', logo_details_bc);
        }

        if($('.home-section')[0]){
            $('.home-section').css('background', home_section_bc);
        }

        if($('.row')[0]){
            $('.row').css('background', row_bc);
        }

        if($('.sectionTitle')[0]){
            $('.sectionTitle').css('background', sectionTitle_bc);
        }

        if($('.sidebar-button')[0]){
            $('.sidebar-button').css('background', sidebar_button_bc);
        }

        if($('.dashboard')[0]){
            $('.dashboard').css('color', dashboard_c);
        }

        if($('header')[0]){
            $('header').css('background', header_bc);
        }

        if($('nav')[0]){
            $('nav').css('background', nav_bc);
            $('nav .sidebar-button i').css('color', sidebar_c);
        }

        if($('.sidebar')[0]){
            $('.sidebar').css('background', sidebar_bc);
        }

        if($('.sidebar li')[0]){
            $('.sidebar li').css('background', sidebar_bc);
        }

        /* if($('.sidebar span')[0]){
            $('.sidebar span').css('color', sidebar_span_c);
        } */

        if($('.adminMenu')[0]){
            $('.adminMenu').css('background', adminMenu_bc);
            $('.sidebar .nav-links .adminMenu .links_name').css('color', sidebar_c);
            $('.sidebar .nav-links .adminMenu i').css('color', sidebar_c);
        }

        if($('.mainActivityDashboard')[0]){
            $('.mainActivityDashboard').css('background', mainActivityDashboard_bc);
        }

        if($('.listTrayDashboard')[0]){
            $('.listTrayDashboard').css('background', listTrayDashboard_bc);
        }  
        
        if($('.msg_Inscription')[0]){
            $('.msg_Inscription').css('background', msg_Inscription_bc);
        }

        if($('.hidden_msg_Inscription')[0]){
            $('.hidden_msg_Inscription').css('background', hidden_msg_Inscription_bc);
        }

        if($('.inner_hidden_msg_Inscription')[0]){
            $('.inner_hidden_msg_Inscription').css('background', inner_hidden_msg_Inscription_bc);
        } 

        /* if($('.hidden_msg_Inscription')[0]){
            $('.hidden_msg_Inscription').children().each( function(){
                $(this).css('background', hidden_msg_Inscription_bc);
            })
        } */

        if($('.toolbar-inner')[0]){
            $('.toolbar-inner').css('background', toolbar_inner_bc);      
        }   

        if($('a')[0]){
            $('a').css('color', a_c);
        }

        if($('h1')[0]){
            $('h1').css('color', h1_c);
        }

         if($('.toolbar_item svg')[0]){
            $('.toolbar_item svg').css('background', toolbar_item_bc); 
        } 

    }

    function restoreFontSize(){
        $('p:not(.toolbar-title)').css('font-size', 18);
        $('h1').css('font-size', 18);
        $('button').css('font-size', 18);
        $('label:not(#overlay1)').css('font-size', 18);
        $('.toolbar-item').css('font-size', 18);

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

           curSize = parseInt($('#ti1').css('font-size')) + 10;
		    if (curSize <= 48){
                $('p:not(.toolbar-title)').css('font-size', curSize);
                $('h1').css('font-size', curSize);
                $('button').css('font-size', curSize);
                $('label:not(#overlay1)').css('font-size', curSize);
                $('.toolbar-item').css('font-size', curSize);
            }		

        });

        $('#ti2').click(function(){

            tamaño = parseInt($('#ti1').css('font-size'));

            curSize = parseInt($('#ti1').css('font-size')) - 10;
		    if (curSize >= 18){
                $('p:not(.toolbar-title)').css('font-size', curSize);
                $('h1').css('font-size', curSize);
                $('button').css('font-size', curSize);
                $('label:not(#overlay1)').css('font-size', curSize);
                $('.toolbar-item').css('font-size', curSize); 
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
                $('.sidebar, .sidebar li, nav, .home-section, .toolbar-inner, #spaceTopMenu, div, button, .mainData, .row').css('background-color', 'black');
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
                $('.sidebar, .sidebar li, nav, .home-section, .toolbar-inner, #spaceTopMenu, div, button, .mainData, .row').css('background-color', 'black');
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
                $('.sidebar, .sidebar li, nav, .home-section, .toolbar-inner, #spaceTopMenu, button, .mainData, .row').css('background-color', 'white');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .toolbar-item svg, a').css('color', 'black');         
            }

        });

        $('#ti7').click(function(){
            disable_greyScale();
            defaultColors();
            restoreFontSize();

        });

        /* Importarlo en dashboard.blade.php */

        /* $('#desplegar').click(function(){

            var x = document.getElementById('#desplegar').getAttribute('aria-expanded');

                if( x = true){
                    x = false;
                } else {
                    x = true;
                }

            document.getElementById('#desplegar').setAttribute('aria-expanded', x);

        }); */

});