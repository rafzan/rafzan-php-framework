/* 
Source: PeepCode Blog

Shortcut mods and red vertical grid by Rafzan (iloverafzan@gmail.com)
https://github.com/rafzan/, http://www.popstencil.com, http://www.maismaisdesign.com.br
*/

jQuery(function() {

  $('body').keydown(function(event) {

    if (event.shiftKey && event.keyCode == '71') {
      if ($('.top').hasClass('debug'))
      {
        $('.top').removeClass('debug');
      }
      else
      {
        $('.top').removeClass('debug_red');
        $('.top').addClass('debug');
      }
    }

    if (event.shiftKey && event.keyCode == '72') {
      if ($('.top').hasClass('debug_red'))
      {
        $('.top').removeClass('debug_red');
      }
      else
      {
        $('.top').removeClass('debug');
        $('.top').addClass('debug_red');
      }
    }

  });

});






















