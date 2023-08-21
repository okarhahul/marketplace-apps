$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
  });
});

/*
    kita ambil sebuah function baru dengan fungsi scroll,
    kemudian kita membuat variabel baru untuk menargetkan class yang dituju, pada kasus ini saya akan menargetkan "navbar-fixed-top",
    setelah fungsi dan target sudah ditentukan, maka selanjutkan kita bisa membuat kondisi, seperti yang sudah dituliskan kondisi tersebut akan berjalan ketika panjang dari scroll sudah melewati dari navigas
*/
