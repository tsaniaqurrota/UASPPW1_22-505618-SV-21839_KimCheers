# UASPPW1_22-505618-SV-21839_KimCheers
## Tsania Qurrota A'yunin Qulub
## WEBSITE KIMCHEERS!

Website KimCheers! merupakan sebuah website belajar korea secara onine.  KimCheers mengambil konsep self-study dimana user yang telah mengambil paket tertentu akan mendapatkan beberapa buku fisik, mengakses video pembelajaran, dan mendapatkan ebook serta audiobook berdasarkan paket atau level yang dipilih. Tujuan dibuatnya website ini dilatarbelakangi oleh banyaknya orang yang ingin belajar bahasa Korea namun bingung harus belajar dimana dan dimulai dari apa. KimCheers! menyusun kurikulum online yang sistemastis dan inovatif sehingga akan mudah diikuti oleh pemula sekalipun. Selain itu, website ini menyediakan fitur Article yang membuat pengunjung dapat membaca artikel mengenai Korea tanpa harus berlangganan paket tertentu. 

## FITUR
1) Home
2) My Learning Center
3) Courses
4) Article
5) Contact
   
## REQUIREMENT DASAR
1) Desain Rapi
   Website ini secara konsisten menggunakan warna #399FAC, #F5E86B, #F5F5F5, #ffffff, #494949, dan #000000. Selain itu secara keseluruhan menggunakan font berupa Poppins.
   
2) Website Responsive
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/ed87e6c1-3aa8-4557-9531-66cad0219645)
   Kode di bawah merupakan kode untuk header atau navbar. Saat layar berukuran besar atau fullsize maka list fitur akan tertulis kesamping, sedangkan semakin layarnya diperkecil, list fitur akan hilang dan berubah menjadi tanda di pojok kanan atas dimana ketika di klik akan menampilkan list fitur secara menurun ke bawah seperti gambar di atas.
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/2192ec47-30d0-417b-8afa-ba80602f8a68)
   
   Kode di bawah ini berfungsi untuk menampilkan beberapa card yang berisikan gambar serta tulisan. Saat layar normal, elemen tersebut tersusun 3 elemen perbaris, sedangkan saat layar kecil, akan berubah menjadi hanya 1 elemen perbarisnya.
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/a00fc211-b92f-4e9a-a8f8-c20eea04df58)

3) Direct Feedback

   Pada "Article" saat user memasukkan email kemudian klik "Subscribe" maka akan mendapatkan pesan alert seperti ini.
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/5a5658af-c5bd-48da-8ab7-93ea251ebd1d)

   Berikut merupakan kodenya.
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/3ec288c4-acaf-4349-9216-7057a3ba1c10)

   Setelah user masuk pada bagian checkout, ketika user klik "Cancel" maka akan ada pemberitahuan untuk memastikan apakah user yakin untuk meinggalkan halaman      checkout tersebut.
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/4ba6a726-0599-42b3-a720-0d5745af1f1f)

   Berikut merupakan kodenya.
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/31b488ac-efec-47df-8baf-b19be23ac611)


4) Dinamis Content  
   -Memasukkan data user yang telah "Sign Up"
    Saat user ingin membuka "My Learning Center" secara otomatis user akan diarahkan ke halaman login. User baru akan mengisikan data yag diminta lalu saat menekan "Sign Up" secara otomatis data masuk pada tabel "users" dalam database. Jika sudah melalukan registrasi sebelumnya, user dapat langsung login tanpa sign up lagi. Pada bagian login, jika semua data yang dimasukkan sesuai, maka akan langsung masuk pada "My Learning Center".
  
    Berikut ini adalah code yang digunakan :
    Login
    ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/2f0e37c7-c13c-49f1-b998-17d7c15109d0)
    Sign Up
    ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/8cda1301-fe90-4898-9c2f-9a243c8f4768)
    Log Out
    ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/f76b8af3-bc09-468b-a2d5-10adff32a8ef)

   -Mengambil data tutor dari database.
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/402dae93-8773-4970-a171-954bf9a7be4e)
   Pada tab home "with our tutor" data tutor diambil dari database tutor yang menyimpan data berupa link foto tutor, nama tutor, dan emailnya.
   
   Berikut ini merupakan code dan tabel yang digunakan :
   ### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/260a6ba3-fd97-4aba-b24c-cef568493584)

   Kode "$sql = "SELECT * FROM tutor";" tersebut digunakan untuk mengambil data dari tabel "tutor" di database. Halaman tersebut menampilkan daftar tutor dengan foto dan nama mereka dalam bentuk kolom yang responsif tergantung pada ukuran layar. Data tutor tersebut diulang menggunakan "while ($row = mysqli_fetch_assoc($all_tutor)) {}" untuk menampilkan setiap tutor dalam elemen div dengan class yang sesuai. 
   Untuk menampilkan foto tutor digunakan "<?php echo $row["photo"]; ?>", sedangkan <?php echo $row["tutor_name"]; ?> digunakan untuk menampilkan nama tutor.

   -Mengambil data course_package dari database.
   
### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/6d509239-3a3f-4292-bb15-2d029823a25b)

   Pada tab courses, terdapat berbagai paket course yang datanya diambil dari database package_course.
   Berikut ini merupakan code dan tabel yang digunakan :

### ![image](https://github.com/tsaniaqurrota/UASPPW1_22-505618-SV-21839_KimCheers/assets/133009115/502249ff-7c96-4b7f-9273-d7326a7a5d82)

  Halaman tersebut menampilkan paket kursus dengan detail seperti nama paket, level, harga, dan tombol "Checkout Now". Data paket kursus diambil menggunakan pernyataan SQL "SELECT * FROM Course_Package WHERE package_name = 'Platinum' LIMIT 3", yang artinya hanya akan diambil khusus paket dengan "package_name" platinum saja, setelah itu, akan diulang menggunakan"while ($row = mysqli_fetch_assoc($all_tutor)) {}" untuk menampilkan setiap paket dalam elemen div dengan class yang sesuai. Nama paket ditampilkan dengan "<?php echo $row["package_name"];?>", level paket dengan "<?php echo $row["level_name"];?>", dan harga paket dengan "<?php echo $row["price"];?>". Selain itu, terdapat juga "Info Paket" yang ditampilkan dengan kode "<?php echo $row["info"];?>", lalu yang dapat di klik untuk melihat informasi tambahan mengenai paket tersebut. 






   

   

