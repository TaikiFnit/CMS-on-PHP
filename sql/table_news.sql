create table `2015` (
	id int not null auto_increment primary key,
	title varchar(50),
	content text,
	author varchar(20),
	created datetime default null,
	modified datetime default null
) CHARACTER SET 'utf8';

insert into `2015` (title, content, author, created, modified) values
('ラーメン二郎の本店に行きました!', 'content 1', 'T.W', now(), now()); 
