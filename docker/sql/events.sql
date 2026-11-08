CREATE TABLE IF NOT EXISTS `events` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(100) NOT NULL,
    `type` VARCHAR(30) NOT NULL,
    `event_date` DATETIME NOT NULL,
    `location` VARCHAR(150) NOT NULL,
    `description` TEXT
);

INSERT INTO `events` (`title`, `type`, `event_date`, `location`, `description`) VALUES
('Piatkový LAN párty maratón', 'LAN party', '2026-11-20 18:00:00', 'Žilina, FRI UNIZA', 'Doneste si vlastný počítač.'),
('Večer stolových hier', 'Stolové hry', '2026-11-25 19:00:00', 'Herňa Kocka, Žilina', 'Catan, Carcassonne a ďalšie hry.'),
('Online turnaj v Rocket League', 'Online', '2026-12-02 20:00:00', 'Discord server Nexus Rally', 'Tímy po troch, prihlasovanie do štvrtka.');