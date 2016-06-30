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

function liveTweet() {
  ! function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
      p = /^http:/.test(d.location) ? 'http' : 'https';
    if (!d.getElementById(id)) {
      js = d.createElement(s);
      js.id = id;
      js.src = p + "://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
    }
  }(document, "script", "twitter-wjs");
}

function resizePlayerBlock() {
  var getHeightPlayer = $('#player-youtube iframe').height(),
    setHeightPlayerToAside = $('#block-player #aside-player .slider-live-tweet-candidates'),
    getHeightAsideWithoutDots = getHeightPlayer - 50;

  $(setHeightPlayerToAside).height(getHeightPlayer);
  $('#block-player').height(getHeightPlayer);
  $('#block-player #aside-player .slide-twitter-timeline').height(getHeightAsideWithoutDots);
}

$(function () {
  'use strict';

  $(".slider-live-tweet-candidates").slick({
    dots: true,
    speed: 500,
    autoplay: false,
    arrows: false
  });

  /*  $('.slider-live-tweet')*/

  $(".slider-activities").slick({
    dots: true,
    speed: 500,
    autoplay: true,
    arrows: false
  });
  
  liveTweet();
  selectBtnActivities();
  resizePlayerBlock();

  $(window).on('resize', function () {
    resizePlayerBlock();
  });

});