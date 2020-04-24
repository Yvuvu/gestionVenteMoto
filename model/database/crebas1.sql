/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     23/04/2020 12:02:01                          */
/*==============================================================*/


drop table if exists Admin;

drop table if exists Moto;

drop table if exists Sell;

/*==============================================================*/
/* Table: Admin                                                 */
/*==============================================================*/
create table Admin
(
   idAdmin              int not null auto_increment,
   username             varchar(254),
   password             varchar(254),
   primary key (idAdmin)
);

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
/* Table: Sell                                                  */
/*==============================================================*/
create table Sell
(
   idVente              int not null auto_increment,
   serialNumber         varchar(254) not null,
   nameClient           varchar(254),
   quantity             int,
   amount               int,
   primary key (idVente)
);

alter table Sell add constraint FK_association1 foreign key (serialNumber)
      references Moto (serialNumber) on delete restrict on update restrict;

