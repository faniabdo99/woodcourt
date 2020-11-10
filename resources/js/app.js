/*
  Project Name: The WoodCourt
  Author: Picturate.ME
*/
//Owl Carousel Options
$('.full-width-carousel').owlCarousel({
    singleItem: true,
    items: 1,
    dots: true,
    slideSpeed: 1000,
    mouseDrag: true,
    nav: false,
    pagination: true,
    responsiveRefreshRate: 200
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
var $grid = $('.products-isotope').isotope({
    itemSelector: '.single-product',
    getSortData: {
        category: '[data-category]'
    },
    masonry: {
       columnWidth: '.grid-sizer'
     }
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
