-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2021 at 01:48 AM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Everything You Need To Know About Velocity', 'Velocity **is** a measure of how fast something moves in a particular direction. To define it needs both magnitude and direction. If an object moves east at 9 meters per second (9m/s), then its **velocity** is 9 m/s to the east.\r\n\r\nThe idea behind this is that speed doesn\'t tell us in which direction the object moves in a given frame of reference. Speed is one part of velocity, direction is the other part. Depending on the frame of reference, the velocity can be defined with many mathematical concepts required for making the correct analysis. ', '2021-01-12 17:00:00', '2021-01-12 17:00:00'),
(2, 1, 'Neque Porro Quisquam', '\r\n\r\nPraesent eleifend condimentum quam, at volutpat lorem efficitur sit amet. Integer tempor, quam quis interdum dapibus, eros urna fermentum velit, vitae pretium diam eros non ligula. Nunc placerat elit accumsan erat luctus aliquam. Ut enim tortor, pharetra vitae lectus et, bibendum aliquam nunc. Donec molestie nulla et luctus dapibus. Aenean sit amet felis felis. Vestibulum ac finibus orci. Ut urna metus, efficitur sed sagittis ac, porttitor eu lacus. Fusce venenatis congue eros at venenatis. In interdum, felis eu maximus tristique, tellus erat bibendum libero, vel egestas diam nisi vitae sapien. Maecenas eget tempus ipsum, ut mattis nibh. Duis aliquet est et leo molestie tempus. Suspendisse sed dignissim libero.\r\n\r\nIn hac habitasse platea dictumst. Sed sem ligula, porttitor eu tempor id, aliquam nec nibh. In elementum libero vel placerat luctus. Duis ut quam nec justo auctor euismod a ac nunc. Nunc eget leo sollicitudin dui mattis commodo a quis nibh. Nunc vel sem elementum libero tristique rhoncus a non arcu. Sed nec commodo tellus, et vulputate neque.\r\n\r\nPellentesque id tortor urna. Nunc imperdiet accumsan laoreet. Maecenas ultrices sit amet quam eget tristique. Suspendisse sed tristique ipsum, at vehicula elit. Donec volutpat dui non velit rutrum, sed varius mi dignissim. Sed ut ante urna. Nulla fermentum suscipit ligula a scelerisque. Fusce ipsum elit, congue ut urna at, viverra tempor lectus. Nunc blandit rutrum mollis. Ut orci mi, sodales vel laoreet eget, interdum quis libero. Aenean id tincidunt odio. Ut ultrices malesuada nibh, ut posuere arcu cursus non. Nam placerat placerat est at fringilla. Fusce consectetur, sapien at porta mollis, felis turpis vulputate purus, nec commodo nisi orci non arcu.\r\n\r\nVestibulum eu nibh vel arcu rutrum cursus. Fusce mi justo, elementum eu diam vitae, interdum accumsan sapien. Ut sit amet ligula magna. Morbi eu pretium diam, eu ultricies ipsum. Mauris vitae mi lobortis, gravida enim quis, fermentum neque. Nullam sed consectetur nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent ornare pellentesque ligula nec lacinia. Maecenas sollicitudin dignissim nibh non placerat. Phasellus ipsum quam, cursus vel scelerisque non, egestas vel tortor. Curabitur mauris ligula, pretium vel metus posuere, hendrerit cursus dui. Fusce vitae imperdiet massa, ac luctus lectus.\r\n\r\nPraesent hendrerit sem sit amet nisi pellentesque mollis. Morbi vehicula in orci eget imperdiet. Maecenas ornare hendrerit ante, a congue orci consectetur sit amet. Nulla aliquet in lacus vel hendrerit. Suspendisse ut arcu a elit iaculis scelerisque sed eget arcu. Mauris velit odio, tincidunt blandit porttitor eu, ornare in magna. Curabitur eu orci purus. Cras in diam purus. Sed non lorem quis lectus rutrum elementum. Pellentesque accumsan efficitur scelerisque. Cras sollicitudin, velit quis volutpat feugiat, risus leo aliquet nisi, ac tristique purus arcu eu ante. Sed consectetur id justo vel vehicula.\r\n\r\nProin a gravida tortor. Vivamus lacinia massa nulla, vel efficitur justo ullamcorper nec. Etiam non nunc mattis, ultricies ligula quis, hendrerit augue. Morbi pulvinar euismod arcu, ut pharetra risus tempor vel. Nunc ornare malesuada elementum. Ut pharetra eleifend ipsum tempus elementum. Integer semper odio sem, at sagittis lorem dapibus et. Cras congue, neque aliquam fermentum iaculis, nibh mi accumsan nisi, at mattis tortor erat sodales tortor. Nullam ornare elit id ligula porta finibus. Etiam vulputate dolor velit, nec ornare enim pulvinar ac. Morbi eget nunc vel turpis convallis commodo sit amet quis est. Phasellus in commodo sapien, eu commodo dolor.\r\n\r\nAenean sed blandit purus, et varius lacus. Integer turpis felis, mattis sit amet libero euismod, sodales placerat velit. Vivamus ut sagittis lectus. Praesent lacinia mattis ligula, sit amet hendrerit nulla dictum sed. Aenean maximus dapibus nibh sed imperdiet. Fusce sit amet aliquam nisi, ac facilisis tortor. Maecenas interdum vitae tellus vel rutrum. Ut tempor nulla vel justo imperdiet, in ultrices felis aliquet. Donec commodo eleifend ante ac scelerisque. Proin imperdiet ipsum ut elementum tempus. Aliquam in pellentesque metus. Vestibulum laoreet vulputate tempus. Aliquam at sollicitudin neque, eu tincidunt erat. Aenean id libero non lectus posuere facilisis ac eget urna.\r\n\r\nMauris iaculis fringilla tincidunt. In hac habitasse platea dictumst. Praesent fermentum pulvinar elit, sed egestas augue pretium non. Nullam quam diam, hendrerit ac tristique at, suscipit ut libero. Vivamus volutpat sed arcu id faucibus. Maecenas imperdiet nulla quis nibh vehicula iaculis. Nunc varius enim dui, nec convallis sem tempus a. Nulla fringilla justo quis nisl porttitor, quis pretium leo gravida.\r\n\r\nMorbi augue dolor, posuere interdum finibus feugiat, lacinia eget eros. Proin non tincidunt sem. Nam sagittis ut lorem eget ornare. Vestibulum gravida aliquet tincidunt. Integer ipsum metus, faucibus dapibus arcu ut, cursus viverra nulla. Sed ut magna elit. Aenean placerat, erat sed scelerisque dignissim, lectus tellus euismod lectus, eget pulvinar lacus magna in ex. Pellentesque condimentum odio at sodales ultrices. Aenean eleifend neque quis nibh ornare, et aliquam diam luctus. Curabitur vitae odio vel nisi iaculis euismod. Sed dignissim interdum risus id aliquet. Sed eleifend augue et diam fringilla tincidunt. Aliquam erat volutpat. Quisque aliquam, mi nec vestibulum maximus, lectus ante fermentum nisl, quis gravida elit diam a ante. Quisque consectetur hendrerit justo in vestibulum.\r\n\r\nDonec malesuada dolor lacus, mollis sollicitudin nisi lacinia eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean leo orci, scelerisque sed nibh nec, efficitur tincidunt est. Vestibulum laoreet cursus dui eget ullamcorper. Suspendisse maximus ipsum sem, nec convallis leo cursus sed. Morbi sit amet mauris sed nibh posuere consectetur. Vestibulum vulputate, magna at efficitur pulvinar, quam tellus pellentesque lectus, in venenatis tortor metus a augue. Mauris vel bibendum magna. Donec congue tristique urna, in facilisis ipsum gravida eget. Sed tincidunt, purus et placerat auctor, orci metus condimentum justo, sit amet rutrum tortor justo quis purus. ', '2021-01-12 17:00:00', '2021-01-12 17:00:00'),
(3, 1, 'Quisque at Est Elementum', ' Integer auctor neque ac placerat elementum. Pellentesque fringilla sollicitudin tellus, nec pharetra ipsum elementum et. Mauris vel dolor leo. Proin vehicula nisl non lacus sollicitudin, sed rutrum nisi dictum. Aenean nulla metus, pretium sit amet erat vel, commodo volutpat felis. Fusce quis pharetra felis, ac fringilla metus. Sed a fringilla orci. Vestibulum auctor nulla eros, nec aliquet sapien consequat id. Integer ut interdum nunc. Sed interdum, metus ut feugiat mollis, est tellus pulvinar urna, vitae pharetra lectus risus vitae leo. Integer id ultricies tortor. Proin porta sodales tortor, pulvinar sagittis metus elementum eget. Donec vel velit libero. Pellentesque rhoncus maximus pharetra. Quisque at est elementum, porta urna vitae, iaculis quam.\r\n\r\nPraesent imperdiet placerat ipsum, vel finibus augue tincidunt nec. Curabitur euismod, mauris ac laoreet tincidunt, arcu turpis faucibus metus, eu aliquam eros orci at augue. Integer congue consequat augue a viverra. Praesent auctor, massa eu fermentum varius, massa tortor viverra sem, vitae rhoncus quam odio vitae ipsum. Aliquam erat volutpat. Praesent aliquam dapibus urna in lacinia. Cras in sapien lobortis, facilisis magna nec, varius elit. Pellentesque porta iaculis vulputate.\r\n\r\nNulla facilisi. Praesent congue purus non cursus tincidunt. Praesent vitae porta orci. Quisque dictum blandit porta. Vestibulum sed porttitor sapien. Curabitur est dolor, pulvinar eu neque ac, ornare molestie tortor. Nunc quis mauris vel dui rhoncus condimentum. Sed pharetra elementum nisl non vestibulum. Aenean id lectus quis lacus pharetra interdum vel ac mauris. Fusce vestibulum dignissim enim, sit amet rhoncus mauris pharetra eu.\r\n\r\nNulla facilisi. Praesent fermentum imperdiet leo nec porttitor. Donec sagittis laoreet sagittis. Cras id porta tellus. Sed mauris sem, pharetra vel sollicitudin sed, luctus eu mi. Nam dapibus rhoncus lacus, ac varius augue. Ut a urna a purus pharetra posuere sollicitudin ut est.\r\n\r\nEtiam urna nisi, sollicitudin vel mauris eget, facilisis luctus risus. Suspendisse interdum mi ut purus egestas, ac hendrerit ex mollis. Proin dui libero, imperdiet at tempor sed, tristique ut ligula. Cras molestie egestas felis ut finibus. Nullam faucibus mattis auctor. Integer metus lacus, fringilla placerat convallis vel, blandit sit amet lorem. Nulla velit velit, venenatis fermentum sollicitudin varius, vestibulum ultrices justo. Morbi mi massa, lacinia ut justo sit amet, accumsan pretium metus. Vestibulum cursus augue ac ultrices condimentum. Quisque pharetra faucibus dignissim.\r\n\r\nVestibulum in tincidunt enim. Pellentesque non venenatis elit. Integer in finibus dui. Phasellus tristique, mauris eget aliquet molestie, augue urna facilisis ipsum, tempus aliquet tellus est et tortor. Duis tempor, justo id convallis tincidunt, arcu ligula ornare erat, sed ornare arcu ex quis lacus. Phasellus at magna eros. Integer quis dignissim nibh, a tempus arcu.\r\n\r\nUt pellentesque justo non ornare rhoncus. In tellus orci, rhoncus id ultricies at, tempor eu eros. Duis leo nisi, porttitor a risus sed, volutpat porttitor erat. Suspendisse non ultricies augue. Quisque sollicitudin neque vel eros tristique, et malesuada ligula iaculis. Pellentesque id semper ligula. Phasellus sed posuere elit. Ut pulvinar finibus tincidunt. In eu elit nec arcu vestibulum rhoncus. Pellentesque vitae enim auctor, condimentum ligula at, tincidunt nibh.\r\n\r\nPraesent molestie tortor eget maximus semper. Nullam consectetur viverra ante, sit amet fermentum nulla suscipit id. Morbi velit est, blandit id libero eget, eleifend fermentum enim. Phasellus cursus velit ut sem aliquam, a rhoncus augue fermentum. Integer condimentum mauris nec ex facilisis commodo. Sed at fermentum arcu. In tempor tempor finibus. Aenean fermentum urna eget augue aliquam, vitae euismod nunc vulputate. Praesent eleifend tellus turpis, at sodales augue fringilla et. Aenean sit amet orci a lacus sollicitudin facilisis nec interdum velit. In ut nisl vel arcu iaculis tempor in malesuada massa. Vivamus ut augue bibendum, porta enim eget, pretium massa. Proin tempor dolor urna, eget mattis ipsum semper tincidunt. Aliquam pellentesque neque nec vehicula malesuada. Suspendisse aliquet felis est, vitae euismod neque dapibus nec. Suspendisse sagittis tortor ullamcorper urna luctus, non sodales mi dignissim.\r\n\r\nFusce sit amet accumsan nibh. Cras tempor augue non hendrerit condimentum. Nullam interdum, quam sit amet scelerisque sodales, ligula felis auctor mauris, id faucibus dui tellus nec felis. Curabitur bibendum eu risus a congue. Phasellus venenatis venenatis tempor. Nam vitae iaculis ante, at convallis lectus. Proin luctus arcu metus, sed tincidunt mauris lacinia in. Suspendisse vitae faucibus turpis. Proin metus sapien, pulvinar ac eleifend tincidunt, tristique eget enim. Etiam imperdiet faucibus purus, id consequat mi ultricies sed. ', '2021-01-12 17:00:00', '2021-01-12 17:00:00'),

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'noorwachid', '$2y$10$hfRDAotNJ3Ak0dMo3/mwde12QtxcbCW5Z.gRk1DfYX.PiKC/uvZte');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_post_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;