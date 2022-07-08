
var move = "250px";

// Sidebar function
function openNav(){
  $('.sidebar').addClass('active').css({"box-shadow": "inset -5px -3px 10px #000"});
  $(this).addClass('active');
  $('.boomy').removeClass('hidden');
  $('.boom').addClass('hidden');
  $('.tipText-right').addClass('hidden');
  $(".sidebar").children().css({"opacity": 1, "transition": "all .3s ease-in-out"});  
  // setTimeout(function() {
    // $('.profile').delay(300)removeClass('hidden');
    $('.profile').fadeIn(400, function(){
      $(this).removeClass('hidden');
    });
  //   }, 300);
 
  
  if ($(window).width() < 512) {
    $("#main").animate({"margin-left": "60px"}, 10);
  // $(".boom").animate({"margin-left": move},500);
  }
  else{
    $("#main").animate({"margin-left": move}, 10);
  }

}

function closeNav() {
  $('.sidebar').removeClass('active').css({"box-shadow":  "none"});
  $(this).removeClass('active');
  $('.boom').removeClass('hidden');
  $('.boomy').addClass('hidden');
  $(this).attr( "onClick", "openNav();" );
  $('.tipText-right').removeClass('hidden');
  $(".sidebar").children().closest('span').css({"opacity": 0, "transition": "all .3s ease-in-out"});  
  $('.profile').fadeOut(300, function(){
    $(this).addClass('hidden');
  });
  //prevent increase of margin when clicked multiple times
  if ($(window).width() < 512) {
    if($("main").css("margin-left") === "60px")
      $("#main").animate({"margin-left": "-=" + move}, 10);
    else
      $("#main").animate({"margin-left": 0}, 10);
  }
  else{
    if($("main").css("margin-left") === 0)
      $("#main").animate({"margin-left": "-=" + move}, 10);
    else
      $("#main").animate({"margin-left": "60px"}, 10);
  }
  
// $(".boom").animate({"margin-left": "-=" + move}, 500);
}


function Notify(text, style, container) {

	var time = '5000';
	console.log(container);
	var $container = $('#' + container + '');
	console.log($container);
  var icon = '<i class="fa fa-info-circle "></i>';
  
  if( style == 'primary'){
	  icon = '<i class="fa fa-bookmark "></i>';
  }
  
  if( style == 'info'){
	  icon = '<i class="fa fa-info-circle "></i>';
  }
  
  if( style == 'success'){
	  icon = '<i class="fa fa-check-circle "></i>';
  }
  
  if( style == 'warning'){
	  icon = '<i class="fa fa-exclamation-circle "></i>';
  }
  
  if( style == 'danger'){
	  icon = '<i class="fa fa-exclamation-triangle "></i>';
  }
   
  if( style == 'default'){
	  icon = '<i class="fa fa-user "></i>';
  }
  
	if (style == 'undefined' ) {
	  style = 'warning';
	  
	}
  
	  var html = $('<div class="alert alert-' + style + '  hide">' + icon +  " " + text + '</div>');
  
  
  console.log(html);
  
	$('<a>',{
		text: '×',
		class: 'button close',
		style: 'padding-left: 10px;',
		href: 'javascript:void(0)',
		click: function(e){
			e.preventDefault();
		// 	close_callback && close_callback();
			remove_notice();
		}
	}).prependTo(html);

	$container.prepend(html);
	html.removeClass('hide').hide().fadeIn('slow');

	function remove_notice() {
		html.stop().fadeOut('fast');
	}
	
	var timer =  setInterval(remove_notice, time);
  
	$(html).hover(function(){
		clearInterval(timer);
	}, function(){
		timer = setInterval(remove_notice, time);
	});
	
	$(html).on('click', function () {
		clearInterval(timer);
		// callback && callback();
		remove_notice();
	});
  
  
}





$('.primary').on('click', function () {
  Notify("Welcome Back!",'primary','notifications');			   
});
$('.info').on('click', function () {
  Notify("You have new e-mail!",'info', 'notification2');			   
});
$('.success').on('click', function () {
  Notify("The data has been saved!",'success', 'notification3');
});
$('.warning').on('click', function () {
  Notify("Memory Almost Full! ",'warning', 'notification4');			   
});
$('.danger').on('click', function () {
  Notify("Oh no! There's a virus!",'danger', 'notification5');			   
});
$('.default').on('click', function () {
  Notify("I have no idea, too",'default', 'notification7');			   
});