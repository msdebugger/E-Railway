
jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
// You can use the locally-scoped $ in here as an alias to jQuery.
    $(document).on('change', '#image_upload_file', function () {
var progressBar = $('.progressBar'), bar = $('.progressBar .bar'), percent = $('.progressBar .percent');

$('#image_upload_form').ajaxForm({
    beforeSend: function() {
		progressBar.fadeIn();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function(html, statusText, xhr, $form) {		
		obj = $.parseJSON(html);	
		if(obj.status){		
			var percentVal = '100%';
			bar.width(percentVal)
			percent.html(percentVal);
			$("#imgArea>img").prop('src',obj.image_medium);			
		}else{
			alert(obj.error);
		}
    },
	complete: function(xhr) {
		progressBar.fadeOut();
        BootstrapAlert.success({
  title: "Success!",
  message: "Photo changed sucessfully"
});

	}	
}).submit();		

});
  
});
// The $ variable in the global scope has the prototype.js meaning.
window.onload = function(){
var mainDiv = $( "main" );
}


 jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
$(document).ready(function(){

fetch_user_login_data();
setInterval(function(){
 fetch_user_login_data();
}, 1000);
function fetch_user_login_data()
{
 var action = "fetch_data";
 $.ajax({
  url:"imgmedui.php",
  method:"POST",
  data:{action:action},
  success:function(data)
  {
   document.getElementById("imggs").src = data;
  }
 });
}

});
          
  
});
// The $ variable in the global scope has the prototype.js meaning.
window.onload = function(){
var mainDiv = $( "main" );
}


  
 
 jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
$(document).ready(function(){

fetch_user_login_data();
setInterval(function(){
 fetch_user_login_data();
}, 1000);
function fetch_user_login_data()
{
 var action = "fetch_data";
 $.ajax({
  url:"imgmed.php",
  method:"POST",
  data:{action:action},
  success:function(data)
  {
   document.getElementById("lolbro").src = data;
  }
 });
}

});
          
  
});
// The $ variable in the global scope has the prototype.js meaning.
window.onload = function(){
var mainDiv = $( "main" );
}

  
  
 
 jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
$(document).ready(function(){

fetch_user_login_data();
setInterval(function(){
 fetch_user_login_data();
}, 1000);
function fetch_user_login_data()
{
 var action = "fetch_data";
 $.ajax({
  url:"imgsm.php",
  method:"POST",
  data:{action:action},
  success:function(data)
  {
   document.getElementById("imgsm").src = data;
  }
 });
}

});
          
  
});
// The $ variable in the global scope has the prototype.js meaning.
window.onload = function(){
var mainDiv = $( "main" );
}


