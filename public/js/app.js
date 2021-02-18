/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
  Project Name: The WoodCourt
  Author: Picturate.ME
*/
//Show Navbar Only on Scroll
$(window).scroll(function () {
  if ($(window).width() > 992) {
    if ($(window).scrollTop() < 200) {
      $(".navbar").css('position', 'relative').css('top', initial).css('transition', 'all ease 0.3s');
    }

    $(".navbar").css('height', 0).css('opacity', 0).css('transition', 'all ease 0.3s');

    if ($(window).scrollTop() < 200) {
      $(".navbar").css('position', 'relative').css('top', initial).css('transition', 'all ease 0.3s');
    }

    $(".navbar").css('position', 'fixed').css('top', 0).css('height', 60).css('opacity', 1).css('transition', 'all ease 0.3s');
  } else {
    if ($(window).scrollTop() < 150) {
      $(".navbar").css('position', 'relative');
    } else {
      $(".navbar").css('position', 'fixed');
    }
  }
}); //Why Us

$('.why-us-icon-container').mouseenter(function () {
  $('.why-us-card-content .why-us-card').hide();
  $('#' + $(this).parent().data('target')).fadeIn('slow');
}); //Homepage

$('.place-order-button').click(function () {
  console.log($(this));
  $('#place-order-modal-form').find('input[name="item_name"]').val($(this).data('name'));
  $('#PlaceOrderModalLabel').html($(this).data('modal-title'));
  $('#limited-edition-modal-images').html($(this).parent().find('div.limited-images-list').html());
}); //Owl Carousel Options

$('.full-width-carousel-with-nav').owlCarousel({
  autoplayHoverPause: true,
  singleItem: true,
  items: 1,
  dots: true,
  autoplay: true,
  autoplayTimeout: 5000,
  loop: true,
  mouseDrag: true,
  nav: true,
  navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
  pagination: true,
  responsiveRefreshRate: 200,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});
$('.full-width-carousel').owlCarousel({
  autoplayHoverPause: true,
  singleItem: true,
  items: 1,
  dots: true,
  autoplay: true,
  autoplayTimeout: 10000,
  loop: true,
  mouseDrag: true,
  pagination: true,
  responsiveRefreshRate: 200,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});
$('.multi-items-carousel').owlCarousel({
  autoplayHoverPause: true,
  loop: true,
  margin: 50,
  nav: false,
  responsive: {
    0: {
      items: 1
    },
    800: {
      items: 2
    },
    1000: {
      items: 3
    },
    1400: {
      items: 4
    }
  }
});
$('.three-items-carousel').owlCarousel({
  autoplayHoverPause: true,
  loop: false,
  margin: 100,
  nav: true,
  navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
});
$('.categories-modal-toggler').click(function () {
  $('.sub-categories-list li').removeClass('active');
  $('.category-images-list').removeClass('active');
  $('.sub-categories-list').each(function () {
    $(this).find('li:first-child').addClass('active');
    $('.category-modal').each(function () {
      $(this).find('ul:first-child').addClass('active');
    });
  });
}); //Homepage Categories Filters

$('.sub-categories-list li').click(function () {
  $('.sub-categories-list li').removeClass('active');
  $(this).addClass('active');
  $('.category-images-list').removeClass('active');
  $('#' + $(this).data('target')).addClass('active');
}); //Homepage Video Call to Action

$('#homepage-play-video-1,#homepage-play-video-2').click(function () {
  if ($(this).attr('id') == 'homepage-play-video-1') {
    $('body').append("\n    <div class=\"full-width-video\">\n    <div class=\"content-part\">\n      <h2 class=\"text-white\">Luxurious cabinets & pergolas</h2>\n      <p class=\"text-white\">Could your kitchen use a makeover? Our creative design team is known for pushing the market in terms of design variety and innovation, constantly creating new designs. When creating a kitchen, we keep in mind the people spending the most time in it</p>\n      <a class=\"icon-button youtube-button d-lg-inline d-none\" href=\"https://www.youtube.com/watch?v=Jf1MzF_yKw4\" target=\"_blank\"><i class=\"fab fa-youtube\"></i> Watch on YouTube</a>\n    </div>\n    <div class=\"video-part\">\n        <a href=\"javascript:;\" id=\"video-close-button\"><i class=\"fas fa-times\"></i></a>\n        <iframe src=\"https://www.youtube.com/embed/BNBKAmk72us\"  frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n    </div>\n    </div>\n    ").css('overflow', 'hidden');
  } else if ($(this).attr('id') == 'homepage-play-video-2') {
    $('body').append("\n    <div class=\"full-width-video\">\n      <div class=\"content-part\">\n        <h2 class=\"text-white\">Kitchen, floor\u2026 and more</h2>\n        <p class=\"text-white\">The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood and engineered wood to make your life more comfortable.</p>\n        <a class=\"icon-button youtube-button d-lg-inline d-none\" href=\"https://www.youtube.com/watch?v=BNBKAmk72us\" target=\"_blank\"><i class=\"fab fa-youtube\"></i> Watch on YouTube</a>\n      </div>\n      <div class=\"video-part\">\n        <a href=\"javascript:;\" id=\"video-close-button\"><i class=\"fas fa-times\"></i></a>\n        <iframe src=\"https://www.youtube.com/embed/Jf1MzF_yKw4\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n    </div>\n    </div>\n    ").css('overflow', 'hidden');
  } //Insert the elemnt into the dom


  $(document).on('click', '#video-close-button , .full-width-video', function (e) {
    $('.full-width-video').remove();
    $('body').css('overflow-y', 'scroll');
  });
}); //Contact Form Submit

$('#submit-contact-form').click(function (e) {
  //Change to loading state
  e.preventDefault();
  $(this).html('<i class="fas fa-spinner fa-spin"></i> Send');
  $('.response-message').remove();
  var ActionRoute = $(this).data('target');
  var Data = $(this).parent().parent().parent().serialize();
  var That = $(this);
  $.ajax({
    method: 'POST',
    url: ActionRoute,
    data: Data,
    success: function success(response) {
      $('<p class="response-message text-success mb-0 mt-3">' + response + '</p>').insertAfter(That);
      That.html('<i class="fas fa-paper-plane"></i> Send');
    },
    error: function error(response) {
      $('<p class="response-message text-danger mb-0 mt-3">' + response.responseText + '</p>').insertAfter(That);
      That.html('<i class="fas fa-paper-plane"></i> Send');
    }
  });
}); //Back to top
//Show the Back to Top Button

$(window).scroll(function () {
  var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

  if (scrollPercent > 15) {
    //Show the Button after 50% of the page
    $("#back-to-top").css('right', '50px').css('transition', 'all ease .6s');
  } else {
    $("#back-to-top").css('right', '-100px').css('transition', 'all ease .6s');
  }
}); //Back to top action

$("#back-to-top").click(function () {
  $("body,html").animate({
    scrollTop: 0
  }, 800);
}); //Disable Right Click on Images

$("img").on("contextmenu", function () {
  return false;
});
$('[data-fancybox]').fancybox({
  toolbar: true,
  smallBtn: true,
  loop: true,
  protect: true,
  iframe: {
    preload: false
  },
  buttons: ["zoom", "slideShow", "fullScreen", "thumbs", "close"]
}); //smooth scroll

(function () {
  'use strict'; // define variables

  var items = document.querySelectorAll(".timeline li"); // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport

  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  } // listen for events


  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})(); //Counter


$(window).scroll(function () {
  var top_of_element = $(".our-achievements").offset().top;
  var bottom_of_element = $(".our-achievements").offset().top + $(".our-achievements").outerHeight();
  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
  var top_of_screen = $(window).scrollTop();

  if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
    $('.counter').countTo();
  }
});

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/scss/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /var/www/html/woodcourt/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /var/www/html/woodcourt/resources/scss/app.scss */"./resources/scss/app.scss");


/***/ })

/******/ });