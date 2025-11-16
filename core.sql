CREATE DATABASE searchdb;
USE searchdb;

CREATE TABLE artlist(
 id INT AUTO_INCREMENT PRIMARY KEY,
 atitle VARCHAR(150),
 adesc TEXT
);

INSERT INTO artlist(atitle,adesc) VALUES
('Sunset','A warm glowing sunset above the hills'),
('Ocean View','Blue waves crashing softly'),
('Golden Forest','Light passing through bright golden leaves'),
('Night Sky','Stars shining across a dark horizon');
