
INSERT INTO `articles` (`id`, `cid`, `uid`, `name`, `txt`) VALUES
(1, NULL, 1, 'blblbbl', 'blblblblblbllblblblbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb\r\nbbbbbbbbbbbbbbbbbbbbbbbbb\r\nbbbbbbbbbbbbbbbb');

INSERT INTO `cart` (`id`, `uid`, `aid`, `n`, `pay`, `completed`) VALUES
(1, 1, 1, 1, 0, 0);

INSERT INTO `category` (`id`, `name`) VALUES
(1, '3d printers');

INSERT INTO `img` (`id`, `aid`, `url`) VALUES
(1, 1, 'arimg.jpg');

INSERT INTO `users` (`id`, `name`, `mail`, `mdp`) VALUES
(1, 'gamgine', '', '');
