  //console.time("Performance");
  //console.timeEnd("Performance");
  //console.log("Trigger success");

var bodyVar = document.body;

// Because WordPress disallows $ jQuery alias, we need this function in order to use it again
jQuery(document).ready(function($) {

  //Navbar mobile menu
  document.getElementById("menu-icon").addEventListener("click", function(){
  	document.querySelector('#navbar').classList.toggle('nav-menu-down');
  	
      if ( bodyVar.classList.contains('lockScroll') ) {
        bodyVar.classList.remove('lockScroll');
      }
      else {
        bodyVar.classList.add('lockScroll');
      }
  });
  //END App menu

  //Show/Hide Search bar
  document.getElementById("nav-search-icon").addEventListener("click", function(){
      document.querySelector('#navbar').classList.toggle('nav-search-on');
      document.querySelector('.search-field').focus();
  });
  //END Show/Hide Search bar

  //Night mode
  document.getElementById("nav-night-mode").addEventListener("click", function(){
    var currentTheme = localStorage.getItem('theme');
  	if (currentTheme === 'dark') {
      document.documentElement.setAttribute('data-theme', 'light');
      localStorage.setItem('theme', 'light');
    } 
    else {
      document.documentElement.setAttribute('data-theme', 'dark');
      localStorage.setItem('theme', 'dark');
    }
  });
  //END Night mode

  //Focus mode
  /*var focusIcon = document.getElementById("focus-icon");
  
  if (focusIcon) {
    document.getElementById("focus-icon").addEventListener("click", function(){
      bodyVar.classList.toggle('focus-mode');
    });
  }*/
  //END Focus mode

});





