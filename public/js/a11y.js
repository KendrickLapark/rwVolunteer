$(() => { 

    var p_color = getComputedStyle(document.querySelector('p')).color;
    var span_color = getComputedStyle(document.querySelector('span')).color;
    var div_color = getComputedStyle(document.querySelector('div')).color;
    var span_color = getComputedStyle(document.querySelector('span')).color;
    var toolbar_text_color = getComputedStyle(document.querySelector('.toolbar-text')).color;
    var toolbar_inner_color = getComputedStyle(document.querySelector('.toolbar-inner')).color;

    if($('form')[0]){
        var form_bc = getComputedStyle(document.querySelector('form')).backgroundColor;
    }

    if($('button i')[0]){
        var button_i_c = getComputedStyle(document.querySelector('button i')).color;
    }

    if($('.botonVis')[0]){
        var botonVis_bc = getComputedStyle(document.querySelector('.botonVis')).backgroundColor;
        var botonVis_c = getComputedStyle(document.querySelector('.botonVis')).color;

    }

    if($('.sectionIncomplete')[0]){
        var sectionInc_bc = getComputedStyle(document.querySelector('.sectionIncomplete')).backgroundColor;
        var sectionInc_c = getComputedStyle(document.querySelector('.sectionIncomplete')).color;

    }

    if($('.botonesControl')[0]){
        var botonesControl_bc = getComputedStyle(document.querySelector('.botonesControl')).backgroundColor;
        var botonesControl_c = getComputedStyle(document.querySelector('.botonesControl')).color;
    }

    if($('.botonesControl')[0]){
        var botonesControl_bc = getComputedStyle(document.querySelector('.botonesControl')).backgroundColor;
    }

    if($('.botones.botonesAB')[0]){
        var botonesAB_bc = getComputedStyle(document.querySelector('.botones.botonesAB')).backgroundColor;
    }

    if($('.accordion')[0]){
        var accordion_bc = getComputedStyle(document.querySelector('.accordion')).backgroundColor;
    }

    if($('.accordion-trigger')[0]){
        var accordion_trigger_bc = getComputedStyle(document.querySelector('.accordion-trigger')).backgroundColor;
    }

    if($('.mainContainerDateActivities')[0]){
        var containerDateAct_bc = getComputedStyle(document.querySelector('.mainContainerDateActivities')).backgroundColor;
    }

    if($('.mainTrayShowDoc')[0]){
        var mainTrayShowDoc_bc = getComputedStyle(document.querySelector('.mainTrayShowDoc')).backgroundColor;
    }

    if($('.mainTrayAdminNot')[0]){
        var mainTrayAdminNot_bc = getComputedStyle(document.querySelector('.mainTrayAdminNot')).backgroundColor;
    }

    if($('.mainTrayMyProf')[0]){
        var mainTrayMyProf_bc = getComputedStyle(document.querySelector('.mainTrayMyProf')).backgroundColor;
    }

    if($('.mainDataMyProf')[0]){
        var mainTrayMyProf_bc = getComputedStyle(document.querySelector('.mainDataMyProf')).backgroundColor;
    }

    if($('.notifyTrayIns')[0]){
        var notifyTrayIns_bc = getComputedStyle(document.querySelector('.notifyTrayIns')).backgroundColor;
    } 

    if($('.sidebar-button')[0]){
        var sidebar_button_bc = getComputedStyle(document.querySelector('.sidebar-button')).backgroundColor;
    }

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

    if($('.mainContainerActivitiesOptions')[0]){
        var mainContainerActivitiesOptions_bc = getComputedStyle(document.querySelector('.mainContainerActivitiesOptions')).backgroundColor;
    }

    if($('.mainDataLogNot')[0]){
        var mainDataLogNot_bc = getComputedStyle(document.querySelector('.mainDataLogNot')).backgroundColor;
    }

    if($('.sidebar')[0]){
        var sidebar_bc = getComputedStyle(document.querySelector('.sidebar')).backgroundColor;
    }

    if($('.sidebar li')[0]){
        var sidebar_li_bc = getComputedStyle(document.querySelector('.sidebar li')).backgroundColor; 
    }

    if($('li')[0]){
        var li_bc = getComputedStyle(document.querySelector('li')).backgroundColor;
    }

    if($('.itemShowDoc')[0]){
        var itemShowDoc_bc = getComputedStyle(document.querySelector('.itemShowDoc')).backgroundColor;
    }

    if($('.sectionTitle')[0]){
        var sectionTitle_bc = getComputedStyle(document.querySelector('.sectionTitle')).backgroundColor; 
    }

    if($('.sectionTitleNoInscriptions')[0]){
        var sectionTitle_bc = getComputedStyle(document.querySelector('.sectionTitleNoInscriptions')).backgroundColor; 
        var sectionTitle_c = getComputedStyle(document.querySelector('.sectionTitleNoInscriptions')).color; 
    }

    if($('.home-section')[0]){
        var home_section_bc = getComputedStyle(document.querySelector('.home-section')).backgroundColor;
    }
    
    if($('.mainTray')[0]){
        var mainTray_bc = getComputedStyle(document.querySelector('.mainTray')).backgroundColor;
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

    if($('.avatarContainer')[0]){
        var avatarContainer_bc = getComputedStyle(document.querySelector('.avatarContainer')).backgroundColor;
    }

    if($('.containerProfileData')[0]){
        var containerProfileData_bc = getComputedStyle(document.querySelector('.containerProfileData')).backgroundColor;
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

    if($('.mainDataShowDoc')[0]){
        var mainDataShowDoc_bc = getComputedStyle(document.querySelector('.mainDataShowDoc')).backgroundColor;
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

    if($('#divFooter')[0]){
        var divFooter_bc = getComputedStyle(document.querySelector('#divFooter')).backgroundColor;
    }

    if($('.toolbar-item')[0]){
        var toolbar_item_bc = getComputedStyle(document.querySelector('.toolbar-item')).backgroundColor;
    }

    if($('select')[0]){
        var select_bc = getComputedStyle(document.querySelector('select')).backgroundColor;
        var input_bc = getComputedStyle(document.querySelector('select')).backgroundColor;
    }

    if($('.toggle-act-button')[0]){
        var toggle_act_button_bc = getComputedStyle(document.querySelector('.toggle-act-button')).backgroundColor;
        var toggle_act_button_c = getComputedStyle(document.querySelector('.toggle-act-button')).color;
        var eachColor_A_c = getComputedStyle(document.querySelector('#eachColor_A')).backgroundColor;
        var eachColor_B_c = getComputedStyle(document.querySelector('#eachColor_B')).backgroundColor;
        var eachColor_C_c = getComputedStyle(document.querySelector('#eachColor_C')).backgroundColor;
    }    

    var sidebar_size = parseInt($('.links_name').css('font-size'));
    var toolbar_text_size = parseInt($('.toolbar-text').css('font-size'));

    var toolbar_inner_bc = getComputedStyle(document.querySelector('.toolbar-inner')).backgroundColor;
    var div_bc = getComputedStyle(document.querySelector('div')).backgroundColor;

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

        $('span').css('color', span_color);
        $('.toolbar-inner').css('color', toolbar_inner_color);
        $('.toolbar-text').css('color', toolbar_text_color);       

        if($('i')[0]){
            $('i').css('color', i_c);
        }        

        if($('div')[0]){
            $('div').css('color', div_color);
            $('div:not(.slide, .slider, .slides, #main, .navigation-auto)').css('background', div_bc);
        }
 
        $('div').find('div').each(function(){
            $(this).not('.slider, slides, slide').css('background', mainTray_bc);
            $(this).css('color', div_color);
        })

        $('.mainTrayDateActivities').find('div').each(function(){        
            $(this).css('background', mainTray_bc);
            $(this).css('color', div_color);
        })

        if($('.notifyTrayIns')[0]){
            $('.notifyTrayIns').css('background', notifyTrayIns_bc);
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

        if($('.mainDataLogNot')[0]){
            $('.mainTrayLogNot').css('background', mainDataLogNot_bc);
            $('.mainTrayLogNot').find('div').each(function(){
                $(this).css('background', mainDataLogNot_bc);
            });
            $('.mainTrayLogNot i').css('color', '#000000');
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
            $('.msg_Inscription').parent().css('background', 'white');
            $('.msg_Inscription').parent().css('color', '#004a98');
        }

        if($('.hidden_msg_Inscription')[0]){
            $('.hidden_msg_Inscription').css('background', hidden_msg_Inscription_bc);
        }

        if($('.inner_hidden_msg_Inscription')[0]){
            $('.inner_hidden_msg_Inscription').css('background', inner_hidden_msg_Inscription_bc);
            $('.inner_hidden_msg_Inscription').children().css('background', inner_hidden_msg_Inscription_bc);
            $('p').css('color', 'black');
            $('button').css('background', button_bc);
            $('button').css('color', 'black');
        }
        
        if($('.mainContainerActivitiesOptions')[0]){
            $('.mainContainerActivitiesOptions').css('background', mainContainerActivitiesOptions_bc);
            $('.mainContainerActivitiesOptions').children().css('background', mainContainerActivitiesOptions_bc);

        }

        if($('.mainTray')[0]){
            $('p').css('color', 'black');
        }      

        if($('.mainTrayActivitiesOptions')[0]){
            $('.mainTrayActivitiesOptions').css('background', mainContainerActivitiesOptions_bc);
            $('.mainTrayActivitiesOptions').children().css('background', mainContainerActivitiesOptions_bc);

        }

        if($('.mainData.center')[0]){
            $('.mainData.center').css('background', mainContainerActivitiesOptions_bc);
            $('.mainData.center').children().css('background', mainContainerActivitiesOptions_bc);

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

        if($('.mainTray')[0]){
            $('.mainTray').css('background', mainTray_bc);
        }

        if($('button i')[0]){
            $('button i').css('color', button_i_c); 
        }

        if($('form')[0]){
            $('form').css('background', form_bc);
        }

        if($('.mainTrayShowDoc')[0]){
            $('.mainTrayShowDoc').css('background', mainTrayShowDoc_bc);
        }

        if($('.mainTrayMyProf')[0]){
            $('.mainTrayMyProf').css('background', mainTrayMyProf_bc);
            $('.mainTrayMyProf').children().css('background', mainTrayMyProf_bc);
            $('.mainTrayMyProf').children().css('color', 'black');
        }

        if($('.mainDataMyProf')[0]){
            $('.mainDataMyProf').css('background', mainTrayMyProf_bc);
            $('.mainDataMyProf').children().css('background', mainTrayMyProf_bc);
            $('.mainDataMyProf span').css('color', 'black');
            $('p').css('color', 'black');
        }

        $('p').css('color', 'black');

        if($('.mainTrayAdminNot')[0]){
            $('.mainTrayAdminNot').css('background', mainTrayAdminNot_bc);
            $('.mainTrayAdminNot').children().css('background', mainTrayAdminNot_bc);
            $('.mainDataAdminNot .row').children().css('background', mainTrayAdminNot_bc);
            $('.mainDataAdminNot .hiddenAdminNot').children().css('background', mainTrayAdminNot_bc);
            $('.mainDataAdminNot .hiddenAdminNot').css('background', mainTrayAdminNot_bc);
            $('.mainDataAdminNot .hiddenAdminNot .eachRow').children().css('background', mainTrayAdminNot_bc);
            $('p').css('color', 'black');
            $('a').css('color', '#064b98');

        }

        if($('.mainDataAdminNot.hiddenAdminNot')[0]){
            $('.mainDataAdminNot.hiddenAdminNot').children().css('background', mainTrayAdminNot_bc);

        }

        if($('.accordionUsers')[0]){
            $('.accordionUsers').css('background', '#004a98');
            $('.accordionUsers').css('color', 'white');
            $('.accordionUsers i').css('color', 'white');
            $('.nameSurVol p').css('color', '#004a98');
            $('.toolbar-inner p').css('color', 'black');
        }

        if($('.botonesControl')[0]){
            $('.botonesControl').css('background', botonesControl_bc);
            $('.botonesControl').css('color', botonesControl_c);
        }

        if($('.visDate')[0]){
            $('.botonVis').css('background', '#406cbc');
            $('.visDate i').css('color', 'black');
            $('.botonVis, .botonVis i').css('color', '#ffffff');
            $('.buttonsBar .botonesControl').css('background', 'grey');
            $('.buttonsBar .botonesControl i').css('color', 'white');
            
        }

        if($('.mainDataShowDoc')[0]){
            $('.mainDataShowDoc').css('background', mainDataShowDoc_bc);
            $('.mainDataShowDoc').find('div').each(function(){
                $(this).css('background', mainDataShowDoc_bc);
            });
        }

        /* showActivitiesByDate toggle-toolbar */ 

        if($('.mainContainerDateActivities')[0]){
            $('.mainContainerDateActivities').css('background', containerDateAct_bc);

            $('.mainContainerDateActivities').find('div').each(function(){
                $(this).css('background', containerDateAct_bc);
            });

            $('.mainContainerDateActivities').find('span').each(function(){
                $(this).css('color', '#000000');
            });

            $('.mainContainerDateActivities').find('span:not(.fc-title)').each(function(){
                $(this).css('color', '#000000');
            });

            $('.fc-title').css('color', '#FFFFFF');

            $('.calendario').find('button').each(function(){
                $(this).css('background', '#F1F1F1');
                $(this).css('color', '#000000');
            });

            $('.hiddenDaysActivities').find('.accordion').each(function(){
                $(this).css('background', '#009fe3');
                $(this).css('color', '#FFFFFF');
            });

            $('.hiddenDaysActivities').find('i').each(function(){
                $(this).css('color', '#FFFFFF');
            });

            $('.titleDaysAct, .eachDayActTitle').css('color', '#014a99');
            $('.accordion2').css('background', '#ffffff');
            $('.accordion2, .accordion2 i').css('color', '#054d9b');  
            $('.panel2').css('background', '#ffffff');
            $('.panel2, .panel2 span').css('color', '#000000');
            $('.panel2 a').css('background', '#009fe3');
            $('.panel2 a').css('color', '#ffffff');
            
        }

        if($('.downloadPanel')[0]){
            $('.downloadPanel').children().css('background', '#004a98');
            $('.downloadPanel').css('color', 'white');
            $('.downloadButton').css('background', '#EFEFEF');
            $('.downloadButton i').css('color', '#666666');
        }

        if($('.botones.botonesAB')[0]){
            $('.botones.botonesAB').css('background', botonesAB_bc);
        }

        if($('.hidden')[0]){
            $('.hidden').css('background', '#004a98');
            $('.hidden').children().css('background', '#004a98');
            $('.hidden p').css('color', 'white');
        }

        if($('.toolbar-item svg')[0]){
            $('.toolbar-item svg').css('color', toolbar_text_color); 
        } 

        if($('#divFooter')[0]){
            $('#divFooter, #contentFooter, #contentFooter p, .eachColFoot, .titleFoot').css('background', divFooter_bc);
            $('#divFooter p, #divFooter a, .titleFoot').css('color', 'white');
        }

        if($('.toolbar-title')[0]){
            $('.toolbar-title').css('color', 'black');
        }

        if($('.sectionTitleNoInscriptions')[0]){
            $('.sectionTitleNoInscriptions').css('background', sectionTitle_bc);
            $('.sectionTitleNoInscriptions, p').css('color', sectionTitle_c);

        }

        if($('.toggle-act-button')[0]){
            $('.toggle-act-button').css('background', toggle_act_button_bc);
            $('.toggle-act-button').css('color', toggle_act_button_c);
            $('#eachColor_A').css('background', eachColor_A_c);
            $('#eachColor_B').css('background', eachColor_B_c);
            $('#eachColor_C').css('background', eachColor_C_c);
        }

        if($('.sectionIncomplete')[0]){
            $('.sectionIncomplete').css('background', sectionInc_bc);
            $('.listTrayContainer').css('background', 'white');
            $('.sectionIncomplete, .sectionIncomplete p, .sectionIncomplete i').css('color', 'white');
        }

        if($('.itemShowDoc')[0]){
            $('.itemShowDoc').css('background', itemShowDoc_bc);
        }

        if($('.msg_Inscription')[0]){
            $('.msg_Inscription').parent().css('color', '#004a98');
        }

        if($('.toolbar-item')[0]){
            $('.toolbar-item').css('background', toolbar_item_bc);
        }

        if($('li')[0]){
            $('li:not(.adminMenu)').css('background', li_bc);
        }

        if($('.divTime')[0]){
            $('.divTime').each(function(index){
                var colorFondo = coloresFondo[index % coloresFondo.length]; 
                var colorLetra = coloresLetra[index % coloresLetra.length];

                $(this).css('background-color', colorFondo);
                $(this).find('p').css('color', colorLetra);

            })
        }

        if($('.containerProfileData')[0]){
            $('.avatarContainer').css('background', avatarContainer_bc);          
            $('.containerProfileData').css('background', containerProfileData_bc);
            $('.containerProfileData').find('div').each(function(){
                $(this).css('background', containerProfileData_bc);
            });
            $('.accordion-trigger').css('background', accordion_trigger_bc);
            $('.containerProfileData p, .containerProfileData i').css('color', 'white');
            $('.containerProfileData span').css('color', 'black');
            $('.accordion-trigger span, .accordion-trigger svg').css('color', 'white');
        }

        if($('.dateAccordion')[0]){
            $('.dateAccordion').each(function(index){
                var dateAccordion_bc = coloresDateAccordion_bc[index % coloresDateAccordion_bc.length];
                var dateAccordion_c = coloresDateAccordion_c[index % coloresDateAccordion_c.length];
        
                $(this).css('background-color', dateAccordion_bc);
                $(this).css('color', dateAccordion_c);
            })
        }

        if($('select')[0]){
            $('select').css('background', select_bc);
            $('input').css('background', input_bc);
        }

    }   

    function restoreFontSize(){
        $('p:not(.toolbar-title)').css('font-size', 18);
        $('h1').css('font-size', 18);
        $('button').css('font-size', 18);
        $('label:not(#overlay1)').css('font-size', 18);
        $('.toolbar-item').css('font-size', 18);
        $('.dashboard').css('font-size', 24);
        $('.links_name, .admin_name').css('font-size', sidebar_size);
        $('.toolbar-text').css('font-size', die);

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
                $('.sidebar, .sidebar li, li, nav, select, input, .home-section, .toolbar-inner, form, #divFooter p, #spaceTopMenu, button, .botones.botonesAB, .mainData, .row, .buttonSignUp').css('background-color', 'black');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .toolbar-item svg, a, .accordion-trigger svg').css('color', '#00FFFF');         
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
                $('.sidebar, .sidebar li, li, nav, select, input, .home-section, .toolbar-inner, form, #spaceTopMenu, #divFooter p, button, .botones.botonesAB, .buttonSignUp, .mainData, .row').css('background-color', 'black');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .toolbar-item svg, a, .accordion-trigger svg').css('color', 'yellow');         
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
                $('.sidebar, .sidebar li, nav, select, input, .home-section, .toolbar-inner, form, #spaceTopMenu, #divFooter p, button, .mainData, .buttonSignUp, .botones.botonesAB, .row').css('background-color', 'white');
                $('.sidebar span, .toolbar-inner, .toolbar-text, p, div, span, button, h1, i, .toolbar-item svg, a, .accordion-trigger svg').css('color', 'black');         
            }

        });

        $('#ti7').click(function(){
            disable_greyScale();
            defaultColors();
            restoreFontSize();

        });

});