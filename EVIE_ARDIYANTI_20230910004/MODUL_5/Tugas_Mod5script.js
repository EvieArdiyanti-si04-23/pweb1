$(document).ready(function(){
    // Efek fade-in untuk gambar saat halaman dimuat
    $('.gallery-img').fadeIn(1000); // Menampilkan gambar dengan efek fade-in

    // Menampilkan alumni saat gambar diklik
    $('.gallery-img').click(function() {
        var imageSrc = $(this).attr('src');
        $('#alumniImage').attr('src', imageSrc); // Set src gambar di alumni
        $('#alumni').fadeIn(300); // Tampilkan alumni
    });

    // Menutup alumni saat tombol close atau area luar gambar diklik
    $('.close').click(function() {
        $('#alumni').fadeOut(300); // Sembunyikan alumni
    });

    // Menutup alumni jika area luar gambar diklik
    $('#alumni').click(function(e) {
        if ($(e.target).is('#alumni')) {
            $(this).fadeOut(300); // Sembunyikan alumni
        }
    });
});