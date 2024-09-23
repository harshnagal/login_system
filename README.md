to make the server of the file 

used command in mysql (xampp server)||mysql workbench 8.3 ver.

create a database

CREATE DATABASE login_system-------(hit ctrl+enter)

USE login_system-------(hit ctrl+enter)

CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
                    firstname VARCHAR(50) NOT NULL,
                    lastname VARCHAR(50) NOT NULL,
                    dob DATE NOT NULL,
                    address VARCHAR(100) NOT NULL,
                    phone INT(15) NOT NULL,
                    email VARCHAR(100) NOT NULL,
                    password) VARCHAR(255) NOT NULL)
