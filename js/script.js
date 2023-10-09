// Slick-slider  
$(document).ready(function () {
  $('.team-slider').slick({
    dots: false,
      arrows: false,
    infinite:true,
    slidesToShow: 3,
    slidesToScroll: 3,
  });
});

// Tabs
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
// var element = document.getElementById("defaultOpen");
// if (element) {
//     element.click();
// }
    
jQuery(document).ready(function() {
  jQuery("#defaultOpen").click();
});
