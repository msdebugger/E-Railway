
//Dismiss Alert
;(function ($) {

    'use strict';

    $('.alert[data-auto-dismiss]').each(function (index, element) {
        var $element = $(element),
            timeout  = $element.data('auto-dismiss') || 5000;

        setTimeout(function () {
            $element.alert('close');
        }, timeout);
    });

})(jQuery);

//Contact Form Message Counter
var maxchar = 400;
var i = document.getElementById("textinput");
var c = document.getElementById("count");
c.innerHTML = maxchar;
    
i.addEventListener("keydown",count);

function count(e){
    var len =  i.value.length;
    if (len >= maxchar){
       e.preventDefault();
    } else{
       c.innerHTML = maxchar - len-1;   
  }
}
