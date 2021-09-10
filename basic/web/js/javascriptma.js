document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".sidenav");
  var instances = M.Sidenav.init(elems);
});

$(document).ready(function () {
  var elem = document.querySelector(".modal");
  if (elem) {
    var instance = M.Modal.getInstance(elem);
    instance.open();
  }
  $("select").formSelect();
  $(".carousel.carousel-slider").carousel({
    fullWidth: true,
    indicators: true,
    duration: 200,
  });
  window.setInterval(function () {
    $(".carousel").carousel("next");
  }, 3000);
});

(function ($) {
  $.fn.timeline = function () {
    var selectors = {
      id: $(this),
      item: $(this).find(".timeline-item"),
      activeClass: "active",
      img: ".timeline-img",
    };
    selectors.item.eq(0).addClass(selectors.activeClass);
    var itemLength = selectors.item.length;
    $(window).scroll(function () {
      var max, min;
      var pos = $(this).scrollTop();
      selectors.item.each(function (i) {
        min = $(this).offset().top;
        max = $(this).height() + $(this).offset().top;
        if (i == itemLength - 2 && pos > min + $(this).height() / 2) {
          selectors.item.removeClass(selectors.activeClass);
          selectors.item.last().addClass(selectors.activeClass);
        } else if (pos <= max - 200 && pos >= min - $(this).height()) {
          selectors.item.removeClass(selectors.activeClass);
          $(this).addClass(selectors.activeClass);
        }
      });
    });
  };
})(jQuery);

$("#timeline").timeline();

$(".modal").modal();

$(".add-to-cart").on("submit", function (event) {
  var action = $(this).attr("action");
  var method = $(this).attr("method");
  if (method == undefined) {
    method = "get";
  }
  var data = $(this).serialize();
  console.log(data);
  $.ajax({
    url: action,
    type: method,
    data: data,
    dataType: "text",
    success: function (response) {
      console.dir(response);
    },
    error: function () {
      alert("Error occured while adding the item to the card");
    },
  });
  event.preventDefault();
});

$("#cart").on("submit", "form", function (event) {
  var action = $(this).attr("action");
  var method = $(this).attr("method");
  if (method == undefined) {
    method = "get";
  }
  var data = $(this).serialize();
  $.ajax({
    url: action,
    type: method,
    data: data,
    dataType: "html",
    success: function (response) {
      $("#cart").html(response);
    },
    error: function () {
      alert("Error occured during cart reload");
    },
  });
  event.preventDefault();
});

$(document).ready(function () {
  $("select").formSelect();
});
