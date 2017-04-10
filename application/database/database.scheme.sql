--cotejamiento utf8_spanish_ci	

CREATE TABLE IF NOT EXISTS `TIENDA` (
  `TIE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TIE_NAME` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`TIE_ID`),
  UNIQUE KEY `TIE_ID_UNIQUE` (`TIE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `USUARIO` (
  `USU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USU_NAME` varchar(45) DEFAULT NULL,
  `USU_MAIL` varchar(100) DEFAULT NULL,
  `USU_RUT` varchar(45) DEFAULT NULL,
  `USU_PASS` varchar(45) DEFAULT NULL,
  `USU_ACTIVE` int(11) DEFAULT NULL,
  `USU_TYPE` int(11) DEFAULT NULL,
  `TIENDA_TIE_ID` int(11) NOT NULL,
  PRIMARY KEY (`USU_ID`),
  UNIQUE KEY `USU_ID_UNIQUE` (`USU_ID`),
  KEY `fk_USUARIO_TIENDA1_idx` (`TIENDA_TIE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 ;