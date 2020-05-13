// ambil elemen yang dibutuhkan

const keyword = document.querySelector('.keyword');
const container = document.querySelector('.tabel');

// tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
    
    // buat object ajax
    const xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ){
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/siswa.php?keyword=' + keyword.value, true);
    xhr.send();
} );

