$.owl = function(target) {
    if (target.length > 0) {
        target.each(function() {
            var el = $(this),
                dataAuto = el.data('owl-auto'),
                dataLoop = el.data('owl-loop'),
                dataSpeed = el.data('owl-speed'),
                dataGap = el.data('owl-gap'),
                dataNav = el.data('owl-nav'),
                dataDots = el.data('owl-dots'),
                dataAnimateIn = el.data('owl-animate-in'),
                dataAnimateOut = el.data('owl-animate-out'),
                dataDefaultItem = el.data('owl-item'),
                dataItemXS = el.data('owl-item-xs'),
                dataItemSM = el.data('owl-item-sm'),
                dataItemMD = el.data('owl-item-md'),
                dataItemLG = el.data('owl-item-lg'),
                dataNavLeft = el.data('owl-nav-left'),
                dataNavRight = el.data('owl-nav-right');

            el.owlCarousel({
                animateIn: dataAnimateIn,
                animateOut: dataAnimateOut,
                margin: dataGap,
                autoplay: dataAuto,
                autoplayTimeout: dataSpeed,
                autoplayHoverPause: true,
                loop: dataLoop,
                nav: dataNav,
                mouseDrag: true,
                touchDrag: true,
                navText: [dataNavLeft, dataNavRight],
                dots: dataDots,
                items: dataDefaultItem,
                responsive: {
                    0: {
                        items: dataItemXS
                    },
                    480: {
                        items: dataItemSM
                    },
                    768: {
                        items: dataItemMD
                    },
                    992: {
                        items: dataItemLG
                    },
                    1200: {
                        items: dataDefaultItem
                    }
                }
            });
        });
    }
}

$.sync = function(main, thumbnail, duration) {
    var flag = false;
    var target = thumbnail.find('.owl-item');
    target.first().addClass('current');
    main.on('changed.owl.carousel', function(e) {
        thumbnail.find('.owl-item').removeClass('current');
        thumbnail.find('.owl-item').eq(e.item.index).addClass('current');
        if (!flag) {
            flag = true;
            thumbnail.trigger('to.owl.carousel', [e.item.index, duration, true]);
            flag = false;
        }
    });
    thumbnail.on('click', '.owl-item', function() {
        main.trigger('to.owl.carousel', [$(this).index(), duration, true]);

    }).on('changed.owl.carousel', function(e) {
        if (!flag) {
            flag = true;
            main.trigger('to.owl.carousel', [e.item.index, duration, true]);
            flag = false;
        }
    });
}

$(function() {
    $.owl($('.owl-slider'));
    $.sync($('.primary'), $('.second'), 1000);
    $.sync($('.ps-cake-detail'), $('.ps-cake-list'), 1000);
});