$(".accordion-wrap").on("click", function(){   
    $(this).children().eq(1).slideToggle(300);  
    $(this).children().eq(0).toggleClass("accordion-no-bar");
    $(this).siblings().find(".accordion-header").removeClass("accordion-gold");
    $(this).siblings().find(".accordion-header i").removeClass("rotate-fa");
    $(this).find(".accordion-header").toggleClass("accordion-gold");
    $(this).find(".fa").toggleClass("rotate-fa");

    $(".accordion-wrap .accordion-text").not($(this).children().eq(1)).slideUp(300);
});
$(function() {
  var $panel = $('div.acordion-wrapper > div.acordion-count').hide();
  $panel.first().show();
  $('.acordion-wrapper div.acordion-title > h1').on('click', function(event) {
     var $this = $(this);
    $panel.slideUp();
    $this.parent().next().slideDown();
    return false;
  })
})