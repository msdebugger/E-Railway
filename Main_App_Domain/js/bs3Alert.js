/* Author: Atlanta Web Certified Officials, LLC - Website: http://www.atlantawebco.com - Email: info@atlantawebco.com (c) Atlanta Web Certified Official, LLC */

/* 

API Quick Guide
idtag: #yourid
title: title of alert
message: message to display for alert
type: success, info, warning, danger
showx: 1 = X or 0 = NULL
timeout: integer in milliseconds ex: 3000 = 3 seconds

CODE EXAMPLE

<div id="alert" class="hide"></div>

$(document).ready(function() {
bs3Alerts("#alert", "Error!", "An error has occured", "warning", "1", "3000");
});

*/


function bs3Alerts(idtag, title, message, type, showx, timeout) {
	
    $.noConflict();
jQuery(document).ready(function($){

 	var classSearch = $(idtag).hasClass("hide");
	
	$(idtag).empty();
	 
	$(idtag).addClass("alert alert-"+type+" alert-dismissable");
	
	if(showx == 1) {
	$(idtag).append( "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>" );
    }
	
	if(title != "") {
	$(idtag).append("<strong>"+title+"</strong>&nbsp;&nbsp;");
	}
	
	if(message != "") {
	$(idtag).append(message);
	}
	
	
	if(classSearch == true) {
	$(idtag).removeClass("hide");
    $(idtag).addClass("show");
    } 
	
	if(classSearch == false) {
	$(idtag).removeAttr('style');
    $(idtag).addClass("show");
    } 
	
	if(timeout != "") {
    $(idtag).delay(timeout).fadeOut('slow').removeClass("show");
			

	}

  });
}
  
