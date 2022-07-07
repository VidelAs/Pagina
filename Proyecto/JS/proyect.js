
const SelectElement = function (element) {

    return document.querySelector (element);

}

let  menuToggler = SelectElement ('.menu-toggle')
let  body = SelectElement ('body')

menuToggler .addEventListener ('click', function () {

body.classList.toggle  ('open')
});


window.sr = ScrollReveal ();    
sr.reveal ('.animate-left', {
    origin:'left',
    duration:1000,
    distance:'25rem',
    delay:600


});


sr.reveal ('.animate-right', {
    origin:'right',
    duration:1000,
    distance:'25rem',
    delay:300


});

sr.reveal ('.animate-top', {
    origin:'top',
    duration:1000,
    distance:'25rem',
    delay:300


});

sr.reveal ('.animate-bottom', {
    origin:'bottom',
    duration:1000,
    distance:'25rem',
    delay:300


});

(function($) {

    // Menu filter
    $("#menu-filters li a").click(function() {
      $("#menu-filters li a").removeClass('active');
      $(this).addClass('active');
  
      var selectedFilter = $(this).data("filter");
      //  $("#menu-wrapper").fadeTo(100, 0);
  
      $(".menu-restaurant").fadeOut();
  
      setTimeout(function() {
        $(selectedFilter).slideDown();
        //$("#menu-wrapper").fadeTo(300, 1);
      }, 300);
    });
  
})(jQuery);
  
   
  
  
   