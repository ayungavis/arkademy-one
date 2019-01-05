CREATE TABLE `products` (
	`id` int(4) NOT NULL,
	`name` varchar(64) NOT NULL,
	`category_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `categories` (
	`id` int(4) NOT NULL,
	`name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `products` ADD PRIMARY KEY (`id`);
ALTER TABLE `products` MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `categories` ADD PRIMARY KEY (`id`);
ALTER TABLE `categories` MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO `categories` VALUES
(1, 'Peralatan Mandi'),
(2, 'Mie Instan'),
(3, 'Olahan Daging');

INSERT INTO `products` VALUES
(1, 'Shampo', 1),
(2, 'Sikat Gigi', 1),
(3, 'Indomie Goreng Spesial', 2),
(4, 'Mie Sedap Soto', 2),
(5, 'Rock Mie Baso', 2),
(6, 'Nuget', 3);