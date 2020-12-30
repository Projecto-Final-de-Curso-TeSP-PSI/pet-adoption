(function($) {
    "use strict";
    jQuery(document).on('ready', function() {

        //Button dismiss on messages
        $('#success-message-dismiss').click(function dismiss_message(){
            console.log('dismiss message');
            var x = document.getElementById("success-message");
            if (x.style.display === "block") {
                x.style.display = "none";
            }
        });

        //Button dismiss on messages
        $('#error-message-dismiss').click(function dismiss_message(){

            var x = document.getElementById("error-message");
            if (x.style.display === "block") {
                x.style.display = "none";
            }
        });

    });

}(jQuery))





