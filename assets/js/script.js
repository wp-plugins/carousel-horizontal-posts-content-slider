jQuery(document).ready(function($) {
$("#wa_chpc_slider").carouFredSel({
	circular: chpcsArgs.circular,
	width: '100%',
	height: 'auto',
	infinite: false,
	auto 	: chpcsArgs.auto_scroll,
	prev	: {	
		button	: "#wa_chpc_slider_prev",
		key		: "left"
	},
	next	: { 
		button	: "#wa_chpc_slider_next",
		key		: "right"
	},
	pagination	: "#wa_chpc_slider_pag",
	scroll : parseInt(chpcsArgs.no_of_items_to_scroll),
	fx : chpcsArgs.fx,
	easing : chpcsArgs.easing_effect,
	swipe: {
onMouse: false,
onTouch: true
}
});
});