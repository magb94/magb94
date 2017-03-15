SET time_zone = "+01:00";


Create table `Categorie`(

	`idCat` int(2) NOT NULL AUTO_INCREMENT,
  	`nomCat` varchar(128) NOT NULL,
	PRIMARY KEY `idCat` (`idCat`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



INSERT INTO `Categorie` (`nomCat`) VALUES
("Alimentation"),
("Automobile"),
("Autres centres"),
("Beauté"),
("Culture et loisir"),
("Dépannage urgent"),
("Enfance et éducation"),
("Mode"),
("Moto et scooter"),
("Municipalité"),
("Numéros d'urgence"),
("Restauration"),
("Santé et soin"),
("Services"),
("Structures sociales"),
("Sport"),
("Tout pour la maison"),
("Travaux du batiment"),
("Utile et pratique"), 
("Voyage et déplacement");
