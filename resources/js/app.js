/*
  Project Name: The WoodCourt
  Author: Picturate.ME
*/
$('.why-us-icon-container').mouseenter(function(){
  $('.why-us-card-content .why-us-card').hide();
  $('#'+$(this).parent().data('target')).fadeIn('slow');
});
//Homepage
$('.place-order-button').click(function(){
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
$('#homepage-play-video-1,#homepage-play-video-2').click(function() {
  if($(this).attr('id') == 'homepage-play-video-1'){
    $('body').append(`
    <div class="full-width-video">
      <div>
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/BNBKAmk72us"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
  }else if($(this).attr('id') == 'homepage-play-video-2'){
    $('body').append(`
    <div class="full-width-video">
      <div>
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://www.youtube.com/embed/Jf1MzF_yKw4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
$(window).scroll(function() {
    var top_of_element = $(".our-achievements").offset().top;
    var bottom_of_element = $(".our-achievements").offset().top + $(".our-achievements").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();
    var HasCounted = false;
    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
      if(!HasCounted){
        $('.counter').countTo();
      }
      HasCounted = true;

        return false;
    } else {
        return false;
    }
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
  if (scrollPercent > 60) { //Show the Button after 50% of the page
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
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
