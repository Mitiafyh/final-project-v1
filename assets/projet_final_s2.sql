create database projet_final_s2;
use projet_final_s2;
create table PF_membre(
    id_membre int auto_increment,
    nom varchar(50),
    date_de_naissance Date,
    genre varchar(10),
    email varchar(50),
    ville varchar(10),
    mdp varchar(50),
    image_profil varchar(50)

);

create table PF_categorie_objet(
    id_categorie int,
    nom_categorie varchar(50)
);

create table PF_objet(
    id_objet int,
    nom_objet varchar(50),
    id_categorie int,
    id_membre int
);

create table PF_images_objet(
    id_image int,
    id_objet int,
    nom_image varchar(50)
);

create table PF_emprunt(
    id_emprunt int,
    id_objet int,
    id_membre int,
    date_emprunt Date,
    date_retour Date
);


INSERT INTO objet (id_objet, nom_objet, id_categorie, id_membre) VALUES
(1, 'Sèche-cheveux', 1, 1),
(2, 'Miroir de poche', 1, 1),
(3, 'Tournevis', 2, 1),
(4, 'Perceuse', 2, 1),
(5, 'Clé à molette', 3, 1),
(6, 'Batteur électrique', 4, 1),
(7, 'Fer à lisser', 1, 1),
(8, 'Pinceau de maquillage', 1, 1),
(9, 'Four électrique', 4, 1),
(10, 'Casserole', 4, 1),

(11, 'Tournevis', 2, 2),
(12, 'Marteau', 2, 2),
(13, 'Grille-pain', 4, 2),
(14, 'Blender', 4, 2),
(15, 'Compresseur', 3, 2),
(16, 'Fer à repasser', 1, 2),
(17, 'Tondeuse', 3, 2),
(18, 'Étagère en kit', 2, 2),
(19, 'Brosse à cheveux', 1, 2),
(20, 'Râpe à légumes', 4, 2),

(21, 'Brosse à ongles', 1, 3),
(22, 'Trousse maquillage', 1, 3),
(23, 'Visseuse', 2, 3),
(24, 'Scie manuelle', 2, 3),
(25, 'Cric hydraulique', 3, 3),
(26, 'Multimètre', 3, 3),
(27, 'Robot pâtissier', 4, 3),
(28, 'Poêle anti-adhésive', 4, 3),
(29, 'Lime à ongles', 1, 3),
(30, 'Gant de cuisine', 4, 3),

(31, 'Crème visage', 1, 4),
(32, 'Coupe-ongles', 1, 4),
(33, 'Clé plate', 2, 4),
(34, 'Niveau à bulle', 2, 4),
(35, 'Manomètre', 3, 4),
(36, 'Testeur de batterie', 3, 4),
(37, 'Friteuse', 4, 4),
(38, 'Mixeur plongeant', 4, 4),
(39, 'Peigne', 1, 4),
(40, 'Plat en verre', 4, 4);