$(window).on('load', function(){
  $(".overlay").fadeOut("slow");
});
$(function(){  
   $('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {    
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {      
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');      
      if (target.length) {        
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500, function() {                    
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
    }
  });

/*Add active class to the section currently in viewport*/   
    $(window).scroll(function(){
        if ($(this).scrollTop()>300){
            $('.toTop').show();            
        }
        else{
            $('.toTop').hide();
        }
    });
});

(function(){

  var parallax = document.querySelectorAll(".parallax"),
      speed = 0.3;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "0 " + '-' + (windowYOffset * speed) + "px";
      
      el.style.backgroundPosition = elBackgrounPos;

    });
  };

})();