SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `categorias` (
  `idCategoria` int(5) NOT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `categorias` (`idCategoria`, `categoria`) VALUES
(1, 'Lo Más Nuevo'),
(2, 'Música Nueva'),
(3, 'Nuevos Artistas'),
(4, 'El DJ del Año');

CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idNoticia` int(11) NOT NULL,
  `contenido` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `fechaPublicacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `comentarios` (`idComentario`, `idUsuario`, `idNoticia`, `contenido`, `fechaPublicacion`) VALUES
(1, 1, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum tortor ut lacus viverra molestie. Morbi id fermentum nisi. Curabitur consectetur, odio at faucibus varius, augue augue feugiat turpis, at tincidunt orci magna ut magna. Etiam convallis nisi vitae ligula bibendum, quis pharetra metus pulvinar. Suspendisse tempor auctor accumsan. Phasellus lectus arcu, vehicula vel diam nullam.', '2017-12-28');

CREATE TABLE `noticias` (
  `idNoticia` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fechaPublicacion` date NOT NULL,
  `informacion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `noticias` (`idNoticia`, `titulo`, `fechaPublicacion`, `informacion`, `idCategoria`) VALUES
(1, 'Alok, El Favorito de Brasil para el mundo!', '2017-06-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut scelerisque posuere tempus. Duis quis ipsum at nisi hendrerit tristique et.', 1),
(2, 'Dimitri Vegas, Like Mike y Hardwell... ¡juntos de nuevo!', '2017-12-26', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget quam ac nisi aliquam rhoncus ac sed nulla. Aliquam tempus feugiat mauris, nec post.', 2),
(3, 'Don Diablo presenta su Yearmix 2017', '2017-12-25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget quam ac nisi aliquam rhoncus ac sed nulla. Aliquam tempus feugiat mauris, nec post.', 3),
(4, 'El regalo de Navidad de Avicii para sus fans', '2017-12-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tellus ex, fringilla vitae sem non, consequat rutrum nulla. Pellentesque massa nunc.', 4);

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `usuarios` (`idUsuario`, `correo`, `contrasena`) VALUES
(1, 'marcopolo_1309@hotmail.com', '123456789');


ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`),
  ADD UNIQUE KEY `idUsuario` (`idUsuario`),
  ADD UNIQUE KEY `idNoticia` (`idNoticia`);

ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`),
  ADD UNIQUE KEY `idCate` (`idCategoria`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);


ALTER TABLE `categorias`
  MODIFY `idCategoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `comentarios`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
