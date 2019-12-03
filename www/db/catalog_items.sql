SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `catalog_items` (
  `id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `item_name` text COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


ALTER TABLE `catalog_items`
  ADD PRIMARY KEY (`id`);
COMMIT;
