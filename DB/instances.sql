CREATE TABLE instances (
	id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
	`schema` VARCHAR(24),
	created DATETIME DEFAULT NULL,
	modified DATETIME DEFAULT NULL
);
