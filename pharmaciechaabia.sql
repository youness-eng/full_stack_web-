-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2026 at 05:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmaciechaabia`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID_CATEGORIE` int(11) NOT NULL,
  `NOM_CATEGORIE` varchar(30) DEFAULT NULL,
  `INTERET` varchar(40) DEFAULT NULL,
  `DEFINITION` varchar(400) DEFAULT NULL,
  `IMAGE_CATEGORIE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID_CATEGORIE`, `NOM_CATEGORIE`, `INTERET`, `DEFINITION`, `IMAGE_CATEGORIE`) VALUES
(1, 'Produit pharmaceutique', 'Santé', 'Les produits pharmaceutiques –notamment les médicaments– sont un élément fondamental tant de\r\n                            la médecine moderne que de la médecine traditionnelle.', 'images/pharmaceutical products.png'),
(2, 'La parapharmacie', 'Hygiène et soin', 'Laparapharmacie met à disposition des produits d\'hygiène, de beauté ou encore de soins et ses ventes sont sans prescription médicale.', 'images/drugstore products.png'),
(3, 'La phytothérapie', ' Se soigner avec les plantes', 'La phytothérapie, c\'est l\'emploi de plantes ou de médicaments à base de plantes pour soigner\r\n                            naturellement les différents maux du\r\n                            corps humain.\r\n\r\n\r\n                      ', 'images/phytothérapie.jpg'),
(4, 'Produit diététique', 'L ’ alimentation', 'Il s\'agit de produits tels que les laits et petits pots pour bébés, les substituts de repas,\r\n                            les produits pour sportifs ou pour intolérants au gluten, les produits d\'alimentation\r\n                            entérale.', 'images/Produit diététique.png'),
(5, 'Préparation pharmaceutique', 'Officinales et magistrales ', 'Les préparations pharmaceutiques sont des médicaments fariqués en pharmacie par un\r\n                            pharmacien ou un préparateur en pharmacie.', 'images/preparationPharmacitique.png');

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `ID_COMMANDE` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `QUANTITE_TOTALE` int(11) DEFAULT NULL,
  `MONTANT_TOTAL` float DEFAULT NULL,
  `STATUT` varchar(30) DEFAULT NULL,
  `DATE_STATUT` timestamp NULL DEFAULT current_timestamp(),
  `DATE_COMMMANDE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`ID_COMMANDE`, `ID_UTILISATEUR`, `QUANTITE_TOTALE`, `MONTANT_TOTAL`, `STATUT`, `DATE_STATUT`, `DATE_COMMMANDE`) VALUES
(6, 21, 4, 530, 'en-cours', '2021-06-23 22:26:03', '2021-06-23 22:26:03'),
(7, 21, 3, 90, 'preparer', '2021-06-23 22:42:33', '2021-06-23 22:33:45'),
(8, 21, 6, 895, 'en-cours', '2021-06-23 22:34:14', '2021-06-23 22:34:14'),
(9, 21, 6, 1260, 'effectuer', '2021-06-23 22:48:29', '2021-06-23 22:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `concerner`
--

CREATE TABLE `concerner` (
  `ID_COMMANDE` int(11) NOT NULL,
  `ID_PRODUIT` int(11) NOT NULL,
  `QUANTITE_PRODUIT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `concerner`
--

INSERT INTO `concerner` (`ID_COMMANDE`, `ID_PRODUIT`, `QUANTITE_PRODUIT`) VALUES
(6, 4, 1),
(6, 5, 2),
(6, 7, 1),
(7, 8, 1),
(7, 9, 2),
(8, 2, 3),
(8, 25, 2),
(8, 26, 1),
(9, 4, 4),
(9, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `marques`
--

CREATE TABLE `marques` (
  `ID_MARQUE` int(11) NOT NULL,
  `NOM_MARQUE` varchar(30) DEFAULT NULL,
  `LOGO_MARQUE` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marques`
--

INSERT INTO `marques` (`ID_MARQUE`, `NOM_MARQUE`, `LOGO_MARQUE`) VALUES
(1, 'Oral-B', 'images/marques/orale-b.jpg'),
(2, 'Nuxe', 'images/marques/NUXE.jpg'),
(3, 'Sensibio', 'images/marques/Sensibio.png'),
(4, 'Bioderma ', 'images/marques/bioderma .jpg'),
(5, 'Nestle', 'images/marques/nestle.png'),
(6, 'Sanoflore', 'images/marques/Sanoflore.jpg'),
(7, 'Nestegg', 'images/marques/nestegg.png'),
(10, 'Ucron', 'images/marques/ucron.webp'),
(11, 'Greens', 'images/marques/Greens Idea.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages_ordonnance`
--

CREATE TABLE `messages_ordonnance` (
  `ID_MSG` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `ID_DESTINATAIRE` int(11) DEFAULT NULL,
  `MESSAGE` varchar(200) DEFAULT NULL,
  `ORDONNANCE` varchar(60) DEFAULT NULL,
  `STATUT` varchar(40) DEFAULT NULL,
  `DATE_MESSAGE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages_ordonnance`
--

INSERT INTO `messages_ordonnance` (`ID_MSG`, `ID_UTILISATEUR`, `ID_DESTINATAIRE`, `MESSAGE`, `ORDONNANCE`, `STATUT`, `DATE_MESSAGE`) VALUES
(20, 21, NULL, 'Bonjour Dr Ahmed. Cette ordonnance contient 3 medicments.Ils sont pour mal de crâne.', 'images/Ordonnace/ordonnace3.jpg', 'en-cours', '2021-06-23 21:42:45'),
(21, 21, NULL, 'slaut Docteur cette ordonannce contient les medicament de douleur.', 'images/Ordonnace/ordonnace2.jpg', 'en-cours', '2021-06-23 21:45:47'),
(22, 4, 21, 'Bien recue. Demain si vous avez le temps vous pouvez les collectez.', 'NULL', NULL, '2021-06-23 21:52:55'),
(23, 4, 21, 'Les produits que vous envoyez dans la prescription de l\'ordonnance sont preparer', 'NULL', NULL, '2021-06-23 21:57:29'),
(24, 21, NULL, 'test', 'images/Ordonnace/ordonnace3.jpg', 'en-cours', '2021-06-24 12:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `messages_pharmacien`
--

CREATE TABLE `messages_pharmacien` (
  `ID_MESSAGE` int(11) NOT NULL,
  `OBJET` varchar(20) DEFAULT NULL,
  `MESSAGE` varchar(200) DEFAULT NULL,
  `EMAIL` varchar(40) DEFAULT NULL,
  `DATE_MESSAGE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages_pharmacien`
--

INSERT INTO `messages_pharmacien` (`ID_MESSAGE`, `OBJET`, `MESSAGE`, `EMAIL`, `DATE_MESSAGE`) VALUES
(9, 'Probleme', 'Salut Mr Abdlah. J\'ai une probleme de connexion a mon comte.J\'ai oblie le code', 'raid@gmail.com', '2021-06-01 14:38:24'),
(10, 'Question', 'Est possible pour moi de changer le rendue vous jusqu\'a demain', 'redoune123@gmail.com', '2021-06-01 14:39:06'),
(12, 'Proposition', 'Salut Monsieur Abdlah je voux travaille dans votre phamracie.', 'med2001@gmail.com', '2021-06-01 14:39:34'),
(13, 'Stage', 'Salut monsieur Abdllah. Je veux passer un stage dans votre pharmacie', 'Youness01@gmail.com', '2021-06-01 14:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `ID_PRODUIT` int(11) NOT NULL,
  `CODE_BARRES` bigint(11) NOT NULL,
  `ID_SSCATEGORIE` int(11) NOT NULL,
  `ID_MARQUE` int(11) NOT NULL,
  `NOM` varchar(40) DEFAULT NULL,
  `IMAGE` varchar(80) DEFAULT NULL,
  `PRIX` double DEFAULT NULL,
  `PRIX_PROMO` float DEFAULT NULL,
  `DESCRIPTION` varchar(500) DEFAULT NULL,
  `INDICATIONS` varchar(1000) DEFAULT NULL,
  `CONTRE_INDICATIONS` varchar(500) DEFAULT NULL,
  `EFFETS_SECONDAIRES` varchar(800) DEFAULT NULL,
  `INFORMATIONS_SUPPLEMENTAIRES` varchar(500) DEFAULT NULL,
  `QUANTITE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`ID_PRODUIT`, `CODE_BARRES`, `ID_SSCATEGORIE`, `ID_MARQUE`, `NOM`, `IMAGE`, `PRIX`, `PRIX_PROMO`, `DESCRIPTION`, `INDICATIONS`, `CONTRE_INDICATIONS`, `EFFETS_SECONDAIRES`, `INFORMATIONS_SUPPLEMENTAIRES`, `QUANTITE`) VALUES
(2, 3401345935571, 5, 3, ' Sensibio H2O ', 'images/Produits/Bioderma Sensibio H2O .webp', 125, NULL, 'Créaline H2O est la 1re et la seule eau micellaire dermatologique à présenter une parfaite analogie biologique avec la peau.\r\nSes esters d’acides gras, constitutifs des micelles, sont similaires aux phospholipides des membranes des cellules cutanées et participent à la reconstitution naturelle du film hydrolipidique de la peau.\r\nFormule sans parfum. Sans alcool. Sans paraben. Hypoallergénique.', 'Matin et/ou soir, 7 jours/7 :\r\n    Imbibez un coton de Créaline H2O.\r\n    Nettoyez et/ou démaquillez votre visage et vos yeux avec douceur.\r\n    Renouvelez l’application jusqu’à ce que le coton soit propre.\r\n    Tamponnez votre visage avec une serviette en coton propre\r\n', 'Hypersensibilité à l\'un des composants', 'Parfois très agressifs, les traitements contre l’acné peuvent avoir des effets secondaires importants. Parmi ces effets indésirables, on peut citer l’irritation et la sécheresse cutanée, la photosensibilisation et l’antibiorésistance.\r\n\r\nLe premier de ces effets secondaires est l’irritation et la sécheresse cutanée. Peu importe le traitement de l’acné que vous suivez, son objectif est de réduire la production de sébum. Il est donc logique que cela puisse entraîner une sécheresse de la peau et des muqueuses.\r\n\r\nLe second des effets secondaires mentionnés comme conséquence des traitements de l’acné est la photosensibilisation. Ici, on pointe surtout du doigt les antibiotiques et l’isotrétinoïne. De façon générale, il faut garder en mémoire que les traitements de l’acné assèchent la peau.', 'Ce qui passe dans votre peau:\r\nTous les produits du Laboratoire BIODERMA sont formulés selon le principe d\'écobiologie qui est au cœur de la démarche NAOS, pour respecter l\'écosystme de votre peau et préserver sa santé durablement', 40),
(4, 4210201177166, 3, 1, 'Brosse À Dents', 'images/Produits/oral-b.webp', 400, 300, 'Découvrez Oral-B Smart 4, par la marque qui a lancé la toute première brosse à dents rechargeable connectée. L’élégant manche blanc de la brosse à dents électrique 4000N améliore vos habitudes de brossage. Il se connecte facilement à l’application Oral-B sur votre téléphone et vous guide en temps réel, pour un meilleur brossage. Améliorez vos habitudes de brossage : la brossette ronde unique de Oral-B s’occupe du reste.', ' Humidifiez la brossette avant d’y déposer du dentifrice. Placez la brosse à dents dans votre bouche et mettez-la en marche. Déplacez lentement la brossette d’une dent à l’autre. Maintenez la brossette en place quelques secondes avant de passer à la dent suivante. Brossez les gencives aussi bien que les dents en commençant par l’extérieur, puis l’intérieur, avant de terminer par les surfaces de mastication. ', 'NULL', 'NULL', 'Jusqu’à 100 % de plaque retirée en plus : la brossette ronde nettoie mieux, pour des gencives plus saines en 30 jours par rapport à une brosse à dents manuelle,\r\nProtégez vos gencives : le contrôle de la pression réduit la vitesse du brossage et émet un signal si vous exercez une pression trop élevée, et Rend vos dents plus blanches en douceur dès le premier jour en éliminant les taches de surface.', 10),
(5, 5410076854493, 3, 1, 'ProExpert Fil ', 'images/Produits/ProExpert Fil Dentaire .webp', 50, 40, 'La meilleure technologie de fil dentaire d\'Oral-B grâce au matériau breveté en fibres ePTFE\r\n\r\nLe goût unique de la menthe rafraîchissante rend l\'utilisation du fil dentaire particulièrement agréable.\r\n\r\nSon matériau en fibres glisse facilement et confortablement dans les espaces interdentaires et élimine efficacement la plaque dentaire.\r\n\r\nPour des gencives plus saines en seulement 2 semaines ', '1. Peler\r\n- Il est préférable de ne pas vous brosser les dents juste avant d\'appliquer les bandes.\r\n- Ouvrez la pochette en aluminium et retirez le produit. Manipulez les bandelettes avec les mains sèches.\r\n- Décollez la bande de la doublure du support.\r\n- Pour une application plus facile, appliquez d\'abord la bande inférieure.\r\n\r\n2. Appliquer\r\n- À l\'aide d\'un miroir, appliquez le côté gel de la bandelette sur vos dents de devant.\r\n- Alignez les bandes avec la ligne des gencives et appuyez doucement pour un bon contact.\r\n- Pliez le reste de la bandelette derrière vos dents pour la maintenir en place.\r\n\r\n3. Révéler\r\n- Portez les bandes Oral-B 3D White Whitestrips pendant une heure, retirez-les, puis jetez-les. ', NULL, NULL, 'Sa longueur est 40 m ', 20),
(7, 3401329447687, 2, 4, 'Bioderma Crème', 'images/Produits/Bioderma Hydrabio Crème.webp', 200, 150, 'Le complexe biologique breveté Aquagenium™ est un réel générateur d’hydratation, immédiat et durable :\r\n\r\nLa Vitamine PP renforce la résistance de la peau et son imperméabilité.\r\nL’extrait de pépin de pomme stimule l\'expression des \"Aquaporines\", réels canaux naturels permettant la circulation de l\'eau dans la peau.', ' Le soin onctueux générateur d\'hydratation et d\'éclat intense. \r\n Appliquez matin et/ou soir sur votre visage et votre cou nettoyés. ', 'De pas utiliser par les gens mois de 18 ans car ils peuvent avoir des complications au niveau de la peau', 'NULL', 'La vitamine E contribue à protéger la peau du stress oxydatif, des radicaux libres et à prévenir le vieillissement cutané.', 11),
(8, 7613035006096, 7, 5, 'Nestle', 'images/Produits/nestle.webp', 40, 30, 'e lait maternel est l´aliment idéal pour bébé. Il est recommandé d´allaiter au moins jusqu´aux 6 mois car le lait maternel couvre les besoins nutritionnels spécifiques des bébés et contient des anticorps qui les protègent de maladies.', 'Si vous devez ou souhaitez utiliser une préparation infantile, veillez à respecter rigoureusement les indications de préparation. Une préparation ou utilisation inexactes pourraient nuire à la santé de l´enfant.\r\nPour les nouveau-nés si ils ne sont pas allaitées au sein', 'Prenez attention à une alimentation variée et équilibrée et un mode de vie sain.\r\nContribue au système immunitaire et au développement cognitif de votre bébé.', NULL, 'Fabricant dans Nestlé Belgilux, Rue de Birmingham 221, 1070 Anderlecht, Belgien', 100),
(9, 3401399372575, 2, 4, 'Mains Crème ', 'images/Produits/Mains Crème Réparatrice.webp', 40, 30, 'Le soin quotidien réparateur Atoderm Mains renforce le film hydrolipidique et protège durablement la peau, restaurant ainsi sa fonction biologique de barrière naturelle.\r\n\r\n    Formule parfumée\r\n    Sans paraben\r\n    Hypoallergénique\r\n    Formule non collante\r\n', 'Plusieurs fois par jour, 7 jours/7\r\n\r\n    Appliquez en massant délicatement Atoderm Mains sur vos mains préalablement nettoyées et séchées.\r\n    Renouvelez l’application aussi souvent que nécessaire et après un contact prolongé avec l’eau.\r\n\r\n\r\n', NULL, NULL, 'les bénéfices aont :\r\n    Véritable \"gant\" régénérant et nutritif, Atoderm Mains régénère les peaux les plus abîmées et soulage rapidement les mains desséchées, agressées, fréquemment sujettes à des problèmes dermatologiques (sécheresses irritatives, gerçures, craquelures…).\r\n    La texture riche et onctueuse offre une sensation immédiate et durable de bien-être.', 14),
(22, 3337873401373, 7, 6, 'Crème Magnifica', 'images/Produits/Sanoflore Crème Magnifica.webp', 300, NULL, 'Peau purifiée grâce aux propriétés anti-bactériennes de 9 huiles essentielles et du totum de Menthe poivrée Bio. Peau hydratée grâce à la glycérine végétale. Grain de peau affiné, peau fraîche.', 'Appliquez une noisette de Crème magnifica sur l\'ensemble du visage et du cou, en évitant le contour des yeux matin et soir pour que la peau garde une hydratation optimale et une matité tout en lumière.', NULL, NULL, 'Conditionnement est : Tube 40 ml', 30),
(23, 200317159, 4, 6, ' Huiles du peau', 'images/Produits/Huiles Essentielles.webp', 500, NULL, 'Le Spray Assainissant Puressentiel est une formule brevetée de 41 huiles essentielles 100% pures et naturelles.\r\n\r\nEfficacité prouvée : Elimine plus de 99,9% des bactéries et virus.\r\nSon efficacité a été scientifiquement prouvée sur les Virus, Bactéries et Moisissures.', 'Traite et purifie l’air intérieur pollué en détruisant les virus, bactéries, moisissures… et permet de se débarrasser des mauvaises odeurs.\r\nTraite les surfaces textiles pour éliminer mites de vêtements, punaises de lit et les odeurs tenaces (d’animaux, chaussures, tabac…).\r\nLe spray assainissant peut traiter les textiles d\'ameublement de type rideaux, moquette, tapis, mobilier.', NULL, NULL, 'Principaux actifs :\r\nARBRE À THÉ, \r\nCITRON, \r\nMENTHE POIVRÉE.\r\nANETH', 10),
(24, 3400936751934, 8, 7, 'Comprimé egg ', 'images/Produits/Comprimé pelliculé sécable.webp', 30, NULL, 'La posologie recommandée est de ½ à 1 comprimé par jour chez l\'adulte.\r\nChez l\'adulte, la posologie peut être portée à 2 comprimés par jour si nécessaire.\r\nChez le sujet âgé, l\'insuffisant rénal ou hépatique, la posologie la plus faible est recommandée.', 'Ce médicament est préconisé dans l\'insomnie occasionnelle chez l\'adulte.\r\nLa posologie recommandée est de ½ à 1 comprimé par jour chez l\'adulte.\r\nChez l\'adulte, la posologie peut être portée à 2 comprimés par jour si nécessaire.\r\nChez le sujet âgé, l\'insuffisant rénal ou hépatique, la posologie la plus faible est recommandée.', 'Ne prenez jamais DONORMYL 15 mg, comprimé pelliculé sécable dans les cas suivants:\r\n· allergie connue aux antihistaminiques,\r\n· antécédent de glaucome aigu (augmentation de la pression à l\'intérieur de l\'œil),\r\n· difficulté pour uriner chez l\'homme (d\'origine prostatique ou autre),\r\n· chez l\'enfant de moins de 15 ans.\r\nEN CAS DE DOUTE, IL EST INDISPENSABLE DE DEMANDER L\'AVIS DE VOTRE MEDECIN OU DE VOTRE PHARMACIEN.', NULL, 'Présentation : Boîte de 1 Tube de 10 Comprimé pelliculé sécable', 5),
(25, 3400939069425, 2, 7, 'Dulcolax® 5 mg', 'images/Produits/Dulcolax® 5 mg.png', 190, NULL, 'Ce médicament est préconisé en cas de constipation occasionnelle.', ' Chez l\'adulte : 1 ou 2 comprimés au maximum par jour.\r\n Les enfants jusqu\'à 12 ans souffrant de constipation chronique ou persistante doivent être traités uniquement sous la direction d\'un médecin.\r\n\r\nChez l\'enfant de plus de 6 ans : l\'utilisation d\'un laxatif stimulant est exceptionnelle et exclusivement sur prescription médicale: 1 comprimé par jour pendant deux à dix jours.', 'Ce médicament NE DOIT PAS ETRE UTILISE dans les cas suivant :\r\n· allergie connue à l’un des composants du produit,\r\n· déshydratation sévère,\r\n· chez l\'enfant de moins de 6 ans,\r\n· certaines maladies de l\'intestin et du colon (recto-colite et autre maladie inflammatoire),', 'NULL', 'Présentation : Boîte de', 20),
(26, 5411386890768, 7, 11, 'Fruits & Fibres', 'images/Produits/ORTIS® Fruits & Fibres.webp', 140, NULL, 'Complément alimentaire à utiliser dans le cadre d’une alimentation variée, équilibrée et d’un mode de vie sain.', 'La rhubarbe aide à faciliter le transit intestinal.\r\nLa figue contribue à une bonne santé intestinale.\r\nLe tamarin est reconnu pour favoriser le transit par un effet de lest.\r\nLe carvi aide en cas de ballonnements.', 'Ne pas administrer aux enfants de moins de 12 ans. Consultez votre médecin en cas de grossesse ou d’allaitement. Pas d’utilisation prolongée sans avis d’un spécialiste. Il est conseillé de ne pas dépasser la quantité journalière recommandée. Tenir hors de portée des jeunes enfants.', NULL, 'Poids net : 24 cubes ', 5),
(27, 3300014587656, 2, 10, 'Inovance ® Transit', 'images/Produits/inovance-transit.jpg', 150, NULL, 'Un total de 6.5 g de FIBRES (1/5 des apports journaliers recommandés en fibres).. Les fibres de pomme et de pruneau sont riches en cellulose et hémicellulose.. Les fibres de chicorée confèrent un effet prébiotique favorable à la flore intestinale.. Sans sucres ajoutés - Sans aspartame - Sans colorants.. Arôme naturel banane..', ' J’ai l’intestin paresseux. Mon transit est ralenti, irrégulier.\r\nÀ diluer dans un grand verre d’eau. Reconstitution au shaker préconisée. 1 sachet (matin) à 2 sachets (1 matin, 1 soir) selon les besoin', 'Ne pas utiliser par les enfants mois de 6 ans.', NULL, 'Ingrédients : fibres de pommes (Malus spp.), fructo-oligosaccharides de chicorée, poudre de pruneau (Prunus spp.), xylitol, épaississant (xanthane E415).', 20),
(29, 3400935358363, 12, 4, 'Zymad®', 'images/Produits/zymad.webp', 50, 45, 'Sa mise en œuvre est recommandée chez tous les nourrissons et les jeunes enfants, dans les conditions actuelles de vie en cas d\'exposition insuffisante au soleil (circulaires ministérielles du 21 février 1963 et 6 janvier 1971) en raison de la faible teneur des aliments en vitamine D.', 'prématuré: 4 à 5 gouttes par jour', 'Ne prenez jamais ZYMAD 10 000 UI /ml, solution buvable en gouttes en cas de:\r\n· allergie connue à la vitamine D, ou à l\'un des autres constituants;', 'Si vous avez l\'impression que l\'effet de ZYMAD 10 000 UI /ml, solution buvable en gouttes est trop fort ou trop faible, consultez votre médecin ou votre pharmacien.', 'Après utilisation, bien revisser jusqu’au bout le bouchon afin d’enclencher le système de sécurité.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `ID_PROFIL` int(11) NOT NULL,
  `NOM_PROFILE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`ID_PROFIL`, `NOM_PROFILE`) VALUES
(1, 'client'),
(2, 'employe'),
(3, 'pharmacien');

-- --------------------------------------------------------

--
-- Table structure for table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `ID_SCATEGORIE` int(11) NOT NULL,
  `ID_CATEGORIE` int(11) NOT NULL,
  `NOM_SCATEGORIE` varchar(30) DEFAULT NULL,
  `IMAGE_SCATEGORIE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sous_categories`
--

INSERT INTO `sous_categories` (`ID_SCATEGORIE`, `ID_CATEGORIE`, `NOM_SCATEGORIE`, `IMAGE_SCATEGORIE`) VALUES
(1, 2, 'Cosmétique', 'images/cosmétique.svg'),
(2, 2, 'Accessoire medical', 'images/Accessoire medical.svg'),
(3, 2, 'Matériel medical', 'images/Matériel medical.svg'),
(4, 5, 'Préparation pharmaceutique', NULL),
(5, 3, 'La phytothérapie', NULL),
(6, 4, 'Produit diététique', NULL),
(13, 1, 'Avec ordonnance', 'images/avecOrdonnance.svg'),
(15, 1, 'Sans ordonnance', 'images/sansOrdonnance.svg');

-- --------------------------------------------------------

--
-- Table structure for table `sous_sous_categories`
--

CREATE TABLE `sous_sous_categories` (
  `ID_SSCATEGORIE` int(11) NOT NULL,
  `ID_SCATEGORIE` int(11) NOT NULL,
  `NOM_SSCATEGORIE` varchar(30) DEFAULT NULL,
  `IMAGE_SSCATEGORIE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sous_sous_categories`
--

INSERT INTO `sous_sous_categories` (`ID_SSCATEGORIE`, `ID_SCATEGORIE`, `NOM_SSCATEGORIE`, `IMAGE_SSCATEGORIE`) VALUES
(1, 1, 'Visage', 'images/SSCategorie/visage.svg'),
(2, 1, 'Corps', 'images/SSCategorie/Corps.svg'),
(3, 1, 'Hygiène', 'images/SSCategorie/hygiène.svg'),
(4, 1, 'Cheveu', 'images/SSCategorie/Cheveu.svg'),
(5, 1, 'Maquillage', 'images/SSCategorie/Maquillage.svg'),
(7, 6, 'Produit diététique', NULL),
(8, 4, 'Préparation pharmaceutique', NULL),
(9, 4, 'Préparation pharmaceutique', NULL),
(10, 5, 'La phytothérapie', NULL),
(12, 15, 'Visage', NULL),
(13, 13, 'Avec ordonnance', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `ID_UTILISATEUR` int(11) NOT NULL,
  `ID_PROFIL` int(11) NOT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(30) DEFAULT NULL,
  `TELEPHONE` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(40) DEFAULT NULL,
  `MOT_DE_PASSE` varchar(255) DEFAULT NULL,
  `DATE_INSCRIPTION` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID_UTILISATEUR`, `ID_PROFIL`, `NOM`, `PRENOM`, `TELEPHONE`, `EMAIL`, `MOT_DE_PASSE`, `DATE_INSCRIPTION`) VALUES
(2, 2, 'Bouhjar', 'Youness', '0642345006', 'youness@gmail.com', '$2y$10$YuMjs8ZUMufBQ6XGG760zuZFx3vB/kjL3Goe7S8acLU8JJJg6LFfS', '2021-06-01 14:42:04'),
(3, 1, 'Bouhjar', 'Mohamed', '0742384760', 'med@gmail.com', '$2y$10$hVxnR00U7diTXQgSITXNJ.snfwOegagVsu/LOgpUTGdViPr2dxEAi', '2021-06-02 10:35:49'),
(4, 3, 'Abdellah', 'Kadi', '0642373006', 'admin@gmail.com', '$2y$10$VhgUZYPsSM0UEYq2.wn2Mu7rmozoSPymUYafCzfsQRkUNZTFywIEe', '2021-06-07 06:52:15'),
(8, 1, 'bouhjar', 'youness', '0642374003', 'younessb@gmail.com', '$2y$10$GVcWVq9pEmvmRscQsWQ8uOae1JG2vuhnGby4bYoVJEKu3CBArs3Ry', '2021-06-21 00:11:11'),
(9, 1, 'test', 'test', '0676535467', 'test12@gmail.com', '$2y$10$.vRUkLHj8gmCMA6iPRce9uV7KgyA52EJPebM3vg8iCTyi.PuCbBtu', '2021-06-19 19:44:18'),
(13, 1, 'blue', 'blue', '0642374003', 'blue@gmail.com', '$2y$10$9SNL81kUdVODNotjv2W.L.JvMcJ67ntz5nc2/HdVZpPXxtK8TBeJm', '2021-06-22 01:43:34'),
(14, 1, 'test', 'test', '0642373400', 'tes22t@gmail.com', '$2y$10$2Njcbs8v1sA4Ptss7C.lxOy07Noxz8jtOlCqBfXwUCMUnhZCCmTVO', '2021-06-22 01:45:54'),
(15, 1, 'test', 'test', '0642373400', 'test222@gmail.com', '$2y$10$qv2fJr2AC5KoPc86/S/Z3O8ZyMjaVQ8VPUoo5qXWibo8jIJZMn5hy', '2021-06-22 01:46:31'),
(16, 1, 'test', 'test', '0642394990', 'tes222t@gmail.com', '$2y$10$yxHHOIOlitoqDmiUlzoEm.c9a6dHvg/Ccs9EM72Wpb7kfv0dpaDda', '2021-06-22 01:46:59'),
(18, 1, 'test', 'test', '0642738843', 'test2@gmail.com1', '$2y$10$f2N05kvPQJlkwVqsC0xZMOsm48DDNjAb1eiuDzg.MKNIPD3kTjgEG', '2021-06-22 01:49:25'),
(19, 1, 'Bouhjar', 'Youness', '0642738843', 'test@gmail.com', '$2y$10$Oj49B9p5nO8zLuqwYAhUwOC0Uc2hvRBZZyZUJe6JoZByQkwnJ1K.i', '2021-06-22 01:49:36'),
(20, 1, 'test', 'test', '0631242004', 'test123@gmail.com', '$2y$10$Jpauh2DCxP5FMpNCWV9XO.HpuMHRqJZfPV6HihyqfrX.ocJTGHOYC', '2021-06-22 19:41:34'),
(21, 1, 'client', 'client', '0642374005', 'client@gmail.com', '$2y$10$yY7l0sdsyrfMhWAHl7hNEO/oUCE5K85wX0yEwICC8B.utM.ksnl66', '2021-06-23 21:39:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID_CATEGORIE`),
  ADD UNIQUE KEY `CATEGORIES_PK` (`ID_CATEGORIE`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`ID_COMMANDE`),
  ADD UNIQUE KEY `COMMANDES_PK` (`ID_COMMANDE`),
  ADD KEY `GERER2_FK` (`ID_UTILISATEUR`);

--
-- Indexes for table `concerner`
--
ALTER TABLE `concerner`
  ADD PRIMARY KEY (`ID_COMMANDE`,`ID_PRODUIT`),
  ADD UNIQUE KEY `CONCERNER_PK` (`ID_COMMANDE`,`ID_PRODUIT`),
  ADD KEY `CONCERNE2_FK` (`ID_COMMANDE`),
  ADD KEY `CONCERNE_FK` (`ID_PRODUIT`);

--
-- Indexes for table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`ID_MARQUE`),
  ADD UNIQUE KEY `MARQUES_PK` (`ID_MARQUE`);

--
-- Indexes for table `messages_ordonnance`
--
ALTER TABLE `messages_ordonnance`
  ADD PRIMARY KEY (`ID_MSG`),
  ADD UNIQUE KEY `MESSAGES_ORDONNANCE_PK` (`ID_MSG`),
  ADD KEY `ENVOYER_FK` (`ID_UTILISATEUR`);

--
-- Indexes for table `messages_pharmacien`
--
ALTER TABLE `messages_pharmacien`
  ADD PRIMARY KEY (`ID_MESSAGE`),
  ADD UNIQUE KEY `MESSAGES_PHARMACIEN_PK` (`ID_MESSAGE`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`ID_PRODUIT`),
  ADD UNIQUE KEY `PRODUITS_PK` (`ID_PRODUIT`),
  ADD UNIQUE KEY `CODE_BARRES` (`CODE_BARRES`),
  ADD KEY `APPARTENIR_FK` (`ID_SSCATEGORIE`),
  ADD KEY `APPARTIENT4_FK` (`ID_MARQUE`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`ID_PROFIL`),
  ADD UNIQUE KEY `PROFILS_PK` (`ID_PROFIL`);

--
-- Indexes for table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`ID_SCATEGORIE`),
  ADD UNIQUE KEY `SOUS_CATEGORIES_PK` (`ID_SCATEGORIE`),
  ADD KEY `APPARTIENT2_FK` (`ID_CATEGORIE`);

--
-- Indexes for table `sous_sous_categories`
--
ALTER TABLE `sous_sous_categories`
  ADD PRIMARY KEY (`ID_SSCATEGORIE`),
  ADD UNIQUE KEY `SOUS_SOUS_CATEGORIES_PK` (`ID_SSCATEGORIE`),
  ADD KEY `APPARTIENT3_FK` (`ID_SCATEGORIE`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`ID_UTILISATEUR`),
  ADD UNIQUE KEY `UTILISATEURS_PK` (`ID_UTILISATEUR`),
  ADD KEY `POSSEDER_FK` (`ID_PROFIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID_CATEGORIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `ID_COMMANDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `marques`
--
ALTER TABLE `marques`
  MODIFY `ID_MARQUE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages_ordonnance`
--
ALTER TABLE `messages_ordonnance`
  MODIFY `ID_MSG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages_pharmacien`
--
ALTER TABLE `messages_pharmacien`
  MODIFY `ID_MESSAGE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `ID_PRODUIT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `ID_PROFIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `ID_SCATEGORIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sous_sous_categories`
--
ALTER TABLE `sous_sous_categories`
  MODIFY `ID_SSCATEGORIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `ID_UTILISATEUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `FK_COMMANDE_GERER2_UTILISAT` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `utilisateurs` (`ID_UTILISATEUR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `concerner`
--
ALTER TABLE `concerner`
  ADD CONSTRAINT `FK_CONCERNE_CONCERNE2_COMMANDE` FOREIGN KEY (`ID_COMMANDE`) REFERENCES `commandes` (`ID_COMMANDE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_CONCERNE_CONCERNE_PRODUITS` FOREIGN KEY (`ID_PRODUIT`) REFERENCES `produits` (`ID_PRODUIT`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `messages_ordonnance`
--
ALTER TABLE `messages_ordonnance`
  ADD CONSTRAINT `FK_MESSAGES_ENVOYER_UTILISAT` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `utilisateurs` (`ID_UTILISATEUR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_PRODUITS_APPARTENI_SOUS_SOU` FOREIGN KEY (`ID_SSCATEGORIE`) REFERENCES `sous_sous_categories` (`ID_SSCATEGORIE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_PRODUITS_APPARTIEN_MARQUES` FOREIGN KEY (`ID_MARQUE`) REFERENCES `marques` (`ID_MARQUE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD CONSTRAINT `FK_SOUS_CAT_APPARTIEN_CATEGORI` FOREIGN KEY (`ID_CATEGORIE`) REFERENCES `categories` (`ID_CATEGORIE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sous_sous_categories`
--
ALTER TABLE `sous_sous_categories`
  ADD CONSTRAINT `FK_SOUS_SOU_APPARTIEN_SOUS_CAT` FOREIGN KEY (`ID_SCATEGORIE`) REFERENCES `sous_categories` (`ID_SCATEGORIE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `FK_UTILISAT_POSSEDER_PROFILS` FOREIGN KEY (`ID_PROFIL`) REFERENCES `profils` (`ID_PROFIL`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
