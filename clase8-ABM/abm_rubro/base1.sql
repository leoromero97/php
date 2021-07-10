
DROP TABLE IF EXISTS `articulos`;

CREATE TABLE `articulos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `codigorubro` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `articulos` */

insert into `articulos` values 

(1,'lechuga',3,2),

(3,'manzana',6,1),

(6,'churrasco',23,3),

(7,'limon',4,1);

/*Table structure for table `rubros` */

DROP TABLE IF EXISTS `rubros`;

CREATE TABLE `rubros` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `rubros` */

insert into `rubros` values 

(3,'carnes'),

(1,'frutas'),

(2,'verduras');
