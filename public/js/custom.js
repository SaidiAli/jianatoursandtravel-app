$(document).ready(function() {
    $(".featured-cars-carousel").flickity({
        // options
        autoPlay: true,
        wrapAround: true,
        arrowShape: {
            x0: 10,
            x1: 60,
            y1: 30,
            x2: 70,
            y2: 40,
            x3: 30
        }
    });

    $(".selected-cars-carousel").flickity({
        // options
        autoPlay: true,
        wrapAround: true
    });

    $(".home-carousel").flickity({
        // options
        autoPlay: true,
        wrapAround: true,
        groupCells: true
    });

    // $(".home-hotels-carousel").flickity({
    //     // options
    //     autoPlay: true,
    //     wrapAround: true,
    //     groupCells: true
    // });

    $(".hotel-covers-carousel").flickity({
        // options
        autoPlay: true,
        wrapAround: true,
        groupCells: true
    });
});
