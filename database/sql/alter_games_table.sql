-- Active: 1666769524085@@127.0.0.1@3306@project_ads

USE project_ads;

ALTER TABLE games 
DROP COLUMN release_date,
ADD COLUMN release_date YEAR NULL AFTER name;

ALTER TABLE games 
ADD COLUMN image varchar(255) NULL AFTER release_date;