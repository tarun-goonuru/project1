( function( $ ) {
$( document ).ready(function() {
//$('#cssmenu_side ul ul li:odd').addClass('odd');
//$('#cssmenu_side ul ul li:even').addClass('even');
$('#cssmenu_side > ul > li > a').click(function() {
  $('#cssmenu_side li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu_side ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});
});
} )( jQuery );
