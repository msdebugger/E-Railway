jQuery.noConflict();
jQuery(document).ready(function ($) {
	$(document).ready(function () {

		fetch_image();

		function fetch_image() {
			var action = "fetch_image";
			$.ajax({
				url: "../../includes/ajax/imgmed.php",
				method: "POST",
				data: {
					action: action
				},
				success: function (data) {
					document.getElementById("img-navi").src = data;
					document.getElementById("img-menu").src = data;
					document.getElementById("img-side").src = data;
				}
			});
		}

	});


});
// The $ variable in the global scope has the prototype.js meaning.
window.onload = function () {
	var mainDiv = $("main");
}