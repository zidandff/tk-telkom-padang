

// effect PARALLAx
$(window).on('load',function () {
    $('.teks-carousel, .judul-carousel').addClass('muncul');
})


$(window).scroll(function () {
    let wScroll = $(this).scrollTop();


    // carousel & hero
    $('.banner-ppdb h2').css({
        'transform' : 'translate(0px, '+ wScroll/15 +'%)'
    })

    $('.banner-ppdb h5').css({
        'transform' : 'translate(0px, '+ wScroll/10 +'%)'
    })

    $('.carousel-item img').css({
        'transform' : 'translate(0px, '+ wScroll/7 +'%)'
    })

    $('.judul-carousel').css({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'
    })

    $('.teks-carousel').css({
        'transform' : 'translate(0px, '+ wScroll/1.5 +'%)'
    })

    // Profil
    if ( wScroll > $('.card-profil').offset().top -350) {
        $('.card-profil').addClass('muncul');
    }
    
    if ( wScroll > $('.card-profil2').offset().top -400) {
        $('.card-profil2').addClass('muncul');
    }

    if (wScroll > $('.visi').offset().top -300) {
        $('.visi').addClass('muncul')
    }

    if (wScroll > $('.misi').offset().top -300) {
        $('.misi').addClass('muncul')
    }

    // program 
    if ( wScroll > $('.program-deck').offset().top -400) {
        $('.card-deck').each(function (i) {
            setTimeout(function () {
                $('.card-deck').eq(i).addClass('muncul');
            }, 400 * i )
        })
    }
// console.log($('.panel').offset().top);
// console.log(wScroll);

})