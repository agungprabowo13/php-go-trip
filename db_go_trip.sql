-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 10:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_go_trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_locations`
--

CREATE TABLE `tb_locations` (
  `id` int(11) NOT NULL,
  `link` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `image_article` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `text_article` longtext NOT NULL,
  `visitor` int(11) NOT NULL,
  `visit_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_locations`
--

INSERT INTO `tb_locations` (`id`, `link`, `title`, `location`, `price`, `image`, `image_article`, `language`, `text_article`, `visitor`, `visit_time`) VALUES
(1, '', 'Ulun Danu', 'Bali, Indonesia', 2500000, 'ulun-danu.png', 'ulun-danu-article.png', 'English, Indonesia, Balinese', 'Pura Ulun Danu Bratan, Pura Ulun Danu Beratan atau Bratan Pura merupakan sebuah pura dan candi air besar di Bali, Indonesia - candi utama air lainnya menjadi Pura Ulun Danu Batur. Kompleks candi ini terletak di tepi barat laut Danau Bratan di pegunungan dekat Bedugul, Kabupaten Tabanan. Candi air memenuhi seluruh wilayah di daerah aliran; di tepi hilir ada banyak candi kecil air yang spesifik untuk setiap asosiasi irigasi (subak). Candi ini sebenarnya digunakan untuk upacara persembahan untuk dewi Dewi Danu, dewi air, danau dan sungai. Danau Bratan merupakan salah satu danau penting dalam hal irigasi. Danau Bratan dikenal sebagai danau \"gunung suci\", kawasan ini sangat subur, terletak pada ketinggian 1.200 meter, dan beriklim sangat dingin.', 7, 3),
(2, '', 'Rialto Bridge', 'Venezia,Italy', 7500000, 'rialto-bridge.png', 'rialto-bridge-article.png', 'Italy, English', 'Jembatan Rialto (bahasa Italia: Ponte di Rialto; bahasa Venesia: Ponte de Rialto) adalah salah satu dari empat jembatan yang menyeberangi Kanal Besar Venesia di Italia. Jembatan ini merupakan jembatan tertua yang menyeberangi kanal tersebut dan memisahkan distrik San Marco dengan San Polo.Struktur yang menjadi sarana penyeberangan darat pertama di Kanal Besar adalah sebuah jembatan ponton yang didirikan pada tahun 1181 oleh Nicolò Barattieri. Jembatan tersebut dijuluki Ponte della Moneta karena adanya tempat pembuatan uang logam di dekat pintu masuk timur', 9, 6),
(3, '', 'Dubai', 'Uni Emirates Arab', 25500000, 'dubai.png', 'dubai-article.jpg', 'Arab, English', 'Dubai (Arab: دبي, translit. Dubayy [dʊˈbajj]) adalah kota terpadat di negara Uni Emirat Arab dan merupakan ibukota Emirat Dubai. Kota ini terletak di sepanjang pantai tenggara Jazirah Arab dan di selatan teluk Persia, Kotamadya Dubai disebut Kota Dubai untuk membedakannya dari Emirat Dubai. Dubai adalah salah satu tujuan pariwisata paling populer di dunia.[5] Kota ini memiliki hotel bintang lima terbanyak kedua di dunia[6] dan juga bangunan tertinggi di dunia, Burj Khalif', 17, 10),
(5, '', 'Manarola', 'Manarola, Italy', 5500000, 'Manarola.png', 'manarola-article.png', 'English, Italy', 'Manarola is one of the most romantic villages of Cinque Terre. Discover this beautiful village and choose from our unique selection of charming Airbnbs in Manarola.\r\n\r\nYou will also find some high quality hotels in Manarola, providing a relaxing atmosphere and spectacular ocean views.\r\n\r\nIf you are traveling with family, or a group of friends, renting an apartment can be a better option. Here you will find a list of the best rated apartments in Manarola based on their location and customer reviews', 9, 6),
(6, '', 'Eiffel Tower', 'Paris, France', 15500000, 'Eiffel.png', 'eiffel-article.png', 'France, English', 'The Eiffel Tower (/ˈaɪfəl/ EYE-fəl; French: Tour Eiffel [tuʁ ɛfɛl] ⓘ) is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer Gustave Eiffel, whose company designed and built the tower from 1887 to 1889.\r\n\r\nLocally nicknamed \"La dame de fer\" (French for \"Iron Lady\"), it was constructed as the centerpiece of the 1889 World\'s Fair, and to crown the centennial anniversary of the French Revolution. Although initially criticised by some of France\'s leading artists and intellectuals for its design, it has since become a global cultural icon of France and one of the most recognisable structures in the world.[4] The tower received 5,889,000 visitors in 2022.[5] The Eiffel Tower is the most visited monument with an entrance fee in the world:[6] 6.91 million people ascended it in 2015. It was designated a monument historique in 1964, and was named part of a UNESCO World Heritage Site (\"Paris, Banks of the Seine\") in 1991', 7, 9),
(7, '', 'Hurawalhi', 'Hurawalhi Maldives', 11500000, 'Hurawalhi.png', 'hurawalhi-article.png', 'English', 'Set on an enchanting private island in the pristine Lhaviyani Atoll in the Maldives, Hurawalhi Island Resort is much like your relationship: it is a perfect match of serenity and excitement, comfort and adventure; it stirs up your every atom with an intricate blend of intimacy and thrill.\r\n\r\nIt is at Hurawalhi that you can fill your days with an unsparing amount of extraordinaires, your mind with wonder, and your heart with romance. The 90-villa, adults-only luxury resort is as brilliant as the ocean that laps against its beaches and more magnificent than any island you have visited. You can swoon over photos of the Maldives, but nothing will prepare you for the beautiful blend of barefoot bliss and contemporary design found at Hurawalhi.\r\n\r\nAt Hurawalhi, you can just be in the moment, be who you are, embrace genuine connections and cherish inner balance unimpeded by outside demands.', 9, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_services`
--

CREATE TABLE `tb_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_services`
--

INSERT INTO `tb_services` (`id`, `title`, `description`, `image`) VALUES
(1, 'Tell us what you want to do', 'Fill out a 2-minute questionaire about how you like to travel', 'images/service-1.png'),
(2, 'Share your travel preference', 'It all happends online, We recommend everything to your vision', 'images/service-2.png'),
(3, 'We’ll give you recommendations', 'Once you’re happy with your final plan, We handle everything for you', 'images/service-2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_locations`
--
ALTER TABLE `tb_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_services`
--
ALTER TABLE `tb_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_locations`
--
ALTER TABLE `tb_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_services`
--
ALTER TABLE `tb_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
