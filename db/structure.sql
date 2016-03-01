/**
 * Author:  siapran
 * Created: Feb 9, 2016
 */


 drop table if exists t_gender;
 create table t_gender (
   gender_id integer not null primary key auto_increment,
   gender_name varchar(127) not null
 ) engine=innodb character set utf8 collate utf8_unicode_ci;


drop table if exists t_article;
create table t_article (
  art_id integer not null primary key auto_increment,
  art_title varchar(100) not null,
  art_content varchar(2000) not null,
  art_gender integer not null,
  constraint fk_art_gen foreign key(art_gender) references t_gender(gender_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;


drop table if exists t_user;
create table t_user (
  user_id integer not null primary key auto_increment,
  user_name varchar(25) not null,
  user_pass varchar(90) not null,
  user_salt varchar(25) not null,
  user_role varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

drop table if exists t_comment;
create table t_comment (
  com_id integer not null primary key auto_increment,
  com_content varchar(500) not null,
  art_id integer not null,
  usr_id integer not null,
  constraint fk_com_art foreign key(art_id) references t_article(art_id),
  constraint fk_com_usr foreign key(usr_id) references t_user(user_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;
