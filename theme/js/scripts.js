jQuery(document).ready(function($) {
    // Handle actions in the posting text box.
    $('#text').focus().keyup(function() {
        $('#count').html($(this).val().length + ' chars');
    }).keydown(function(e) {
        if ((e.ctrlKey || e.metaKey) && e.keyCode == 13) {
            // Should probably use $('form#post').submit(), but not working.
            $('#post-form-submit').click();
        }
    });

    // confirm removals
    $('form.remove').bind('submit', function() {
        confirm('Are you sure you want to remove? This will also attempt to delete the data from any linked services.');
    });
    
	// Mobile reset article padding
	if ($('form').hasClass('posting-main') || $('div').hasClass('posting-history')) { 
		$('footer, .branding').addClass('is-hidden');
	}  
	if ($('form').hasClass('posting-main') || $('div').hasClass('posting-history')) { 
		$('.wrapper').css({'background':'rgb(237,237,237)'});
	} 
	
	// Mobile main posting textarea
	$(window).on("load resize orientationchange", function() {
		var currentwidth = ($(window).width());
		var serviceWidth = parseInt($('.app-lits .driver').find('.row').css('width'), 10);
		$('.all-drivers_text').css({'width':((currentwidth)-16)+'px'});
		$('.driver-text').css({'width':((currentwidth)-138)+'px'});
	
	}); 
	
	// Mobile posting paragraph width
	$(window).on("load resize orientationchange", function() {
		var postingWidth = parseInt($('p.posting').parent('.row').css('width'), 10);
		$('.posting a').css({'width':((postingWidth)-70)+'px'});	
	});	    
});