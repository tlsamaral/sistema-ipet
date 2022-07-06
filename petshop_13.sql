-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jul-2022 às 04:03
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_con` int(11) NOT NULL,
  `taxi_con` varchar(45) NOT NULL,
  `acompanhar_con` varchar(50) NOT NULL,
  `descricao_con` varchar(100) NOT NULL,
  `endereco_con` varchar(100) NOT NULL,
  `status_con` varchar(30) NOT NULL,
  `data_con` date NOT NULL,
  `id_exp` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
  `id_fun` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `design`
--

CREATE TABLE `design` (
  `id_des` int(11) NOT NULL,
  `folga_des` int(11) NOT NULL,
  `nome_des` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `img_des` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `logo_des` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `icone1_des` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `icone2_des` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `icone3_des` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `titulo1_des` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `titulo2_des` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `titulo3_des` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `texto1_des` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `texto2_des` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `texto3_des` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `transmissao_des` int(11) NOT NULL,
  `sobre_des` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `design`
--

INSERT INTO `design` (`id_des`, `folga_des`, `nome_des`, `img_des`, `logo_des`, `icone1_des`, `icone2_des`, `icone3_des`, `titulo1_des`, `titulo2_des`, `titulo3_des`, `texto1_des`, `texto2_des`, `texto3_des`, `transmissao_des`, `sobre_des`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `expediente`
--

CREATE TABLE `expediente` (
  `id_exp` int(11) NOT NULL,
  `inicio_exp` time NOT NULL,
  `fim_exp` time NOT NULL,
  `desabilitar_exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gasto`
--

CREATE TABLE `gasto` (
  `id_gas` int(11) NOT NULL,
  `nome_gas` varchar(60) NOT NULL,
  `valor_gas` varchar(50) NOT NULL,
  `data_gas` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `id_pet` int(11) NOT NULL,
  `nome_pet` varchar(30) NOT NULL,
  `animal_pet` varchar(30) NOT NULL,
  `raca_pet` varchar(30) NOT NULL,
  `data_pet` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto_pet` varchar(60) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `desabilitar_pet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL,
  `nome_servico` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `valor_servico` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `desabilitar_servico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `nome_usu` varchar(50) NOT NULL,
  `email_usu` varchar(50) NOT NULL,
  `telefone_usu` varchar(50) NOT NULL,
  `cidade_usu` varchar(50) NOT NULL,
  `bairro_usu` varchar(50) NOT NULL,
  `rua_usu` varchar(50) NOT NULL,
  `numero_usu` varchar(50) NOT NULL,
  `complemento_usu` varchar(50) NOT NULL,
  `tipo_usu` int(11) NOT NULL,
  `senha_usu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nome_usu`, `email_usu`, `telefone_usu`, `cidade_usu`, `bairro_usu`, `rua_usu`, `numero_usu`, `complemento_usu`, `tipo_usu`, `senha_usu`) VALUES
(3, 'adm', 'adm@email.com', '123', 'Cidade', 'Bairro', 'rua', '22', 'casa', 1, '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_con`);

--
-- Índices para tabela `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id_des`);

--
-- Índices para tabela `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`id_exp`);

--
-- Índices para tabela `gasto`
--
ALTER TABLE `gasto`
  ADD PRIMARY KEY (`id_gas`);

--
-- Índices para tabela `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id_pet`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `design`
--
ALTER TABLE `design`
  MODIFY `id_des` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `expediente`
--
ALTER TABLE `expediente`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `gasto`
--
ALTER TABLE `gasto`
  MODIFY `id_gas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pet`
--
ALTER TABLE `pet`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
