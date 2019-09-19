jQuery(document).ready(function(){   
	jQuery('input.jzl_bottom').live('click',function(event){   
		var upload_frame;   
		var targetfield;  
		
		targetfield = jQuery(this).prev('input');      
		event.preventDefault();   
		if( upload_frame ){   
			upload_frame.open();   
			return;   
		}   
		upload_frame = wp.media({   
			title: 'Insert image',   
			button: {   
				text: 'Insert',   
			},   
			multiple: false   
		});   
		upload_frame.on('select',function(){   
			attachment = upload_frame.state().get('selection').first().toJSON();  
			jQuery(targetfield).val(attachment.url).focus(); 
		});	   
		upload_frame.open();   
	});   
});   