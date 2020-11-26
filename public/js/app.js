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
//Owl Carousel Options
$('.full-width-carousel').owlCarousel({
  singleItem: true,
  items: 1,
  dots: true,
  autoplay: true,
  autoplayTimeout: 10000,
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
  margin: 100,
  nav: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
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
}); // init Isotope

var grid = $('.products-isotope');
var jQuerygrid = $('.products-isotope').isotope({
  itemSelector: '.single-product',
  getSortData: {
    category: '[data-category]'
  },
  masonry: {
    columnWidth: '.grid-sizer'
  }
});
var iso = jQuerygrid.data('isotope');
jQuerygrid.isotope('reveal', iso.items);
imagesLoaded(grid, function () {
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
  grid.isotope({
    filter: filterValue
  });
}); //Homepage Categories Filters

$('.sub-categories-list li').click(function () {
  $('.sub-categories-list li').removeClass('active');
  $(this).addClass('active');
  $('.category-images-list').removeClass('active');
  $('#' + $(this).data('target')).addClass('active');
}); //Homepage Video Call to Action

$('#homepage-play-video').click(function () {
  //Insert the elemnt into the dom
  $('body').append("\n    <div class=\"full-width-video\">\n      <div>\n        <a href=\"javascript:;\" id=\"video-close-button\"><i class=\"fas fa-times\"></i></a>\n        <iframe src=\"https://drive.google.com/file/d/1dt5umysEEIUj_QNFQoPGozRzhPjVn_hF/preview\"  frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n    </div>\n    </div>\n    ").css('overflow', 'hidden');
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
}); //Data Tables

$('#data-table').DataTable({
  dom: 'Bfrtip',
  buttons: [{
    extend: 'copy',
    text: '<i class="fas fa-copy"></i> Copy to clipboard',
    className: "datatables-button copy-content"
  }, {
    extend: 'excel',
    text: '<i class="fas fa-file-excel"></i> Export to Excel',
    className: "datatables-button excel-export"
  }]
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