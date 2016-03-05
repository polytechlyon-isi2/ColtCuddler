/**
 * Author:  siapran
 * Created: Feb 9, 2016
 */


drop table if exists t_comment;
drop table if exists t_article;
drop table if exists t_user;
drop table if exists t_category;

create table t_category (
  category_id integer not null primary key auto_increment,
  category_name varchar(127) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;


create table t_article (
  art_id integer not null primary key auto_increment,
  art_name varchar(100) not null,
  art_description varchar(2000) not null,
  art_price decimal(10,2) not null,
  art_image varchar(80) not null,
  art_category integer not null,
  constraint fk_art_cat foreign key(art_category) references t_category(category_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;


create table t_user (
  user_id integer not null primary key auto_increment,
  user_name varchar(25) not null,
  user_pass varchar(90) not null,
  user_salt varchar(25) not null,
  user_role varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_comment (
  com_id integer not null primary key auto_increment,
  com_content varchar(500) not null,
  art_id integer not null,
  usr_id integer not null,
  constraint fk_com_art foreign key(art_id) references t_article(art_id),
  constraint fk_com_usr foreign key(usr_id) references t_user(user_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;
