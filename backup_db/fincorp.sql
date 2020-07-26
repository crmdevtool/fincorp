-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jul-2020 às 17:29
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fincorp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(128) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dt_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `id_user`, `nome`, `cpf`, `endereco`, `cidade`, `estado`, `cep`, `telefone`, `email`, `dt_registro`) VALUES
(27, 1, 'Luiza Duarte', '053.616.277-55', 'Beco Municipal 856', 'Gandu', 'Bahia', '45450-000', '(92) 35940-9626', 'luizaduarte@gmail.com', '2020-07-19 19:09:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id_produto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `desproduto` varchar(64) NOT NULL,
  `codigo_barra` varchar(14) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `imagem` varchar(128) NOT NULL,
  `dt_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(256) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(45) NOT NULL,
  `endereco` varchar(128) DEFAULT NULL,
  `empresa` varchar(32) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `access_level` varchar(32) NOT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `dt_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `foto`, `nome`, `username`, `password`, `cpf`, `email`, `telefone`, `endereco`, `empresa`, `cidade`, `cep`, `access_level`, `id_funcionario`, `dt_registro`) VALUES
(1, '1018827128user.jpg', 'Adimael Santos', 'admin', '123', '861.670.545-76', 'adimaelbr@gmail.com', '(73) 99973-8916', 'Rua Jurandir Velame, 477', 'Planeta Assistência', 'Gandu-Bahia', '45450-000', 'Administrador', NULL, '0000-00-00'),
(2, '1018827128user1.jpg', 'Ricardo Funcionário', 'funcionario', 'root', '802.107.880-46', 'funcionario@gmail.com', '(73)99952-3243', NULL, 'Planeta Assistência', NULL, NULL, 'Funcionário', 1, '0000-00-00'),
(3, '1018827128user2.jpg', 'Suporte', 'suporte', '123', '255.025.540-23', 'suporte@suporte.com', '(73) 99921-8356', 'Rua Polivalente, 77', 'Microsoft', 'Gandu-Bahia', '45450-000', 'Suporte', NULL, '0000-00-00'),
(12, '1018827128user3.jpg', 'Pedro Oliveira', 'admin2', '112233sk', '858.488.720-23', 'pedro@outlook.com', '(73) 99989-5321', 'Rua Humberto Campos, 80', 'Clinica dos celulares', 'Gandu-Ba', '45450-000', 'Administrador', NULL, '2020-07-21');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_funcionario` (`id_funcionario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD CONSTRAINT `tb_clientes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD CONSTRAINT `tb_produtos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
