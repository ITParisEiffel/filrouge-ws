CREATE DATABASE IF NOT EXISTS calendar CHARACTER SET 'utf8';
USE calendar;

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(8) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

ALTER TABLE `events`
ADD PRIMARY KEY (`id`);
 
ALTER TABLE `events`
MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;


INSERT INTO `events` (titre,description) VALUES ('titre1','description1');
INSERT INTO `events` (titre,description) VALUES ('titre2','description2');
INSERT INTO `events` (titre,description) VALUES ('titre3','description3');
INSERT INTO `events` (titre,description) VALUES ('titre4','description4');
INSERT INTO `events` (titre,description) VALUES ('titre5','description5');
INSERT INTO `events` (titre,description) VALUES ('titre6','description6');
INSERT INTO `events` (titre,description) VALUES ('titre7','description7');
INSERT INTO `events` (titre,description) VALUES ('titre8','description8');
INSERT INTO `events` (titre,description) VALUES ('titre9','description9');
INSERT INTO `events` (titre,description) VALUES ('titre10','description10');
INSERT INTO `events` (titre,description) VALUES ('titre11','description11');
INSERT INTO `events` (titre,description) VALUES ('titre12','description12');
INSERT INTO `events` (titre,description) VALUES ('titre13','description13');
INSERT INTO `events` (titre,description) VALUES ('titre14','description14');
INSERT INTO `events` (titre,description) VALUES ('titre15','description15');
