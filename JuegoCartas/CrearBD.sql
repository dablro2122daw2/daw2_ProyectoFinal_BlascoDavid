use mysql;
create user 'admin'@'localhost' identified by "Fjeclot22@";
create database JocCartes;
use JocCartes;
grant all privileges on JocCartes.* to 'admin'@'localhost';