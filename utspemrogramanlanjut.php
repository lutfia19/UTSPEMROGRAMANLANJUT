<?php
// Menentukan nilai maksimum
$max = 8;

// Membuat tabel dengan header
echo "<table border='1'>";
echo "<tr><th>Ganjil</th><th>Genap</th></tr>";

// Menggunakan perulangan for untuk menampilkan data
for ($i = 1; $i <= $max; $i++) {
    // Jika $i adalah ganjil, maka buat baris baru dan tampilkan $i di kolom ganjil
    if ($i % 2 == 1) {
        echo "<tr><td>$i</td>";
    }
    // Jika $i adalah genap, maka tampilkan $i di kolom genap dan tutup baris
    else {
        echo "<td>$i</td></tr>";
    }
}

// Menutup tabel
echo "</table>";
?>

<?php
// Membuat variabel untuk menyimpan angka maksimal
$max = 5;

// Membuat tabel dengan dua kolom
echo "<table border='1'>";
echo "<tr><th>Ganjil</th><th>Genap</th></tr>";

// Membuat perulangan dari 1 sampai angka maksimal
for ($i = 1; $i <= $max; $i++) {
  // Membuat baris baru untuk setiap iterasi
  echo "<tr>";
  // Mengecek apakah angka saat ini ganjil atau genap
  if ($i % 2 == 1) {
    // Jika ganjil, menampilkan angka di kolom pertama
    echo "<td>$i</td>";
    // Meninggalkan kolom kedua kosong
    echo "<td></td>";
  } else {
    // Jika genap, meninggalkan kolom pertama kosong
    echo "<td></td>";
    // Menampilkan angka di kolom kedua
    echo "<td>$i</td>";
  }
  // Menutup baris
  echo "</tr>";
}
// Menutup tabel
echo "</table>";
?>