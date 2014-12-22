$(".develops").click(function() {
	
	$(".yoga").toggle();
	$(".blogs").toggle();
	$(".connect").toggle();
	
	if ($(".develops-info").css("display")==="none") {
		
		$(".develops-info").show();
		
	} else {
		
	$(".develops-info").hide();
		
	}
	
});

$(".yoga").click(function() {
	
	$(".develops").toggle();
	$(".blogs").toggle();
	$(".connect").toggle();
	
	if ($(".yoga-info").css("display")==="none") {
		
		$(".yoga-info").show();
		
	} else {
		
	$(".yoga-info").hide();
		
	}
	
});

/*$(".blogs").click(function() {
	
	$(".yoga").toggle();
	$(".develops").toggle();
	$(".connect").toggle();
	
	if ($(".blog-info").css("display")=="none") {
		
		$(".blog-info").show();
		
	} else {
		
	$(".blog-info").hide();
		
	};
	
});
*/

$(".connect").click(function() {
	
	$(".yoga").toggle();
	$(".blogs").toggle();
	$(".develops").toggle();
	
	if ($(".connect-info").css("display")==="none") {
		
		$(".connect-info").show();
		
	} else {
		
	$(".connect-info").hide();
		
	}
	
});


