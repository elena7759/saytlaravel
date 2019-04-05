jQuery.noConflict();
jQuery(document).ready(function ($) {
    "use strict";
    var fx = {
        "initModal": function () {
            if (jQuery('.modal-window').length == 0) {
                $('<div>').attr('id', 'jquery-overlay')
                    .appendTo('body')
                return jQuery('<div>').addClass('modal-window').fadeIn(500).appendTo('body')
            } else {
                return jQuery('.modal-window');
            }
        }
    }
    jQuery('.clickme').click(function () {
        console.log('ok');
        var id = jQuery(this).attr('data-id');
        var modal = fx.initModal();
        $('<a>').attr('href', '#')
            .addClass('modal-close-btn')
            .html('&times;')
            .click(function (event) {
                event.preventDefault();
                modal.remove();
                $('#jquery-overlay').remove();
            }).appendTo(modal);
        $.ajax({
            type: 'Post',
            url: '/ajax/modal',
            data: 'id=' + id,
            beforeSend: function () {
            },
            success: function (data) {
                modal.append(data);
            },
            error: function (msg) {
                console.log('error');
                console.log(msg);
            }
        });
    });
});