

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `galeri` (`id`, `tgl_upload`, `nama`) VALUES
(1, '2020-07-20', 'food1.jpg'),
(2, '2020-07-20', 'food2.jpg'),
(3, '2020-07-20', 'food3.jpg'),
(4, '2020-07-20', 'food4.jpg'),
(5, '2020-07-20', 'food5.jpg'),
(6, '2020-07-20', 'food6.jpg'),
(7, '2020-07-20', 'food7.jpg'),
(8, '2020-07-20', 'food8.jpg'),
(9, '2020-07-20', 'food9.jpg'),
(10, '2020-07-20', 'food10.jpg');


ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

