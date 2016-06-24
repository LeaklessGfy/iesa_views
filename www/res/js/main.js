function resizeContent() {
  'use strict';

  var headerContainerHeight = document.querySelector('header').offsetHeight,
    footerContainerHeight = document.querySelector('footer').offsetHeight;

  $('main.container').css('min-height', $(window).height() - footerContainerHeight - headerContainerHeight + 'px');
}

function resizePlayerBlock() {
  var getHeightPlayer = $('#player-youtube iframe').height(),
      setHeightPlayerToChat = $('#block-player #chat iframe');

  $(setHeightPlayerToChat).height(getHeightPlayer);
  $('#block-player').height(getHeightPlayer);
}

$(function () {
  'use strict';

  resizePlayerBlock();

  $(window).on('resize', function () {
    resizePlayerBlock();
  })

  //resizeContent();

});