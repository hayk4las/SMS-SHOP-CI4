-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2025 pada 16.06
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtugasakhir_0023`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_keluar` varchar(20) NOT NULL,
  `imei_hp` varchar(16) NOT NULL,
  `id_customer` varchar(10) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_keluar`, `imei_hp`, `id_customer`, `tanggal_keluar`) VALUES
('FK001', '138234879123765', 'P001', '2025-01-02'),
('FK002', '357324648301728', 'P002', '2025-01-10'),
('FK003', '392847560192873', 'P005', '2025-01-04'),
('FK004', '493820175238479', 'P003', '2025-01-08'),
('FK005', '493862740192836', 'P003', '2025-01-17'),
('FK006', '526739085012365', 'P013', '2025-01-15'),
('FK007', '526739085014569', 'P012', '2025-01-03'),
('FK008', '637291504785112', 'P019', '2025-01-17'),
('FK009', '734829172384679', 'P016', '2025-01-09'),
('FK010', '827364910283746', 'P010', '2025-01-08'),
('FK011', '827364910283873', 'P001', '2025-01-15');

--
-- Trigger `barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `simpan_imei_terjual` AFTER INSERT ON `barang_keluar` FOR EACH ROW BEGIN
    -- Simpan imei_hp ke tabel sementara
    INSERT INTO temp_hapus_imei (imei_hp)
    VALUES (NEW.imei_hp);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_masuk` varchar(20) NOT NULL,
  `imei_hp` varchar(16) NOT NULL,
  `id_supplier` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_masuk`, `imei_hp`, `id_supplier`, `tanggal_masuk`) VALUES
('FM002', '493820175238479', 'SUP002', '2025-01-02'),
('FM003', '526739085012365', 'SUP003', '2025-01-03'),
('FM004', '928347659124563', 'SUP004', '2025-01-10'),
('FM005', '637291504785112', 'SUP005', '2025-01-04'),
('FM006', '138234879123765', 'SUP006', '2025-01-04'),
('FM007', '493862740192836', 'SUP007', '2025-01-09'),
('FM008', '392847560192873', 'SUP008', '2025-01-11'),
('FM009', '982374659102736', 'SUP009', '2025-01-09'),
('FM010', '827364910283746', 'SUP010', '2025-01-10'),
('FM011', '827364910283873', 'SUP016', '2025-01-07'),
('FM012', '526739085014569', 'SUP003', '2025-01-07'),
('FM013', '734829172384679', 'SUP012', '2025-01-05'),
('FM014', '293847563928746', 'SUP006', '2025-01-06'),
('FM015', '738947562039483', 'SUP014', '2025-01-07'),
('FM016', '827364710283746', 'SUP015', '2025-01-08'),
('FM017', '828374950238736', 'SUP016', '2025-01-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(10) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `telepon`) VALUES
('P001', 'Andi Setiawan', '081234567890'),
('P002', 'Budi Santoso', '081234512345'),
('P003', 'Citra Lestari', '081278945612'),
('P004', 'Dewi Anggraini', '081334567812'),
('P005', 'Eko Prasetyo', '081245678901'),
('P006', 'Fitriani Putri', '081267894561'),
('P007', 'Gilang Saputra', '081298745612'),
('P008', 'Hendra Kurniawan', '081367845679'),
('P009', 'Intan Permatasari', '081312456789'),
('P010', 'Joko Widodo', '081378945612'),
('P011', 'Kartini Ayu', '081334556677'),
('P012', 'Lestari Sari', '081223344556'),
('P013', 'Maya Sari', '081245676789'),
('P014', 'Niko Pratama', '081356789123'),
('P015', 'Oka Dharmawan', '081378934512'),
('P016', 'Putri Melati', '081345612378'),
('P017', 'Rizky Maulana', '081267845612'),
('P018', 'Siti Aisyah', '081378934567'),
('P019', 'Taufik Hidayat', '081389123456'),
('P020', 'Umar Faruq', '081245612378'),
('P021', 'Ruben Amorim', '089505694657'),
('P022', 'Haykal Aditya', '085602515454');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hp`
--

CREATE TABLE `hp` (
  `imei_hp` varchar(16) NOT NULL,
  `merk_hp` varchar(20) NOT NULL,
  `tipe_hp` varchar(50) NOT NULL,
  `memory_hp` varchar(50) NOT NULL,
  `warna_hp` varchar(25) NOT NULL,
  `harga_hp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hp`
--

INSERT INTO `hp` (`imei_hp`, `merk_hp`, `tipe_hp`, `memory_hp`, `warna_hp`, `harga_hp`) VALUES
('138234879123765', 'ASUS', 'Zenfone 9', '8GB/128GB', 'Hitam', 9000000),
('293847563928746', 'SONY', 'Sony Xperia 1', '8GB/128GB', 'Putih', 7000000),
('357324648301728', 'XIAOMI', 'Redmi Note 12', '8GB/128GB', 'Hitam', 3000000),
('392847560192873', 'HUAWEI', 'P50 Pro', '8GB/256GB', 'Silver', 11000000),
('493820175238479', 'REALME', 'Realme 11', '8GB/256GB', 'Biru', 4000000),
('493862740192836', 'NOKIA', 'Nokia X30 5G', '8GB/128GB', 'Abu-abu', 6000000),
('526739085012365', 'SAMSUNG', 'Galaxy S23', '8GB/128GB', 'Putih', 10000000),
('526739085014569', 'SAMSUNG', 'Galaxy S24 Ultra', '8GB/128GB', 'Silver', 12000000),
('637291504785112', 'VIVO', 'Vivo V23 5G', '12GB/256GB', 'Silver', 7000000),
('734829172384679', 'LG', 'LG V60', '8GB/128GB', 'Hitam', 5000000),
('738947562039483', 'BLACKBERRY', 'BlackBerry Key2', '6GB/64GB', 'Merah', 4500000),
('827364710283746', 'HTC', 'HTC U12+', '6GB/128GB', 'Biru', 4000000),
('827364910283746', 'GOOGLE', 'Pixel 7', '8GB/128GB', 'Putih', 9500000),
('827364910283873', 'IPHONE', 'Iphone 15', '8/128', 'Hitam', 12000000),
('828374950238736', 'APPLE', 'iPhone 13 Pro', '6GB/256GB', 'Black', 12000000),
('928347659124563', 'OPPO', 'F19 Pro', '8GB/128GB', 'Hijau', 5000000),
('982374659102736', 'LENOVO', 'Legion Phone 2', '16GB/512GB', 'Hitam', 15000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(15) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `email`, `telepon`, `alamat`) VALUES
('SUP001', 'XIAOMI', 'supplier@xiaomi.com', '081234567890', 'Jakarta'),
('SUP002', 'REALME', 'supplier@realme.com', '081234567891', 'Bandung'),
('SUP003', 'SAMSUNG', 'supplier@samsung.com', '081234567891', 'Bekasi'),
('SUP004', 'OPPO', 'supplier@oppo.com', '081234567892', 'Surabaya'),
('SUP005', 'VIVO', 'supplier@vivo.com', '081234567893', 'Yogyakarta'),
('SUP006', 'ASUS', 'supplier@asus.com', '081234567894', 'Medan'),
('SUP007', 'NOKIA', 'supplier@nokia.com', '081234567895', 'Bali'),
('SUP008', 'HUAWEI', 'supplier@huawei.com', '081234567896', 'Malang'),
('SUP009', 'LENOVO', 'supplier@lenovo.com', '081234567897', 'Solo'),
('SUP010', 'GOOGLE', 'supplier@google.com', '081234567898', 'Semarang'),
('SUP012', 'LG', 'supplier@lg.com', '081234567900', 'Makassar'),
('SUP013', 'SONY', 'supplier@sony.com', '081234567901', 'Denpasar'),
('SUP014', 'BLACKBERRY', 'supplier@blackberry.com', '081234567902', 'Tangerang'),
('SUP015', 'HTC', 'supplier@htc.com', '081234567903', 'Medan'),
('SUP016', 'APPLE', 'supplier@apple.com', '081234567904', 'Jakarta'),
('SUP017', 'ADVAN', 'supplier@advan.com', '087602356547', 'Pekalongan\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_hapus_imei`
--

CREATE TABLE `temp_hapus_imei` (
  `imei_hp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'haykal', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `imei_hp` (`imei_hp`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `imei_hp` (`imei_hp`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`imei_hp`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `temp_hapus_imei`
--
ALTER TABLE `temp_hapus_imei`
  ADD PRIMARY KEY (`imei_hp`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_3` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `barang_keluar_ibfk_4` FOREIGN KEY (`imei_hp`) REFERENCES `hp` (`imei_hp`);

--
-- Ketidakleluasaan untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `barang_masuk_ibfk_2` FOREIGN KEY (`imei_hp`) REFERENCES `hp` (`imei_hp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
