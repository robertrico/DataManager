CREATE TABLE users_instances(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	user_id INT UNSIGNED NOT NULL,
	instance_id INT UNSIGNED NOT NULL,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL,
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (instance_id) REFERENCES instances(id)
);

