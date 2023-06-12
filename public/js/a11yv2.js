$(() => { 

    var grayscaleMode = false;

    $('#ti3').click(function(){
            var $elements = $('*');
            
            grayscaleMode = !grayscaleMode;

        if (grayscaleMode) {
            $elements.css('filter', 'grayscale(100%)');
        } else {
            $elements.css('filter', 'none');
        }
    })

    var originalStyles = {};

    $('#ti4').click(function(){

        var $elements = $('*');

        if ($.isEmptyObject(originalStyles)) {
            $elements.each(function() {
                var $element = $(this);
                originalStyles[$element] = {
                    backgroundColor: $element.css('background-color'),
                    color: $element.css('color')
                };
            });

            $elements.css('background-color', 'black');
            $elements.css('color', 'yellow');
        } else {
            $elements.each(function() {
                var $element = $(this);
                var originalStyle = originalStyles[$element];

                $element.css('background-color', originalStyle.backgroundColor);
                $element.css('color', originalStyle.color);
            });

            originalStyles = {};
        }             
    });

    $('#ti5').click(function(){

        $('*').css('background-color', 'black');
        $('*').css('color', 'blue');

    });

    $('#ti6').click(function(){

        $('*').css('background-color', 'white');
        $('*').css('color', 'black');

    });

})