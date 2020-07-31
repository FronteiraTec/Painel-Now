DROP DATABASE IF EXISTS Painel;
CREATE DATABASE Painel DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Painel;

DROP USER IF EXISTS 'adm'@'localhost';
CREATE USER 'adm'@'localhost' IDENTIFIED BY '';
GRANT SELECT, INSERT, UPDATE, DELETE ON Painel.* TO 'adm'@'localhost';

CREATE TABLE usuarios (
  ID INTEGER NOT NULL PRIMARY KEY,  
  login Varchar(30),
  senha Varchar(40)
);