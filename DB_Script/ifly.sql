create table event
(
	event_id int not null auto_increment
		primary key,
	event_location_id int not null,
	event_date date null,
	event_start_time time null,
	constraint event_event_id_uindex
		unique (event_id)
)
;

create index event_locations_location_id_fk
	on event (event_location_id)
;

create table locations
(
	location_id int not null auto_increment
		primary key,
	company_name varchar(255) null,
	address1 varchar(255) null,
	address2 varchar(255) null,
	suburb varchar(255) null,
	main_number char(10) null,
	postcode char(4) null,
	constraint locations_location_id_uindex
		unique (location_id)
)
;

alter table event
	add constraint event_locations_location_id_fk
		foreign key (event_location_id) references locations (location_id)
;

create table permission_level
(
	permission_level_id int not null auto_increment
		primary key,
	level varchar(10) null,
	constraint permission_level_permission_level_id_uindex
		unique (permission_level_id)
)
;

create table registered_user
(
	registered_user_id int not null auto_increment
		primary key,
	first_name varchar(255) null,
	last_name varchar(255) null,
	email varchar(255) null,
	password varchar(255) null,
	username varchar(255) null,
	constraint registered_user_registered_user_id_uindex
		unique (registered_user_id)
)
;

create view vw_locations as 
SELECT
    `ifly`.`locations`.`location_id`  AS `location_id`,
    `ifly`.`locations`.`company_name` AS `company_name`,
    `ifly`.`locations`.`address1`     AS `address1`,
    `ifly`.`locations`.`address2`     AS `address2`,
    `ifly`.`locations`.`suburb`       AS `suburb`,
    `ifly`.`locations`.`Postcode`     AS `Postcode`,
    `ifly`.`locations`.`main_number`  AS `main_number`
  FROM `ifly`.`locations`;

