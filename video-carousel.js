var $ = jQuery;
$(document).ready(function(){
  // Адаптивный слайдер для дополнительных видеороликов по теме
  var owl = $('#videoCaruselBot');
  owl.owlCarousel({margin:10,nav:true,dots:false,navText:['',''],responsive:{0:{items:1},540:{items:2},960:{items:3},1280:{items:4}}});
  var patientsActiveSlide = $('.active_video').parent(".owl-item").index();
  owl.trigger("to.owl.carousel", [patientsActiveSlide, 1, true]);
});