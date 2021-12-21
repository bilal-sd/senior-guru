
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if(scroll >= 30) {
      $(".custom-header").addClass("scrollheader");
    } 
    else {
      $(".custom-header").removeClass("scrollheader");
    }
  });
  
 

  $('.your-class').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });


  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
      $(".new_page_top").addClass("show-top");
    } else {
      $(".new_page_top").removeClass("show-top");
    }
  });


         $(document).ready(function() {
           $('.slick-carousel').slick({
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              dots: true
           });
        });
         $(".map-toggle-box").click(function(){
           $(".map-section").toggleClass("map-section-resize");
        });
    

      jQuery(function(){
        var minimized_elements = $('.read_more');
        minimized_elements.each(function(){
          var t = $(this).text();
          if(t.length < 1100) return;
          $(this).html(
            t.slice(0,1000)+'<span>... </span><a href="#" class="more">Show More<span><i class="fal fa-angle-down"></i></span></a>'+
            '<span style="display:none;">'+ t.slice(1000,t.length)+' <a href="#" class="less">Show Less<span><i class="fal fa-angle-up"></i></span></a></span>'
            );
       });
        $('a.more', minimized_elements).click(function(event){
          event.preventDefault();
          $(this).hide().prev().hide();
          $(this).next().show();
       });
        $('a.less', minimized_elements).click(function(event){
          event.preventDefault();
          $(this).parent().hide().prev().show().prev().show();
       });
     });

