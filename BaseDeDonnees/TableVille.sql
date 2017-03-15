SET time_zone = "+01:00";


Create table `Ville`(

	`idVille` int(2) NOT NULL AUTO_INCREMENT,
  	`ville` varchar(64) NOT NULL,
  	`CP` int(5) NOT NULL,
	PRIMARY KEY `idVille` (`idVille`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


INSERT INTO `Ville` (`ville`,`CP`) VALUES
("Alforville",94140),
("Champigny",94500),
("Chennevieres",94430),
("Créteil",94000),
("Joinville Le Pont",94340),
("Limeil Brevannes",94450),
("Saint Maur - La Varenne",94100),
("Villiers sur Marne",94350);