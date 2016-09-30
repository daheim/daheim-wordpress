var offen = false;

var $ = jQuery;

$(document).ready(function(){
  var flip = 0;

  $('.main-menu-opener').click(function (e) {
    e.preventDefault()
    //$('.menu-popup-container').toggle()
    $('body').toggleClass('show-menu-popup')
    // $('body').css('overflow', 'hidden')
  })
  $('.menu-popup-container .close, .menu-popup-container').click(function (e) {
    //if (e.target === e.currentTarget) $('.menu-popup-container').hide()
    if (e.target === e.currentTarget) $('body').removeClass('show-menu-popup')
  })
  $('.menu-popup-container .close').click(function (e) {
    //$('.menu-popup-container').hide()
    $('body').removeClass('show-menu-popup')
  })



  $("#q_faq_1").click(function(){
    offen = !offen;
    if (offen) $("#a_faq_1").slideDown("slow");
    else $("#a_faq_1").slideUp("slow");


    //$("#save_form").slideDown("slow");
    return false;
  });
  $("#q_faq_2").click(function(){
    offen = !offen;
    if (offen) $("#a_faq_2").slideDown("slow");
    else $("#a_faq_2").slideUp("slow");


    //$("#save_form").slideDown("slow");
    return false;
  });
  $("#q_faq_3").click(function(){
    offen = !offen;
    if (offen) $("#a_faq_3").slideDown("slow");
    else $("#a_faq_3").slideUp("slow");


    //$("#save_form").slideDown("slow");
    return false;
  });
  $("#q_faq_4").click(function(){
    offen = !offen;
    if (offen) $("#a_faq_4").slideDown("slow");
    else $("#q_faq_4").slideUp("slow");


    //$("#save_form").slideDown("slow");
    return false;
  });
// _______________________________________________________________________________

  $("#spachcoach_link").click(function(){
    offen = !offen;
    if (offen) $("#spachcoach_info").slideDown("slow");
    else $("#spachcoach_link").slideUp("slow");


    //$("#save_form").slideDown("slow");
    return false;
  });

var controller = new ScrollMagic.Controller();
// var tween = TweenMax.to("#header", 1, {backgroundColor: 'white'});
new ScrollMagic.Scene({triggerElement: "#title-text", triggerHook: 0, offset: -136})
        .setClassToggle('#headerWrapper', 'white')
        .addTo(controller);

new ScrollMagic.Scene({triggerElement: "#wrapper", triggerHook: 0, offset: -136})
        .setClassToggle('#headerWrapper', 'whiteShadow')
        .addTo(controller);
});

