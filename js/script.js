// Show nav when hamburger icon is clicked
$('.show-nav').on('click', function () {
  $('.side-nav').animate({ right: 0 });
});

// hide nav when remove icon is clicked
$('.hide-nav').on('click', function () {
  $('.side-nav').animate({ right: -220 });
})

// Flash down arrow
$('.down-arrow').delay(1000).fadeIn(1000).delay(500).fadeOut('slow');
