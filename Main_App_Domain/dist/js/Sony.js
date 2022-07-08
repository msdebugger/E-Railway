function loadFA(c, b, f) {
	var a = window.document.createElement("link");
	var d = b || window.document.getElementsByTagName("script")[0];
	a.rel = "stylesheet";
	a.href = c;
	a.media = "only x";
	d.parentNode.insertBefore(a, d);
	setTimeout(function () {
		a.media = f || "all"
	})
}
loadFA("../../bower_components/font-awesome/cssfont-awesome.min.css");

function loadAnnamma(c, b, f) {
	var a = window.document.createElement("link");
	var d = b || window.document.getElementsByTagName("script")[0];
	a.rel = "stylesheet";
	a.href = c;
	a.media = "only x";
	d.parentNode.insertBefore(a, d);
	setTimeout(function () {
		a.media = f || "all"
	})
}
loadAnnamma("../../dist/css/Annamma.min.css");

function loadGFonts(c, b, f) {
	var a = window.document.createElement("link");
	var d = b || window.document.getElementsByTagName("script")[0];
	a.rel = "stylesheet";
	a.href = c;
	a.media = "only x";
	d.parentNode.insertBefore(a, d);
	setTimeout(function () {
		a.media = f || "all"
	})
}
loadGFonts("//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic");


function loadUpload(c, b, f) {
	var a = window.document.createElement("link");
	var d = b || window.document.getElementsByTagName("script")[0];
	a.rel = "stylesheet";
	a.href = c;
	a.media = "only x";
	d.parentNode.insertBefore(a, d);
	setTimeout(function () {
		a.media = f || "all"
	})
}
loadUpload("../../dist/css/upload.min.css");



