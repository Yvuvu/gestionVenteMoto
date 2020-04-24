/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     22/04/2020 23:52:22                          */
/*==============================================================*/


drop table if exists Admin;

drop table if exists Brand;

drop table if exists Moto;

drop table if exists Sell;

/*==============================================================*/
/* Table: Admin                                                 */
/*==============================================================*/
create table Admin
(
   idAdmin              int not null,
   username             varchar(254),
   password             varchar(254),
   primary key (idAdmin)
);

/*==============================================================*/
/* Table: Brand                                                 */
/*==============================================================*/
create table Brand
(
   idBrand              int not null,
   name                 varchar(254),
   primary key (idBrand)
);

/*==============================================================*/
/* Table: Moto                                                  */
/*==============================================================*/
create table Moto
(
   serialNumber         varchar(254) not null,
   idBrand              int not null,
   idVente              int not null,
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
   idVente              int not null,
   nameClient           varchar(254),
   quantity             int,
   amount               int,
   primary key (idVente)
);

alter table Moto add constraint FK_association1 foreign key (idBrand)
      references Brand (idBrand) on delete restrict on update restrict;

alter table Moto add constraint FK_association2 foreign key (idVente)
      references Sell (idVente) on delete restrict on update restrict;

