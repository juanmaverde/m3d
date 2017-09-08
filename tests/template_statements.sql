CREATE TABLE  `users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(35) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


INSERT INTO users (username, email, password) VALUES ('juanmaverde', 'juanmaverde@hotmail.com', 'juanMaV3rd3!');

USE m3d;
SELECT * FROM users WHERE (username = 'juanmaverde');
