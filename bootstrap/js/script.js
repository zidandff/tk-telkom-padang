//  TOOLTIP
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
})

$('.navbar-nav a').css('color','white')


// merubah warna navbar jadi merah saat navbar toggler pada tampilan mobile
const tombol = document.querySelector('.navbar-toggler')
const putih = document.querySelector('.ubah');
tombol.addEventListener('click', function () {
    putih.style.backgroundColor = '#ffffff';
    putih.style.boxShadow = '0 0 10px black';
    $('.ubah').css('border-bottom', '2px solid #e4262c');
    $('.navbar-nav a').css('color','#e4262c');
    // #e4262c
})

// membuat navbar otomatis jadi merah saat di scroll

let scroll_start = 0;
let startchange = $('#change-it-now');
let offset = startchange.offset();

if (startchange.length) {
    $(document).scroll(function(){
        scroll_start = $(this).scrollTop();

        if (scroll_start>offset.top) {
            $('.ubah').css('transition','0.2s');
            $('.ubah').css('background-color', '#ffffff');
            $('.ubah').css('box-shadow', '0px 0px 8px rgba(0,0,0,0.5)');
            $('.ubah').css('border-bottom', '3px solid #e4262c');
            $('.navbar-nav a').css('color', '#e4262c');
        }else{
            $('.ubah').css('background-color', 'transparent');
            $('.ubah').css('box-shadow', '0 0 0 ');
            $('.ubah').css('border-bottom', 'none');
            $('.navbar-nav a').css('color', 'white');

        }
    })
}


// membuat efek scrolling 
// event pada saat navbar di click
$('.page-scroll').click(function(e) {

    // ambil isi href
    const tujuan = $(this).attr('href');
    // tangkap element yang bersangkutan
    const elementTujuan = $(tujuan);

    // pindahkan sccroll 
    $('html, body').animate({
        scrollTop: elementTujuan.offset().top -72
    },1500, 'easeInOutBack');

    e.preventDefault();
});

// navbar responsive buatan sendiri
//  ketika menu icon di click
$('.autoHide').hide();

$('.navbar-toggler').click(function () {
    $('.autoHide').slideToggle(function () {
        $('.collapse').show();
    })
});

// ketika link di click
$('.page-scroll').click(function () {
    $('.autoHide').slideUp();    
});

    // script menu responsif di admin page
    function openSlideMenu() {
        $('.sidebar').css('width','250px');
        $('.content').css('margin-left', '250px')
    }

    function closeSlideMenu() {
        $('.sidebar').css('width','0');
        $('.content').css('margin-left', '0')
    }



