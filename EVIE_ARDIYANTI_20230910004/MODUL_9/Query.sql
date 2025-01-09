 CREATE DATABASE db_alumni;
 INSERT INTO alumni (nama, tahun_lulus, jurusan, foto)
VALUES ('Andi Saputra', 2020, 'Teknik Informatika', 'andi.jpg'),
('Budi Santoso', 2019, 'Sistem INformasi', 'budi.jpg');
CREATE TABLE bukutamu(
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100) NOT NULL,
email VARCHAR (100),
tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP);