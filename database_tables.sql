CREATE TABLE parent (
  parentid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  first_name VARCHAR(50) NOT NULL,
  middle_name VARCHAR(50),
  last_name VARCHAR(50) NOT NULL,
  birthdate DATE,
  phone_number VARCHAR(20),
  other_info VARCHAR(255),
  UNIQUE (username)
);

CREATE TABLE child (
  childid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  first_name VARCHAR(50) NOT NULL,
  middle_name VARCHAR(50),
  last_name VARCHAR(50) NOT NULL,
  birthdate DATE,
  other_info VARCHAR(255),
  parentid INT UNSIGNED NOT NULL,
  FOREIGN KEY (parentid) REFERENCES parent(parentid),
  UNIQUE (username)
);

CREATE TABLE chore (
  choreid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  chore_name VARCHAR(100) NOT NULL,
  chore_date DATE NOT NULL,
  chore_points INT,
  childid INT UNSIGNED NOT NULL,
  FOREIGN KEY (childid) REFERENCES child(childid),
  comments VARCHAR(255),
  other_info VARCHAR(255)
);
