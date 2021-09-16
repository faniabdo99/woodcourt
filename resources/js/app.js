/*
  Project Name: The WoodCourt
  Author: Picturate.ME
*/
//Show Navbar Only on Scroll
$(window).scroll(function() {
    if($(window).width() > 992){
        if($(window).scrollTop() < 200 ){
          $(".navbar").css('position' ,'relative').css('top' , initial).css('transition' , 'all ease 0.3s');
        }
        $(".navbar").css('height' ,0).css('opacity' , 0).css('transition' , 'all ease 0.3s');
    if($(window).scrollTop() < 200){
      $(".navbar").css('position' ,'relative').css('top' , initial).css('transition' , 'all ease 0.3s');
    }
    $(".navbar").css('position' ,'fixed').css('top' , 0).css('height' ,60).css('opacity' , 1).css('transition' , 'all ease 0.3s');
  }else{
    if($(window).scrollTop() < 150){
      $(".navbar").css('position' ,'relative');
    }else{
      $(".navbar").css('position' ,'fixed');
    }
  }
});
//Why Us
$('.why-us-icon-container').mouseenter(function(){
  $('.why-us-card-content .why-us-card').hide();
  $('#'+$(this).parent().data('target')).fadeIn('slow');
});
//Homepage
$('.place-order-button').click(function(){
    console.log($(this));
    $('#place-order-modal-form').find('input[name="item_name"]').val($(this).data('name'));
    $('#PlaceOrderModalLabel').html($(this).data('modal-title'));
    $('#limited-edition-modal-images').html($(this).parent().find('div.limited-images-list').html());
});
//Owl Carousel Options
$('.full-width-carousel-with-nav').owlCarousel({
    autoplayHoverPause:true,
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
    autoplayHoverPause:true,
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
    autoplayHoverPause:true,
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
    autoplayHoverPause:true,
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
$('.categories-modal-toggler').click(function(){
  $('.sub-categories-list li').removeClass('active');
  $('.category-images-list').removeClass('active');
  $('.sub-categories-list').each(function(){
    $(this).find('li:first-child').addClass('active');
    $('.category-modal').each(function(){
      $(this).find('ul:first-child').addClass('active');
    });
  });
});
//Homepage Categories Filters
$('.sub-categories-list li').click(function() {
    $('.sub-categories-list li').removeClass('active');
    $(this).addClass('active');
    $('.category-images-list').removeClass('active');
    $('#' + $(this).data('target')).addClass('active');
});
//Homepage Video Call to Action
$('.homepage-play-video').click(function() {
  if($(this).attr('id') == 'homepage-play-video-1'){
    $('body').append(`
    <div class="full-width-video">
    <div class="content-part">
      <h2 class="text-white">Luxurious cabinets & pergolas</h2>
      <p class="text-white">Could your kitchen use a makeover? Our creative design team is known for pushing the market in terms of design variety and innovation, constantly creating new designs. When creating a kitchen, we keep in mind the people spending the most time in it</p>
      <a class="icon-button youtube-button d-lg-inline d-none" href="https://www.youtube.com/watch?v=Jf1MzF_yKw4" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
    </div>
    <div class="video-part">
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/BNBKAmk72us"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
  }else if($(this).attr('id') == 'homepage-play-video-2'){
    $('body').append(`
    <div class="full-width-video">
      <div class="content-part">
        <h2 class="text-white">Kitchen, floor… and more</h2>
        <p class="text-white">The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood and engineered wood to make your life more comfortable.</p>
        <a class="icon-button youtube-button d-lg-inline d-none" href="https://www.youtube.com/watch?v=BNBKAmk72us" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
      </div>
      <div class="video-part">
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/Jf1MzF_yKw4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
  }else if($(this).attr('id') == 'homepage-play-video-3'){
    $('body').append(`
    <div class="full-width-video">
      <div class="content-part">
        <h2 class="text-white">Kitchen, floor… and more</h2>
        <p class="text-white">The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood and engineered wood to make your life more comfortable.</p>
        <a class="icon-button youtube-button d-lg-inline d-none" href="https://www.youtube.com/watch?v=EBKz4HCj9y8" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
      </div>
      <div class="video-part">
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/EBKz4HCj9y8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
  }else if($(this).attr('id') == 'homepage-play-video-4'){
    $('body').append(`
    <div class="full-width-video">
      <div class="content-part">
        <h2 class="text-white">Kitchen, floor… and more</h2>
        <p class="text-white">The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood and engineered wood to make your life more comfortable.</p>
        <a class="icon-button youtube-button d-lg-inline d-none" href="https://youtu.be/YkxYzmqYa0g" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
      </div>
      <div class="video-part">
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/YkxYzmqYa0g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
  }else if($(this).attr('id') == 'homepage-play-video-5'){
    $('body').append(`
    <div class="full-width-video">
      <div class="content-part">
        <h2 class="text-white">Kitchen, floor… and more</h2>
        <p class="text-white">The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood and engineered wood to make your life more comfortable.</p>
        <a class="icon-button youtube-button d-lg-inline d-none" href="https://youtu.be/0zM8mOaCKsg" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
      </div>
      <div class="video-part">
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/0zM8mOaCKsg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
  }else if($(this).attr('id') == 'homepage-play-video-6'){
    $('body').append(`
    <div class="full-width-video">
      <div class="content-part">
        <h2 class="text-white">Kitchen, floor… and more</h2>
        <p class="text-white">The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood and engineered wood to make your life more comfortable.</p>
        <a class="icon-button youtube-button d-lg-inline d-none" href="https://youtu.be/K0nhops9w-M" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
      </div>
      <div class="video-part">
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/K0nhops9w-M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
  }else if($(this).attr('id') == 'homepage-play-video-7'){
    $('body').append(`
    <div class="full-width-video">
      <div class="content-part">
        <h2 class="text-white">Kitchen, floor… and more</h2>
        <p class="text-white">The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood and engineered wood to make your life more comfortable.</p>
        <a class="icon-button youtube-button d-lg-inline d-none" href="https://youtu.be/zvGTKiSplH0" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
      </div>
      <div class="video-part">
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/zvGTKiSplH0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
  }else if($(this).attr('id') == 'homepage-play-video-8'){
    $('body').append(`
    <div class="full-width-video">
      <div class="content-part">
        <h2 class="text-white">Kitchen, floor… and more</h2>
        <p class="text-white">The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood and engineered wood to make your life more comfortable.</p>
        <a class="icon-button youtube-button d-lg-inline d-none" href="https://youtu.be/ktSSIegq2oY" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
      </div>
      <div class="video-part">
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/ktSSIegq2oY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
  }
    //Insert the elemnt into the dom
    $(document).on('click', '#video-close-button , .full-width-video', function(e) {
        $('.full-width-video').remove();
        $('body').css('overflow-y', 'scroll');
    });
});

//Contact Form Submit
$('#submit-contact-form').click(function(e) {
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
        success: function(response) {
            $('<p class="response-message text-success mb-0 mt-3">' + response + '</p>').insertAfter(That);
            That.html('<i class="fas fa-paper-plane"></i> Send');
        },
        error: function(response) {
            $('<p class="response-message text-danger mb-0 mt-3">' + response.responseText + '</p>').insertAfter(That);
            That.html('<i class="fas fa-paper-plane"></i> Send');
        }
    });
});

//Back to top
//Show the Back to Top Button
$(window).scroll(function() {
  var scrollPercent = 100 * $(window).scrollTop()/($(document).height() - $(window).height());
  if (scrollPercent > 15) { //Show the Button after 50% of the page
    $("#back-to-top").css('right', '50px').css('transition', 'all ease .6s');
  } else {
    $("#back-to-top").css('right', '-100px').css('transition', 'all ease .6s');
  }
});
//Back to top action
$("#back-to-top").click(function() {
  $("body,html").animate({
    scrollTop: 0
  }, 800);
});
//Disable Right Click on Images
$("img").on("contextmenu",function(){
    return false;
 });

 $('[data-fancybox]').fancybox({
	toolbar  : true,
	smallBtn : true,
  loop: true,
  protect: true,
	iframe : {
		preload : false
	},
  buttons: [
      "zoom",
      "slideShow",
      "fullScreen",
      "thumbs",
      "close"
    ],
});
//smooth scroll

(function() {
  'use strict';
  // define variables
  var items = document.querySelectorAll(".timeline li");
  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
  }

  function callbackFunc() {
      for (var i = 0; i < items.length; i++) {
          if (isElementInViewport(items[i])) {
              items[i].classList.add("in-view");
          }
      }
  }
  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})();

//Counter
$(window).scroll(function() {
  var top_of_element = $(".our-achievements").offset().top;
  var bottom_of_element = $(".our-achievements").offset().top + $(".our-achievements").outerHeight();
  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
  var top_of_screen = $(window).scrollTop();
  if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
      $('.counter').countTo();
  }
});
//Products Page Sidefilter
let CollapseSize;
if(screen.width > 768){
    CollapseSize = '-24%';
}else{
    CollapseSize = '-100%';
}
$('.close-sidepanel').click(function(){
    $('#'+$(this).data('target')).css('left' , CollapseSize);
});
$('#filters-sidepanel-trigger').click(function(){
    $('#'+$(this).data('target')).css('left' , '0');
});
//Experts Hub
$('.filter-items .main-category-filter').click(function() {
  //Hide all open uls
  $('.filter-items .main-category-filter').next('ul').slideUp('fast');
  //SHow the current selected one
  $(this).next('ul').slideDown();
});
$('.sub-category-filter, .filter-items .main-category-filter').click(function(e) {
  var id = $('#content-section');
  if (id.length === 0) {
      return;
  }
  e.preventDefault();
  var pos = (id.offset().top - 100);
  $('body, html').animate({
      scrollTop: pos
  }, 1000);
});

//Recive Outer Hook and Toggle Tab Using it
var getParams = function (url) {
  var params = {};
  var parser = document.createElement('a');
  parser.href = url;
  var query = parser.search.substring(1);
  var vars = query.split('&');
  for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split('=');
      params[pair[0]] = decodeURIComponent(pair[1]);
  }
  return params;
};
var UrlParamaters = getParams(window.location.href);
if ('tab' in UrlParamaters){
  //Show the requested tab and active the link in sidebar
  //Hide Wood Care
  $('#wood-care').removeClass('active');
  $('#floor-care').removeClass('active');
  $('#installation-methodology').removeClass('active');
  $('#engineered-floors').removeClass('active');
  $('#indoor-faqs').removeClass('active');
  //inactive wood care side links
  $('.main-category-filter').removeClass('active');
  $('.toturials-sublist').removeClass('toturials-sublist');
  $('.sub-category-filter').removeClass('active');
  //Show the requested tab and parent tab
  $('#'+UrlParamaters.tab).parent().parent().tab('show');
  $('#'+UrlParamaters.tab).tab('show');
  //Active the correct side panel links
  $('.sub-category-filter[href="#'+UrlParamaters.tab+'"]').addClass('active');
  $('.sub-category-filter[href="#'+UrlParamaters.tab+'"]').parent().parent().parent().find('a.main-category-filter').addClass('active');
  $('.sub-category-filter[href="#'+UrlParamaters.tab+'"]').parent().parent().addClass('toturials-sublist');
  //Scroll to content
  var id = $('#content-section');
  var pos = (id.offset().top - 200);
  $('body, html').animate({
      scrollTop: pos
  }, 1000);
}