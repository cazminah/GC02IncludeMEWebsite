$(document).ready(function(){
	console.log("salam");
	$(".faqItem").click(function(){
		$(this).next().toggle(250);
	})
});