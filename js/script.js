
// Show nav when hamburger icon is clicked
$('.show-nav').on('click', function (e) {
  e.stopPropagation();
  $('.side-nav').animate({ right: 0 });
})

var hideNav = function () {
  // hide nav when remove icon is clicked
  $('.side-nav').animate({ right: -220 });
};

// Hide nav when hide-nav icon is clicked
$('.hide-nav').on('click', hideNav );

// Hide nav when body is clicked
$('body').on('click', hideNav );

// Flash down arrow
$('.down-arrow').delay(1000).fadeIn(1000).delay(500).fadeOut('slow');

// Set Parallax effects
$('body').scroll(function () {
  var pos = $(this).offset().top;

  if (pos > $('#about').offset().top) {
    $('.for-sellers-list').addClass('fade-in');
  }

  if (pos > $('.services-header').offset().top - 200) {
    $('.for-buyers-list').addClass('fade-in');
  }

  if (pos > ($('.services-header').offset().top) + 200) {
    $('.consulting-list').addClass('fade-in');
  }
});
