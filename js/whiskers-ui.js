(function($) {
		function hasTouch() {
			return Modernizr.touch;
		}
		if (hasTouch()) {
			$('#primary li').eq(2).addClass('last');
		}
    $('#sidebar').affix({offset:{top:534}});
})(jQuery);