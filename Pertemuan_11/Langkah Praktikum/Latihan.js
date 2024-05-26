// 1) Cara Membuat Variabel di Javascript
// membuat variabel dengan kata kunci var, let, dan const
var title = "Belajar Pemrograman Javascript";
let price = 15000;
const product = "Sepatu"

// membuat variabel tanpa awalan apapun
stock = 12


// 2) Menampilkan isi Variabel
console.log(product);
document.write(product);
alert(product)


// 3) Contoh variable javascript dalam HTML
// membuat variabel
var nama = "Petani Kode";
var visitorCount = 50322;
var isActive = true;
var url = "https://www.petanikode.com";

// menampilkan variabel ke jendela dialog (alert)
alert("Selamat datang di "+ nama);

// menampilkan variabel ke dalam HTML
document.write("Nama Situs: " + nama + "<br>");
document.write("Jumlah Pengunjung: "+ visitorCount + "<br>");
document.write("Status Aktif: " + isActive + "<br>");
document.write("Alamat URL: "+ url +"<br>");


// 4) Mengisi Ulang Variabel
// mula-mula kita buat variabel dengan isi seperti ini
var age = 18;
// lalu kita isi ulang
age = 21;


// 5) Menghapus Variabel
bookTitle = "Belajar Pemrograman Javascript" ;
delete bookTitle;


// 6) Otomatis mengenali tipe data
var name = "Dian" ;
var age = 22;
var single = true;

typeof name
typeof age
typeof single


// 7) Aturan Penulisan Nama Variabel
// Penamaan variabel tidak boleh menggunakan angka di depannya.
var 123nama = "Petanikode"
// Penamaan variabel boleh menggunakan awal underscore.
var _nama = "Petani Kode"
// Penamaan variabel dianjurkan menggunakan camelCase dan bahasa inggris
var fullName = "Petani Kode"



// 8) Jendela Dialog

// Jendela dialog alert();
alert("Hello Kawan")

// Jendela dialog confirm();
var yakin = confirm("Apakah kamu yakin akan meengunjungi petanikode?")
if (yakin) {
  window.location = "https://www.petanikode.com"
} else {
  document.write("Baiklah, tetap di sini saja ya :)") 
}

// Jendela dialog prompt()
var nama = prompt( "Siapa nama kamu ?" , "")
document. write ( "<p>Hello " + nama + "</p>")



// 9) Operator dalam JavaScript
// Operator Aritmatika
var a = 5
var b = 3
var c = a+b
console.log(c)

var a = "10" + "2"
console.log(a)



// Operator Penugasan (Assignment)
document.write("Mula-mula nilai score...<br/>")
// pengisian nilai
var score = 100;
document.write("score = "+ score + "<br/>");

// pengisian dan menjumlahan dengan 5
score += 5;
document.write("score = " + score + "<br/>");

// pengisian dan pengurangan dengan 2
score -= 2;
document.write("score = "+ score + "<br/>");

// pengisian dan perkalian dengan 2
score *= 2;
document.write("score = "+ score + "<br/>");

// pengisian dan pembagian dengan 4
score /= 4;
document.write("score = "+ score + "<br/>");

// pengisian dan pemangkatan dengan 2
score **=2
document.write("score = "+ score + "<br/>");

// pengisian dan modulo dengan 3;
score %= 3;
document .write("score = "+ score + "<br/>");



// Operator relasi atau perbandingan
var aku = 20;
var kamu = 19;

// sama dengan
var hasil = aku == kamu;
document.write(`${aku} == ${kamu} = ${hasil}<br/>`);

// lebih besar
var hasil = aku > kamu;
document.write(`${aku} > ${kamu} = ${hasil}<br/>`);

// lebih besar samadengan
var hasil = aku > kamu;
document.write(`${aku} >= ${kamu} = ${hasil}<br/>`);

// lebih kecil
var hasil = aku < kamu;
document.write(`${aku} < ${kamu} = ${hasil}<br/>`);

// lebih kecil samadengan
var hasil = aku <= kamu;
document.write(`${aku} <= ${kamu} = ${hasil}<br/>`);

// tidak samadengan
var hasil = aku != kamu;
document.write(`${aku} !=${kamu} = ${hasil}<br/>`);



//  Operator Logika
var aku = 20;
var kamu = 19;

var benar = aku > kamu;
var salah = aku < kamu;

// operator &8 (and)
var hasil = benar && salah;
document.write(`${benar} && ${salah} = ${hasil}<br/>`);

// operator || (or)
var hasil = benar || salah;
document.write(`${benar} || ${salah} = ${hasil}<br/>`);

// operator ! (not)
var hasil = !benar
document.write( `!${benar} = ${hasil}<br/>`);



// Operator Bitwise
var x = 4;
var y = 3;

// operator bitwise and
var hasil = x & y;
document.write(`${x} & ${y} = ${hasil}<br/>`);

// operator bitwise or
var hasil = x | y;
document.write(`${x} | ${y} = ${hasil}<br/>`);

// operator bitwise xor
var hasil = x ^ y;
document.write(`${x} ^ ${y} = ${hasil}<br/>`);

// operator negasi
var hasil = ~x;
document.write( `~${x} = ${hasil}<br/>`);

// operator bitwise right shift >>
var hasil = x >> y;
document.write(`${x} >> ${y} = ${hasil}<br/>`);

// operator bitwise right shift <<
var hasil = x << y;
document.write(`${x} << ${y} = ${hasil}<br/>`);

// operator bitwise right shift (unsigned) >>>
var hasil = x >>> y;
document.write(`${x} >>> ${y} = ${hasil}<br/>`);


// Operator Ternary
var pertanyaan = confirm("Apakah kamu berumur diatas 18 tahun?")

var hasil = pertanyaan ? "Selamat datang" : "Kamu tidak boleh di sini"
document.write(hasil);