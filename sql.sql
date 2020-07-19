CREATE TABLE suppliers (
supplier_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
supplier_name VARCHAR(30) NOT NULL,
supplier_address1 TEXT NULL,
supplier_address2 TEXT NULL,
supplier_city VARCHAR(50) NULL,
supplier_county VARCHAR(50) NULL,
supplier_postcode VARCHAR(20) NULL,
supplier_telephone VARCHAR(20) NULL,
supplier_fax VARCHAR(20) NULL,
supplier_email VARCHAR(320) NULL
);

CREATE TABLE stores (
store_number INT(11) PRIMARY KEY NOT NULL,
store_address1 TEXT NULL,
store_town VARCHAR(50) NULL,
store_county VARCHAR(50) NULL,
store_postcode VARCHAR(20) NULL,
store_franchisee VARCHAR(50) NULL,
store_email VARCHAR(320) NULL,
store_telephone VARCHAR(20) NULL,
store_company VARCHAR(50) NULL
);

CREATE TABLE equipment_types (
    equipment_type_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    equipment_type_name VARCHAR(50) NOT NULL
);

CREATE TABLE manufacturers (
    manufacturer_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    manufacturer_name VARCHAR(50) NOT NULL
);

CREATE TABLE equipment (
    equipment_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    equipment_type_id INT(11) NULL,
    manufacturer_id INT(11) NULL,
    equipment_model VARCHAR(50) NULL,
    FOREIGN KEY (equipment_type_id) REFERENCES equipment_types (equipment_type_id) ON DELETE SET NULL,
    FOREIGN KEY (manufacturer_id) REFERENCES manufacturers (manufacturer_id) ON DELETE SET NULL
);

CREATE TABLE stores_equipment (
    stores_equipment_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    store_number INT(11) NULL,
    equipment_id INT(11) NULL,
    equipment_location VARCHAR(50) NULL,
    FOREIGN KEY (store_number) REFERENCES stores (store_number) ON DELETE SET NULL,
    FOREIGN KEY (equipment_id) REFERENCES equipment (equipment_id) ON DELETE SET NULL
);

CREATE TABLE invoices (
    invoice_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    invoice_number VARCHAR(30) NULL,
    invoice_pdf TEXT NULL,
    invoice_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    invoice_amount Decimal(19,4) NULL
);

CREATE TABLE faults (
    fault_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    stores_equipment_id INT(11) NULL,
    fault_description text NULL,
    fault_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    fault_status VARCHAR(20) NOT NULL DEFAULT 'new',
    fault_update DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    user_id INT(11) UNSIGNED NOT NULL,
    supplier_id INT(11) NULL,
    fault_quote Decimal(19,4) NULL,
    invoice_id INT(11) NULL,
    FOREIGN KEY (stores_equipment_id) REFERENCES stores_equipment (stores_equipment_id) ON DELETE SET NULL,
    FOREIGN KEY (supplier_id) REFERENCES suppliers (supplier_id) ON DELETE SET NULL,
    FOREIGN KEY (invoice_id) REFERENCES invoices (invoice_id) ON DELETE SET NULL,
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
);

CREATE TABLE messages (
    message_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fault_id INT(11) NULL,
    message_content text NULL,
    message_seen boolean NOT NULL DEFAULT 0,
    FOREIGN KEY (fault_id) REFERENCES faults (fault_id) ON DELETE SET NULL
);


CREATE TABLE users_stores (
    store_number INT(11) NOT NULL,
    user_id INT(11) UNSIGNED NOT NULL,
    FOREIGN KEY (store_number) REFERENCES stores (store_number) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE fixes (
    fix_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    equipment_id INT(11) NOT NULL,
    fix_description text NOT NULL,
    FOREIGN KEY (equipment_id) REFERENCES equipment (equipment_id) ON DELETE CASCADE ON UPDATE CASCADE
);

DROP TABLE IF EXISTS `groups`;

#
# Table structure for table 'groups'
#

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table 'groups'
#

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
     (1,'admin','Administrator'),
     (2,'members','General User');



DROP TABLE IF EXISTS `users`;

#
# Table structure for table 'users'
#

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `uc_email` UNIQUE (`email`),
  CONSTRAINT `uc_activation_selector` UNIQUE (`activation_selector`),
  CONSTRAINT `uc_forgotten_password_selector` UNIQUE (`forgotten_password_selector`),
  CONSTRAINT `uc_remember_selector` UNIQUE (`remember_selector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


#
# Dumping data for table 'users'
#

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
     ('1','127.0.0.1','administrator','$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa','admin@admin.com','',NULL,'1268889823','1268889823','1', 'Admin','istrator','ADMIN','0');


DROP TABLE IF EXISTS `users_groups`;

#
# Table structure for table 'users_groups'
#

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `uc_users_groups` UNIQUE (`user_id`, `group_id`),
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
     (1,1,1),
     (2,1,2);


DROP TABLE IF EXISTS `login_attempts`;

#
# Table structure for table 'login_attempts'
#

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;