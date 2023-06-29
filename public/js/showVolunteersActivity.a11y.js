$(() => { 

    var mainTrayVolAct_bc = getComputedStyle(document.querySelector('.mainTrayVolAct')).backgroundColor;
    var icon_overlay_bc = getComputedStyle(document.querySelector('.icon-overlay')).backgroundColor;
    var icon_toolbar_c = getComputedStyle(document.querySelector('#icon-toolbar')).color;  
    var spaceTopMenu_bc = getComputedStyle(document.querySelector('#spaceTopMenu')).backgroundColor;
    var row_bc = getComputedStyle(document.querySelector('.row')).backgroundColor;
    var divTime_bc = getComputedStyle(document.querySelector('.divTime')).backgroundColor;
    var divTime_c = getComputedStyle(document.querySelector('.divTime')).color;
    var button_i_c = getComputedStyle(document.querySelector('button i')).color;
    var adminMenu_bc = getComputedStyle(document.querySelector('.adminMenu')).backgroundColor;
    var i_c = getComputedStyle(document.querySelector('i')).color;
    var span_color = getComputedStyle(document.querySelector('span')).color;
    var toolbar_text_color = getComputedStyle(document.querySelector('.toolbar-text')).color;
    var toolbar_inner_color = getComputedStyle(document.querySelector('.toolbar-inner')).color;
    var sidebar_bc = getComputedStyle(document.querySelector('.sidebar')).backgroundColor;

    if($('.mainData')[0]){
        var mainData_bc = getComputedStyle(document.querySelector('.mainData')).backgroundColor;
    }
    
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
    var h1_c = getComputedStyle(document.querySelector('h1')).color;
    var form_bc = getComputedStyle(document.querySelector('form')).backgroundColor;
    var toolbar_item_bc = getComputedStyle(document.querySelector('.toolbar-item')).backgroundColor;
    var a_c = getComputedStyle(document.querySelector('a')).color;
    var li_bc = getComputedStyle(document.querySelector('li')).backgroundColor;
    var mainActivityInfo_bc = getComputedStyle(document.querySelector('.mainActivityInfo')).backgroundColor;
    var excelDownload_bc = getComputedStyle(document.querySelector('#excelDownload')).backgroundColor;
    var excelDownload_c = getComputedStyle(document.querySelector('#excelDownload')).color;

    if($('.hidden')[0]){
        var hidden_bc = getComputedStyle(document.querySelector('.hidden')).backgroundColor;
        if($('.hidden button')[0]){
            var hidden_button_bc = getComputedStyle(document.querySelector('.hidden button')).backgroundColor;
            var download_button_bc = getComputedStyle(document.querySelector('.downloadPanel button')).backgroundColor;
            var boton_delete_user_bc = getComputedStyle(document.querySelector('.boton-delete-user')).backgroundColor;
            var boton_delete_user_c = getComputedStyle(document.querySelector('.boton-delete-user')).color;
        }
    }

    if($('.mainData .hidden')[0]){
        var main_hidden_bc = getComputedStyle(document.querySelector('.mainData .hidden')).backgroundColor;
        var main_hidden_c = getComputedStyle(document.querySelector('.mainData .hidden')).color;
        if($('.hidden button')[0]){
            var hidden_button_bc = getComputedStyle(document.querySelector('.hidden button')).backgroundColor;
            var download_button_bc = getComputedStyle(document.querySelector('.downloadPanel button')).backgroundColor;
            var boton_delete_user_bc = getComputedStyle(document.querySelector('.boton-delete-user')).backgroundColor;
            var boton_delete_user_c = getComputedStyle(document.querySelector('.boton-delete-user')).color;
        }
    }

    function defaultColors(){ 
        $('span').css('color', span_color);
        $('.toolbar-inner').css('color', toolbar_inner_color);
        $('.toolbar-text').css('color', toolbar_text_color);       

        if($('i')[0]){
            $('i').css('color', i_c);
        }        

        if($('.sidebar')[0]){
            $('.sidebar').css('background', sidebar_bc);
        }

        $('#spaceTopMenu').css('background', spaceTopMenu_bc);

        if($('.mainTrayVolAct')[0]){
            $('.mainTrayVolAct').css('background', mainTrayVolAct_bc);
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

        if($('.hidden')[0]){          
            $('.hidden').css('background', hidden_bc);
            $('.hidden button').css('background', hidden_button_bc);
        }

        if($('.sidebar li')[0]){
            $('.sidebar li').css('background', sidebar_bc);
        }

        if($('.toolbar-inner')[0]){
            $('.toolbar-inner').css('background', toolbar_inner_bc);      
        }   

        if($('a')[0]){
            $('a').css('color', a_c);
        }

        if($('h1')[0]){
            $('h1').css('color', h1_c);
        }

        if($('button i')[0]){
            $('button i').css('color', button_i_c); 
        }
        
        $('.mainActivityInfo').css('background', mainActivityInfo_bc);
        $('.row').css('background', row_bc);

        if($('form')[0]){
            $('form').css('background', form_bc);
        }

        $('p').css('color', 'black');

        if($('.toolbar-item svg')[0]){
            $('.toolbar-item svg').css('color', toolbar_text_color); 
        } 

        if($('.toolbar-title')[0]){
            $('.toolbar-title').css('color', 'black');
        }

        if($('.toolbar-item')[0]){
            $('.toolbar-item').css('background', toolbar_item_bc);
        }

        if($('.adminMenu')[0]){
            $('.adminMenu').css('background', adminMenu_bc);
            $('.adminMenu span, .adminMenu i').css('color', 'white')
        }

        if($('li')[0]){
            $('li:not(.adminMenu)').css('background', li_bc);
        }

        if($('.divTime')[0]){
            $('.divTime').css('background', divTime_bc);
            $('.divTime p').css('color', divTime_c);
        }
        
        $('.downloadPanel button').css('background', download_button_bc);
        $('.downloadPanel button i').css('color', '#666666');
        $('.boton-delete-user').css('background', boton_delete_user_bc);
        $('.boton-delete-user').css('color', boton_delete_user_c);

        if($('.mainData .hidden')[0]){
            $('.mainData .hidden').css('background', main_hidden_bc);
            $('.eachRow').find('p').each(function(){
                $(this).css('color', main_hidden_c);
            })

            $('.mainData .hidden').find('div').each(function(){
                $(this).css('color', main_hidden_c);
            })
        }

        
        $('#excelDownload').css('background', excelDownload_bc);
        $('#excelDownload button').css('background', excelDownload_bc);
        $('#excelDownload i').css('color', excelDownload_c);
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
                $('.sidebar, .icon-overlay, .sidebar li, li, .home-section, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row, .hidden').css('background', 'black');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, .icon-overlay svg, h1, i, .toolbar-item svg, a').css('color', '#00FFFF');
                
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
                $('.sidebar, .sidebar li, li, .icon-overlay, .home-section, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row, .hidden').css('background', 'black');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, .icon-overlay svg, h1, i, .toolbar-item svg, a').css('color', 'yellow');
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
                $('.sidebar, .sidebar li, li, .home-section, .icon-overlay, .mainData, .divTime, nav, .toolbar-inner, form, button, .profile-details, .row, .hidden').css('background', 'white');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, .icon-overlay svg, h1, i, .toolbar-item svg, a, .boton-delete-user i').css('color', 'black');                
             }

        });

        $('#ti7').click(function(){
            disable_greyScale();
            defaultColors();
            restoreFontSize();

        });

})