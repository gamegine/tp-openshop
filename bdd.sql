SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `txt` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`cid`),
  KEY `seller` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `pay` tinyint(1) NOT NULL DEFAULT '0',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user` (`uid`),
  KEY `cart_article` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `url` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article` (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `articles`
  ADD CONSTRAINT `category` FOREIGN KEY (`cid`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `seller` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

ALTER TABLE `cart`
  ADD CONSTRAINT `cart_article` FOREIGN KEY (`aid`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `user` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

ALTER TABLE `img`
  ADD CONSTRAINT `article` FOREIGN KEY (`aid`) REFERENCES `articles` (`id`);
