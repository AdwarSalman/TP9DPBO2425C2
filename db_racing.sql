-- 1. Hapus database lama jika ada (biar bersih)
DROP DATABASE IF EXISTS mvp_tugas;

-- 2. Buat database baru
CREATE DATABASE mvp_tugas;

-- 3. Gunakan database tersebut
USE mvp_tugas;

-- 4. Buat Tabel PEMBALAP (Sesuai Modul)
CREATE TABLE `pembalap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tim` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

-- 5. Buat Tabel TIM (Untuk Tugas Tambahan)
CREATE TABLE `tim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tim` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `tahun_berdiri` int(4) NOT NULL,
  PRIMARY KEY (`id`)
);

-- 6. Isi Data Dummy Pembalap (Biar pas dibuka gak kosong)
INSERT INTO `pembalap` (`nama`, `asal`, `tim`) VALUES 
('Max Verstappen', 'Belanda', 'Red Bull Racing'),
('Lewis Hamilton', 'Inggris', 'Mercedes'),
('Charles Leclerc', 'Monako', 'Ferrari');

-- 7. Isi Data Dummy Tim
INSERT INTO `tim` (`nama_tim`, `negara`, `tahun_berdiri`) VALUES 
('Red Bull Racing', 'Austria', 2005),
('Mercedes', 'Jerman', 1954),
('Ferrari', 'Italia', 1929);