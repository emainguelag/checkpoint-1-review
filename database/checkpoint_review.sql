CREATE DATABASE checkpoint_review;
USE checkpoint_review;

CREATE TABLE vinyl (
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(200) NOT NULL,
  cover VARCHAR(255) NOT NULL,
  artist VARCHAR(200) NOT NULL,
  genre VARCHAR(100) NOT NULL);
  
INSERT INTO vinyl (title, cover, artist, genre) VALUES
('Groove Sessions', 'https://i.pinimg.com/736x/3b/da/2d/3bda2df809543109ae62e1c644e88bde--chinese-man-lp-vinyl.jpg', 'Chinese Man', 'Electro swing'),
('Rage against the machine', 'https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/Visual_Principal_340/3/2/4/5099750954423/tsp20130828121158/Live-at-the-Olympic-Auditorium.jpg', 'Rage against the machine', 'rock');

SELECT * FROM vinyl;