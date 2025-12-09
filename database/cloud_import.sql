-- Cleaned SQL for Cloud Import
-- Combined into single Create statement to satisfy 'sql_require_primary_key'
USE defaultdb;

DROP TABLE IF EXISTS `enquiry_data`;

CREATE TABLE `enquiry_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` text NOT NULL,
  `phone_number` text NOT NULL,
  `email` text NOT NULL,
  `city` text NOT NULL,
  `message` longtext NOT NULL,
  `type` text NOT NULL,
  `ip_address` text NOT NULL,
  `device_name` text NOT NULL,
  `status` enum('not_view','viewed') NOT NULL DEFAULT 'not_view',
  `deleted_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
