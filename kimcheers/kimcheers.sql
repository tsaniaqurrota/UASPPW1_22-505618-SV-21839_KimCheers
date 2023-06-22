-- MEMBUAT TABEL

-- Table User
CREATE TABLE Users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(30),
  email VARCHAR(50),
  PASSWORD VARCHAR(20)
);

-- Table Tutor
CREATE TABLE tutor (
    tutor_id INT PRIMARY KEY AUTO_INCREMENT,
    photo VARCHAR(100),
    email VARCHAR(30), 
    tutor_name VARCHAR(100));

-- Table Paket Kursus
CREATE TABLE course_package (
    package_id INT PRIMARY KEY AUTO_INCREMENT,
    package_name VARCHAR(100),
    price VARCHAR(30), 
   	level_name VARCHAR(100),
    info VARCHAR(100));

-- Tabel Material
CREATE TABLE material (
    material_id INT PRIMARY KEY AUTO_INCREMENT,
    material VARCHAR (50),
    package_id INT,
    tutor_id INT,
    FOREIGN KEY (package_id) REFERENCES course_package(package_id),
  	FOREIGN KEY (tutor_id) REFERENCES Tutor(tutor_id)
);

-- Table Report
CREATE TABLE report ( 
    report_id INT PRIMARY KEY AUTO_INCREMENT, 
    NAME VARCHAR(100), 
    email VARCHAR(30), 
    SUBJECT VARCHAR(200), 
    message VARCHAR(500) );

-- Table Article
CREATE TABLE aricle (
    article_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (100),
    preview VARCHAR(200)
);

-- Table Checkout
CREATE TABLE checkout(
    NAME VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15),
    city VARCHAR (30),
    province VARCHAR (30),
    zip INT(6),
    address VARCHAR(200), 
    payment TEXT(10)
);



-- MEMASUKKAN DATA

-- Tutor
INSERT INTO Tutor(photo, tutor_name, email) 
VALUES 
('assets/ksj.jpg','Kim Seokjin','seokjinkim@gmail.com'),
('assets/yjh.jpg','Yoon Jeonghan','jeonghanyoon@gmail.com'),
('assets/iu.jpg','Lee Jieun','jieunlee@gmail.com'),
('assets/yoona.jpg','Im Yoona', 'yoonalim@gmail.com'),
('assets/kth.jpg','Kim Taehyung','taehyungkim@gmail.com'),
('assets/shk.jpg','Song Hyekyo','hyekyosong@gmail.com'),
('assets/csb.jpg','Choi Soobin','soobinchoi@gmail.com'),
('assets/ljh.jpg','Lee Jehoon','jehoonlee@gmail.com');


-- Course_Package
INSERT INTO course_package(package_name, level_name, price, info) 
VALUES 
('Basic', 'Beginner', 2500000, 'Full Access Lesson Video (1 year), Hangeul Master, 3 Textbook Beginner, 3 Workbook Beginner, Ebook + Audio Book, Quiz, Sertificate'),
('Basic', 'Beginner', 2750000, 'Full Access Lesson Video (1 year), Real-life Conversation Book, 3 Textbook Intermediate, 3 Workbook Intermediate, Ebook + Audio Book, Quiz, Sertificate'),
('Basic', 'Beginner', 2800000, 'Full Access Lesson Video (1 year), Real-life Conversation Book, Hangeul Master, 4 Textbook Advanced, 4 Workbook Advanced, Ebook + Audio Book, Quiz, Sertificate'),
('Standard', 'Beginner', 3550000,'Full Access Lesson Video (1 year), Hangeul Master, 3 Textbook Beginner, 3 Workbook Beginner, Writing Practice Book, Ebook + Audio Book, Quiz, Sertificate'),
('Standard', 'Intermediate', 3750000,'Full Access Lesson Video (1 year), Hangeul Master, 3 Textbook Intermediate, 3 Workbook Intermediate, Real-Conversation Book, Ebook + Audio Book, Quiz, Sertificate'),
('Standard', 'Advanced', 3900000,'Full Access Lesson Video (1 year), Hangeul Master, 4 Textbook Advanced, 4 Workbook Advanced, Real-Conversation Book, Ebook + Audio Book, Quiz, Sertificate'),
('Platinum', 'Beginner', 4500000,'Live Class (per week), Full Access Lesson Video (1 year), Hangeul Master, 3 Textbook Beginner, 3 Workbook Beginner, Real-Conversation Book, Writing Practice Book, Ebook + Audio Book, Quiz, Sertificate')
('Platinum', 'Intermediate', 2750000,'Live Class (per week), Full Access Lesson Video (1 year), Korean Idioms Book, 3 Textbook Intermediate, 3 Workbook Intermediate, Real-Conversation Book, Writing Practice Book, Ebook + Audio Book, Quiz, Sertificate'),
('Platinum', 'Advanced', 2750000,'Live Class (per week), Full Access Lesson Video (1 year), Korean Idioms Book, 4 Textbook Advanced, 4 Workbook Advanced, Real-Conversation Book, Writing Practice Book, Ebook + Audio Book, Quiz, Sertificate')
);



-- Article

INSERT INTO article (title, preview)
VALUES
    ('Nikmati Kelezatan Kimchi Fried Rice: Paduan Sempurna Rasa Korea', 'Merasakan kelezatan Kimchi Fried Rice, hidangan populer Korea yang menggabungkan rasa pedas dan asam dari kimchi dengan kelezatan nasi goreng...'),
    ('Daehakro: Distrik Teater yang Penuh Semangat di Seoul', 'Terjun ke dunia yang penuh semangat di Daehakro, distrik teater terkenal di Seoul. Ungkap sejarah yang kaya, pertunjukan yang memukau, dan atmosfer seni...'),
    ('Café Permainan Papan: Tempat Keseruan dan Bersosialisasi', 'Terlebur dalam dunia seru Café Permainan Papan, tempat di mana teman, keluarga, dan para penggemar permainan papan berkumpul untuk menikmati pengalaman bermain...'),
    ('Festival Panen: Perayaan Chuseok di Korea Selatan', 'Masuki perayaan yang penuh semangat dari Chuseok, Festival Panen Korea Selatan, di mana keluarga berkumpul untuk menghormati leluhur mereka dan mengungkapkan...'),
    ('Imjingak: Taman Pyeonghwanuri yang Mengirim Pesan Perdamaian', 'Jelajahi keindahan yang tenang dan simbolis dari Imjingak, sebuah taman yang didedikasikan untuk perdamaian dan reunifikasi di Semenanjung Korea...'),
    ('Noraebang: Menyalurkan Bintang Super Anda di Korea Selatan', 'Ambil mikrofon, siapkan suara Anda, dan rasakan dunia yang menggembirakan dari Noraebang, budaya karaoke yang dicintai di Korea Selatan...'),
    ('Stephanie''s Sweet Pancake (Hotteok): Lezatnya Kelezatan Korea untuk Pencinta Manis', 'Nikmati kelezatan yang menggoda dari Stephanie''s Sweet Pancake, atau Hotteok, makanan jalanan Korea yang terkenal dengan kulit yang renyah dan isian manis...'),
    ('Yongdu-am dan Yongyeon: Keajaiban Alam di Pulau Jeju', 'Berangkatlah dalam perjalanan yang indah ke Yongdu-am dan Yongyeon, dua keajaiban alam yang tersembunyi di pulau cantik Jeju...'),
    ('Dakgalbi: Menikmati Sensasi Pedas dari Ayam Goreng Korea', 'Siapkan selera Anda untuk petualangan kuliner yang pedas dengan Dakgalbi, hidangan Korea populer yang menggabungkan potongan ayam yang lezat...'),
    ('Pajeon: Petualangan Lezat ke Surga Pancake Korea', 'Nikmati kelezatan renyah namun gurih dari Pajeon, pancake Korea lezat yang diisi dengan berbagai bahan seperti makanan laut, daun bawang, dan kimchi...'),
    ('Ulleungdo: Permata Tersembunyi di Laut Timur', 'Melarilah ke keindahan tenang Ulleungdo, pulau terpencil yang merupakan surga tersembunyi di Laut Timur Korea Selatan...'),
    ('Bulgogi: Puncak Kebahagiaan Barbekyu Korea', 'Siapkan selera Anda untuk perjalanan yang menggugah selera melalui rasa Bulgogi, hidangan barbekyu Korea klasik yang menampilkan irisan daging sapi...'),
    ('Jeju Batdam: Mengungkap Misteri Para Penyelam Legendaris Jeju', 'Menyelam ke dalam dunia yang menarik dari Jeju Batdam, para penyelam legendaris wanita Jeju Island...'),
    ('Gat: Menjelajahi Keanggunan Abadi Topi Tradisional Korea', 'Ungkap keanggunan abadi dan makna budaya dari Gat, topi tradisional Korea yang telah dihormati oleh sarjana, pejabat, dan bangsawan...'),
    ('Yongsan Video Game Alley: Surga bagi Para Penggemar Game', 'Terjunlah ke dalam atmosfer yang memompa adrenalin di Yongsan Video Game Alley, pusat kegiatan yang ramai di Seoul...');

