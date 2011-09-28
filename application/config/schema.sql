CREATE TABLE clients (
	id int(11) NOT NULL AUTO_INCREMENT,
	name varchar(255) NOT NULL,	
	password varchar(255) NOT NULL,
	PRIMARY KEY (id),
	KEY name (name)
);


CREATE TABLE members (
	id int(11) NOT NULL AUTO_INCREMENT,
	client_id int(11) NOT NULL,
	name varchar(255) NOT NULL,
	email varchar(255) NOT NULL,
	last_visit date NOT NULL,
	locations varchar(255) NOT NULL,
	source varchar(255) NOT NULL,
	age_group varchar(255) NOT NULL,
	birthday date NOT NULL,
	created datetime NOT NULL,
	updated datetime NOT NULL,
	PRIMARY KEY (id),
	KEY email (email)
);


CREATE TABLE comments (
	id int(11) NOT NULL AUTO_INCREMENT,
	member_id int(11) NOT NULL,
	client_id int(11) NOT NULL,
	visit date NOT NULL,
	location varchar(255) NOT NULL,
	staff_rating tinyint NOT NULL,
	service_rating tinyint NOT NULL,
	food_rating tinyint NOT NULL,
	drinks_rating tinyint NOT NULL,
	ambience_rating tinyint NOT NULL,
	value_rating tinyint NOT NULL,
	PRIMARY KEY (id),
	KEY member_id (member_id)
);



