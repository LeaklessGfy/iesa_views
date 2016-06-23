function resizeContent() {
  'use strict';

  var headerContainerHeight = document.querySelector('header').offsetHeight,
      footerContainerHeight = document.querySelector('footer').offsetHeight;
  
  $('main.container').css('min-height', $(window).height() - footerContainerHeight - headerContainerHeight + 'px');
}

$(function () {
  'use strict';
  
  resizeContent();
  
  window.fnames = new Array();
  window.ftypes = new Array();
  fnames[0] = 'EMAIL';
  ftypes[0] = 'email';
  /*
   * Translated default messages for the $ validation plugin.
   * Locale: FR
   */
  $.extend($.validator.messages, {
    required: "Ce champ est requis.",
    remote: "Veuillez remplir ce champ pour continuer.",
    email: "Veuillez entrer une adresse email valide.",
    url: "Veuillez entrer une URL valide.",
    date: "Veuillez entrer une date valide.",
    dateISO: "Veuillez entrer une date valide (ISO).",
    number: "Veuillez entrer un nombre valide.",
    digits: "Veuillez entrer (seulement) une valeur numérique.",
    creditcard: "Veuillez entrer un numéro de carte de crédit valide.",
    equalTo: "Veuillez entrer une nouvelle fois la même valeur.",
    accept: "Veuillez entrer une valeur avec une extension valide.",
    maxlength: $.validator.format("Veuillez ne pas entrer plus de {0} caractères."),
    minlength: $.validator.format("Veuillez entrer au moins {0} caractères."),
    rangelength: $.validator.format("Veuillez entrer entre {0} et {1} caractères."),
    range: $.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
    max: $.validator.format("Veuillez entrer une valeur inférieure ou égale à {0}."),
    min: $.validator.format("Veuillez entrer une valeur supérieure ou égale à {0}.")
  });
  var $mcj = jQuery.noConflict(true);
});