
$ = jQuery.noConflict();

$(document).ready(function() {

  //mostrar menu
  $('.main-menu a').on('click', function(){
    $('.menu-header-container').toggle('slow');
  });

  //resize menu
  var breakpoint = 768;
  $(window).resize(function(){
    if($(document).width() >= breakpoint){
      $('.menu-header-container').show();
    }else{
      $('.menu-header-container').hide();
    }
  });

  //fluidbox
  jQuery('.gallery a'). each(function(){
    jQuery(this).attr({'data-fluidbox' : ''});
  });
  if(jQuery('[data-fluidbox]').length > 0){
    jQuery('[data-fluidbox]').fluidbox();
  }
});
