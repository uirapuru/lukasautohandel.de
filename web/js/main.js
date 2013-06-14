var interval;

$(function(){
    Carousel();
    
    interval = setInterval(function(){
        $("a#next-image").click();
    },10000);
    
    $(".datetimepicker").datetimepicker({
        dateFormat : "dd.mm.yy"
    });
    
});

var Carousel = function(){
        
    var pointer = 0;
    var $images = $("html.js div#carousel-wrapper > div#inner-carousel-wrapper > img");
    var lastIndex = $images.length - 1;
        
    $("nav#carousel-nav > a").click(function(){
        var value = parseInt($(this).attr("value"));
        
        if(pointer + value < 0)
        {
            pointer = lastIndex;
        } else if (pointer + value > lastIndex)
{
            pointer = 0;
        } else {
            pointer = pointer + value;
        }
    
        var offset = $("div#carousel-wrapper").width() * pointer * -1;
        
        $("div#inner-carousel-wrapper").css("left",offset+"px");
    });
}
