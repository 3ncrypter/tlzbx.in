$(window).on('load', function(){
  $(".overlay").fadeOut("slow");
});
$(function(){  

  
    // $('.nav a').on('click', function () {
    //     if ($('.navbar-toggle').css('display') != 'none') {
    //         $(".navbar-toggle").trigger("click");
    //     }
    // });
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
    $('.toTop').on('click', function() {
      $('body,html').animate({
          scrollTop : 0
      }, 500);
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

/*RD Calculator*/  
$(function(){
  function getValues(){
    var rd_mi = parseFloat($('#rd-mi').val());  //P
    var rd_roi = parseFloat($('#rd-roi').val()); //R
    var rd_nm = parseFloat($('#rd-nm').val()); //T --> t = T/12 (t is time duration in Years)
    var rd_comp = parseFloat($('#rd-comp').val()); //N
    //console.log('mi='+rd_mi+' roi'+rd_roi+' time'+rd_nm+' comp'+rd_comp)
    var amount = [];    
    var x = calculate_x(rd_roi,rd_comp);
    for (var i = rd_nm; i>=1; i--){
        a = rd_mi*Math.pow(x,rd_comp*calculate_t(i));
        //console.log(a);
        amount.push(a);
    }
    var rd_mv = amount.reduce((total, amount) => total + amount);
    console.log(rd_mv);
      //document.getElementById("rd-mv").value = Math.round(rd_mv);

    //var rd_mv = rd_mi + rd_roi + rd_nm + rd_comp;
    if(isNaN(rd_mv)){    
      document.getElementById('rd-mv').value = "Please fill all the fields Correctly";  
      document.getElementById('rd-mv').style.color = "red"
    }else{
      document.getElementById('rd-mv').style.color = "inherit"
      document.getElementById('rd-mv').value = Math.round(rd_mv);  
    }    
  }
  function calculate_x(rd_roi,rd_comp){
        var x =  1+(rd_roi/100)/rd_comp;
        //console.log(x);
        return x;
  }
  function calculate_t(rd_nm){
    return rd_nm/12
  }
  document.addEventListener('keyup', getValues, false);
  document.addEventListener('change', getValues, false);
})