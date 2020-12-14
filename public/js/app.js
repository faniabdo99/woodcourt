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
//Homepage
$('.place-order-button').click(function () {
  $('#place-order-modal-form').find('input[name="item_name"]').val($(this).data('name'));
}); //Owl Carousel Options

$('.full-width-carousel').owlCarousel({
  singleItem: true,
  items: 1,
  dots: true,
  autoplay: true,
  autoplayTimeout: 121515156152156,
  loop: true,
  mouseDrag: true,
  nav: false,
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
  loop: true,
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
}); //Homepage Categories Filters

$('.sub-categories-list li').click(function () {
  $('.sub-categories-list li').removeClass('active');
  $(this).addClass('active');
  $('.category-images-list').removeClass('active');
  $('#' + $(this).data('target')).addClass('active');
}); //Homepage Video Call to Action

$('#homepage-play-video-1,#homepage-play-video-2').click(function () {
  if ($(this).attr('id') == 'homepage-play-video-1') {
    $('body').append("\n    <div class=\"full-width-video\">\n    Video One\n      <div>\n        <a href=\"javascript:;\" id=\"video-close-button\"><i class=\"fas fa-times\"></i></a>\n        <iframe src=\"https://drive.google.com/file/d/1dt5umysEEIUj_QNFQoPGozRzhPjVn_hF/preview\"  frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n    </div>\n    </div>\n    ").css('overflow', 'hidden');
  } else if ($(this).attr('id') == 'homepage-play-video-2') {
    $('body').append("\n    <div class=\"full-width-video\">\n    Video Two\n      <div>\n        <a href=\"javascript:;\" id=\"video-close-button\"><i class=\"fas fa-times\"></i></a>\n        <iframe src=\"https://drive.google.com/file/d/1dt5umysEEIUj_QNFQoPGozRzhPjVn_hF/preview\"  frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n    </div>\n    </div>\n    ").css('overflow', 'hidden');
  } //Insert the elemnt into the dom


  $(document).on('click', '#video-close-button , .full-width-video', function (e) {
    $('.full-width-video').remove();
    $('body').css('overflow-y', 'scroll');
  });
});
$(window).scroll(function () {
  var top_of_element = $(".our-achievements").offset().top;
  var bottom_of_element = $(".our-achievements").offset().top + $(".our-achievements").outerHeight();
  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
  var top_of_screen = $(window).scrollTop();

  if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
    $('.counter').countTo();
  } else {// Hold
  }
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

  if (scrollPercent > 60) {
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
}); //Data Tables
// $('#data-table').DataTable({
//    dom: 'Bfrtip',
//    buttons: [
//        { extend: 'copy', text: '<i class="fas fa-copy"></i> Copy to clipboard', className: "datatables-button copy-content"},
//        { extend: 'excel', text: '<i class="fas fa-file-excel"></i> Export to Excel', className: "datatables-button excel-export"}
//    ]
// });

var $container = $('.products-isotope').isotope({
  itemSelector: '.single-product',
  transitionDuration: '0.5s',
  masonry: {
    columnWidth: '.grid-sizer'
  }
}); //****************************
// Isotope Load more button
//****************************

var initShow = 8; //number of images loaded on init & onclick load more button

var counter = initShow; //counter for load more button

var iso = $container.data('isotope'); // get Isotope instance

loadMore(initShow); //execute function onload

function loadMore(toShow) {
  $container.find(".d-none").removeClass("d-none");
  var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function (item) {
    return item.element;
  });
  $(hiddenElems).addClass('d-none');
  $container.isotope('layout'); //when no more to load, hide show more button

  if (hiddenElems.length == 0) {
    $("#load-more").hide();
  } else {
    $("#load-more").show();
  }

  ;
} //when load more button clicked


$("#load-more").click(function () {
  if ($('#filters').data('clicked')) {
    //when filter button clicked, set initial value for counter
    counter = initShow;
    j$('#filters').data('clicked', false);
  } else {
    counter = counter;
  }

  ;
  counter = counter + initShow;
  loadMore(counter);
});
$container.isotope('reveal', iso.items);
imagesLoaded(iso, function () {
  iso.layout();
}); // filter functions

var filterFns = {
  // show if name ends with -ium
  ium: function ium() {
    var name = $(this).find('.name').text();
    return name.match(/ium$/);
  }
}; // bind filter button click

$('#filters').on('click', 'button', function () {
  $("#filters button").removeClass('is-checked');
  $(this).addClass('is-checked');
  var filterValue = $(this).attr('data-filter'); // use filterFn if matches value

  filterValue = filterFns[filterValue] || filterValue;
  $container.isotope({
    filter: filterValue
  });
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

__webpack_require__(/*! C:\xampp\htdocs\woodcourt\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\woodcourt\resources\scss\app.scss */"./resources/scss/app.scss");


/***/ })

/******/ });