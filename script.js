function handle(dis) {
	var v = $(".list-group").children().children("p");
	v.slideUp('fast', function() {
		$(".list-group").children().removeClass("active");
	});
	
}

$(document).ready(function() {
	$(".qali").on("click", function(event) {
		event.stopPropagation();
		event.preventDefault();
		var t = $(this);
		var v = t.children("p");
		if (t.hasClass("active")) {
			v.slideUp('fast', function() {
				t.removeClass("active");
			});
			return;
		}
		var disp = v.css("display");
		handle(t);
		v.slideToggle('fast', function() {
			t.toggleClass("active");
		});
		
	});
});

function go(url) {
	window.location.href = url;
}