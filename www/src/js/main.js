function resizeContent() {
  'use strict';

  var headerContainerHeight = document.querySelector('header').offsetHeight,
    footerContainerHeight = document.querySelector('footer').offsetHeight;

  $('main.container').css('min-height', $(window).height() - footerContainerHeight - headerContainerHeight + 'px');
}

function homepageVideoLauncher() {
  $('.video-presentation').on('click', function () {
    $('#homepage-modal').fadeIn();
  });
}

function homepageVideoOut() {
  $('#homepage-modal').on('click', function () {
    $('#homepage-modal').fadeOut();
    $('#player-youtube').get(0).stopVideo();
  });
}

function menuCollapseMobile() {
  $('.navbar-toggle').on('click', function () {
    $(this).toggleClass('collapsed');
    $(".navbar-collapse").slideToggle(250);
  });
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
  if ($(window).width() > 991) {
    var getHeightPlayer = $('#player-youtube iframe').height(),
      setHeightPlayerToAside = $('#block-player #aside-player .slider-live-tweet-candidates'),
      getHeightAsideWithoutDots = getHeightPlayer - 50;

    $(setHeightPlayerToAside).height(getHeightPlayer);
    $('#block-player').height(getHeightPlayer);
    $('#block-player #aside-player .slide-twitter-timeline').height(getHeightAsideWithoutDots);
  } else if ($(window).width() > 767 && $(window).width() < 992) {
    $('#block-player').height('auto');
    $('#block-player #aside-player .slide-twitter-timeline').height(650);
  } else {
    $('#block-player').height('auto');
    $('#block-player #aside-player .slide-twitter-timeline').height(350);
  }
}

function resizeCandidatBlock() {
  if ($(window).width() > 991) {
    var getHeightDescriptionRightBlock = $('#candidats .right-column').height(),
        setHeightDescriptionLeftBlock = $('#candidats .left-column');

    $(setHeightDescriptionLeftBlock).height(getHeightDescriptionRightBlock);
  }
}

function loginPopInConnexion() {
  $('.navbar-right').on('mouseover', function () {
    $('#login-pop-in').fadeIn();
  });
  $('#login-pop-in').on('mouseleave', function () {
    $('#login-pop-in').fadeOut();
  });
}

$(function () {
  'use strict';

  var windowWidth = $(window).width();

  $(".slider-live-tweet-candidates").slick({
    dots: true,
    speed: 500,
    autoplay: false,
    arrows: false
  });

  $(".slider-activities").slick({
    dots: true,
    speed: 500,
    autoplay: false,
    arrows: false
  });

  $('#slick-slide00 button').text('Candidats');
  $('#slick-slide01 button').text('Feed Twitter');

  loginPopInConnexion();
  resizeContent();
  liveTweet();
  menuCollapseMobile();
  selectBtnActivities();
  resizePlayerBlock();
  homepageVideoLauncher();
  homepageVideoOut();
  resizeCandidatBlock();

  $(window).on('resize', function () {
    windowWidth = $(window).width();

    loginPopInConnexion();
    resizeContent();
    resizePlayerBlock();
    resizeCandidatBlock();
    
    if (windowWidth > 767) {
      $(".navbar-collapse").show();
    }
  });
});

function updateRanking(result) {
  var json = JSON.parse(result),
    html = "",
    htmlHead = "";

  if (data === 'users') {
    htmlHead = "<tr><th>Classement</th><th>Photo profil</th><th>Nom complet</th><th>Vote</th></tr>";

    for (var i = 0; i < json.length; i++) {
      var ligne = "<tr><td>" + (i + 1) + "</td><td><img width='50px' height='auto' src='res/avatar/" + json[i].avatar + "'></td><td>" + json[i].name + " " + json[i].lastname + "</td><td>" + json[i].hype + "</td></tr>";
      html += ligne;
    }
  } else {
    htmlHead = "<tr><th>Classement</th><th>Titre scénario</th><th>Description</th><th>Vote</th></tr>";

    for (var i = 0; i < json.length; i++) {
      var ligne = "<tr><td>" + (i + 1) + "</td><td>" + json[i].title + "</td><td>" + json[i].description + "</td><td>" + json[i].hype + "</td></tr>";
      html += ligne;
    }
  }

  $('.table thead').html(htmlHead);
  $('.table tbody').html(html);
}

$(document).ready(function () {
  $('.btn-rank').on('click', function () {
    if (!$(this).hasClass('active-nok')) {
      return;
    }

    $('.btn-rank').toggleClass('btn-success');
    $('.btn-rank').toggleClass('active-nok');

    var data = $(this).data('rank');

    $.ajax({
      url: rankingUrl,
      data: {
        data: data
      },
      success: updateRanking,
      error: function () {
        console.log("Error");
      }
    })
  });
});