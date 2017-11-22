$(function(){
   $(window).load(function () {$(".loader, .overlay").fadeOut("slow");}); 

   /*back to top*/ 
    $(window).scroll(function(){
        if ($(this).scrollTop()>300){
            $('.toTop').show();            
        }
        else{
            $('.toTop').hide();
        }
        });

    /*page scroll to id*/
    $(window).load(function(){       
        $("a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({highlightSelector:".nav-cust-ul li a[rel='m_PageScroll2id']"});
    });
    
    
    $.get("dir/data.json", function(data, status){        
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