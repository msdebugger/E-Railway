/*! ThomasJs
 * ================
 * Main Js application file for Railway Concession System(RCS). This file
 * should be included in all pages. It controls some layout
 * options and implements exclusive RCS plugins.
 *
 * @Author  Tony Thomas
 * @Email   <write2tonythomas@gmail.com>
 * @version 1.6.9*/


//Online Stats
jQuery.noConflict();
jQuery(document).ready(function ($) {
	$(document).ready(function () {

		online_status();
		setInterval(function () {
			online_status();
		}, 3000);

		function online_status() {
			$.ajax({
				url: '../../includes/ajax/ostatus.php',
				data: "",
				dataType: 'json',
				success: function (data) {

				}
			});
		}

	});


});
window.onload = function () {
	var mainDiv = $("main");
}


//Age Calculation and Validation
jQuery.noConflict();
jQuery(document).ready(function ($) {
	validate_age();
	
	$("#bday").change(function () {
		validate_age();
	});
	
	function validate_age() {
		var mdate = $("#bday").val().toString();
		var yearThen = parseInt(mdate.substring(0, 4), 10);
		var monthThen = parseInt(mdate.substring(5, 7), 10);
		var dayThen = parseInt(mdate.substring(8, 10), 10);

		var today = new Date();
		var birthday = new Date(yearThen, monthThen - 1, dayThen);

		var differenceInMilisecond = today.valueOf() - birthday.valueOf();

		var year_age = Math.floor(differenceInMilisecond / 31536000000);
		var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);

		var month_age = Math.floor(day_age / 30);

		day_age = day_age % 30;

		if (isNaN(year_age) || isNaN(month_age) || isNaN(day_age)) {
			$("#calage").val("Invalid birthday - Please try again!");
		}
		if(year_age >= 25 ){
			$("#calage").val("" + year_age + " years " + month_age + " month(s) ");
			$('#AgeMaxed').modal('show'); 
		}else {
			$("#calage").val("" + year_age + " years " + month_age + " month(s) ");
		}
	}
	
});
window.onload = function () {
	var mainDiv = $("main");
};


//Dismiss Bs Alert 
(function (a) {
	a(".alert[data-auto-dismiss]").each(function (d, e) {
		var b = a(e),
			f = b.data("auto-dismiss") || 12000;
		setTimeout(function () {
			b.alert("close")
		}, f)
	})
})(jQuery);


//Contact Form Char Counter
var maxchar = 400;
var i = document.getElementById("textinput");
var c = document.getElementById("count");
c.innerHTML = maxchar;
i.addEventListener("keydown", count);

function count(b) {
	var a = i.value.length;
	if (a >= maxchar) {
		b.preventDefault()
	} else {
		c.innerHTML = maxchar - a - 1
	}
};

//inialize datatable
jQuery.noConflict();
jQuery(document).ready(function ($) {
	$(document).ready(function () {
		$('#myTable').DataTable();
		$('#myTable2').DataTable();
	});
});
window.onload = function () {
	var mainDiv = $("main");
};