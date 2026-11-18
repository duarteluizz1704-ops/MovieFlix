-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/11/2026 às 04:45
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `movieflix`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `id_aluguel` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `id_cupom` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL DEFAULT 1 CHECK (`quantidade` >= 1),
  `data_aluguel` datetime NOT NULL DEFAULT current_timestamp(),
  `data_expiracao` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id_avaliacao` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `nota` int(11) NOT NULL CHECK (`nota` between 1 and 5),
  `comentario` text DEFAULT NULL,
  `data_avaliacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` text NOT NULL,
  `data_envio` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cupons`
--

CREATE TABLE `cupons` (
  `id_cupom` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `valor_desconto` decimal(6,2) NOT NULL CHECK (`valor_desconto` > 0),
  `data_inicio` datetime NOT NULL,
  `data_expiracao` datetime NOT NULL CHECK (`data_expiracao` > `data_inicio`),
  `limite_uso` int(11) DEFAULT NULL CHECK (`limite_uso` is null or `limite_uso` > 0),
  `usos_realizados` int(11) NOT NULL DEFAULT 0 CHECK (`usos_realizados` >= 0),
  `ativo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id_filme` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `sinopse` text NOT NULL,
  `genero` varchar(50) NOT NULL,
  `ano_lancamento` int(11) NOT NULL,
  `duracao_minutos` int(11) DEFAULT NULL,
  `classificacao_indicativa` varchar(10) DEFAULT NULL,
  `preco_aluguel` decimal(6,2) NOT NULL,
  `disponivel` tinyint(1) DEFAULT 1,
  `capa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `titulo`, `sinopse`, `genero`, `ano_lancamento`, `duracao_minutos`, `classificacao_indicativa`, `preco_aluguel`, `disponivel`, `capa`) VALUES
(1, 'Jurassic Park', 'Um parque temático com dinossauros recriados por engenharia genética acaba se tornando um lugar perigoso.', 'Aventura', 1993, 127, '12 anos', 9.90, 1, 'IMG/jurassicPark1993.jpg'),
(2, 'Homem-Aranha: Um Novo Dia', 'Peter Parker enfrenta novos desafios enquanto tenta equilibrar sua vida pessoal e suas responsabilidades como herói.', 'Ação', 2026, 145, '12 anos', 12.90, 1, 'IMG/homemAranha2026.jpg'),
(3, 'Superman', 'O herói Superman enfrenta desafios enquanto busca inspirar a humanidade com esperança e justiça.', 'Ação', 2025, 129, '12 anos', 8.90, 1, 'IMG/superman2025.jpg'),
(4, 'Interestelar', 'Uma equipe de astronautas viaja através de um buraco de minhoca em busca de um novo lar para a humanidade.', 'Ficção científica', 2014, 169, '10 anos', 10.90, 1, 'IMG/interestellar2014.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone_cliente` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `data_cadastro` datetime DEFAULT current_timestamp(),
  `ativo` tinyint(1) NOT NULL DEFAULT 1,
  `tipo_usuario` enum('admin','cliente') NOT NULL DEFAULT 'cliente',
  `foto_perfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `telefone_cliente`, `data_nascimento`, `data_cadastro`, `ativo`, `tipo_usuario`, `foto_perfil`) VALUES
(8, 'Luiz Arthur', 'lath@email.com', '$2y$10$jy5ajyCYZp5pYBTbyjE1luYdIvszFux6h5RPUA7sCRxF7zLUQcQeO', '81987086177', '2007-04-17', '2026-11-15 18:32:06', 1, 'admin', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`id_aluguel`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_filme` (`id_filme`),
  ADD KEY `id_cupom` (`id_cupom`);

--
-- Índices de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`,`id_filme`),
  ADD KEY `id_filme` (`id_filme`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Índices de tabela `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id_cupom`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `id_filme` (`id_filme`);

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id_filme`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `id_aluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id_cupom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `aluguel`
--
ALTER TABLE `aluguel`
  ADD CONSTRAINT `aluguel_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `aluguel_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filmes` (`id_filme`),
  ADD CONSTRAINT `aluguel_ibfk_3` FOREIGN KEY (`id_cupom`) REFERENCES `cupons` (`id_cupom`);

--
-- Restrições para tabelas `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `avaliacao_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filmes` (`id_filme`);

--
-- Restrições para tabelas `cupons`
--
ALTER TABLE `cupons`
  ADD CONSTRAINT `cupons_ibfk_1` FOREIGN KEY (`id_filme`) REFERENCES `filmes` (`id_filme`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
