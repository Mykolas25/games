-- Active: 1666769524085@@127.0.0.1@3306@project_ads

CREATE TABLE IF NOT EXISTS project_ads.games (
    id int UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL, 
    release_date DATE NOT NULL,
    genre varchar(255) NOT NULL,
    developer varchar(255) NOT NULL,
    description TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at DATETIME NULL
)

