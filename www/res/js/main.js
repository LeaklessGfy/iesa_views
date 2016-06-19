function resizeContent() {
  'use strict';

  var headerContainerHeight = document.querySelector('header').offsetHeight,
      footerContainerHeight = document.querySelector('footer').offsetHeight;
  
  $('main.container').css('min-height', $(window).height() - footerContainerHeight - headerContainerHeight + 'px');
}

$(function () {
  'use strict';
  
  resizeContent();
  
});