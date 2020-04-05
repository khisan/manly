-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2020 pada 05.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manly`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about`
--

CREATE TABLE `tb_about` (
  `id_about` int(11) NOT NULL,
  `gambar_header` varchar(50) NOT NULL,
  `judul_deskripsi_1` varchar(100) NOT NULL,
  `isi_deskripsi_1` text NOT NULL,
  `gambar_deskripsi_1` varchar(50) NOT NULL,
  `judul_deskripsi_2` varchar(50) NOT NULL,
  `isi_deskripsi_2` text NOT NULL,
  `gambar_deskripsi_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_about`
--

INSERT INTO `tb_about` (`id_about`, `gambar_header`, `judul_deskripsi_1`, `isi_deskripsi_1`, `gambar_deskripsi_1`, `judul_deskripsi_2`, `isi_deskripsi_2`, `gambar_deskripsi_2`) VALUES
(1, 'bg-01.jpg', 'Our Story', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris diam, sollicitudin vel rutrum non, sollicitudin ultrices enim. Ut aliquet euismod justo ac interdum. Donec est lacus, facilisis et ex ac, ornare ultrices neque. Proin lobortis nunc sem. Sed dictum velit neque, in hendrerit nunc hendrerit vel. In viverra tellus ullamcorper, bibendum metus at, mattis velit. Sed ut ipsum molestie, tristique eros nec, pharetra neque. Maecenas imperdiet aliquam odio. Fusce vehicula tempor velit, eget venenatis tortor accumsan eget. Proin eu nisi id mi commodo placerat. Proin convallis tellus magna, quis aliquet purus aliquam et. Quisque egestas in elit at tristique. Maecenas id posuere nulla. Quisque dictum interdum nisl, eu tempus velit dapibus sit amet.', 'about-01.jpg', 'Our Mission', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris diam, sollicitudin vel rutrum non, sollicitudin ultrices enim. Ut aliquet euismod justo ac interdum. Donec est lacus, facilisis et ex ac, ornare ultrices neque. Proin lobortis nunc sem. Sed dictum velit neque, in hendrerit nunc hendrerit vel. In viverra tellus ullamcorper, bibendum metus at, mattis velit. Sed ut ipsum molestie, tristique eros nec, pharetra neque. Maecenas imperdiet aliquam odio. Fusce vehicula tempor velit, eget venenatis tortor accumsan eget. Proin eu nisi id mi commodo placerat. Proin convallis tellus magna, quis aliquet purus aliquam et. Quisque egestas in elit at tristique. Maecenas id posuere nulla. Quisque dictum interdum nisl, eu tempus velit dapibus sit amet.', 'about-02.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_blog` int(11) NOT NULL,
  `gambar_header` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_blog`
--

INSERT INTO `tb_blog` (`id_blog`, `gambar_header`) VALUES
(1, 'bg-02.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_home`
--

CREATE TABLE `tb_home` (
  `id_home` int(11) NOT NULL,
  `favicon` varchar(100) NOT NULL,
  `logo_header` varchar(100) NOT NULL,
  `caption_1` varchar(50) NOT NULL,
  `caption_2` varchar(50) NOT NULL,
  `caption_3` varchar(50) NOT NULL,
  `image_slider_1` varchar(100) NOT NULL,
  `image_slider_2` varchar(100) NOT NULL,
  `image_slider_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_home`
--

INSERT INTO `tb_home` (`id_home`, `favicon`, `logo_header`, `caption_1`, `caption_2`, `caption_3`, `image_slider_1`, `image_slider_2`, `image_slider_3`) VALUES
(2, 'logo_huruf_m.png', 'logo_1.png', 'capt 1', 'capt 2', 'capt 3', 'slide-01.jpg', 'slide-03.jpg', 'slide-04.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `slug_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `slug_kategori`) VALUES
(1, 'Fashion ', 'fashion'),
(2, 'Lifestyle', 'lifestyle');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(11) NOT NULL,
  `gambar_header` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `gambar_header`, `alamat`, `no_hp`, `email`) VALUES
(1, 'bg-02.jpg', 'Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US cuy', '6283833209437', 'contact@example.com cuy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(11) NOT NULL,
  `judul_post` varchar(250) NOT NULL,
  `konten_post` longtext NOT NULL,
  `gambar_post` varchar(200) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_kategori_post` int(11) NOT NULL,
  `id_tags_post` int(11) NOT NULL,
  `post_status` int(11) NOT NULL COMMENT '1=Publish,0=Unpublish'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `judul_post`, `konten_post`, `gambar_post`, `tanggal_post`, `id_kategori_post`, `id_tags_post`, `post_status`) VALUES
(25, 'Full Stack Developer', '                                                                                                                        <p class=\"stext-117 cl6 p-b-26\" xss=\"removed\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.</p><p class=\"stext-117 cl6 p-b-26\" xss=\"removed\">Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate</p>                                                                                                              ', 'blog-05.jpg', '2020-02-12 22:23:08', 2, 7, 1),
(26, 'Front End Developer', '                                                                                                                        <p class=\"stext-117 cl6 p-b-26\" xss=\"removed\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.</p><p class=\"stext-117 cl6 p-b-26\" xss=\"removed\">Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate</p>                                                                                                              ', 'about-02.jpg', '2020-02-12 21:40:47', 1, 3, 1),
(27, 'Backend Developer', '                                                                        <p class=\"stext-117 cl6 p-b-26\" xss=\"removed\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.</p><p class=\"stext-117 cl6 p-b-26\" xss=\"removed\">Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate</p>                                                                  ', 'blog-032.jpg', '2020-02-12 21:40:59', 2, 4, 1),
(28, 'coba desc pos cuy', '                                                                                                                        <p>Sed sapien turpis, bibendum vel arcu id, pharetra dignissim magna. Nullam faucibus risus et sapien aliquam faucibus. Ut posuere, mi ut mattis imperdiet, magna est dictum elit, eu convallis odio risus fringilla urna. Quisque facilisis lorem vitae purus rutrum, rutrum vehicula dui sodales. Mauris aliquet nisi ut velit fringilla mollis. Suspendisse ligula nibh, ultrices id nulla eget, posuere molestie tellus. Fusce tempor pretium erat. Duis nisi risus, rhoncus ac gravida at, venenatis vitae nisl. Maecenas fermentum justo augue, vel finibus neque ullamcorper vitae. Maecenas pretium, urna ut pharetra rutrum, massa turpis gravida orci, et consequat tellus justo eget nunc. In bibendum lorem quis mattis interdum. Praesent scelerisque ligula felis. Integer auctor ultrices erat, nec pretium erat pharetra non. In lorem urna, ornare vel aliquam eget, mattis sit amet velit. Pellentesque malesuada non massa quis maximus.<br></p>                                                                                                              ', 'about-plan.jpg', '2020-03-06 08:39:56', 1, 4, 1),
(29, '5 Tips Memilih Kemeja Pria', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;Kemeja adalah fashion item wajib untuk pria, udah gak jamannya lagi ke mana-mana (apalagi kencan) hanya menggunakan kaos oblong, kecuali kamu masih ingusan. Gimana sih cara memilih kemeja yang tepat? Tenang, harganya tidak akan jatuh mahal selama Anda pandai mencarinya.</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><br></span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">1. Pas di badan&nbsp;</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;Perhatikan jahitan sambungan di pundak, secara umum apabila pas di ujung bahu, artinya kemeja itu pas buat kamu. Jangan gunakan kemeja yang kebesaran karena itu tidak menunjukkan otoritas, seakan-akan kemeja kamu dibelikan oleh mama. Karena ibu seringkali membelikan pakaian yang kebesaran untuk anaknya agar bisa dipakai lebih lama. Tapi kamu sudah DEWASA! Jadi carilah yang pas dengan ukuran tubuhmu, misalnya yang berpotongan fit atau muscle fit.</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><br></span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">2. Bahan</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;Pilih kemeja dengan campuran bahan katun dengan poliester. Katun menyerap keringat, poliester membuat kemeja gak gampang kusut dan mudah disetrika. Kemeja berbahan poliester murni bahkan gak perlu disterika sama sekali, tapi cenderung panas ketika dipakai dan gak menyerap keringat.</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><br></span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">3. Warna</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;Usahakan memiliki kemeja berwarna gelap dan terang. Warna gelap untuk acara formal seperti meeting dan kondangan, warna terang untuk acara semi-formal dan kasual. Bisa saja ketika kencan memakai warna gelap, tapi kesannya gak santai dan cenderung serius. Pemakaian warna cerah di acara formal lebih pas ketika dipadankan dengan sweater rajutan atau jas berwarna gelap.</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><br></span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;Hindari warna coklat muda, karena kamu akan terlihat seperti pegawai kelurahan. Hindari juga motif sarung. Secara umum ini adalah kemeja kotak-kotak, tapi dengan motif dan warna yang gak berbeda dengan sarung atau taplak meja. Biar aman, carilah kemeja dengan motif kotak-kotak kecil atau pattern yg gak mencolok.</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><br></span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">4. Kombinasi</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;Setiap pria harus punya kemeja lengan pendek dan lengan panjang. Lengan panjang lebih fleksibel, ketika ingin lebih santai, lengan dapat digulung. Kemeja lengan pendek, walaupun berwarna gelap, tetap saja sifatnya kasual.</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><br></span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">5. Jumlah</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;Empat adalah angka jumlah kemeja yang wajib dimiliki. Dua kemeja lengan panjang masing-masing warna gelap dan terang, dan dua kemeja lengan pendek. Tentunya kamu tidak mau dalam seminggu memakai satu kemeja yang sama kan?</span></div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;Guys, jangan malas untuk mengupgrade penampilan karena berbanding lurus dengan penghargaan terhadap diri kamu sendiri. People do judge a book by its cover, and the cover reflects what’s on the inside. Cinta dari mata turun ke hati. Kalo di mata aja udah nggak enak, bagaimana bisa turun ke hati? =]</span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><br></span></div><div style=\"text-align: justify; \"><span style=\"font-family: Gotham-Medium;\" comic=\"\" sans=\"\" ms\";\"=\"\" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">Source : https://kelascinta.com/men/fashion-pria/lima-tips-memilih-kemeja-pria</span></div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', 'WhatsApp_Image_2020-03-20_at_16_07_59_(1)1.jpeg', '2020-03-21 03:55:14', 1, 7, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `foto_produk` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `tanggal_post`, `nama_produk`, `harga_produk`, `deskripsi_produk`, `stok_produk`, `foto_produk`) VALUES
(26, '2020-02-27 10:10:14', 'coba 1', 512000, '                                                                                                                                                                        &lt;p class=&quot;stext-117 cl6 p-b-26&quot; xss=&quot;removed&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.&lt;/p&gt;&lt;p class=&quot;stext-117 cl6 p-b-26&quot; xss=&quot;removed&quot;&gt;Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate&lt;/p&gt;                                                                                                                                                          ', 2, 'product-01.jpg'),
(27, '2020-02-27 10:09:14', 'coba 2', 625780, '                                                <p class=\"stext-117 cl6 p-b-26\" xss=\"removed\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.</p><p class=\"stext-117 cl6 p-b-26\" xss=\"removed\">Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate</p>                                            ', 4, 'product-07.jpg'),
(28, '2020-03-10 07:31:58', 'coba 3', 475810, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris diam, sollicitudin vel rutrum non, sollicitudin ultrices enim. Ut aliquet euismod justo ac interdum. Donec est lacus, facilisis et ex ac, ornare ultrices neque. Proin lobortis nunc sem. Sed dictum velit neque, in hendrerit nunc hendrerit vel. In viverra tellus ullamcorper, bibendum metus at, mattis velit. Sed ut ipsum molestie, tristique eros nec, pharetra neque. Maecenas imperdiet aliquam odio. Fusce vehicula tempor velit, eget venenatis tortor accumsan eget. Proin eu nisi id mi commodo placerat. Proin convallis tellus magna, quis aliquet purus aliquam et. Quisque egestas in elit at tristique. Maecenas id posuere nulla. Quisque dictum interdum nisl, eu tempus velit dapibus sit amet.', 4, 'product-04.jpg'),
(29, '2020-03-05 10:41:43', 'coba 4', 400000, '                                                                        <p>coba</p>                                                                  ', 2, 'product-05.jpg'),
(30, '2020-03-06 08:25:30', 'coba 5', 220000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae turpis lacinia, fringilla neque in, congue magna. Nullam fringilla id metus sed convallis. Mauris justo tortor, venenatis at laoreet vel, condimentum sed lorem. Proin non odio vel nisl malesuada bibendum. Nullam egestas ultrices arcu sed gravida. Nulla bibendum turpis at dui fermentum, quis placerat lorem cursus. Sed eget ultricies lectus. Sed rutrum vestibulum mauris. Curabitur efficitur magna ac egestas dapibus.                                              ', 3, 'product-02.jpg'),
(32, '2020-03-05 11:56:00', 'coba harga', 300000, '                                                                                                <p>djdcjdnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnkdscmdccdddddddddddcccccccccccccccccccccczcccccccccccccccdjnmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm<br></p>                                                                                        ', 10, 'product-071.jpg'),
(33, '2020-03-09 12:36:08', 'coba produk', 220000, '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis vehicula justo, id sodales elit finibus vitae. Nullam ut diam semper, scelerisque lectus eu, suscipit turpis. Integer a erat sed arcu fringilla semper. Phasellus quis vulputate arcu. Phasellus finibus auctor neque, vitae pulvinar ipsum egestas vitae. Sed pharetra eros sagittis, viverra magna sed, sollicitudin orci. Pellentesque in quam ut nisl cursus vehicula. Integer finibus sapien in est scelerisque dignissim. Duis sit amet semper dolor.</span><br></p>', 4, 'product-13.jpg'),
(34, '2020-03-09 14:29:31', 'acs', 500000, '<p>adssa</p>', 2, 'product-08.jpg'),
(35, '2020-03-09 14:29:55', 'sadas', 60000, '<p>adsa</p>', 1, 'product-09.jpg'),
(36, '2020-03-09 14:30:29', 'sdfds', 50000, '<p>dfsd</p>', 5, 'product-10.jpg'),
(37, '2020-03-09 14:30:51', 'asdas', 80000, '<p>sadas</p>', 4, 'product-11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tags`
--

CREATE TABLE `tb_tags` (
  `id_tag` int(11) NOT NULL,
  `nama_tag` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tags`
--

INSERT INTO `tb_tags` (`id_tag`, `nama_tag`) VALUES
(3, 'Teknologi '),
(4, 'Kesehatan'),
(7, 'Tips  ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `foto`) VALUES
(1, 'administrator ', 'admin ', '81dc9bdb52d04dc20036dbd8313ed055', 'profile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `tb_home`
--
ALTER TABLE `tb_home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_tags`
--
ALTER TABLE `tb_tags`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_home`
--
ALTER TABLE `tb_home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_tags`
--
ALTER TABLE `tb_tags`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
