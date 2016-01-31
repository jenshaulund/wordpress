$(document).ready(function(){

  $('.tooltip').mouseover(function(e){
    // alert('mouse');
    if( $(this).attr('data-tip-type') == 'text' ){
      $('#tooltip_container').html($(this).attr('data-tip-source'));
      $('#tooltip_container').css({'display':'block', 'opacity':0}).animate({opacity:1}, 250);

    }
  }).mousemove(function(e){
    // alert('move')
    $('#tooltip_container').css('left', (e.pageX + 20) + 'px');
    // $('#tooltip_container').css('left', '200px');
    $('#tooltip_container').css('top', (e.pageY + 20) + 'px');
    // $('#tooltip_container').css('top', '400px');


  }).mouseout(function(e){
    $('#tooltip_container').animate({opacity:0}, 250, function(){
      $('#tooltip_container').css('display', 'none').html('');
    });


  });

});
