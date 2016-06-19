CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `lastname` VARCHAR(255),
  `status` VARCHAR(20),
  `age` INT(2),
  `id_card` VARCHAR(255),
  `id_facebook` INT,
  `id_snapchat` INT,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `candidates` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT,
  `number` INT,
  `hype` INT,
  `description` LONGTEXT,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `swipes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `sender` INT,
  `receiver` INT,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `payments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT,
  `amount` INT,
  `status` INT,
  PRIMARY KEY  (`id`)
);


ALTER TABLE `candidates` ADD CONSTRAINT `candidates_fk1` FOREIGN KEY (`user_id`) REFERENCES users(`id`);
ALTER TABLE `swipes` ADD CONSTRAINT `swipes_fk1` FOREIGN KEY (`sender`) REFERENCES users(`id`);
ALTER TABLE `swipes` ADD CONSTRAINT `swipes_fk2` FOREIGN KEY (`receiver`) REFERENCES candidates(`id`);
ALTER TABLE `payments` ADD CONSTRAINT `payments_fk1` FOREIGN KEY (`user_id`) REFERENCES users(`id`);
