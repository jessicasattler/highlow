<?php 

$query = 'DROP TABLE IF EXISTS characters;

CREATE TABLE characters(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	character_name VARCHAR(240),
	image_url VARCHAR(240) NOT NULL,
	audio_url VARCHAR(240),
	PRIMARY KEY(id)
);'


INSERT INTO characters(character_name, image_url)
VALUES ('rigby','/img/rigby.png');


 ?>