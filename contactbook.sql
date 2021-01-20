-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 20-Jan-2021 às 14:18
-- Versão do servidor: 8.0.22-0ubuntu0.20.04.3
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contactbook`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contatosemails`
--

CREATE TABLE `tb_contatosemails` (
  `id_contatoemail` int NOT NULL,
  `emailContato` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_contato` int NOT NULL,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_contatosemails`
--

INSERT INTO `tb_contatosemails` (`id_contatoemail`, `emailContato`, `dataRegistro`, `id_contato`, `id_usuario`) VALUES
(1, 'douglas@gmail.com', '2021-01-20 17:12:28', 3, 1),
(2, 'douglas.lima@yahoo.com', '2021-01-20 17:12:56', 3, 1),
(3, 'douglas.2021@hotmail.com', '2021-01-20 17:13:22', 3, 1),
(4, 'priscila.dayana@gmail.com', '2021-01-20 17:14:45', 2, 1),
(5, 'priscila.dayana@yahoo.com', '2021-01-20 17:15:18', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contatostelefones`
--

CREATE TABLE `tb_contatostelefones` (
  `id_contatotelefone` int NOT NULL,
  `telefoneContato` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_contato` int NOT NULL,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_contatostelefones`
--

INSERT INTO `tb_contatostelefones` (`id_contatotelefone`, `telefoneContato`, `dataRegistro`, `id_contato`, `id_usuario`) VALUES
(1, '81932242424', '2021-01-20 17:13:50', 3, 1),
(2, '81923242424', '2021-01-20 17:14:10', 3, 1),
(3, '11283283823', '2021-01-20 17:16:09', 2, 1),
(4, '11929392392', '2021-01-20 17:16:24', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grupos`
--

CREATE TABLE `tb_grupos` (
  `id_grupo` int NOT NULL,
  `nomeGrupo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categoriaGrupo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_grupos`
--

INSERT INTO `tb_grupos` (`id_grupo`, `nomeGrupo`, `categoriaGrupo`, `dataRegistro`, `id_usuario`) VALUES
(1, 'HBO SEM LIMITES', 'DIVERSÃO', '2021-01-20 16:56:09', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_gruposcontatos`
--

CREATE TABLE `tb_gruposcontatos` (
  `id_grupocontato` int NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_contato` int NOT NULL,
  `id_grupo` int NOT NULL,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_gruposcontatos`
--

INSERT INTO `tb_gruposcontatos` (`id_grupocontato`, `dataRegistro`, `id_contato`, `id_grupo`, `id_usuario`) VALUES
(1, '2021-01-20 17:17:03', 1, 1, 1),
(2, '2021-01-20 17:17:17', 3, 1, 1),
(3, '2021-01-20 17:17:29', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `perfil` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USUÁRIO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `cpf`, `email`, `senha`, `fone`, `perfil`) VALUES
(1, 'DANILO LIMA DA SILVA', '11492342324', 'danilolimas.pe@gmail.com', '202cb962ac59075b964b07152d234b70', '81994126473', 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarioscontatos`
--

CREATE TABLE `tb_usuarioscontatos` (
  `id_contato` int NOT NULL,
  `nomeContato` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `empresaContato` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cargoContato` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `celularContato` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emailContato` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarioscontatos`
--

INSERT INTO `tb_usuarioscontatos` (`id_contato`, `nomeContato`, `empresaContato`, `cargoContato`, `celularContato`, `emailContato`, `dataRegistro`, `id_usuario`) VALUES
(1, 'AUGUSTO MELO', 'PM', 'ANALISTA', '8192832883', 'augusto.melo@gmail.com', '2021-01-20 16:55:36', 1),
(2, 'PRISCILA DAYANA', 'PM', 'ANALISTA', '81928382183', 'priscila@contactbook.com', '2021-01-20 16:55:57', 1),
(3, 'DOUGLAS LIMA', 'AVANADE', 'SM', '81928382838', 'douglas@contactbook.com', '2021-01-20 17:11:49', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_contatosemails`
--
ALTER TABLE `tb_contatosemails`
  ADD PRIMARY KEY (`id_contatoemail`),
  ADD KEY `fk_tb_usuarios_tb_contatosemails` (`id_usuario`),
  ADD KEY `fk_tb_usuarioscontatos_tb_contatosemails` (`id_contato`);

--
-- Índices para tabela `tb_contatostelefones`
--
ALTER TABLE `tb_contatostelefones`
  ADD PRIMARY KEY (`id_contatotelefone`),
  ADD KEY `fk_tb_usuarios_tb_contatostelefones` (`id_usuario`),
  ADD KEY `fk_tb_usuarioscontatos_tb_contatostelefones` (`id_contato`);

--
-- Índices para tabela `tb_grupos`
--
ALTER TABLE `tb_grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `fk_tb_usuarios_tb_grupos` (`id_usuario`);

--
-- Índices para tabela `tb_gruposcontatos`
--
ALTER TABLE `tb_gruposcontatos`
  ADD PRIMARY KEY (`id_grupocontato`),
  ADD KEY `fk_tb_usuarios_tb_gruposcontatos` (`id_usuario`),
  ADD KEY `fk_usuarioscontatos_tb_gruposcontatos` (`id_contato`),
  ADD KEY `fk_tb_grupos_tb_gruposcontatos` (`id_grupo`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `tb_usuarioscontatos`
--
ALTER TABLE `tb_usuarioscontatos`
  ADD PRIMARY KEY (`id_contato`),
  ADD KEY `fk_tb_usuarios_tb_usuarioscontatos` (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_contatosemails`
--
ALTER TABLE `tb_contatosemails`
  MODIFY `id_contatoemail` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_contatostelefones`
--
ALTER TABLE `tb_contatostelefones`
  MODIFY `id_contatotelefone` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_grupos`
--
ALTER TABLE `tb_grupos`
  MODIFY `id_grupo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_gruposcontatos`
--
ALTER TABLE `tb_gruposcontatos`
  MODIFY `id_grupocontato` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_usuarioscontatos`
--
ALTER TABLE `tb_usuarioscontatos`
  MODIFY `id_contato` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_contatosemails`
--
ALTER TABLE `tb_contatosemails`
  ADD CONSTRAINT `fk_tb_usuarios_tb_contatosemails` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`),
  ADD CONSTRAINT `fk_tb_usuarioscontatos_tb_contatosemails` FOREIGN KEY (`id_contato`) REFERENCES `tb_usuarioscontatos` (`id_contato`);

--
-- Limitadores para a tabela `tb_contatostelefones`
--
ALTER TABLE `tb_contatostelefones`
  ADD CONSTRAINT `fk_tb_usuarios_tb_contatostelefones` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`),
  ADD CONSTRAINT `fk_tb_usuarioscontatos_tb_contatostelefones` FOREIGN KEY (`id_contato`) REFERENCES `tb_usuarioscontatos` (`id_contato`);

--
-- Limitadores para a tabela `tb_grupos`
--
ALTER TABLE `tb_grupos`
  ADD CONSTRAINT `fk_tb_usuarios_tb_grupos` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `tb_gruposcontatos`
--
ALTER TABLE `tb_gruposcontatos`
  ADD CONSTRAINT `fk_tb_grupos_tb_gruposcontatos` FOREIGN KEY (`id_grupo`) REFERENCES `tb_grupos` (`id_grupo`),
  ADD CONSTRAINT `fk_tb_usuarios_tb_gruposcontatos` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`),
  ADD CONSTRAINT `fk_usuarioscontatos_tb_gruposcontatos` FOREIGN KEY (`id_contato`) REFERENCES `tb_usuarioscontatos` (`id_contato`);

--
-- Limitadores para a tabela `tb_usuarioscontatos`
--
ALTER TABLE `tb_usuarioscontatos`
  ADD CONSTRAINT `fk_tb_usuarios_tb_usuarioscontatos` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
