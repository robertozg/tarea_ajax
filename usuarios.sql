CREATE DATABASE isw;

use isw;

CREATE TABLE IF NOT EXISTS`usuarios` ( 
  `Email` varchar(100) NOT NULL , 
  `Nombre` varchar(255) NOT NULL, 
  `Apellidos` varchar(255) NOT NULL, 
  `Contra` varchar(25) NOT NULL, 
  PRIMARY KEY  (`Email`) 
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;