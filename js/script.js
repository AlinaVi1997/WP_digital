// Slick-slider  
$(document).ready(function () {
    $('.team-slider').slick({
        arrows: false,
        infinite:true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: false,
        variableWidth: true,
        responsive: [
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});


// Tabs
$(document).ready(function() {
  // Початкове встановлення активної вкладки
  $("#content-1").show();
  $("#tab-1").addClass("active");

  // Клік на вкладці
  $(".tablinks").click(function() {
    $(".tablinks").removeClass("active");
    $(".tabcontent").hide();
    $(this).addClass("active");
    var contentId = $(this).attr("id").replace("tab", "content");
    $("#" + contentId).show();
  });
});