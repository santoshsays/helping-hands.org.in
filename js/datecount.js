// timer count down
jQuery(document).ready(function($) {
    "use strict";

    var siteCountDown = function() {

        if ( $('#date-countdown').length > 0 ) 
        {
        $('#date-countdown').countdown('2020/01/26', function(event) {
            var $this = $(this).html(event.strftime(''
           
            + '<span class="countdown-block"><span class="label">%d</span> days </span>'
            + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
            + '<span class="countdown-block"><span class="label">%M</span> min </span>'
            + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
        });
        }
            
    };
    siteCountDown();
});