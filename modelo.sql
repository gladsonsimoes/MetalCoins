
create database metalcoin;
use metalcoin;


CREATE TABLE usuario 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 idPerfil INT,  
 nome VARCHAR(45) NOT NULL,  
 email VARCHAR(45) NOT NULL,  
 senha VARCHAR(45) NOT NULL 
); 

CREATE TABLE perfil 
( 
 tipoDeUsuario INT PRIMARY KEY
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
 idUsuario INT,  
 Saldo FLOAT NOT NULL,  
 Transacao VARCHAR(45) NOT NULL,  
 DataTransacao DATE NOT NULL  
); 

CREATE TABLE pedido 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 idProduto INT,  
 quantidadeProduto INT NOT NULL,  
 idUsuario INT,  
 status VARCHAR(45) NOT NULL,  
 dataPedido DATE NOT NULL ,
 valorPedido FLOAT NOT NULL
); 

ALTER TABLE usuario ADD FOREIGN KEY(idPerfil) REFERENCES perfil (tipoDeUsuario);

ALTER TABLE conta_corrente ADD FOREIGN KEY(idUsuario) REFERENCES usuario (id);

ALTER TABLE pedido ADD FOREIGN KEY(idProduto) REFERENCES produto (id);

ALTER TABLE pedido ADD FOREIGN KEY(idUsuario) REFERENCES usuario (id);   
   
