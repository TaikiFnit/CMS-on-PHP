create table news (
	id int not null auto_increment primary key,
	title varchar(50),
	content text,
	created datetime default null,
	modified datetime default null
);

insert into news (title, content, created, modified) values
('title 1', 'content 1', now(), now()); 
