create database lojaMVC;
use lojaMVC;

create table usuarios(
idUsuario INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100),
email VARCHAR(100),
senha VARCHAR(100)
);
desc usuarios;

CREATE TABLE categorias(
idCategoria INT(11) AUTO_INCREMENT PRIMARY KEY,
descritivo VARCHAR(80)
);
desc categorias;

CREATE TABLE produtos(
idProduto INT(11) AUTO_INCREMENT PRIMARY KEY,
idCategoria INT(11),
nome VARCHAR(100),
descricao TEXT,
preco FLOAT,
imagem VARCHAR(100),
FOREIGN KEY (idCategoria) references categorias(idCategoria)
);
desc produtos;
