DATEBASE TABLES:
USERS:
create table USERS
(
user_id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL ,
surname VARCHAR(50) NOT NULL ,
date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
url_address VARCHAR(60) NOT NULL,
gender VARCHAR(15) NOT NULL,
school_id VARCHAR(60) NOT NULL,
role VARCHAR(35) NOT NULL
);

ALTER TABLE USERS ADD INDEX (name);
ALTER TABLE USERS ADD INDEX (surname);
ALTER TABLE USERS ADD INDEX (date);
ALTER TABLE USERS ADD INDEX (url_address);
ALTER TABLE USERS ADD INDEX (school_id);
ALTER TABLE USERS ADD INDEX (gender);
ALTER TABLE USERS ADD INDEX (role);

show tables;
DESCRIBE USERS;
DROP TABLE USERS;
