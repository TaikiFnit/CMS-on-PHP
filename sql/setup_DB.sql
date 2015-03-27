create database CMS;
use CMS;
grant all on CMS.* to user_name@localhost;
set password for user_name@localhost=password('user_password');
