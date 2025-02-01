// Mencetak angka 1 sampai 20
// Menggunakan perulangan for
// for (let i = 1; i <= 20; i++) {
//   console.log(i);
// }

// Mengunakan perulangan while
// let i = 1;
// while (i <= 20) {
//   console.log(i);
//   i++;
// }

// Mencetak bilangan ganjil 1 sampai 30
// for (let i = 1; i <= 30; i += 2) {
//   console.log(i);
// }

// Menghitung total penjumlahan angka 1 sampai 10
// let total = 0;
// for (let i = 1; i <= 10; i++) {
//   total += i;
// }
// console.log('Total: ' + total);

// Menampilkan tabel perkalian 7 dari 1 sampai 10
// let angka = 7;
// for (let i = 1; i <= 10; i++) {
//   console.log(`${angka} x ${i} = ${angka * i}`);
// }

// Mencetak pola segitiga bintang
// let tinggi = 5;
// for (let i = 1; i <= tinggi; i++) {
//   console.log('*'.repeat(i));
// }

// Menentukan apakah bilangan positif, negatif, atau nol
// let angka = parseInt(prompt('Masukkan sebuah angka: '));
// if (angka > 0) {
//   console.log('Angka Positif');
// } else if (angka < 0) {
//   console.log('Angka Negatif');
// } else {
//   console.log('Nol');
// }

// Menentukan nilai rapot
// let nilai = parseInt(prompt('masukkan nilai: '));

// if (nilai >= 80 && nilai <= 100) {
//   console.log('Nilai Anda: A');
// } else if (nilai >= 70) {
//   console.log('Nilai Anda: B');
// } else if (nilai >= 60) {
//   console.log('Nilai Anda: C');
// } else if (nilai >= 40) {
//   console.log('Nilai Anda: D');
// } else {
//   console.log('Anda Tidak Lulus');
// }

// Menentukan tahun kabisat
// let tahun = parseInt(prompt('Masukkan tahun:'));

// if ((tahun % 4 === 0 && tahun % 100 !== 0) || tahun % 400 === 0) {
//   console.log(tahun + ' adalah tahun kabisat');
// } else {
//   console.log(tahun + ' bukan tahun kabisat');
// }

// Mencetak bilangan prima
// let angka = parseInt(prompt('Masukkan angka:'));
// let prima = true;

// if (angka < 2) {
//   prima = false;
// } else {
//   for (let i = 2; i <= Math.sqrt(angka); i++) {
//     if (angka % i === 0) {
//       prima = false;
//       break;
//     }
//   }
// }

// if (prima) {
//   console.log(angka + ' adalah bilangan prima');
// } else {
//   console.log(angka + ' bukan bilangan prima');
// }
