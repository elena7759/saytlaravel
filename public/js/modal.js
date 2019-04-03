jQuery.noConflict();
jQuery(document).ready(function ($) {
    "use strict";
    var fx = {
        "initModal": function () {
            if (jQuery('.modal-window').length == 0) {
                $('<div>').attr('id','jquery-overlay')
                    .appendTo('body')
                return jQuery('<div>').addClass('modal-window').appendTo('body')
            } else {
                return jQuery('.modal-window');
            }
        }
    }
    jQuery('.clickme').click(function () {
        console.log('ok');
        var id = jQuery(this).attr('data-id');
        var modal = fx.initModal();
    });
});