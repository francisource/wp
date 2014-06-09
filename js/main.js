(function($) {



$(document).ready(function() {
        

        $('.form3').bind('click', function(){
           var self = $('.required-form3'); 

           if(self.val() === ""){
             $('.form3').css("background","red");
             alert('Todos os campos precisa ser preenchidos.');
            event.preventDefault();
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

    $(".maxlength").keyup(function(event){

        var max        = target.attr('title');
        var len     = $(this).val().length;
        var remain    = max - len;
 
        if(len > max)
        {
            var val = $(this).val();
            $(this).val(val.substr(0, max));
 
            remain = 0;
        }
        target.html(remain);
 
    });

});

})(jQuery);