use mysql;
create database JocCartes;
use JocCartes;

select * from jugadors;

alter table jugadors add constraint Unico unique (Username);

delete from jugadors where id=6;