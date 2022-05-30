// AJAX (LIVE SEARCHING)
// Ambil elemen yang dibutuhkan

// Variabel
// tolong carikan element id bernama keyword yang ada didocument
// jika ketemu nanti masuk ke variabel keyword
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// Tambahkan event ketika keyword diketik
keyword.addEventListener("keyup", function () {
  // buat object AJAX
  var xhr = new XMLHttpRequest();

  // cek kesiapan AJAX
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open("GET", "ajax/stock-gadget.php?keyword=" + keyword.value, true);
  // menjalankan AJAX
  xhr.send();
});

// const hapusModal = document.querySelector("#hapusModal");
function hapusModal() {
  alert("tombol hapus diklik");
}
