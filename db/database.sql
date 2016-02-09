/**
 * Author:  siapran
 * Created: Feb 9, 2016
 */

create database if not exists coltcuddler character set utf8 collate utf8_unicode_ci;
use coltcuddler;

grant all privileges on coltcuddler.* to 'coltcuddler_user'@'localhost' identified by 'secret';
