$.noConflict();

jQuery(document).ready(function ($) {
  "use strict";

  [].slice
    .call(document.querySelectorAll("select.cs-select"))
    .forEach(function (el) {
      new SelectFx(el);
    });

  jQuery(".selectpicker").selectpicker;

  $(".search-trigger").on("click", function (event) {
    event.preventDefault();
    event.stopPropagation();
    $(".search-trigger").parent(".header-left").addClass("open");
  });

  $(".search-close").on("click", function (event) {
    event.preventDefault();
    event.stopPropagation();
    $(".search-trigger").parent(".header-left").removeClass("open");
  });

  $(".equal-height").matchHeight({
    property: "max-height",
  });

  // var chartsheight = $('.flotRealtime2').height();
  // $('.traffic-chart').css('height', chartsheight-122);

  // Counter Number
  $(".count").each(function () {
    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: $(this).text(),
        },
        {
          duration: 3000,
          easing: "swing",
          step: function (now) {
            $(this).text(Math.ceil(now));
          },
        }
      );
  });

  // Menu Trigger
  $("#menuToggle").on("click", function (event) {
    var windowWidth = $(window).width();
    if (windowWidth < 1010) {
      $("body").removeClass("open");
      if (windowWidth < 760) {
        $("#left-panel").slideToggle();
      } else {
        $("#left-panel").toggleClass("open-menu");
      }
    } else {
      $("body").toggleClass("open");
      $("#left-panel").removeClass("open-menu");
    }
  });

  $(".menu-item-has-children.dropdown").each(function () {
    $(this).on("click", function () {
      var $temp_text = $(this).children(".dropdown-toggle").html();
      $(this)
        .children(".sub-menu")
        .prepend('<li class="subtitle">' + $temp_text + "</li>");
    });
  });

  // Load Resize
  $(window).on("load resize", function (event) {
    var windowWidth = $(window).width();
    if (windowWidth < 1010) {
      $("body").addClass("small-device");
    } else {
      $("body").removeClass("small-device");
    }
  });
});

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

//slide 2

function myFunction() {
  document.getElementById("myImg").src = "../images/img4.jpg";
}

function myFunction1() {
  document.getElementById("myImg").src = "../images/img3.jpg";
}

function myFunction2() {
  document.getElementById("myImg").src = "../images/img2.jpg";
}

function myFunction3() {
  document.getElementById("myImg").src = "../images/img5.jpg";
}
