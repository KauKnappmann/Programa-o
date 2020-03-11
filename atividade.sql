CREATE DATABASE Marcela;
USE Marcela;

CREATE TABLE veterinario(
id INT PRIMARY KEY AUTO_INCREMENT, #colocar como auto incremento
nome VARCHAR(45),
crmv VARCHAR(45),
telefone VARCHAR(15),
imagem VARCHAR(100),
informacoes VARCHAR(500));

CREATE TABLE Raca(
idRaca INT PRIMARY KEY  AUTO_INCREMENT,
nome VARCHAR(45)
);

CREATE TABLE Criador(
idCriador INT PRIMARY KEY  AUTO_INCREMENT,
nome VARCHAR(45),
nomePropriedade VARCHAR(45)
);

CREATE TABLE Gado(
id INT PRIMARY KEY  AUTO_INCREMENT,
nome VARCHAR(45),
idade INT,
peso DECIMAL(5,2),
Raca_id INT,
idCriador INT,
foreign key (Raca_id) references Raca(id),
foreign key (idCriador) references Criador(idCriador)
);

DROP TABLE Criador;

CREATE TABLE Gado_has_Veterinario(
Gado_id INT AUTO_INCREMENT,
Veterinario_id INT,
UltimaConsulta DATE,
tratamento VARCHAR(45),
foreign key (Veterinario_id) references Veterinario(id),
foreign key (Gado_id) references Gado(id)
);

INSERT INTO veterinario(nome,crmv, telefone,imagem,informacoes)
VALUES('Rodrigo','6985','4799999999','img/um.png','Sou bastante idoso mas gosto de trabalhar'),
('Milena','8756','4796857458','img/dois.png','Gosto de trabalhar com bezerros'),
('Hanattan','2456','499888547','img/tres.png','Nada a declarar'),
('Gabriel','9875','49997853654','img/quatro.png','Nada a declarar');
SELECT * FROM Veterinario;

INSERT INTO Raca(nome)
VALUES('Jersey'),
('Holandesa'),
('Hereford'),
('Dexter');
SELECT * FROM Raca;

INSERT INTO Criador(nome, nomePropriedade)
VALUES('Hasmund', 'VidaFeliz'),
('Pedro', 'ArcoIris'),
('Camille', 'Canastra'),
('Aurora', 'LensVille');
SELECT * FROM Criador;


INSERT INTO Gado(nome, idade, peso)
VALUES('Mimi','6','8'),
('Fofa','1','12'),
('Lara','10','15'),
('Bona','4','30');
SELECT * FROM Gado;


INSERT INTO Gado_has_Veterinario( UltimaConsulta, tratamento)
VALUES('2015/06/21','Vacina para Bicheira'),
('2019/10/25','Remedio para Amaciar'),
('2020/01/03','Vacina'),
('2019/04/14','Vacina');
SELECT * FROM Gado_has_Veterinario;

INSERT INTO informacoes(imagem, informacao)
VALUES();

DROP DATABASE Marcela;