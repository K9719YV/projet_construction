$('document').ready(function(){
    $('#p1').on({
        mouseenter : function(){
            $('#p2').hide(3000);
            $('#p3').hide(3000);
        },
        mouseleave : function(){
            $('#p2').fadeIn(1000);
            $('#p3').fadeIn(2000);
        }

    });
    $('#p2').on({
        mouseenter : function(){
            $('#p1').hide(3000);
            $('#p3').hide(3000);
        },
        mouseleave : function(){
            $('#p1').fadeIn(1000);
            $('#p3').fadeIn(2000);
        }
    });
    $('#p3').on({
        mouseenter : function(){
            $('#p1').fadeOut(3000);
            $('#p2').fadeOut(3000);
        },
        mouseleave : function(){
            $('#p1').fadeIn(1000);
            $('#p2').fadeIn(2000);
        }
    });
})