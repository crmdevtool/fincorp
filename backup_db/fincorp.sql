-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Set-2020 às 23:00
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
(28, 1, 'Larissa', '255.665.896-62', 'Lago azul-centro, 33', 'Gandu', 'Bahia', '45450-000', '(73) 99985-0332', 'larissa@outlook.com', '2020-07-27 14:18:24'),
(29, 12, 'Gabriel', '257.956.563-21', 'Rua Gilberto Gil, 87', 'Gandu', 'Bahia', '45450-000', '(73) 99978-5236', 'gabrielgdu@gmail.com', '2020-07-27 14:37:47'),
(30, 1, 'Lucas', '447.854.548-78', 'Rua Humberto Campos 80', 'Gandu', 'Bahia', '45450-000', '(73) 99985-2669', 'adimaelbr@gmail.com', '2020-09-02 00:59:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_orcamentos`
--

CREATE TABLE `tb_orcamentos` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `tecnico` varchar(32) NOT NULL,
  `aparelho` varchar(32) NOT NULL,
  `serie` varchar(30) DEFAULT NULL,
  `modelo` varchar(32) NOT NULL,
  `defeito` varchar(255) NOT NULL,
  `laudo` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `valor_servico` decimal(10,2) DEFAULT NULL,
  `peca1` varchar(32) DEFAULT NULL,
  `valor_peca1` decimal(10,2) DEFAULT NULL,
  `peca2` varchar(32) DEFAULT NULL,
  `valor_peca2` decimal(10,2) DEFAULT NULL,
  `desconto` varchar(11) DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL,
  `pagamento` varchar(32) DEFAULT NULL,
  `data_abertura` date NOT NULL,
  `data_geracao` date NOT NULL,
  `status` varchar(32) NOT NULL,
  `data_aprovacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_orcamentos`
--

INSERT INTO `tb_orcamentos` (`id`, `id_user`, `id_cliente`, `tecnico`, `aparelho`, `serie`, `modelo`, `defeito`, `laudo`, `obs`, `valor_servico`, `peca1`, `valor_peca1`, `peca2`, `valor_peca2`, `desconto`, `valor_total`, `pagamento`, `data_abertura`, `data_geracao`, `status`, `data_aprovacao`) VALUES
(10, 1, 28, 'Adimael Santos', 'Samsung', 'sa541d5sas', 'J810', 'Não carrega', 'Troca do conector de carga', '', '120.00', '', '0.00', '', '0.00', NULL, '120.00', 'Dinheiro', '2020-09-05', '2020-09-05', 'Aprovado', '2020-09-05'),
(11, 1, 30, 'Adimael Santos', 'Alcatel', 'ad54asd454a74w', 'S203', 'Tela preta', 'Instalação da stock rom', '', '40.00', '', '0.00', '', '0.00', NULL, '40.00', 'Dinheiro', '2020-09-05', '2020-09-05', 'Aguardando', '2020-09-04');

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
(1, '1018827128user.jpg', 'Adimael Santos', 'admin', '123', '861.670.545-76', 'adimael@gmail.com', '(73) 99973-8916', 'Rua Jurandir Velame, 477', 'Planeta Assistência', 'Gandu-Bahia', '45450-000', 'Administrador', NULL, '0000-00-00'),
(2, '1018827128user1.jpg', 'Ricardo Funcionário', 'funcionario', 'root', '802.107.880-46', 'funcionario@gmail.com', '(73) 99952-3243', 'Rua Carlos Drumont, 22', 'Planeta Assistência', 'Gandu-Ba', '45450-000', 'Funcionário', 1, '0000-00-00'),
(3, '1018827128user2.jpg', 'Suporte', 'suporte', '123', '255.025.540-23', 'suporte@suporte.com', '(73) 99921-8356', 'Rua Polivalente, 77', 'Microsoft', 'Gandu-Bahia', '45450-000', 'Suporte', NULL, '0000-00-00'),
(4, '1018827128user4.jpg', 'Tales', 'tales', 'root', '858.455.202-51', 'tales@gmail.com', '(73) 99985-2314', 'Rua Eliseu Leal, 44', 'Clinica dos celulares', 'Gandu-Ba', '45450-000', 'Funcionário', 12, '0000-00-00'),
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
-- Índices para tabela `tb_orcamentos`
--
ALTER TABLE `tb_orcamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cliente` (`id_cliente`);

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
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tb_orcamentos`
--
ALTER TABLE `tb_orcamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
