$(() => { 

    $('#ti4').click(function(){

        $('.home-content').find('*').each(function() {
            $(this).css('background-color', 'black');
            $(this).css('color', 'yellow');
          });

    });

})