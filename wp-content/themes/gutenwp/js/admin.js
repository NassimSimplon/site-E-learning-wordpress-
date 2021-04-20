
jQuery(document).ready(function($){'use strict';

	/*
	* Select/Upload image(s) event
	*/
    $('body').on('click', '.gutenwp_upload_image_button', function(e){
        e.preventDefault();
            var button = $(this),
            custom_uploader = wp.media({
            title: 'Insert image',
            library : {
                type : 'image'
            },
            button: {
                text: 'Use this image' // button label text
            },
            multiple: false // for multiple image selection set to true
        }).on('select', function() { // it also has "open" and "close" events 
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $(button).removeClass('button').html('<img class="true_pre_image" src="' + attachment.url + '" style="max-width:95%;display:block;" />').next().val(attachment.id).next().show();
        })
        .open();
    });

    /*
	* Remove image event
	*/
    $('body').on('click', '.gutenwp_remove_image_button', function(){
        $(this).hide().prev().val('').prev().addClass('button').html('<i class="fa fa-cloud-upload"></i>');
        return false;
    });
});