CREATE DATABASE `biblio`;
USE `biblio`;
CREATE TABLE `mangas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `descripcion` text NOT NULL,
   `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla mangas' ROW_FORMAT=COMPACT;


INSERT INTO `mangas` (`id`, `nombre`,`numero`, `descripcion`,`link`) VALUES
(0, 'Boku no hero',1, 'Aprende como crear una aplicación web completa con PHP.','./Elements/mang/hero/Image-1.jpg');

ALTER TABLE `mangas`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `mangas` ADD FULLTEXT KEY `Buscar` (`nombre`,`descripcion`);


ALTER TABLE `mangas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;