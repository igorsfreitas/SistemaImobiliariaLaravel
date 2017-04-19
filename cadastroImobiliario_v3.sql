-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 19-Abr-2017 às 14:04
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
-- Estrutura da tabela `cadastro_imoveis`
--

CREATE TABLE `cadastro_imoveis` (
  `id` int(10) UNSIGNED NOT NULL,
  `disponivel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoImovel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locacaoVenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Extraindo dados da tabela `cadastro_imoveis`
--

INSERT INTO `cadastro_imoveis` (`id`, `disponivel`, `tipoImovel`, `locacaoVenda`, `nomeEdificio`, `numeroAptCasa`, `tamanhoTerreno`, `terrenoProprio`, `marinha`, `numeroAndares`, `qtAptAndar`, `endereco`, `bairro`, `cidade`, `cep`, `qtdQuartos`, `qtdSuites`, `qtdBanheiros`, `varanda`, `terraco`, `areaUtil`, `itensLazer`, `tempoConstrucao`, `valorCondominio`, `valorIptu`, `posicaoSol`, `qtdGaragens`, `tipoGaragens`, `nomeProprietario`, `emailProprietario`, `foneProprietario`, `valorVenda`, `valorLocacao`, `nomeConstrutora`, `percentualComissao`, `quemIndicou`, `foneQuemIndicou`, `outrasInformacoes`, `dataCaptacao`, `created_at`, `updated_at`) VALUES
(1, '0', '1', '1', 'Pascoal II', '67', '300m', '0', '1', 10, 4, 'Rua Amapá, n 67', 'Aflitos', 'Recife', '52050-390', 3, 1, '2', '0', '1', '20m', 'Parque', '10 anos', '400,00', '100,00', '0', 2, '0', 'Maria', 'maria@gmail.com', '(81) 98181-8181', '-', '-', 'Moura Dubeux', '-', '-', '(81) 98818-9399', 'Nenhumaa', '2017-04-04', '2017-04-06 17:26:08', '2017-04-18 15:52:05'),
(2, '0', '0', '0', '-', '-', '-', '0', '0', 0, 0, '-', '-', '-', '-', 0, 0, '0', '0', '0', '-', '-', '-', '-', '-', '0', 0, '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2017-04-08', '2017-04-07 21:01:27', '2017-04-07 21:01:27'),
(3, '0', '0', '0', '-', '-', '-', '0', '0', 0, 0, '-', '-', '-', '-', 0, 0, '0', '0', '0', '-', '-', '-', '-', '-', '0', 0, '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2000-01-01', '2017-04-07 21:05:04', '2017-04-07 21:05:04');

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
(3, '2017_03_16_001912_create_imoveis_table', 1),
(4, '2017_04_06_141853_create_cadastro_imoveis_table', 1);

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
(1, 'Igor Freitas', 'igorfreitas1992@gmail.com', '$2y$10$6SJaTU8BF.oYd6GxK4eRP.AbeAc6S2GcuVgeE4A8n1bH/saNGfoo6', 'JjJ1RuoKu5QDTs4E7HPkL9lnNwNgKYbJCekdWD9eRX54ky8NSBfJUBuxOWaJ', '2017-04-06 20:24:06', '2017-04-06 20:24:06'),
(2, 'Rogério Matos', 'rogeriomatoscorretor@gmail.com', '$2y$10$QhQvtEalMka/N7/Vj02oTeuBlDKDv8INIEXJMkbvu8aLAL2DOFnne', NULL, '2017-04-07 01:05:07', '2017-04-07 01:05:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_imoveis`
--
ALTER TABLE `cadastro_imoveis`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cadastro_imoveis`
--
ALTER TABLE `cadastro_imoveis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
