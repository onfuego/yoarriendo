CREATE DATABASE proyecto;
USE proyecto;
CREATE TABLE category(
  id_category INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  parent INT
);
CREATE TABLE publication(
  id_publication INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description VARCHAR(255),
  price DECIMAL,
  rut VARCHAR(9),
  id_category INT,
);
CREATE TABLE user(
  rut VARCHAR(9) PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  birthday DATE NOT NULL,
  correo VARCHAR(255) NOT NULL,
  nickname VARCHAR(255) NOT NULL,
  phone INT(9) NOT NULL,
  password VARCHAR(255) NOT NULL
);
