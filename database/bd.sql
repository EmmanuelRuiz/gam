CREATE DATABASE IF NOT EXISTS gam;
USE gam;

CREATE TABLE users(
id                  int(255) auto_increment not null,
role                varchar(20) not null,
name                varchar(100) not null,
plastname           varchar(100) not null,
mlastname           varchar(100) not null,
email               varchar(100),
password            varchar(255) not null,
image               varchar(255),
created_at          datetime,
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb CHARSET=utf8;

CREATE TABLE cenotes(
id                  int(255) auto_increment not null,
user_id             int(255) not null,
name                varchar(255) not null,
entitiName          varchar(100),
keySite             varchar(100),
coordinatesUTM      varchar(255),
kindOfContext       varchar(100),
dryCave             varchar(100),
equipment           text,
contextDescription  text,
relevantTraits      varchar(100),
preservationGeneral varchar(100),
alteration          text,
technicalDescription    varchar(100),
depth               varchar(255),
horizontalPenetration   varchar(255),
siteDimensions      varchar(255),
entranceDistance    varchar(255),
siteAssociated      varchar(100),
waterSamples        varchar(255),
typeOfWater         varchar(255),
contact             text,
exploredBy          varchar(255),
DocumentedBy        varchar(255),
inspectionDate      datetime DEFAULT NULL,
registrationBy      varchar(255),

siteCode            text,
coordinates         text,
state               varchar(100),
townQuintanaRoo     varchar(100),
townYucatan         varchar(100),
location			varchar(100),
characteristics     text,
typeOfContext       varchar(100),
conservationStatus  varchar(100),
flora               text,
fauna               text,
archaElements       varchar(100),
whichElements       varchar(100),
archaSurvey         varchar(100),
touristActivities   varchar(100),
whichActivities     varchar(100),
dateOfAnalisis      datetime DEFAULT NULL,
temperature         varchar(100),
turbidity           varchar(100),
ph                  varchar(100),
ammonium            varchar(100),
nitrites            varchar(100),
nitratos            varchar(100),
phosphates          varchar(100),
hardness            varchar(100),
detergents          varchar(100),
chlorine            varchar(100),
coliforms           varchar(100),
observations        text,

status      varchar(20),
image       varchar(255),
video_path  varchar(255),
created_at  datetime DEFAULT NULL,
updated_at  datetime DEFAULT NULL,
CONSTRAINT pk_cenotes PRIMARY KEY(id),
CONSTRAINT fk_cenotes_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb CHARSET=utf8;

CREATE TABLE comments(
id          	int(255) auto_increment not null,
cenote_id   	int(255) not null,
user_id     	int(255) not null,
body        	text not null,
created_at  	datetime DEFAULT NULL,
CONSTRAINT pk_comment PRIMARY KEY(id),
CONSTRAINT fk_comment_cenote FOREIGN KEY(cenote_id) REFERENCES cenotes(id),
CONSTRAINT fk_comment_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb CHARSET=utf8;

CREATE TABLE images(
id              int(255) auto_increment not null,
cenote_id    	int(255) not null,
image 			varchar(255),
CONSTRAINT pk_image PRIMARY KEY(id),
CONSTRAINT fk_image_cenote FOREIGN KEY(cenote_id) REFERENCES cenotes(id)
)ENGINE =InnoDb CHARSET=utf8;

CREATE TABLE videos(
id 		int(255) auto_increment not null,
cenote_id    	int(255) not null,
video           varchar(255),
CONSTRAINT pk_video PRIMARY KEY(id),
CONSTRAINT fk_video_cenote FOREIGN KEY(cenote_id) REFERENCES cenotes(id)
)ENGINE =InnoDb CHARSET=utf8;

ALTER TABLE cenotes
ADD FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE

ALTER TABLE comments
ADD FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE

ALTER TABLE comments
ADD FOREIGN KEY(cenote_id) REFERENCES cenotes(id) ON DELETE CASCADE ON UPDATE CASCADE

ALTER TABLE videos
ADD FOREIGN KEY(cenote_id) REFERENCES cenotes(id) ON DELETE CASCADE ON UPDATE CASCADE

ALTER TABLE images
ADD FOREIGN KEY(cenote_id) REFERENCES cenotes(id) ON DELETE CASCADE ON UPDATE CASCADE
