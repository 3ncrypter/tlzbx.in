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
    
});