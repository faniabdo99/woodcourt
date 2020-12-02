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
        800: {
            items: 2
        },
        1000: {
            items: 3
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
});
// init Isotope
// init Isotope
var $container = $('.products-isotope').isotope({
       itemSelector: '.single-product',
       transitionDuration: '0.5s',
       masonry: {
          columnWidth: '.grid-sizer'
       }
});
//****************************
// Isotope Load more button
//****************************
var initShow = 8; //number of images loaded on init & onclick load more button
var counter = initShow; //counter for load more button
var iso = $container.data('isotope'); // get Isotope instance
loadMore(initShow); //execute function onload
function loadMore(toShow) {
  $container.find(".d-none").removeClass("d-none");
  var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
    return item.element;
  });
  $(hiddenElems).addClass('d-none');
  $container.isotope('layout');
  //when no more to load, hide show more button
  if (hiddenElems.length == 0) {
    $("#load-more").hide();
  }
else {
    $("#load-more").show();
  };
}

//when load more button clicked
$("#load-more").click(function() {
  if ($('#filters').data('clicked')) {
    //when filter button clicked, set initial value for counter
    counter = initShow;
    j$('#filters').data('clicked', false);
  } else {
    counter = counter;
  };

  counter = counter + initShow;

  loadMore(counter);
});




$container.isotope( 'reveal', iso.items );
imagesLoaded(iso, function(){
    iso.layout();
});

// filter functions
var filterFns = {
    // show if name ends with -ium
    ium: function() {
        var name = $(this).find('.name').text();
        return name.match(/ium$/);
    }
};
// bind filter button click
$('#filters').on('click', 'button', function() {
    $("#filters button").removeClass('is-checked');
    $(this).addClass('is-checked');
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $container.isotope({
        filter: filterValue
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
$('#homepage-play-video').click(function() {
    //Insert the elemnt into the dom
    $('body').append(`
    <div class="full-width-video">
      <div>
        <a href="javascript:;" id="video-close-button"><i class="fas fa-times"></i></a>
        <iframe src="https://drive.google.com/file/d/1dt5umysEEIUj_QNFQoPGozRzhPjVn_hF/preview"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    `).css('overflow', 'hidden');
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
  if (scrollPercent > 70) { //Show the Button after 50% of the page
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
//Data Tables
// $('#data-table').DataTable({
//    dom: 'Bfrtip',
//    buttons: [
//        { extend: 'copy', text: '<i class="fas fa-copy"></i> Copy to clipboard', className: "datatables-button copy-content"},
//        { extend: 'excel', text: '<i class="fas fa-file-excel"></i> Export to Excel', className: "datatables-button excel-export"}
//    ]
// });
