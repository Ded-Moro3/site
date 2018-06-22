jQuery(document).ready(function($) {

	$(".headroom").headroom({
		"tolerance": 20,
		"offset": 50,
		"classes": {
			"initial": "animated",
			"pinned": "slideDown",
			"unpinned": "slideUp"
		}
	});
   /* document.ondragstart=noselect;
    document.onselectstart=noselect;
    document.oncontextmenu=noselect;    
    function noselect(){return false;}*/
});
