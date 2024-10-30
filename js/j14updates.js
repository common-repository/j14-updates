(function($){
	$(document).ready(function(){
		function init() {
			setSize();
		}
		
		
		/**
		 * 1. uses a smaller logo if the wordpress sidebar is too small
		 * 2. if there's not enough room for the buttons, makes sure they are middle aligned
		 */
		function setSize() {
			var $widget = $('.j14updates'),
				$bottom = $widget.find('.bottom'),
				$logo = $widget.find('.logo'),
				$img = $logo.find('a'),
				width = $widget.width(),
				imagesUrl = j14updatesWidget.url + 'images/';
			
			// not enough room - use a small logo
			if (width < 175) {
				$img.css({
					'backgroundImage': 'url("' + imagesUrl + 'Maavak_Logo_Trans_SMALL.png")',
					'width': '100px',
					'height': '38px'
				});
			}
			
			$img.css('visibility', 'visible');
			
			// not enough room - align buttons in one column
			if (width < 162) {
				$bottom.css('width', '54px');
				$bottom.find('.button').css('marginLeft', '0');
			}
			
			$bottom.css('visibility', 'visible');
		}
		
		
		// START IT UP!
		init();
	});
})(jQuery);
