create database if not exists blizzart character set utf8 collate utf8_unicode_ci;
use blizzart;

grant all privileges on blizzart.* to 'blizzart_user'@'localhost' identified by 'secret';
