# UASPPW1_22-505618-SV-21839_KimCheers

# WEBSITE KIMCHEERS!

Website KimCheers! merupakan sebuah website belajar korea secara onine.  KimCheers mengambil konsep self-study dimana user yang telah mengambil paket tertentu akan mendapatkan beberapa buku fisik, mengakses video pembelajaran, dan mendapatkan ebook serta audiobook berdasarkan paket atau level yang dipilih. Tujuan dibuatnya website ini dilatarbelakangi oleh banyaknya orang yang ingin belajar bahasa Korea namun bingung harus belajar dimana dan dimulai dari apa. KimCheers! menyusun kurikulum online yang sistemastis dan inovatif sehingga akan mudah diikuti oleh pemula sekalipun. Selain itu, website ini menyediakan fitur Article yang membuat pengunjung dapat membaca artikel mengenai Korea tanpa harus berlangganan paket tertentu. 

# FITUR
1) Home
2) My Learning Center
3) Courses
4) Article
5) Contact
   
# REQUIREMENT DASAR
1) Desain Rapi
   
   
2) Website Responsive
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/ed87e6c1-3aa8-4557-9531-66cad0219645)

### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/2192ec47-30d0-417b-8afa-ba80602f8a68)

### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/a00fc211-b92f-4e9a-a8f8-c20eea04df58)

4) Direct Feedback


Pada "Article" saat user memasukkan email kemudian klik "Subscribe" maka akan mendapatkan pesan alert seperti ini
### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/5a5658af-c5bd-48da-8ab7-93ea251ebd1d)


   
6) Dinamis Content
   
-Memasukkan data user yang telah "Sign Up"
  Saat user ingin membuka "My Learning Center" secara otomatis user akan diarahkan ke halaman login. User baru akan mengisikan data yag diminta lalu saat menekan "Sign Up" secara otomatis data masuk pada tabel     "users" dalam database. Jika sudah melalukan registrasi sebelumnya, user dapat langsung login tanpa sign up lagi. Pada bagian login, jika semua data yang dimasukkan sesuai, maka akan langsung masuk pada "My Learning Center".
  Berikut ini adalah code yang digunakan :
  Lo
  ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/2f0e37c7-c13c-49f1-b998-17d7c15109d0)


   
   -Mengambil data tutor dari database.
   Pada tab home "with our tutor" data tutor diambil dari database tutor yang menyimpan data berupa link foto tutor, nama tutor, dan emailnya.
   Berikut ini merupakan code dan tabel yang digunakan :
   

   
   Kode "$sql = "SELECT * FROM tutor";" tersebut digunakan untuk mengambil data dari tabel "tutor" di database. Halaman tersebut menampilkan daftar tutor dengan foto dan nama mereka dalam bentuk kolom yang responsif tergantung pada ukuran layar. Data tutor diambil menggunakan pernyataan SQL dan diulang menggunakan while "($row = mysqli_fetch_assoc($all_tutor)) {}" untuk menampilkan setiap tutor dalam elemen div dengan class yang sesuai. 
   Untuk menampilkan foto tutor digunakan "<?php echo $row["photo"]; ?>", sedangkan <?php echo $row["tutor_name"]; ?> digunakan untuk menampilkan nama tutor.

   -Mengambil data course_package dari database.
   Pada tab courses, terdapat berbagai paket course yang datanya diambil dari database package_course yang menyimpan data berupa
   Berikut ini merupakan code dan tabel yang digunakan :

### 

   
   Kode tersebut adalah tampilan HTML dengan penggunaan PHP untuk mengambil data dari tabel "Course_Package" di database. Halaman tersebut menampilkan paket kursus dengan detail seperti nama paket, tingkat kursus, harga, dan tombol "Checkout Now". Data paket kursus diambil menggunakan pernyataan SQL dengan batasan tertentu dan diulang menggunakan loop while untuk menampilkan setiap paket dalam elemen div dengan class yang sesuai. Terdapat juga tombol "Info Paket" yang dapat ditekan untuk melihat informasi tambahan mengenai paket tersebut. Informasi tambahan tersebut ditampilkan dengan menggunakan efek toggle collapse.






   

   

