CREATE TABLE IF NOT EXISTS `games` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `platform` VARCHAR(30) NOT NULL,
    `max_players` INT NOT NULL
);

INSERT INTO `games` (`name`, `platform`, `max_players`) VALUES
('League of Legends', 'PC', 10),
('Valorant', 'PC', 5),
('Counter-Strike 2', 'PC', 10),
('Rocket League', 'PC', 6),
('Catan', 'Stolová', 4);