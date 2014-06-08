(function($) {



$(document).ready(function() {
        
        $('.button-form').bind('click', function(){
           var self = $('.required'); 

           if(self.val() === ""){
            //$('.button-form').css('background','red');
           // event.preventDefault();
           }
        });
        

        $('.button-modal').click( function(ev){
            ev.preventDefault();
            var id = $(this).attr("href");
            var alturaTela = $(document).height();
            var larguraTela = $(window).width();
     
        //colocando o fundo preto

        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        $('#mascara').fadeIn(1000);
        $('#mascara').fadeTo("slow",0.8);
 
        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
        $(id).css({'top':top,'left':left});
        $(id).show(); 
    });
       
    $("#mascara").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
   
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });

$("#janela2").load("include/check.php");

});

})(jQuery);