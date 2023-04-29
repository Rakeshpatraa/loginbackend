CREATE TABLE products (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	product_name VARCHAR(30) NOT NULL,
	product_price FLOAT(10, 2) NOT NULL,
	product_description TEXT NOT NULL,
	product_image VARCHAR(100) NOT NULL
);