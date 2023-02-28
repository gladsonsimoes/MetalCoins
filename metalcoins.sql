
create database metalcoin;
use metalcoin;


CREATE TABLE usuario 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 id_perfil INT,  
 nome VARCHAR(45) NOT NULL,  
 email VARCHAR(45) NOT NULL,  
 senha VARCHAR(45) NOT NULL 
); 

CREATE TABLE perfil 
( 
 tipo_de_usuario INT PRIMARY KEY
); 

CREATE TABLE produto 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 nome VARCHAR(45),  
 preco FLOAT NOT NULL,  
 estoque INT NOT NULL
); 

CREATE TABLE conta_corrente 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 id_usuario INT,  
 Saldo FLOAT NOT NULL,  
 transacao VARCHAR(45) NOT NULL,  
 data_transacao DATE NOT NULL  
); 

CREATE TABLE pedido 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 id_produto INT,  
 id_usuario INT NOT NULL,  
 quantidade_produto INT NOT NULL,  
 status VARCHAR(45) NOT NULL,  
 data_pedido DATE NOT NULL,
 valor_pedido FLOAT NOT NULL
); 

ALTER TABLE usuario ADD FOREIGN KEY(id_perfil) REFERENCES perfil (tipo_de_usuario);

ALTER TABLE conta_corrente ADD FOREIGN KEY(id_usuario) REFERENCES usuario (id);

ALTER TABLE pedido ADD FOREIGN KEY(id_produto) REFERENCES produto (id);

ALTER TABLE pedido ADD FOREIGN KEY(id_usuario) REFERENCES usuario (id);   
   
