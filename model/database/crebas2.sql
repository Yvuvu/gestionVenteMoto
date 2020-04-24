/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     24/04/2020 10:30:05                          */
/*==============================================================*/


drop table if exists Moto;

drop table if exists Users;

/*==============================================================*/
/* Table: Moto                                                  */
/*==============================================================*/
create table Moto
(
   serialNumber         varchar(254) not null,
   brand                varchar(254),
   model                varchar(254),
   cylinder             varchar(254),
   category             varchar(254),
   price                int,
   primary key (serialNumber)
);

/*==============================================================*/
/* Table: Users                                                 */
/*==============================================================*/
create table Users
(
   id                   int not null,
   username             varchar(254),
   password             varchar(254),
   primary key (id)
);

