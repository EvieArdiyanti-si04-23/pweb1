$(document).ready(function(){
    //1. dasar selektor
    $('#header').css('teks-align', 'center');//mengubah align text pada header
    $('li').css('margin', '5px');//memberi margin pada semua <li>
    //2. selektor atribut
    $('img[alt="Alumni Photo 1"]').css('border', '2px solid red');//mengubah border pada gambar dengan alt + "alumni photo1"
    //3.selektor hirarki
    $('alumniList li').css('font-size', '18px');//mengubah font size pada semua alumni <li> pada #alumniList
    //4. selektor filter
    $('li:even').css('color', 'blue');//mengubah warna teks pada elemen <li> genap
    $('.featured').addClass('highlight');//menambahkan class hightlight pada elemen dengan class featured
    //Event handling untuk galeri footo
    $('.gallery img').on('click', function(){;
    var src = $(this).attr('src');
    $('#modalimage').attr('src', 'src');
    $('#myModal').fadeIn();
    });
    $('.modal.close').on('click', function();{
        $('#myModal').fadeOut();
    });
    $(window).on('click', function(event));{
        if ($(Event.target).is('#myModal')){
            $('#myModal').fadeOut();
        }
    }
}