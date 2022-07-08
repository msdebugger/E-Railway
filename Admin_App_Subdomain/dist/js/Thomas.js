/*! ThomasJs(Admin version)
 * ================
 * Main Js application file for Railway Concession System(RCS). This file
 * should be included in all pages. It controls some layout
 * options and implements exclusive RCS plugins.
 *
 * @Author  Tony Thomas
 * @Email   <write2tonythomas@gmail.com>
 * @version 1.6.9*/



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


//inialize datatable
$(document).ready( function () {
    $('#myTable').DataTable();
    $('#myTable2').DataTable();
} );