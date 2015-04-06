create table `2012` (
	id int not null auto_increment primary key,
	title varchar(50),
	content text,
	author varchar(20),
	created datetime default null,
	modified datetime default null
) CHARACTER SET 'utf8';

insert into `2012` (title, content, author, created, modified) values
('2012 news 03', 'content 1', '2012', now(), now()); 
