$(document).ready(function() {
	var scrollLink = $(".scroll");
	// Smooth scrolling
	scrollLink.click(function(e) {
		e.preventDefault();
		$("body,html").animate(
			{
				scrollTop: $(this.hash).offset().top
			},
			1000
		);
	});
	// Active link switching
	$(window).scroll(function() {
		var scrollbarLocation = $(this).scrollTop();
		scrollLink.each(function() {
			var sectionOffset = $(this.hash).offset().top - 20;
			if (sectionOffset <= scrollbarLocation) {
				$(this)
					.parent()
					.addClass("active");
				$(this)
					.parent()
					.siblings()
					.removeClass("active");
			}
		});
	});
});

$(".navbar-nav>li>a").on("click", function() {
	$(".navbar-collapse").collapse("hide");
});

(function($) {
	"use strict"; // Start of use strict

	// Collapse Navbar
	var navbarCollapse = function() {
		if ($("#mainNav").offset().top > 400) {
			$("#mainNav").removeClass("navbar-transparent");
		} else {
			$("#mainNav").addClass("navbar-transparent");
		}
	};
	// Collapse now if page is not at top
	navbarCollapse();
	// Collapse the navbar when page is scrolled
	$(window).scroll(navbarCollapse);
})(jQuery); // End of use strict
