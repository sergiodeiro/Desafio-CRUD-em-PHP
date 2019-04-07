/*  

  CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `logradouro` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(42) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sexo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



*/