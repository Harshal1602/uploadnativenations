jQuery(document).ready(function(){
	jQuery('.single_video').click(function(){
		
		var title = jQuery(this).attr('data-media-title');
		var media = jQuery(this).attr('data-media-src');
		
		jQuery('#tc-player-title').html(title);
		jQuery('#tc-player').attr('src',media);
		
		jQuery('.single_video').each(function(){
			jQuery(this).removeClass('active');
		});
		jQuery(this).addClass('active');
	});
});