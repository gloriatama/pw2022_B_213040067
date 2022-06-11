-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_b_213040067`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_status` tinyint(4) DEFAULT NULL,
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_status`, `product_image`) VALUES
(1, 2, 'High Heels with high qualities', 280000, '<ul>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>\r\n	<li>\r\n	<p>Lorem, ipsum dolor&nbsp;consectetur adipisicing elit.</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem, ipsum dolor sit&nbsp;adipisicing elit.</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem,&nbsp;amet consectetur adipisicing elit.</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem, ipsum dolor.</p>\r\n	</li>\r\n</ul>\r\n', 1, 'produk1654603292.jpg'),
(8, 3, 'Flat Shoes', 320000, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quisquam fugiat deleniti laboriosam laborum corporis, voluptatem quod quo.</p>\r\n', 1, 'produk1654603256.jpg'),
(9, 1, 'Red Sneakers', 450000, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quisquam fugiat deleniti laboriosam laborum corporis, voluptatem quod quo.</p>\r\n', 1, 'produk1654408880.jpg'),
(10, 1, 'Grey sneakers', 550000, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quisquam fugiat deleniti laboriosam laborum corporis, voluptatem quod quo.</p>\r\n', 1, 'produk1654430037.jpg'),
(11, 1, 'Air Jordan 1 Elevate Low SE', 1200000, '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias eius est consequatur dolorem inventore. Sapiente, rem distinctio impedit ab repellendus illo doloribus a dolorum nihil.</p>\r\n', 1, 'produk1654429012.jpg'),
(12, 1, 'Black Sneaker', 2200000, '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia ipsum eaque fugiat suscipit distinctio. Animi, veritatis est! Accusantium, nobis mollitia. Consectetur laboriosam consequuntur quam aut, ullam odit cupiditate expedita iusto iste, labore repellendus tenetur veritatis.</p>\r\n', 1, 'produk1654428998.jpg'),
(13, 1, 'White Sneaker', 1800000, '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia ipsum eaque fugiat suscipit distinctio. Animi, veritatis est! Accusantium, nobis mollitia. Consectetur laboriosam consequuntur quam aut, ullam odit cupiditate expedita iusto iste, labore repellendus tenetur veritatis.</p>\r\n', 1, 'produk1654428974.jpg'),
(14, 1, 'Sport sneaker', 1600000, '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia ipsum eaque fugiat suscipit distinctio. Animi, veritatis est! Accusantium, nobis mollitia. Consectetur laboriosam consequuntur quam aut, ullam odit cupiditate expedita iusto iste, labore repellendus tenetur veritatis.</p>\r\n', 1, 'produk1654430161.jpg'),
(15, 3, 'flat flat', 350000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654431408.jpg'),
(16, 3, 'blue flat shoe', 235000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654603000.jpg'),
(17, 3, 'oriental ballet flat shoe', 320000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654577800.jpg'),
(19, 3, 'best black shoe', 350000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654432763.jpg'),
(20, 2, 'white bright', 1200000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654603080.jpg'),
(21, 2, 'black heel', 555000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654433639.jpg'),
(22, 2, 'blue fancy heel', 870000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654433653.jpg'),
(23, 2, 'elegance', 2300000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654433671.jpg'),
(24, 2, 'white black diamond heel', 980000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654433687.jpg'),
(25, 2, 'pair hills', 480000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654433702.jpg'),
(26, 2, 'red brave heels', 670000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654433800.jpg'),
(27, 7, 'leather boot', 950000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654525694.jpg'),
(28, 7, 'purple velvet boot', 2100000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654602904.jpg'),
(29, 7, 'heeled boot shoe', 2650000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654577661.jpg'),
(30, 7, 'craig', 1000000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654526342.jpg'),
(31, 7, 'leather boots', 550000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654526353.jpg'),
(32, 7, 'autumn boot', 1500000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654577471.jpg'),
(33, 4, 'A Pair of Brown Oxford Shoe', 1900000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654578101.jpg'),
(34, 4, 'Brown Leather Lace Up', 3000000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 1, 'produk1654578119.jpg'),
(35, 9, 'wedge shoe', 500000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nulla hic. Accusamus delectus quo nam veritatis dolor nesciunt sit quaerat? Optio odit atque voluptatem voluptas nesciunt velit quo, aut libero dolorem fuga adipisci, sed ducimus deleniti vero? Debitis, expedita aspernatur.</p>\r\n', 0, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
