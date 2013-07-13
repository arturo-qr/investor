// jQuery - Nav / Book Gui - RCS 09.24.10

// before dome ready
jQuery(document).ready(function(){
	
			// PNG Fix IE6
		jQuery('body').supersleight();
		
		// IE6 fix for hide panel
		jQuery('#panel', this).slideUp('fast');	
		
		// Make Reservation Panel
		jQuery('.btn-res').click(function(){
		jQuery('#panel').slideToggle('slow');
		  jQuery(this).toggleClass('active');
		});
		
		// Drop Down
		jQuery('#nav li').hover(
			function () {
				//show its submenu hoverover
				jQuery('ul', this).stop(true, true).slideDown('slow');
				jQuery('.btn-explore', this).addClass('active');
				jQuery('.btn-meetings', this).addClass('active');
				jQuery('.btn-res').removeClass('active');
				jQuery('#panel').slideUp(300);
				jQuery('#date1').datepicker('hide');
			}, 
			function () {
				//hide its submenu hoverout
				jQuery('ul', this).slideUp(300);	
				jQuery('.btn-explore', this).removeClass('active');
				jQuery('.btn-meetings', this).removeClass('active');
				jQuery('.btn-res').removeClass('active');
				jQuery('#panel').slideUp(300);
				jQuery('#date1').datepicker('hide');
				jQuery('.accordionBg').hide();
			}
		);

		// Accordion Script
		jQuery('.accordionBtn').click(function() {
			jQuery('.accordionBtn').removeClass('on');
			jQuery('.accordionBg').slideUp('normal');
			if(jQuery(this).next().is(':hidden') == true) {
				jQuery(this).addClass('on');
				jQuery(this).next().slideDown('normal');
			 } 
		 });
		jQuery('.accordionBtn').mouseover(function() {
			jQuery(this).addClass('over');
		}).mouseout(function() {
			jQuery(this).removeClass('over');										
		});
		jQuery('.accordionBg').hide();
/*

		// Datepicker
		jQuery( "#date1" ).datepicker({
		    dateFormat: 'm/d/yy',
			showOn: 'both',
			buttonImage: '/images/gui/btn-calendar.jpg',
			buttonImageOnly: true
		});
		jQuery( "#date2" ).datepicker({
		    dateFormat: 'm/d/yy',
			showOn: 'both',
			buttonImage: '/images/gui/btn-calendar.jpg',
			buttonImageOnly: true
		});

		*/

	// end
}); 