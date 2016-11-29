$(document).ready(function(){
    var anaH = $('.ana').css('height');
    var anaW = $('.ana').css('width');
    var anaL = $('.ana').css('left');


    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        console.log(scroll);
        
        $('.ana').css('left', anaL).css('height', -scroll+376);
            
    });
    
});