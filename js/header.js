$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).show();
    $(this).find('.dropdown-toggle').addClass('hover');
   }, function() {
    $(this).find('.dropdown-menu').stop(true, true).fadeOut(0);
     $(this).find('.dropdown-toggle').removeClass('hover');
});