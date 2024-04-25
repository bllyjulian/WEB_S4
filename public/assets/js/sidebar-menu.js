
// sidebar menu
// $(".iconMenu-bar li").click(function () {
//   $(".iconMenu-bar li").removeClass("open");
//   $(this).addClass("open");
// });
$(function() {
  // Function to handle menu item activation
  function activateMenuItem() {
    // Remove 'open' class from all menu items
    $(".iconMenu-bar li").removeClass("open");

    // Get the active menu item from localStorage
    var activeMenuItem = localStorage.getItem('activeMenuItem');
    if (activeMenuItem) {
      // Add 'open' class to the active menu item
      $(".iconMenu-bar li a[href='" + activeMenuItem + "']").parent().addClass('open');
    }
  }

  // Activate menu item when the page loads
  activateMenuItem();

  // On menu item click
  $(".iconMenu-bar li").click(function () {
    // Remove 'open' class from all menu items
    $(".iconMenu-bar li").removeClass("open");
    // Add 'open' class to the clicked menu item
    $(this).addClass("open");

    // Save the active menu item to localStorage
    var menuItemUrl = $(this).find('a').attr('href');
    localStorage.setItem('activeMenuItem', menuItemUrl);
  });

  // Reactivate menu item on page navigation
  $(window).on('popstate', function() {
    activateMenuItem();
  });
});


// $(function() {
//   // this will get the full URL at the address bar
//   var url =  window.location.href.split(/[?#]/)[0];

//   $(".iconMenu-bar li").removeClass("open");
//   $(".iconbar-mainmenu li a").each(function() {

//     // checks if its the same on the address bar
//     if (url === (this.href)) {
//       // console.log(this.closest("li"));
//       $(this).closest("li").addClass("active");
//       $(this).addClass("active");
//       //for making parent of submenu active
//       $(this).closest("li").parent().parent().addClass("open");
//     }
//   });
// });



$('.mobile-sidebar #sidebar-toggle').click(function() {
  var $this = $(".iconsidebar-menu");

  if ($this.hasClass('iconbar-second-close')) {
    //$this.removeClass();
    $this.removeClass('iconbar-second-close').addClass('iconbar-mainmenu-close');
  } else if ($this.hasClass('iconbar-mainmenu-close')) {
    $this.removeClass('iconbar-mainmenu-close').addClass('iconbar-second-close');
  }
});

 if($( window ).width() <= 1199 ) {
  $(".iconsidebar-menu").addClass("iconbar-mainmenu-close");
  $('.iconMenu-bar').removeClass("active");
  $('.iconsidebar-menu').addClass("iconbar-second-close");
  $('.iconsidebar-menu').removeClass("iconbar-mainmenu-close");
};
 if($( window ).width() >= 1199 ) {
  $(".iconsidebar-menu").addClass("iconbar-mainmenu-close");
  $('.iconMenu-bar').addClass("active");
  // $('.iconsidebar-menu').addClass("iconbar-second-close");
  // $('.iconsidebar-menu').removeClass("iconbar-mainmenu-close");
};