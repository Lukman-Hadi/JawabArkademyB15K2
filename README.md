# JawabArkademyB15K2
Jawaban Untuk Seleksi Arkademy 

Untuk file javascript 1 - 5, bisa dibuka / dicoba di https://es6console.com
## Soal No. 1
* Kegunaan JSON pada REST API adalah sebagai format untuk mengirim (sending) dan meminta (requesting) data pada REST API. Selain JSON format data transfer bisa berupa XML (eXtensible Markup Language) dan plain text, tetapi format data JSON lebih populer karena berukuran ringan dan formatnya lebih mudah untuk dibaca dan dimengerti.
## Soal No. 2
* Pada sebuah form, terdapat 2 buah field yaitu: username dan password. Buatlah method/function untuk memvalidasi field-field tersebut
## Soal No. 3
* Buatlah sebuah fungsi untuk membagi sebuah array pada parameter pertama menjadi sub sub array dengan isi masing-masing sub array sesuai parameter kedua. Ketentuan: sub array terakhir tidak boleh hanya berisi satu, kecuali parameter kedua bernilai 1.
## Soal No. 4
* Diketahui salah satu kode warna di komputer menggunakan Hex Code, yaitu 3/6 digit yang diawali pagar “#” dan merupakan kombinasi dari angka 0-9 dan/atau huruf A-F. Buatlah fungsi/method untuk memvalidasi input parameter yang diberikan merupakan kode hex yang valid atau tidak.
## Soal No. 5
* Buatlah sebuah fungsi/method yang hanya menerima parameter "string", lalu menentukan karakter apa saja yang berulang dan berapa banyak karakter yang berulang tersebut. Buatlah pengecekan parameter "Harus memasukan parameter dan harus string!" jika parameter tidak ada/bukan string!

## Soal No. 6a
* Buatlah database dengan tabel Product, Category, dan Cashier. Dalam tabel Product terdapat kolom id, name, price,  id_category, dan id_cashier. Di tabel Category hanya terdapat kolom id dan name. Sedangkan di tabel Cashier terdapat kolom id dan name
```
CREATE TABLE Category(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200)
)ENGINE=InnoDB;

CREATE TABLE Cashier(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200)
)ENGINE=InnoDB;

CREATE TABLE Product(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200),
    price INT,
    id_category INT,
    FOREIGN KEY (id_category) REFERENCES Category(id),
    id_cashier INT,
    FOREIGN KEY (id_cashier) REFERENCES Cashier(id)
)ENGINE=InnoDB;
```

>SELECT product.id, cashier.cashier_name, product.name, category.category_name, product.price FROM (product INNER JOIN cashier ON product.id_cashier=cashier.id) INNER JOIN category ON product.id_category=category.id;

## Soal No. 6B dan 6C
Disini saya menggunakan PHP framework laravel dan bootstrap CDN
untuk konfigurasinya ketikan perintah "php artisan key:generate" lalu "php artisan serve" untuk menjalankan aplikasi

Tampilan HOME
  ![tampilan home](https://github.com/Lukman-Hadi/JawabArkademyB15K2/blob/master/ss.png)

