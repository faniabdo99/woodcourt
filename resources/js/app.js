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
});
// init Isotope
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
jQuerygrid.isotope( 'reveal', iso.items );
imagesLoaded(grid, function(){
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
    $grid.isotope({
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
//Data Tables
$('#data-table').DataTable({
   dom: 'Bfrtip',
   buttons: [
       { extend: 'copy', text: '<i class="fas fa-copy"></i> Copy to clipboard', className: "datatables-button copy-content"},
       { extend: 'excel', text: '<i class="fas fa-file-excel"></i> Export to Excel', className: "datatables-button excel-export"}
   ]
});
