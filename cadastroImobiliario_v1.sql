-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 05-Abr-2017 às 00:34
-- Versão do servidor: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastroImobiliario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipoImovel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeEdificio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroAptCasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamanhoTerreno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terrenoProprio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marinha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroAndares` int(11) NOT NULL,
  `qtAptAndar` int(11) NOT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtdQuartos` int(11) NOT NULL,
  `qtdSuites` int(11) NOT NULL,
  `qtdBanheiros` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varanda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terraco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `areaUtil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itensLazer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempoConstrucao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorCondominio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorIptu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posicaoSol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtdGaragens` int(11) NOT NULL,
  `tipoGaragens` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeProprietario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailProprietario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foneProprietario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorVenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorLocacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeConstrutora` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentualComissao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quemIndicou` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foneQuemIndicou` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outrasInformacoes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataCaptacao` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `tipoImovel`, `nomeEdificio`, `numeroAptCasa`, `tamanhoTerreno`, `terrenoProprio`, `marinha`, `numeroAndares`, `qtAptAndar`, `endereco`, `bairro`, `cidade`, `cep`, `qtdQuartos`, `qtdSuites`, `qtdBanheiros`, `varanda`, `terraco`, `areaUtil`, `itensLazer`, `tempoConstrucao`, `valorCondominio`, `valorIptu`, `posicaoSol`, `qtdGaragens`, `tipoGaragens`, `nomeProprietario`, `emailProprietario`, `foneProprietario`, `valorVenda`, `valorLocacao`, `nomeConstrutora`, `percentualComissao`, `quemIndicou`, `foneQuemIndicou`, `outrasInformacoes`, `dataCaptacao`, `created_at`, `updated_at`) VALUES
(1, '0', 'Pascoal II', '51', '500m', '0', '0', 10, 4, 'Rua amapá', 'Aflitos', 'Recife', '52050390', 3, 2, '2', '0', '0', '200m', 'nenhum', '2 anos', '550,00', '100,00', '2', 2, '3', 'Igor Silva de Freitas', 'igorfreitas1992@gmail.com', '818181818181', '1.000.000,00', '30.000', 'Moura Dubeux', '11%', 'Ninguém', '8181818181', 'Teste TesteTesteTeste Teste Teste TesteTesteTeste Teste Teste TesteTesteTeste Teste Teste TesteTesteTeste Teste Teste TesteTesteTeste Teste Teste TesteTesteTeste Teste', '2015-11-29', '2017-03-16 03:48:38', '2017-04-04 15:54:52'),
(2, '0', 'Aasdkoasdjo', '31', '300', '0', '0', 10, 4, 'Rua asduahdi', 'hasuidhaiusd', 'ashudiahsdui', 'hdsuidhasuid', 2, 1, '2', '0', '0', '300', 'dhjsdhiqdhqiu', 'djwiqdhuiqwh', 'dhuwiqhduiq', 'dhiwqdhiuq', '0', 2, '0', 'Aahdsuiahsdui', 'ausidhsauidh', 'dhasuidhsauid', '300', '300', 'Abhasbdsah', '30', 'Ahudsahduais', '312312132', 'Aasdhahdsuidash', '2017-04-02', '2017-04-04 05:44:24', '2017-04-04 05:44:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_16_001912_create_imoveis_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'IGOR SILVA DE FREITAS', 'igorfreitas1992@gmail.com', '$2y$10$DBLrZuQk83uVQSq6cMXRrO7CC0BzTfiugvbltH0d03l8Jaw.BEnSG', 'PMdAMBZ97XPwQXEZYAtiBF8ajD0gymE0DR7u5swsRM7YlyUov4uApUBEuWSK', '2017-04-03 22:36:37', '2017-04-03 22:36:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
