jQuery(function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
		jQuery('.telhref .telbtn').each(function(){
			jQuery(this).unwrap();
		});
		
        jQuery('#cnt_tel_tk img').each(function(){
            jQuery(this).unwrap();
        });
        
        jQuery('.tel_tk img').each(function(){
            jQuery(this).unwrap();
        });
        
		jQuery('#cnt_tel_os img').each(function(){
			jQuery(this).unwrap();
		});
		
		jQuery('.tel_os img').each(function(){
			jQuery(this).unwrap();
		});
    }
});
