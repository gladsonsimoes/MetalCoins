create database metalcoin;
use metalcoin;

CREATE TABLE perfil 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,
 tipo_de_usuario VARCHAR(45) NOT NULL
); 

CREATE TABLE usuarios
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 id_perfil INT,  
 nome VARCHAR(45) NOT NULL,  
 email VARCHAR(45) NOT NULL UNIQUE,  
 senha VARCHAR(155) NOT NULL
); 

CREATE TABLE produto 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 nome VARCHAR(45) NOT NULL,  
 preco FLOAT NOT NULL,  
 estoque INT NOT NULL
); 


CREATE TABLE conta_corrente 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 id_usuario INT,  
 saldo FLOAT NOT NULL,  
 transacao VARCHAR(45) NOT NULL,  
 data_transacao DATE NOT NULL  
); 

CREATE TABLE pedido 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 id_produto INT,  
 quantidadeProduto INT NOT NULL,  
 id_usuario INT,  
 status VARCHAR(45) NOT NULL,  
 dataPedido DATE NOT NULL ,
 valorPedido FLOAT NOT NULL
); 

ALTER TABLE usuarios ADD FOREIGN KEY(id_perfil) REFERENCES perfil (id);

ALTER TABLE conta_corrente ADD FOREIGN KEY(id_usuario) REFERENCES usuarios (id) ON DELETE CASCADE;

ALTER TABLE pedido ADD FOREIGN KEY(id_produto) REFERENCES produto (id);

ALTER TABLE pedido ADD FOREIGN KEY(id_usuario) REFERENCES usuarios (id);   

-- INSERT INTO usuarios (id_perfil, nome, email, senha) VALUES 1, adm, adm@email.com, 12345678;

INSERT INTO perfil (tipo_de_usuario) VALUES ('admin');
INSERT INTO perfil (tipo_de_usuario) VALUES ('common');
