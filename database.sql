create table tb_artist(
artist_id smallint (5) not null auto_increment,
artist_name varchar (128) not null,
primary key (artist_id)
);

create table tb_album(
artist_id smallint (5) not null,
album_id smallint (4) not null,
album_name char (128) not null,
primary key (album_id),
foreign key (artist_id) references tb_artist (artist_id)
);


create table tb_track(
track_id smallint (3) not null auto_increment,
track_name char (128) not null,
artist_id smallint (5) not null,
album_id smallint (4) not null,
time decimal (5,2) not null,
primary key (track_id),
foreign key (artist_id) references tb_artist (artist_id),
foreign key (album_id) references tb_album (album_id)
);

create table tb_played(
artist_id smallint (5) not null,
album_id smallint (4) not null,
track_id smallint (3) not null auto_increment,
played timestamp not null,
primary key (played),
foreign key (artist_id) references tb_artist (artist_id),
foreign key (album_id) references tb_album (album_id),
foreign key (track_id) references tb_track (track_id)
);

CREATE TABLE tb_user(
	user_id int(11) AUTO_INCREMENT,
	user_name varchar(100) NOT NULL,
	user_pass varchar(256) NOT NULL,
	user_level TINYINT(1) DEFAULT'0',
	PRIMARY KEY (user_id),
	UNIQUE KEY (user_name)
);