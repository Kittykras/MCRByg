use mcrbyg_dk;

drop table if exists comments;
create table comments
(
c_id		int primary key auto_increment not null,
c_name		varchar(50),
c_date		datetime,
c_title	varchar(50),
c_comment	text,
c_where		varchar(50)
) engine = InnoDB;

DELIMITER $$

drop PROCEDURE if exists getComments$$
create procedure getComments()
begin
set lc_time_names = 'da_DK';
select c_name, 
DATE_FORMAT(c_date, '%d. %b %Y') as c_date,
c_title, c_comment
from comments;
END$$
DELIMITER ;
