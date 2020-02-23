CREATE DATABASE yoarriendo;
USE yoarriendo;
CREATE TABLE category(
  id_category INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  parent INT,
  FOREIGN KEY (parent) REFERENCES category (id_category)
);
USE yoarriendo;
CREATE TABLE user(
  rut VARCHAR(10) PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  user_img_url VARCHAR(255) NOT NULL,
  birthday DATE NOT NULL,
  mail VARCHAR(255) NOT NULL,
  nickname VARCHAR(255) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  password VARCHAR(255) NOT NULL
);
USE yoarriendo;
CREATE TABLE publication(
  id_publication INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  publi_img_url VARCHAR(255) NOT NULL,
  description VARCHAR(255),
  price DECIMAL,
  fk_rut VARCHAR(10),
  fk_category INT,
  FOREIGN KEY (fk_category) REFERENCES category (id_category),
  FOREIGN KEY (fk_rut) REFERENCES user (rut)
);

USE yoarriendo;
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Electrodomésticos', NULL);
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Electrónica, Audio y Video', NULL);

INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Videocámaras', '2');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'TV - Televisores', '2');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'LED', '4');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'LCD', '4');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Plasma', '4');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Lavadoras y Secadoras', '1');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Neveras y Congeladoras', '1');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Lavadoras', '6');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Secadoras', '6');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Lavadorasecadora', '6');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Respuestos y Accesorios', '9');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Motores', '13');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Filtros', '13');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Neveras', '9');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Congeladoras', '9');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'No-Frost', '16');
INSERT INTO `category` (`id_category`, `name`, `parent`) VALUES (NULL, 'Frost', '16');


INSERT INTO `user` (`rut`, `name`, `last_name`, `user_img_url`, `birthday`, `mail`, `nickname`, `phone`, `password`) 
VALUES ('17810261-3', 'Tomas', 'Solis', 'IMG/TOMAS.JPEG', '1991-04-19', 'tomsolise@gmail.com', 'tomsolise', '934603209', 'karenbarkarenbar');


INSERT INTO `user` (`rut`, `name`, `last_name`, `user_img_url`, `birthday`, `mail`, `nickname`, `phone`, `password`)
VALUES ('25107212-4', 'Karen', 'Barreto', 'IMG/KAREN.JPEG', '1991-02-12', 'tobika12@gmail.com', 'misskbar', '994878236', 'tobika12');

INSERT INTO `publication` (`id_publication`, `title`, `publi_img_url`, `description`, `price`, `fk_rut`, `fk_category`) 
VALUES (NULL, 'LED Sony 44\'\' Como Nuevo', 'IMG/TELEVISOR.JPEG', 'Arriendo mi LED de 44 pulgadas', '20000', '17810261-3', '5');

INSERT INTO `publication` (`id_publication`, `title`, `publi_img_url`, `description`, `price`, `fk_rut`, `fk_category`) 
VALUES (NULL, 'Refrigerador 500lt', 'IMG/REFRIGERADOR.JPEG', 'Arriendo mi Refrigerador para fiestas', '30000', '25107212-4', '19');




