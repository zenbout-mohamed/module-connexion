-- Active: 1753689472411@@127.0.0.1@3306@moduleconnexion

Use moduleconnexion;
-- Table utilisateurs :
CREATE TABLE IF NOT EXISTS utilisateurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  login VARCHAR(255) NOT NULL UNIQUE,
  prenom VARCHAR(255) NOT NULL,
  nom VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);