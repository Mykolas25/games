USE project_ads;
-- Active: 1666769524085@@127.0.0.1@3306@project_ads
DELETE FROM games;

ALTER TABLE games AUTO_INCREMENT = 1;

INSERT INTO games (
    name,
    release_date,
    genre,
    developer,
    description
)
VALUES
('Grand Theft Auto V', '2013', 'Action-adventure game', 'Rockstar Games', 'Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the seventh main entry in the Grand Theft Auto series, following 2008\'s Grand Theft Auto IV, and the fifteenth instalment overall.'),
('Elden Ring', '2022', 'Action role-playing game', 'FromSoftware Inc.', 'Elden Ring is a 2022 action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment. It was directed by Hidetaka Miyazaki with worldbuilding provided by the fantasy writer George R. R. Martin.'),
('Half-Life 2', '2004', 'First-person shooter', 'Valve Corporation', 'Half-Life 2 is a 2004 first-person shooter game developed by Valve. It was published by Valve through its distribution service Steam. Like the original Half-Life, Half-Life 2 combines shooting, puzzles, and storytelling, and adds features such as vehicles and physics-based gameplay')