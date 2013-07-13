// jQuery - Nav / Book Gui - RCS 09.24.10
// before dome ready
$(document).ready(function(){
		
		// Drop Down
		$('#nav li').hover(
			function () {
				//show its submenu hoverover
				$('ul', this).stop(true, true).slideDown('slow');
			}, 
			function () {
				//hide its submenu hoverout
				$('ul', this).slideUp(300);	
			}
		);
}); 