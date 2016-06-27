function resizeContent() {
  'use strict';

  var headerContainerHeight = document.querySelector('header').offsetHeight,
    footerContainerHeight = document.querySelector('footer').offsetHeight;

  $('main.container').css('min-height', $(window).height() - footerContainerHeight - headerContainerHeight + 'px');
}

function selectBtnActivities() {
  $('.btn-activities').on('click', function () {
    if ($(this).hasClass('active-nok')) {
      $('.btn-activities').addClass('active-nok');
      $('.btn-activities').removeClass('btn-success');
      $(this).removeClass('active-nok');
      $(this).addClass('btn-success');
    }
  });
}

function resizePlayerBlock() {
  var getHeightPlayer = $('#player-youtube iframe').height(),
    setHeightPlayerToChat = $('#block-player #chat iframe');

  $(setHeightPlayerToChat).height(getHeightPlayer);
  $('#block-player').height(getHeightPlayer);
}

$(function () {
  'use strict';
  $('.slider').slick();
  
  selectBtnActivities();
  resizePlayerBlock();

  $(window).on('resize', function () {
    resizePlayerBlock();
  });

});