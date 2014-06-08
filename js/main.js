(function($) {



$(document).ready(function() {
        
        $('.button-form').bind('click', function(){
           var self = $('.required'); 

           if(self.val() === ""){
            $('.button-form').css('background','red');
            event.preventDefault();
           }
    });


});

})(jQuery);