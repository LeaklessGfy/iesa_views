function resizeContent() {
  'use strict';

  var headerContainerHeight = document.querySelector('header').offsetHeight,
    footerContainerHeight = document.querySelector('footer').offsetHeight;

  $('main.container').css('min-height', $(window).height() - footerContainerHeight - headerContainerHeight + 'px');
}

function changeImgHome() {
  $('.navbar-brand').on('mouseover', function () {
    $('.navbar-brand img').attr('src', 'res/img/home-hover.png');
  });
  $('.navbar-brand').on('mouseout', function () {
    $('.navbar-brand img').attr('src', 'res/img/home.png');
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

  $(".slider-activities").slick({
    dots: true,
    speed: 500,
    autoplay: true,
    arrows: false
  });

  resizeContent();
  changeImgHome();
  liveTweet();
  menuCollapseMobile();
  selectBtnActivities();
  resizePlayerBlock();

  $(window).on('resize', function () {
    resizeContent();
    resizePlayerBlock();
    if ($(window).width() > 768) {
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

$(document).ready(function() {
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
      error: function() {
        console.log("Error");
      }
    })    
  });
});
