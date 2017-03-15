SET time_zone = "+01:00";

Create table `SousCategorie`(

	`idSousCat` int(3) NOT NULL AUTO_INCREMENT,
	`nomSousCat` varchar(64) NOT NULL,
	`idCat` int(2) references Categorie,
	PRIMARY KEY `idSousCat` (`idSousCat`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `SousCategorie` (`nomSousCat`,`idCat`) VALUES


		-- Alimentation --
("Boucheries - Charcuteries", 1),
("Boulangeries - Patisseries",1),
("Fromageries",1),
("Poissonneries",1),
("Traiteur - Vente à emporter",1),
("Vins et spiritueux",1),


		-- Automobile --
("Agents et concessionnaires",2),
("Carrosserie et peinture",2),
("Garages et réparation",2),
("Pare-brises",2),
("Remorquage automobile",2),

		-- Autres commerces --		
("Animalerie",3),
("Fleuriste",3),
("Jouets et Jeux videos",3),
("Librairie - Papeterie",3),
("Pressings - Laveries - Blanchisseries",3),

		-- Beauté --	
("Bronzage UV",4),
("Centres d'amincissement",4),
("Coiffeurs",4),
("Hamman",4),
("Instituts de beauté",4),
("Relaxation",4),

		-- Culture et loisirs --
("Associations - Clubs - Ecole",5),
("Bibliothèque",5),
("Conservatoire",5),
("Théâtre",5),

		-- Dépannage urgent -- 
("Chauffage dépannage",6),
("Electricité dépannage",6),
("Plomberie dépannage",6),
("Remorquage auto-moto",6),
("Serrurerie dépannage",6),
("Vitrerie dépannage",6),
		
		-- Enfance et education --
("Crèches",7),
("Ecoles maternelles privées",7),
("Enseignement professionnel",7),
("Lycées privés",7),
("Soutien scolaire",7),

		 -- Mode -- 	
("Bijouterie - Joaillerie",8),
("Bijoux fantaisie",8),
("Maroquinerie et articles de voyage",8),
("Parfumerie",8),
("Vêtements pour femme",8),

		-- Moto et scooter --	
("Agents - Concessionnaires motos",9),
("Entretien et réparation",9),
("Remorquage 2 roues",9),
		
		-- Municipalité --
("Député Maire",10),
("Hotel de ville",10),
("Les adjoints du maire",10),
("Les conseillers municipaux",10),
("Les maires adjoints chargés de quartier",10),
("Les relais mairies",10),

		
		-- Numéros d'urgence --
("Autres services d'urgence",11),
("Premiers secours",11),
("Hôpitaux",11),
("Urgences animaux",11),

		-- Restauration --
("Restaurants asiatique",12),
("Restaurants grill et tex mex",12),
("Restaurants italiens et pizzerias",12),
("Restaurants traditionnels",12),
("Restauration et livraison à domicile",12),

		-- Santé et soin --
("Ambulance",13),
("Infirmiers",13),
("Laboratoires d'analyse",13),
("Matériels et services pour handicapés",13),
("Opticiens",13),
("Sages-femmes",13), 
		
		-- Services -- 
("Agences immobillier",14),
("Assurances",14),
("Déménagements",14),
("Informatique (dépannage et matériels)",14),
("Pompes funèbres",14),
("Services à la personne",14),

		-- Structures sociales --
("Aide aux personnes handicapées",15),
("Allocations familiales",15),
("Assurance maladie",15),
("Structure sociale départementales",15),

		-- Sport --
("Activités municipales",16),
("Associations sportives",16),
("Club de remise en forme",16), 
("Equipements sportifs",16),
("Leçons d'arts martiaux",16),
("Service municipal des sports",16),

		-- Tout pour la maison --
("Antennes - Paraboles",17),
("Cadeaux et arts de la table",17),
("Fioul - Bois - Charbon",17),
("Ménager - TV - Hifi - Vidéo",17),
("Mobiliers d'intérieur",17),

		-- Travaux du bâtiment --
("Chauffage et installation",18),
("Contrôle d'accès- Alarme",18),
("Couvertures - toitures",18),	
("Electricité générale",18),
("Peinture - Rénovation",18),
("Plomberie - Salle de bains - Sanitaires",18),
("Serrurerie - Portes et portails",18),
("Volets - Fenêtres",18),
		
		-- Utile et pratique --
("Adresses utiles départementales",19),
("Assurance maladie",19),
("Cultes",19),
("Enlèvement d'encombrant",19),	
("Marchés",19),
("Police municipale",19),
	
		-- Voyage et déplacement --  
("Aéroport",20),
("Hôtel",20),
("Informations routières",20),
("Taxi et transport de voyageurs",20),
("Trains - TGV",20);